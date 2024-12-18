@extends('layouts.admin')

{{-- Customize layout sections --}}

@section('subtitle', 'Categories')
@section('content_header_title', 'Categories')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item active">Categories</li>
@stop

{{-- Content body: main page content --}}

@section('content_body')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categories list</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add category</a>
            @if (!empty($categories))
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th style="width: 100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        {{ $category->id }}
                                    </td>
                                    <td>
                                        {{ $category->title }}
                                    </td>
                                    <td>
                                        {{ $category->slug }}
                                    </td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="float-left">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm the deletion')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p>There are no categories :/</p>
            @endif
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $categories->links() }}
            {{-- <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul> --}}
        </div>
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
