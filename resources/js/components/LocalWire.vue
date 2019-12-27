<template>

    <div class="container mt-4 mb-4 animated fadeIn slow" id="digest">
        <h2>News Digest - Localwire</h2>
        <br>
        <div class="card mb-3  test_shadow p-3 bg-white rounded" style="max-width: 100%;" v-for="(n, index) in news" :key="index">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="rounded" style="max-width: 100%;padding-top: 1.6rem" :src="n.media" alt="">
                    <p class="card-text"><small class="text-muted">{{n.date}}</small></p>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bolder">{{n.title}}</h5>
                        <p class="card-text">{{n.excerpt}}</p>
<!--                        <a :href="n.permalink"  class="btn btn-outline-dark stretched-link">Read More</a>-->
                        <button class="button stretched-link btn-sm button-2" @click="trigger(n)">Read More</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">

            <img  v-show="load" width="30%" src="images/loader2.gif" alt="">
            <br>
            <button v-show="!load" @click="hello" class="button button-2">More Posts</button>
        </div>

        <vue-scroll-progress-bar background-color="#0080FF" height="3px"></vue-scroll-progress-bar>


    </div>

</template>

<script>
    import CustomModal from "./CustomModal";
    export default {
        name: "Check",
        props:{
          source: String
        },
        data(){
            return{
                news: [],
                range: 10,
                page: 1,
                load: false
            }
        },
        methods:{
            trigger(data)
            {   console.log(data);
                this.$modal.show(CustomModal,
                    {
                        title: data.title,
                        image: data.media,
                        content: data.content,
                        date: data.date,
                        author: data.author,
                        link: data.permalink,
                        id: data.id
                     },
                    {
                    height: 'auto',
                    scrollable: true,
                    resizable: true,
                    adaptive: true,
                    },
                    {
                    'before-close': (event) => { console.log('this will be called before the modal closes'); }
                    })
            },
            hello(){
                this.load = true;
                setTimeout(() => {this.loadmore()}, 1500);

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
                    setTimeout(() => {this.load = false}, 1000);
            }
        },
        created() {
            this.loadmore();
        }
    }
</script>

<style scoped>
    .btn-sm{
        opacity: 0;
        margin-top: -2rem;
        margin-bottom: -6rem;
    }
</style>
