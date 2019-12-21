<template>
    <div class="container mt-4 mb-4 animated fadeIn slow" id="digest">
        <h2>News Digest!</h2>
        <br>

        <div class="card mb-3 shadow-sm p-3 bg-white rounded" style="max-width: 100%;" v-for="(n, index) in news" :key="index">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="rounded" style="max-width: 100%; min-height: 100%" :src="n.media" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bolder">{{n.title}}</h5>
                        <p class="card-text">{{n.excerpt}}</p>
                        <p class="card-text"><small class="text-muted">{{n.date}}</small></p>
                        <a :href="n.permalink"  class="btn btn-outline-dark stretched-link">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">

            <img  v-show="load" width="30%" src="images/loader2.gif" alt="">
            <br>
            <button v-show="!load" @click="hello" class="btn btn-outline-info">More Posts</button>
        </div>

    </div>
</template>

<script>
    export default {
        name: "Check",
        data(){
            return{
                news: [],
                range: 10,
                page: 1,
                load: false
            }
        },
        methods:{
            hello(){
                this.load = true;
                setTimeout(() => {this.loadmore()}, 2000);
            },
            loadmore()
            {
                fetch("https://localwire.me/wp-json/wl/v1/posts?per_page="+this.range,{
                    method: 'GET'
                })
                    .then((response) => {
                        return response.json();
                    })

                    .then((jsonData)=>{
                        this.news = jsonData;
                    });

                    this.page++;
                    this.range+=10;
                    this.load = false
            }
        },
        created() {
            this.loadmore();
        }
    }
</script>

<style scoped>

</style>
