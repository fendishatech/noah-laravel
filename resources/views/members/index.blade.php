@extends('layout.index')

@section('Page Title')
    Memebers Area
@endsection

@section('content')
    <div class="min-h-screen">
        <main class="mt-[90px] px-6 flex flex-col gap-4">
            @if (Session::has('member'))
                <h1 class="text-start text-green-700 text-2xl my-4">Hello
                    {{ Session::get('member')['first_name'] }}
                    {{ Session::get('member')['father_name'] }}
                </h1>
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
    </div>
@endsection
