@extends('adminlte::page')

{{-- Extend and customize the browser title --}}

@section('title')
    {{ config('adminlte.title') }}
    @hasSection('subtitle')
        | @yield('subtitle')
    @endif
@stop

{{-- Extend and customize the page content header --}}

@section('content_header')

    {{-- Show success and error messages above real header --}}

    <div class="row">
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">       
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success">       
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    {{-- Header & breadcrumbs --}}

    <div class="row mb-2">
        <div class="col-sm-6">
            @hasSection('content_header_title')
                <h1 class="m-0">
                    @yield('content_header_title')
                </h1>
            @endif
        </div><!-- /.col -->
        <div class="col-sm-6">
            @hasSection('content_header_title')
                <ol class="breadcrumb float-sm-right">
                    @yield('breadcrumbs')
                </ol>
            @endif
        </div><!-- /.col -->
    </div><!-- /.row -->
@stop

{{-- Rename section content to content_body --}}

@section('content')
    @yield('content_body')
@stop

{{-- Create a common footer --}}

@section('footer')
    <div class="float-right">
        Version: {{ config('app.version', '1.0.0') }}
    </div>

    <strong>
        Copyright © <a href="https://vk.com/sanyaogr">Ogorodov Aleksandr</a>
    </strong>
@stop

{{-- Add common Javascript/Jquery code --}}

@push('js')
    <script>
        $(document).ready(function() {
            // Add your common script logic here...
        });
    </script>
@endpush

{{-- Add common CSS customizations --}}

@push('css')
    <style type="text/css">
        {{-- You can add AdminLTE customizations here --}}
        /*
        .card-header {
            border-bottom: none;
        }
        .card-title {
            font-weight: 600;
        }
        */
    </style>
@endpush
