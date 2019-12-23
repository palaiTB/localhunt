<template>
    <div class="container pb-2 pt-2">
        <br>
        <h3>{{title}}</h3>
        <p style="font-size: 10px" class="font-weight-bolder">{{date}} - <a target="_blank" :href="link">View Full Story</a></p>
        <br>
        <img class="center" :src="image" alt="">
        <br>
        <div v-html="content"></div>
        <br>
        <p><i>By: {{author}}</i></p>

        <vue-disqus shortname="localwire-1" :identifier="url" :title="title" :url="url"></vue-disqus>

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
            title: String,
            image: String,
            content: String,
            date: String,
            author: String,
            link:String,
            id:Number
        },
        data()
        {
            return{
                url: "http://localwire-1.disqus.com/#!"+this.id,
            }
        }
    }
</script>

<style scoped>
    div >>> img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
        height: auto;
        padding-bottom: 10px;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
    }
</style>
