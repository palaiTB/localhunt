<template>
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th class="pt-5" scope="col">What's Popular !! <img class="pb-1" src="https://img.icons8.com/metro/15/000000/filled-star.png"></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(n,index) in arr" :key="index">
                <td class="row" @click="trigger(n)">
                    <div class="col-lg-2 col-2">
                        <p><img src="https://img.icons8.com/android/24/000000/circled-chevron-right.png"></p>
                    </div>
                    <div class="col-lg-10 col-10">
                        <p>{{n.title}}</p>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import CustomModal from "./CustomModal";
    import _ from 'lodash'
    export default {
        name: "Popular",
        props:{
          keys: Number
        },
        data(){
            return{
                arr:[],
            }
        },
        methods:{
          trigger(data)
          {
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
          views()
          {
              fetch('https://localwire.me/wp-json/wl/v1/posts?per_page=100',{
                  method: 'GET'
              })
                  .then((response) => {
                      return (response.json())
                  })
                  .then((jsonData)=>{
                      let data = (JSON.parse(JSON.stringify(jsonData)));

                      data.forEach(function(dat){
                          if(dat.popularity==="")
                          {
                              dat.popularity=0
                          }
                          else
                          {
                              dat.popularity = parseInt(dat.popularity)
                          }
                      });

                      this.arr = (_.orderBy(data,['popularity'],['desc'])).slice(0,5);
                  })
          }
        },
        created() {
            this.views();
        }
    }
</script>

<style scoped>
    td{
        cursor: pointer
    }
</style>
