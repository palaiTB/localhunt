<template>
    <div class="container text-center">
        <br>
        <button @click="trigger" class="button button-2 btn-lg test_shadow">List of Holidays</button>
    </div>
</template>

<script>
    import ImageModal from "../Modals/ImageModal";
    export default {
        name: "Holidays",
        methods:{
            trigger(data)
            {   console.log(data);
                this.$modal.show(ImageModal,
                    {
                        title: 'Holidays - 2019-2020',
                        image: "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQO2Z-BOOQlrFnIPX3xxmBX0UzzLkXWFk8i8KPQ7YME1_gUIn7-",
                        // content: data.content,
                        // date: data.date,
                        // author: data.author,
                        // link: data.permalink,
                        // id: data.id
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
            }
        }
    }
</script>

<style scoped>

</style>
