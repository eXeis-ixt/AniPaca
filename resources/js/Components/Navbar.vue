<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

let links = [
    {
        name: 'Home',
        link: '/'
    },
    {
        name: 'About',
        link: 'about'
    },
    {
        name: 'Download',
        link: 'download'
    },
    {
        name: 'Contact',
        link: 'contact'
    }
]

let open = ref(false);

function menuOpen(){
    open.value = !open.value
}


</script>

<template>

<div class="  rounded-md text-black py-5 px-6 shadow-md md:flex justify-between items-center">

    <div class=" flex items-center">
        <div class=" text-xl mr-1">
           <Link :href="route('home')">
            <span><img src="/logo-2.png" width="80" height="auto" alt=""></span>
        </Link>
        </div>
    </div>

    <span @click="menuOpen()" class=" absolute md:hidden right-12 top-9 cursor-pointer text-4xl">
        <i :class="[open ? 'bi bi-x' : 'bi bi-filter-left']"></i>
    </span>

        <ul :class="[open ? 'left-5' : 'left-[-100%]' ]" class=" bg-white md:flex md:items-center md:px-0 px-3 md:pb-0 pb-6 md:static absolute
        md:w-auto w-full top-28 duration-700 ease-in-out
        " >
            <li v-for="link in links" :key="link" class=" md:mx-4 md:my-0 my-6"><Link class="text-xl hover:bg-black hover:text-white px-4 py-2 rounded-md" :href="link.link"> {{ link.name }} </Link></li>

        </ul>


</div>


</template>
