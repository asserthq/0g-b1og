@extends('admin.layout')

{{-- Customize layout sections --}}

@section('subtitle', 'Tags')
@section('content_header_title', 'Tags')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item active">Tags</li>
@stop

{{-- Content body: main page content --}}

@section('content_body')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tags list</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add tag</a>
            @if (!empty($tags))
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
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>
                                        {{ $tag->id }}
                                    </td>
                                    <td>
                                        {{ $tag->title }}
                                    </td>
                                    <td>
                                        {{ $tag->slug }}
                                    </td>
                                    <td>
                                        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" class="float-left">
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
                <p>There are no tags :/</p>
            @endif
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $tags->links() }}
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
