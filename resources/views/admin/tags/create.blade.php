@extends('admin.layout')

{{-- Customize layout sections --}}

@section('subtitle', 'Create tag')
@section('content_header_title', 'Create tag')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/tags">Tags</a></li>
    <li class="breadcrumb-item active">Create</li>
@stop

{{-- Content body: main page content --}}

@section('content_body')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">New tag</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('tags.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="My tag">
                </div>
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
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@endpush
