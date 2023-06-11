<template>
    <!-- <div id='flashMessageModal' data-showing="false" hidden class='fade fadeOut z-50 flex justify-center items-center glass'> -->
    <div id='flashMessageModal' class='flex z-50 justify-center items-center glass'>
        <div class="w-2/5 h-1/4 flex flex-col bg-slate-600 border-slate-700 border rounded-lg justify-around">
            <span class='w-full text-center text-slate-50'>
                <h1>
                    <slot/>
                </h1>
            </span>
            <div class="w-full flex justify-center">
                <button class='px-4 py-3 w-20 bg-blue-400 text-slate-50 rounded-md text-center transition-colors hover:bg-blue-500 duration-300' 
                    @click="$hideMessage()">
                    <b>OK</b>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default{
    props: ['message', 'fromVue']
}
</script>