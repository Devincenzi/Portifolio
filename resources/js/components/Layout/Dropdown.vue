<template>
    <div class="dropdown my-2" v-on-click-outside="closeDropdown">
        <button type="button" @click="open = !open">{{ $attrs['trigger'] }}</button>

        <div v-if="open" class="bg-slate-600 absolute min-w-[10rem] flex flex-col rounded-lg">
            <slot />
        </div>
    </div>
</template>

<script setup>

import { ref } from 'vue'
import { vOnClickOutside  } from '@vueuse/components';

const open = ref(false);
function closeDropdown () {
    open.value = false;
}

</script>