@extends('admin.auth.layout')

@section('page_title')
    Login
@endsection

@section('content')
    <div class="w-full hiwua h-screen flex items-center justify-center bg-gray-100">
        <form class="w-full md:w-1/3 rounded-lg" action="/auth/login" method="POST">
            <div class="flex font-bold justify-center mt-6">
                <img class="h-20 w-20 mb-3" src="https://dummyimage.com/64x64" />
            </div>

            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input name="phone_no"
                            class="w-full text-gray-700 px-3 py-2 rounded-lg focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-yellow-600"
                            type="phone" placeholder="ስልክ ቁጥር" required />
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input name="password"
                            class="w-full text-gray-700 px-3 py-2 rounded-lg focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-yellow-600"
                            type="password" placeholder="ፓስወርድ" required />
                    </div>
                </div>
                <button type="submit"
                    class="w-full py-2 mt-8 text-4xl rounded-full bg-green-700 text-gray-100 focus:outline-none hover:bg-green-600">
                    ግባ
                </button>
            </div>
        </form>
    </div>
@endsection
