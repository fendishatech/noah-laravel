@extends('auth.layout')

@section('page_title')
    Confirmation
@endsection

@section('content')
    <div class="w-full min-h-screen px-2 sm:px-0 py-2 sm:py-0 hiwua flex flex-col items-center justify-center bg-gray-100">

        <div class="p-4 rounded border-[2px] border-yellow-700">
            <div class="flex font-bold justify-center mt-6">
                <img class="h-20 w-20 mb-3" src="https://dummyimage.com/64x64" />
            </div>
            <p class="mt-6 text-xl text-center text-gray-500 mb-8">
                እንኳን ወደ
                <a href="/" class="text-green-700">ኖህ</a>
                የቁጠባና የብድር አገልግሎት መጡ ።
            </p>
            <p class="mt-6 text-xl text-center text-gray-700 mb-8">
                ኦንላይን ምዝገባዎ ተሳክቷል ፣ የአባልነት ክፍያ 1000 ብር ክክፈሉ በዋላ ከዚህ በታች በቀረቡት አማራጮች ክፍያዎን
                ያረጋግጡ ።
            </p>
            <div class="px-12 pb-10 flex justify-center items-center">
                <a href="/" class="text-4xl text-green-700">ቴሌግራም</a>
                <a href="/" class="text-4xl text-green-700">ኢሜል</a>
            </div>

            <div class="px-12 pb-10 flex justify-center items-center">
                <button type="submit"
                    class="w-full sm:w-1/2 px-6 py-2 mt-8 text-4xl rounded-full bg-green-700 text-gray-100 focus:outline-none hover:bg-green-600">
                    <a href="/">ወደ ዋናው ገጽ ተመለስ</a>
                </button>
            </div>
        </div>
    </div>
@endsection
