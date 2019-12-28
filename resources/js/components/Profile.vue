<template>
    <div class="container-fluid">
        <div class="text-center mt-5 mb-3 animated rubberBand slow">
            <h2 >Welcome {{username}}!!</h2>
            <br>
        </div>
        <div class="container mt-3" style="margin-bottom: 16rem">
            <div class="row text-center">
                <div class="col-4">
                    <h4>Events <img src="https://img.icons8.com/wired/30/000000/event-accepted.png"></h4>
                </div>

                <div class="col-4">
                    <h4>Advertisements <img src="https://img.icons8.com/wired/30/000000/folded-booklet.png"></h4>
                </div>

                <div class="col-4">
                    <h4>Bookmarks <img src="https://img.icons8.com/wired/30/000000/bookmark-ribbon.png"></h4>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Profile",
        props:{
            username: String
        }
    }
</script>

<style scoped>

</style>
