<template>
    <div class="container mt-4 mb-4 animated fadeIn slow" id="digest">
        <h2>News Digest - {{name}}</h2>
        <br>
        <div class="card mb-3  shadow-sm p-3 bg-white rounded" style="width: 100%; height: 50%" v-for="(n, index) in news[0]" :key="index">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img :src="image" style="max-width: 100%; " alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bolder">{{n.Title}}</h5>
                        <p class="card-text">{{n.Date}}</p>
                        <a target="_blank" :href="n.Link"  class="button button-2 stretched-link">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <br>
            <img  v-show="load===true" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/1f430a36197347.57135ca19bbf5.gif" width="30%" alt="">
            <br>
            <button @click="more" v-show="!load" class="button button-2">More Posts</button>
            <button v-show="load===12" @click="scrollTop" class="button button-2">Scroll Up</button>
        </div>

        <vue-scroll-progress-bar background-color="#0080FF" height="3px"></vue-scroll-progress-bar>

    </div>
</template>

<script>
    export default {
        name: "Sources",
        props:{
            name:String,
            image: String
        },
        data(){
          return{
              base_url: 'https://wordpress-31551-1095058.cloudwaysapps.com/wp-json/wl/v1/aggregate?source=',
              api:'',
              news:[],
              load: true,
              limit:10,
          }
        },
        methods:{
            scrollTop()
            {
              window.scrollTo(0,0);
            },
            api_call()
            {
                fetch(this.api , {
                    method: 'GET'
                })
                    .then((response) => {
                        return (response.json())
                    })

                    .then((jsonData) =>{
                        this.news = (JSON.parse(JSON.stringify(jsonData)));
                        if(this.news[0].length< this.limit)
                        {
                            this.load = 12; //random number to hide the loader

                        }
                        else
                        {
                            setTimeout(() => {this.load = false}, 2500);
                        }
                    });
                this.api = this.base_url;

            },

            more()
            {   this.load = true;
                this.limit+=10;
                this.api+='&limit='+(this.limit);
                setTimeout(() => {this.api_call()}, 1500);
            }
        },
        created() {
            this.base_url = this.base_url+(this.$route.params.src);
            this.api = this.base_url;
            this.api_call()
        }
    }
</script>

<style scoped>

</style>
