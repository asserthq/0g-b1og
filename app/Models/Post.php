<?php

namespace App\Models;

use App\Http\Requests\PostFormRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['title', 'description', 'category_id', 'thumbnail', 'content'];

    public function tags() 
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->doNotGenerateSlugsOnUpdate()
            ->saveSlugsTo('slug');
    }

    public function getThumbnailUrl() 
    {
        if ($this->thumbnail != null)
        {
            return asset("storage/{$this->thumbnail}");
        }
        else
        {
            return asset('img/no_image.jpg');
        }
    }

    public static function uploadThumbnailFromRequest(PostFormRequest $request, $insteadOf = null) 
    {
        if ($request->hasFile('thumbnail')) 
        {
            if ($insteadOf != null) 
            {
                Storage::disk('public')->delete($insteadOf);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("uploads/images/{$folder}", 'public');
        }
        else
        {
            return null;
        }
    }
}
