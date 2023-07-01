<header id="header" class="w-full fixed top-0 z-9999">
    <div class="w-full h-[72px] bg-transparent">
        <div class='max-w-[1240px] mx-auto px-4 flex justify-between items-center h-full'>
            {{-- Logo --}}
            <div class="flex items-center justify-center hiwua gap-4">
                <h1 class="text-5xl text-green-600">ኖህ</h1>
                <p class="hidden sm:flex text-sm md:text-xl text-yellow-700">
                    የቁጠባና የብድር ተቋም
                </p>
            </div>
            {{-- Menu --}}
            <div class='hidden md:flex gap-2'>
                <ul id="links" class="py-6 flex hiwua text-yellow-600 items-center">
                    <li class="text-2xl cursor-pointer hover:text-white hover:bg-green-600 px-4 py-2 rounded">
                        <a href="/">ዋና ገጽ</a>
                    </li>
                    <li class="text-2xl cursor-pointer hover:text-white hover:bg-green-600 px-4 py-2 rounded">
                        <a href="/services">አገልግሎቶች</a>
                    </li>
                    <li class="text-2xl cursor-pointer hover:text-white hover:bg-green-600 px-4 py-2 rounded">
                        <a href="/about">ስለ ኖህ</a>
                    </li>
                    <li class="text-2xl cursor-pointer hover:text-white hover:bg-green-600 px-4 py-2 rounded">
                        <a href="/contact">ያግኙን</a>
                    </li>
                </ul>
                <div class="flex items-center hiwua gap-4">
                    <button class="text-white text-xl bg-green-700 hover:bg-green-600 px-6 py-2 rounded">
                        <a href="/auth/login"> ይግቡ</a>
                    </button>
                    <button class="text-white text-xl bg-green-700 hover:bg-green-600 px-6 py-2 rounded">
                        <a href="/auth/register">ይመዝገቡ</a>
                    </button>
                </div>
            </div>

            {{-- Hamburger menu --}}
            <div onClick={handleNav} class='block md:hidden'>
                <button class="block text-green-600 md:hidden" id="nav-toggle">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path v-if="!show" fill-rule="evenodd" clip-rule="evenodd"
                            d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h16v2H4v-2z" />
                        <path v-else fill-rule="evenodd" clip-rule="evenodd" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{--  Mobile Menu --}}
            <div id="nav"
                class="md:hidden py-6 w-full bg-green-950 text-white absolute top-[64px] left-[-100%] justify-center text-center ">
                <ul id="links" class=" flex flex-col hiwua text-yellow-600 items-center">
                    <li class="text-2xl cursor-pointer hover:text-white hover:bg-green-600 px-4 py-2 rounded">
                        <a href="/">ዋና ገጽ</a>
                    </li>
                    <li class="text-2xl cursor-pointer hover:text-white hover:bg-green-600 px-4 py-2 rounded">
                        <a href="/services">አገልግሎቶች</a>
                    </li>
                    <li class="text-2xl cursor-pointer hover:text-white hover:bg-green-600 px-4 py-2 rounded">
                        <a href="/about">ስለ ኖህ</a>
                    </li>
                    <li class="text-2xl cursor-pointer hover:text-white hover:bg-green-600 px-4 py-2 rounded">
                        <a href="/contact">ያግኙን</a>
                    </li>
                </ul>
                <div class="flex flex-col justify-cener items-center hiwua gap-4">
                    <button class="text-white text-xl bg-green-700 hover:bg-green-600 px-6 py-2 rounded">
                        <a href="/auth/login"> ይግቡ</a>
                    </button>
                    <button class="text-white text-xl bg-green-700 hover:bg-green-600 px-6 py-2 rounded">
                        <a href="/auth/register">ይመዝገቡ</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    const header = document.getElementById("header");
    let prevScrollPos = window.pageYOffset;
    const scrollDistance = 80;

    window.addEventListener("scroll", () => {
        const currentScrollPos = window.pageYOffset;
        if (currentScrollPos >= scrollDistance) {
            header.classList.remove("bg-transparent", "text-slate-100", "sticky-top");
            header.classList.add("bg-white", "shadow-lg", "sticky-top-80");
        } else {
            header.classList.remove("bg-white", "shadow-lg", "sticky-top-80");
            header.classList.add("bg-transparent", "text-slate-100");
        }
        prevScrollPos = currentScrollPos;
    });

    // Toggle Nav
    const navToggle = document.getElementById("nav-toggle");
    const nav = document.querySelector("#nav");

    navToggle.addEventListener("click", () => {
        if (nav.classList.contains('left-[-100%]')) {
            nav.classList.remove("left-[-100%]");
            nav.classList.add("left-0");
        } else {
            nav.classList.toggle("hidden");
            nav.classList.toggle("absolute");
            nav.classList.remove("left-0");
            nav.classList.add("left-[-100%]");
        }
    });
</script>
