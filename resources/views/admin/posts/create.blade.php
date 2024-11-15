@extends('layouts.admin')

{{-- Customize layout sections --}}

@section('plugins.Select2', true)
@section('subtitle', 'Create post')
@section('content_header_title', 'Create post')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/posts">Posts</a></li>
    <li class="breadcrumb-item active">Create</li>
@stop

{{-- Content body: main page content --}}

@section('content_body')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">New post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        id="title" placeholder="My post">
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Some description ..."></textarea>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" id="category" class="form-control @error('category_id') is-invalid @enderror">
                        @foreach ($categories as $id => $title)
                            <option value="{{ $id }}">{{ $title }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select name="tags[]" id="tags" class="select2bs4 @error('tags[]') is-invalid @enderror" multiple="multiple" data-placeholder="Choose tags" style="width: 100%;">
                        @foreach ($tags as $id => $title)
                            <option value="{{ $id }}">{{ $title }}</option>
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
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5" placeholder="Some content ..."></textarea>
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
    <script>
        
    </script>
@endpush
