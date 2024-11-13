@extends('admin.layout')

{{-- Customize layout sections --}}

@section('plugins.Select2', true)
@section('subtitle', 'Edit post')
@section('content_header_title', 'Edit post')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/posts">Posts</a></li>
    <li class="breadcrumb-item active">Edit</li>
@stop

{{-- Content body: main page content --}}

@section('content_body')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Post "{{ $post->title }}"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                        value="{{ $post->title }}">
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3">
                        {{ $post->description }}
                    </textarea>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" id="category" class="form-control @error('category_id') is-invalid @enderror">
                        @foreach ($categories as $id => $title)
                            <option value="{{ $id }}" @if($id == $post->category_id) selected @endif>
                                {{ $title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select name="tags[]" id="tags" class="select2bs4 @error('tags[]') is-invalid @enderror" multiple="multiple" data-placeholder="Choose tags" style="width: 100%;">
                        @foreach ($tags as $id => $title)
                            <option value="{{ $id }}" @if(in_array($id, $post->tags->pluck('id')->all())) selected @endif>
                                {{ $title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <div class="input-group">
                        <div class="custom-file @error('thumbnail') is-invalid @enderror">
                            <input name="thumbnail" id="thumbnail" type="file" class="custom-file-input">
                            <label for="thumbnail" class="custom-file-label">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    <div>
                        {{ $post->thumbnail }}
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">
                        {{ $post->content }}
                    </textarea>
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@stop

{{-- Push extra CSS --}}

@push('css')

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
