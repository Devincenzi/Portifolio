<template>
    <div class="inline-flex items-center justify-center w-full">
        <hr class="w-2/3 h-1 mt-12 mb-8 border-0 rounded bg-gray-700">
        <div class="absolute px-5 -translate-x-1/2 translate-y-2 left-1/2 bg-gray-800">
            <!-- <svg aria-hidden="true" class="w-5 h-5 text-gray-700 dark:text-gray-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/></svg> -->
            <span class="text-gray-300 font-semibold">{{ title }}</span>
        </div>
    </div>
</template>

<script>

export default{
    props: ['title']
}

</script>