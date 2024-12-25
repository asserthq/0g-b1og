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

            @if (session()->has('error'))
                <div class="alert alert-danger">       
                    {{ session('error') }}
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
    <script src="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.umd.js"></script>
    
    <script>
        let select2NeedsInit = false;
    </script>
    @hasSection('plugins.Select2')
        <script>
            select2NeedsInit = @yield('plugins.Select2');
        </script>
    @endif
    <script>
        $(document).ready(function() {
            if (select2NeedsInit) {
                //Initialize Select2 Elements
                $('.select2').select2()
    
                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            }
        });
    </script>

    <script>
        const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } = CKEDITOR;
    
        ClassicEditor
            .create( document.querySelector( '#content' ), {
                licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3MzYzODA3OTksImp0aSI6ImRmZWI4MWJmLTA5ODAtNDU0My1hM2ZjLTIzOTE5MDUzYmExMSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjU3MGJjOTdlIn0.--reVU7wy3rBqABls2yOcyScQTujKSX_6CYpH0mJaZWRKFFUGmE9HNj23_MngVd1nGZZrHGhcVLX7iirTOTJqA',
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>
@endpush

{{-- Add common CSS customizations --}}

@push('css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css" />
@endpush
