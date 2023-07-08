<template>
    <div :class="[classObject]">
        <div class="relative group/parent"  :class="{'w-full sm:w-4/5': isToShowModal}">
            <expand v-if="!isToShowModal" class="text-slate-100 cursor-pointer opacity-0 absolute top-2 right-2 
                    transition-opacity ease-in group-hover/parent:opacity-100 duration-200 z-30" @click="showModal"/>

            <button @click="toggleOrientationPopup" class="text-slate-100 opacity-0 absolute top-2 right-8
                    transition-opacity ease-in group-hover/parent:opacity-100 duration-200 z-30">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/>
                </svg>
            </button>

            <div v-show="isToShowOrientationPopup" class="absolute flex flex-col -right-24 rounded-md bg-gray-700 border border-slate-600 z-40">
                <button class="text-slate-100 font-semibold text-sm p-2 hover:bg-gray-800 transition-colors ease-in duration-200" :class="{'bg-gray-900' : this.orientation == 'overlay'}" @click="setOrientation('overlay')">Texto sobreposto</button>
                <button class="text-slate-100 font-semibold text-sm p-2 hover:bg-gray-800 transition-colors ease-in duration-200" :class="{'bg-gray-900' : this.orientation == 'direita'}" @click="setOrientation('direita')">Texto à direita</button>
                <button class="text-slate-100 font-semibold text-sm p-2 hover:bg-gray-800 transition-colors ease-in duration-200" :class="{'bg-gray-900' : this.orientation == 'esquerda'}" @click="setOrientation('esquerda')">Texto à esquerda</button>
                <button class="text-slate-100 font-semibold text-sm p-2 hover:bg-gray-800 transition-colors ease-in duration-200" :class="{'bg-gray-900' : this.orientation == 'abaixo'}" @click="setOrientation('abaixo')">Texto abaixo</button>
            </div>

            <div class="relative group overflow-x-clip">

                <chevron-left class="p-3 -z-10 absolute top-[40%] left-3 cursor-pointer rounded-full group-hover:bg-gray-800 
                    group-hover:bg-opacity-50 hover:!bg-gray-600 group-hover/parent:z-30 hover:!bg-opacity-70 transition-all hover:text-slate-100 hover:scale-125 ease-in duration-200"  @click="previousItem"></chevron-left>

                <div ref='inner' :style="innerTranslateX" class="whitespace-nowrap transition-transform duration-300">
                    <div class='inline-flex relative' v-for="item in itemsList" :key="item.index">
                        <img v-bind:src="item.imagepath" class="border border-slate-600 rounded-md min-w-full" :class="[classOrientationImage]"/>
                        <div :class="[classOrientationText]">
                            <span class="w-3/4 whitespace-normal text-justify text-sm font-thin first-letter:uppercase">{{item.text}}</span>
                        </div>
                    </div>
                </div>

                <chevron-right class="p-3 -z-10 absolute top-[40%] right-3 cursor-pointer rounded-full group-hover:bg-gray-800 
                    group-hover:bg-opacity-50 hover:!bg-gray-600 group-hover/parent:z-30 hover:!bg-opacity-70 transition-all hover:text-slate-100 hover:scale-125 ease-in duration-200"  @click="nextItem"></chevron-right>
            </div>

            <x-mark v-if="isToShowModal" 
                    class="absolute -bottom-48 right-[45%] bg-gradient-to-r from-cyan-400 to-sky-500 sm:bottom-auto sm:-top-3 sm:-right-3 rounded-full p-3 sm:p-2"
                    @click="hideModal"></x-mark>
        </div>
    </div>
</template>

<script>
export default{
    props: ['imagesandtexts'],
    data(){
        return {
            isToShowModal: false,

            itemsList: this.imagesandtexts,
            transitioning: false,
            innerTranslateX: {},
            step: '',

            intervalMS: 5000,
            intervalCallback: null,

            isToShowOrientationPopup: false,
            orientation: 'abaixo',
        }
    },
    mounted(){
        this.setStep();

        const card = this.itemsList.pop();
        this.itemsList.unshift(card);

        this.resetTranslate();

        this.intervalCallback = setInterval(this.nextItem, this.intervalMS);
    },
    methods:{
        showModal(){
            this.isToShowModal = true;
            setTimeout(() => {
                this.setStep();
                this.resetTranslate();
            }, 10);
        },

        hideModal(){
            this.isToShowModal = false;
            setTimeout(() => {
                this.setStep();
                this.resetTranslate();
            }, 10);
        },

        toggleOrientationPopup(){
            this.isToShowOrientationPopup = !this.isToShowOrientationPopup;
        },
        setOrientation(newOrientation){
            this.orientation = newOrientation;
            this.toggleOrientationPopup();
        },

        setStep () {
            const innerWidth = this.$refs.inner.parentElement.clientWidth; // ❶
            this.step = `${innerWidth}px`;
        },
        previousItem(e){
            if (this.transitioning)
                return;
            
            if(e)
                clearInterval(this.intervalCallback);

            this.transitioning = true;

            this.moveRight();

            this.beforeTransition(() => {
                const card = this.itemsList.pop();
                this.itemsList.unshift(card);
                this.resetTranslate();
                this.transitioning = false;
                
                if(e)
                    this.intervalCallback = setInterval(this.nextItem, this.intervalMS)
            });
        },
        nextItem(e){
            if (this.transitioning) return;

            if(e)
                clearInterval(this.intervalCallback);

            this.transitioning = true;

            this.moveLeft();

            this.beforeTransition(() => {
                const card = this.itemsList.shift();
                this.itemsList.push(card);
                this.resetTranslate();
                this.transitioning = false;

                if(e)
                    this.intervalCallback = setInterval(this.nextItem, this.intervalMS)
            });
        },
        moveLeft(){
            this.innerTranslateX = {
                transform: `translateX(-${this.step})
                            translateX(-${this.step})`
            };
        },
        moveRight () {
            this.innerTranslateX = {
                transform: `translateX(${this.step})
                            translateX(-${this.step})`
            };
        },
        beforeTransition (callback) {
            const listener = () => {
                callback();
                this.$refs.inner.removeEventListener('transitionend', listener);
            };
            this.$refs.inner.addEventListener('transitionend', listener);
        },
        
        resetTranslate () {
            this.innerTranslateX = {
                transition: 'none',
                transform: `translateX(-${this.step})`
            };
        },
    },
    computed: {
        classObject() {
            return {
                'backdrop-blur-md bg-slate-800 bg-opacity-60 top-0 left-0 !fixed z-30 !max-h-screen h-full !w-full flex justify-center items-center sm:items-start sm:pt-10': this.isToShowModal,
            }
        },
        classOrientationText(){
            return{
                "w-full bg-stone-900 bg-opacity-70 absolute bottom-0 left-0 px-5 py-3 text-center": this.orientation == 'overlay',
                "h-full border border-slate-600 bg-stone-900 absolute right-0 w-1/3 flex flex-col justify-center items-center": this.orientation == 'direita',
                "h-full border border-slate-600 bg-stone-900 absolute left-0 w-1/3 flex flex-col justify-center items-center": this.orientation == 'esquerda',
                "w-full border border-slate-600 bg-stone-900 absolute -bottom-40 sm:-bottom-20 p-2 h-44 sm:h-28 flex items-center justify-center whitespace-normal": this.orientation == 'abaixo'
            }
        },
        classOrientationImage(){
            return{
                'w-2/3': this.orientation == 'direita',
                'w-2/3 relative left-1/3': this.orientation == 'esquerda'
            }
        },
    }
}
</script>