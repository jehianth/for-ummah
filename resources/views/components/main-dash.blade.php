@extends('layouts.dashboard')

@section('title', 'Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('breadcrumbs')
    <a href="/">For Ummah</a> / Dashboard
@endsection

@section('main')
    <div class="row">
        <div class="col-md-12">
            <h6 style="margin-left: 15px; margin-bottom: 20px;">
                Test
            </h6>
            
        </div>
    </div>
@endsection