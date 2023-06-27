@extends('admin.layout.index')

@section('page_title')
    Home
@endsection

@section('content')
    <div class="h-screen">
        <h1 class="text-green-400 text-3xl font-bold underline">Admin Dashboard page content</h1>
        <h1 class="text-green-400 text-3xl font-bold underline">Welcome {{ $user->first_name}}</h1>
    </div>
@endsection
