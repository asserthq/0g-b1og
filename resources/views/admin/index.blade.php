@extends('admin.layout')

{{-- Customize layout sections --}}

@section('subtitle', 'Admin panel')
@section('content_header_title', 'Admin panel')
@section('content_header_subtitle', 'Index page')

@section('subtitle', 'Home')
@section('content_header_title', 'Home')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
@stop

{{-- Content body: main page content --}}

@section('content_body')
    <p>Welcome to 0g-b1og admin panel :)</p>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush