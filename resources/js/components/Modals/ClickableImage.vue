<template>
    <div class="transition-all duration-500 ease-linear group" :class="[classObject], propSize">
        <div class="relative">
            <expand v-if="!isToShowModal" class="text-slate-100 cursor-pointer opacity-0 absolute top-2 right-2 
                transition-opacity ease-in group-hover:opacity-100 duration-200 z-40" @click="showModal"/>

            <img :src="imagepath" class="border border-slate-600 rounded-md bg-slate-800 bg-opacity-40" />

            <x-mark v-if="isToShowModal" 
                class="absolute -bottom-14 right-[45%] bg-gradient-to-r from-cyan-400 to-sky-500 sm:bottom-auto sm:-top-3 sm:-right-3 rounded-full p-3 sm:p-2"
                @click="hideModal"></x-mark>
        </div>
    </div>
</template>

<script>
export default{
    props: ['imagepath', 'size'],
    data(){
        return{
            isToShowModal: false,
            propSize: this.size,
        }
    },
    methods: {
        showModal(){
            this.isToShowModal = true;
            this.propSize = 'w-full';
        },
        hideModal(){
            this.isToShowModal = false;
            this.propSize = this.size;
        }
    },
    computed: {
        classObject() {
            return {
                'backdrop-blur-md bg-slate-800 bg-opacity-50 top-0 left-0 !fixed z-50 h-full w-full flex justify-center items-center': this.isToShowModal,
            }
        },
    }
}
</script>