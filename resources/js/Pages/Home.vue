<script setup>
import DefaultLayout from '@/Layouts/DefaultLayout.vue';
import Hero from '@/Components/Hero.vue';
import { Head } from '@inertiajs/vue3';

defineProps({ mangas: Array })

</script>

<template>
    <Head title="Home" />
    <DefaultLayout>
        <Hero />

        <!-- All manga listing -->

        <section class="mt-24">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5">

                <div
                v-for="manga in mangas" :key="manga"
                    class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
                >
                    <img
                        class="w-full h-auto rounded-t-xl"
                        :src="manga.image"
                        alt="Card Image"
                    />
                    <div class="p-4 md:p-5">
                        <h3
                            class="text-lg font-bold text-gray-800 dark:text-white"
                        >
                            {{manga.title}}
                        </h3>
                        <p class="mt-1 text-gray-500 dark:text-neutral-400">
                            {{ manga.chapters }}
                        </p>
                        <a
                            class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-black text-white hover:bg-[#1e1e1e] focus:outline-none focus:bg-[#1e1e1e] disabled:opacity-50 disabled:pointer-events-none"
                            :href="manga.downloads" target="_blank"
                        >
                            Download
                        </a>
                    </div>
                </div>


            </div>
        </section>
    </DefaultLayout>
</template>
