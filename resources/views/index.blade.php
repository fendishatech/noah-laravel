@extends('layout.index')

@section('page_title')
    Home
@endsection

@section('content')
    <main>
        {{-- hero --}}
        @include('partials.hero')
        {{-- About --}}
        @include('partials.about')
        {{-- Services --}}
        @include('partials.services')
        {{-- Contace --}}
        @include('partials.contact')
    </main>
@endsection
