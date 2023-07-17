<style>
    #text-container {
        text-align: center;
    }

    #text {
        display: inline-block;
        vertical-align: middle;
        color: orange;
        letter-spacing: 2px;
    }

    #text-cursor {
        display: inline-block;
        vertical-align: middle;
        width: 0px;
        height: 50px;
        background-color: orange;
        animation: blink .75s step-end infinite;
    }

    @keyframes blink {

        from,
        to {
            background-color: transparent
        }

        50% {
            background-color: orange;
        }
    }
</style>

<section class="pt-[100px] hero-section-bg bg-cover bg-center zelan h-screen relative -z-10">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-5">
        <div class="py-12">
            <div id="text-container">
                <div id="text"
                    class="mt-24 sm:mt-44 text-4xl hiwua sm:text-8xl font-thin text-yellow-600 text-center">
                </div>
                <div id="text-cursor"></div>
            </div>

            <p class="mt-6 text-xl sm:text-4xl hiwua text-yellow-600 text-center">
                አስተዋዮች ከኖህ ጋር ይሻገራሉ!
            </p>
        </div>
    </div>
</section>

<script>
    // List of sentences
    var _CONTENT = [
        "ቁጠባ ።",
        "ብድር ።",
        "ኢንሹራንስ ።",
        "የሼር ሽያጭ ላይ ።",
    ];

    // Current sentence being processed
    var _PART = 0;

    // Character number of the current sentence being processed 
    var _PART_INDEX = 0;

    // Holds the handle returned from setInterval
    var _INTERVAL_VAL;

    // Element that holds the text
    var _ELEMENT = document.querySelector("#text");

    // Cursor element 
    var _CURSOR = document.querySelector("#text-cursor");

    // Implements typing effect
    function Type() {
        // Get substring with 1 characater added
        var text = _CONTENT[_PART].substring(0, _PART_INDEX + 1);
        _ELEMENT.innerHTML = text;
        _PART_INDEX++;

        // If full sentence has been displayed then start to delete the sentence after some time
        if (text === _CONTENT[_PART]) {
            // Hide the cursor
            _CURSOR.style.display = 'none';

            clearInterval(_INTERVAL_VAL);
            setTimeout(function() {
                _INTERVAL_VAL = setInterval(Delete, 100);
            }, 2000);
        }
    }

    // Implements deleting effect
    function Delete() {
        // Get substring with 1 characater deleted
        var text = _CONTENT[_PART].substring(0, _PART_INDEX - 1);
        _ELEMENT.innerHTML = text;
        _PART_INDEX--;

        // If sentence has been deleted then start to display the next sentence
        if (text === '') {
            clearInterval(_INTERVAL_VAL);

            // If current sentence was last then display the first one, else move to the next
            if (_PART == (_CONTENT.length - 1))
                _PART = 0;
            else
                _PART++;

            _PART_INDEX = 0;

            // Start to display the next sentence after some time
            setTimeout(function() {
                _CURSOR.style.display = 'inline-block';
                _INTERVAL_VAL = setInterval(Type, 100);
            }, 200);
        }
    }

    // Start the typing effect on load
    _INTERVAL_VAL = setInterval(Type, 100);
</script>
