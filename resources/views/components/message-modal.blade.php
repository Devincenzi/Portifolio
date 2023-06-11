<div id='flashMessageModal' class='w-full z-50 h-full flex justify-center align-top'>
    <div class="w-2/5 h-1/4 flex flex-col bg-slate-50 border-slate-300 border-2 fixed z-50 -mt-8 rounded-2xl justify-around">
        <span class='w-full text-center'>
            <h1>{{ $slot }}</h1>
        </span>
        <div class="w-full flex justify-center">
            <button class='px-4 py-3 w-20 bg-blue-500 text-white rounded-md text-center' data-dismiss='flashMessageModal' onclick="">
                <b>OK</b>
            </button>
        </div>
    </div>
</div>

<script>

</script>