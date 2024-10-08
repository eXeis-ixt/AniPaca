<script setup>

 defineProps({
    keygen: Object
 })

</script>

<template>

    <div class=" bg-black flex flex-col h-screen items-center justify-center text-4xl text-white font-bold">
        <h1>
            Your key is
        </h1>



        {{ keygen }}
    </div>


</template>
