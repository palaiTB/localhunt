<template>
    <div class="container pb-2 pt-2">
        <br>
        <img class="center" :src="image" alt="">

        <div class="text-center">
            <button class="button button-2" @click="$emit('close')">Back</button>
        </div>
        <br>
    </div>
</template>

<script>
    export default {
        name: "CustomModal",
        props:{
            image: String,

        },

    }
</script>

<style scoped>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
    }
</style>
