@extends('layout.index')

@section('page_title')
    Home
@endsection

@section('content')
    <main>
        {{-- hero --}}
        @include('home.partials.hero')
        {{-- About --}}
        @include('home.partials.about')
        {{-- Services --}}
        @include('home.partials.services')
        {{-- Contace --}}
        @include('home.partials.contact')
    </main>
@endsection
