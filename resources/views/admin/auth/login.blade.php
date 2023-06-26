@extends('admin.auth.layout')

@section('page_title')
    Login
@endsection

@section('content')
    <div class="w-full hiwua h-screen flex items-center justify-center bg-gray-100">
        <form class="w-full md:w-1/3 rounded-lg" action="{{ url('/admin') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">There was an error processing your request.</span>
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 5.652a.999.999 0 1 0-1.414 1.414L16.586 10l-3.652 3.652a.999.999 0 1 0 1.414 1.414L18.414 11.4a.999.999 0 0 0 0-1.414l-3.652-3.652z" />
                        </svg>
                    </span>
                </div>
            @endif
            <div class="flex font-bold justify-center mt-6">
                <img class="h-20 w-20 mb-3" src="https://dummyimage.com/64x64" />
            </div>

            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input name="phone_no"
                            class="w-full text-gray-700 px-3 py-2 rounded-lg focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-yellow-600"
                            type="phone" placeholder="ስልክ ቁጥር" />
                    </div>
                </div>

                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <input name="password"
                            class="w-full text-gray-700 px-3 py-2 rounded-lg focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-yellow-600"
                            type="password" placeholder="ፓስወርድ" />
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
