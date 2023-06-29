@extends('public.auth.layout')

@section('page_title')
    Login
@endsection

@section('content')
    <div class="w-full px-6 sm:px-0 h-screen flex items-center justify-center bg-slate-100">
        <form class="w-full md:w-1/3 rounded-lg bg-white" action={{ url('/login') }} method="POST">
            @csrf
            <div class="flex font-bold flex-col items-center justify-center mt-6">
                <img class="h-28 w-28 mb-3" src="/images/ebc-logo.png" />
                <p class="hiwua text-2xl font-thin text-green-800">
                    ኖህ የማይክሮ ፋይናንስና የብድር ተቋም
                </p>
            </div>
            {{-- Phone No --}}
            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="tel" name="phone_no" placeholder="Phone No"
                            class="w-full border rounded-md px-3 py-2 text-gray-700 focus:outline-yellow-700" />
                    </div>
                </div>
                {{-- Password --}}
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input type="password" name="password" placeholder="Password"
                            class="w-full border rounded-md px-3 py-2 text-gray-700 focus:outline-yellow-700" />
                    </div>
                </div>
                <button type="submit"
                    class="zelan text-2xl font-thin w-full py-2 mt-8 rounded-full bg-green-800 text-gray-100 focus:outline-none">
                    ግባ
                </button>
                <p class="mt-4 hiwua text-md text-center font-thin text-gray-600">
                    ከዚህ በፊት የከፈቱት አካውንት ከሌለዎት
                    <a href="/register" class="text-xl text-green-800">በዚህ ይመዝገቡ</a>።
                </p>
            </div>
        </form>
    </div>
@endsection
