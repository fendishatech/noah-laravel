@extends('layout.index')

@section('Page Title')
    Memebers Area
@endsection

@section('content')
    <main class="mt-[90px] mb-6 px-6 flex flex-col gap-4">
        @if (Session::has('member'))
            <div class="flex flex-col sm:flex-row justify-between">
                <h1 class="text-start text-green-700 text-2xl my-4">Hello
                    {{ Session::get('member')['first_name'] }}
                    {{ Session::get('member')['father_name'] }}
                </h1>
                <div class="flex  flex-col sm:flex-row gap-2">
                    <button class="text-white text-xl bg-green-700 hover:bg-green-600 px-6 py-2 rounded">
                        <a href="/auth/login">የብድር ካልኩሌተር</a>
                    </button>
                    <button class="text-white text-xl bg-green-700 hover:bg-green-600 px-6 py-2 rounded">
                        <a href="/auth/login">የብድር አከፋፈል ካልኩሌተር</a>
                    </button>
                </div>
            </div>
            {{-- Balance/Lot --}}
            <div class="flex flex-col sm:flex-row gap-x-6">
                {{ View::make('members.partials.balance') }}
                {{ View::make('members.partials.lot') }}
            </div>
            {{-- Balance/Lot --}}
            <div class="flex flex-col sm:flex-row gap-x-6">
                {{ View::make('members.partials.loan') }}
                {{ View::make('members.partials.payments') }}
            </div>
        @endif
    </main>
@endsection
