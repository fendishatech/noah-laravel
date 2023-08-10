@extends('layout.index')

@section('Page Title')
    Memebers Area
@endsection

@section('content')
    <div class="min-h-screen">
        <main class="px-6 flex flex-col gap-4">
            @if (Session::has('member'))
                <h1 class="mt-[64px] text-start text-green-700 text-4xl my-4">Hello
                    {{ Session::get('member')['first_name'] }}
                </h1>
            @endif
            {{-- Lots --}}
            <section class="px-6 py-4 bg-gray-200 rounded-md">
                <h1 class="text-3xl font-bold">Lots</h1>
            </section>
            {{-- Deposit --}}
            <section class="px-6 py-4 bg-gray-200 rounded-md">
                <h1 class="text-3xl font-bold">Lots</h1>
            </section>
            {{-- Loan --}}
            <section class="px-6 py-4 bg-gray-200 rounded-md">
                <h1 class="text-3xl font-bold">Lots</h1>
            </section>
            {{-- Payment --}}
            <section class="px-6 py-4 bg-gray-200 rounded-md">
                <h1 class="text-3xl font-bold">Lots</h1>
            </section>
        </main>
    </div>
@endsection
