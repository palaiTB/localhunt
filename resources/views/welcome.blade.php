@extends('layouts.app')

@section('content')
    <div class="loader" style="color: black">
        <img src="images/preview.gif">
    </div>
    <div class="container-fluid" style="background-color: white !important;">
        <div class="row">
            <div class="col-lg-4 border-right col-xs-12">
                <div class="container mt-4 mb-4">
                    <a href="https://play.google.com/store/apps/details?id=me.localwire&hl=en"><img src="images/Logo.jpeg" style="max-width: 100%" alt=""></a>
                    <popular-posts></popular-posts>
                    <div class="text-center">
                        <router-link to="/bhubaneswar" class="button button-2">View More</router-link>
                    </div>

                    <hr>
                    <h6 class="font-weight-bold">News Sources</h6>

                    <br>

                    <div class="row mb-3">
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'external', params: {src: 'TIE', name: 'Indian Express', image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQzAXVrOvu_ay1FzzAgi4zockZoITmHleShLl8PuaWDkA4GjB_0'} }"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQzAXVrOvu_ay1FzzAgi4zockZoITmHleShLl8PuaWDkA4GjB_0" style="max-width: 80px" alt=""></router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'external', params: {src: 'KNK', name: 'Kanak News', image: 'https://pbs.twimg.com/profile_images/642028562711638020/CWykgTk-.jpg'} }"><img src="https://pbs.twimg.com/profile_images/642028562711638020/CWykgTk-.jpg" style="max-width: 80px" alt=""></router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'external', params: {src: 'DRT', name: 'Dharitri News', image: 'https://media.licdn.com/dms/image/C560BAQE0SdnOy7GHWg/company-logo_200_200/0?e=2159024400&v=beta&t=zaI-aeeD84kqDOq26aoOiR9ot4vT_9z8BtT4Hs2jRgA'} }" ><img src="https://media.licdn.com/dms/image/C560BAQE0SdnOy7GHWg/company-logo_200_200/0?e=2159024400&v=beta&t=zaI-aeeD84kqDOq26aoOiR9ot4vT_9z8BtT4Hs2jRgA" style="max-width: 80px" alt=""></router-link>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4 col-4">
                            <router-link
                                :to="{name: 'external', params: {src:'TOI', name: 'Times of India', image:'https://pbs.twimg.com/profile_images/1282407636/icon_512.png'}}">
                                <img src="https://pbs.twimg.com/profile_images/1282407636/icon_512.png" style="max-width: 80px;" alt="">
                            </router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'external', params: {src:'OTV', name: 'Odisha TV', image:'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSuZuNgyWLvQV8HvyKy1qt4Lx61Ohx7mUNQ365UY4lLouI7rRsq'}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSuZuNgyWLvQV8HvyKy1qt4Lx61Ohx7mUNQ365UY4lLouI7rRsq" style="max-width: 80px" alt=""></router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'external', params: {src:'NIE', name: 'New Indian Express', image:'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSKdX56cJIoBW_55bJHJhRaujKNKx9lXsIdSIdUtjsLQ5WEe7-e'}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSKdX56cJIoBW_55bJHJhRaujKNKx9lXsIdSIdUtjsLQ5WEe7-e" style="max-width: 80px" alt=""></router-link>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'localwire', params: {source: 'LocalWire'} }"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRllbn1vzcYswkUfiORGrv5ntZB-vDcFHBFWtMwe26ObmmjZ7Cl" style="max-width: 80px;" alt=""></router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'external', params: {src: 'SBD', name: 'Sambad', image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT3vnrdDSAWgrv6RSJ9z9Pzy0NlM9TKdZ4kniJ8nojUVIg54Zse'} }"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT3vnrdDSAWgrv6RSJ9z9Pzy0NlM9TKdZ4kniJ8nojUVIg54Zse" style="max-width: 80px" alt=""></router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'external', params: {src: 'PRM', name: 'Prameya', image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS0egWYFL2TeZ55xhazRHfeoYqqMgBD9VfKoRNsVUDGILu5kLQV'}}"><img class="pt-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS0egWYFL2TeZ55xhazRHfeoYqqMgBD9VfKoRNsVUDGILu5kLQV" style="max-width: 80px;height: 80px" alt=""></router-link>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4 col-4">
                            <router-link
                                :to="{name: 'external', params: {src:'PRG', name: 'Pragativadi', image:'https://incredibleorissa.com/wp-content/uploads/Pragativadi-Paper.jpg'}}">
                                <img src="https://incredibleorissa.com/wp-content/uploads/Pragativadi-Paper.jpg" style="max-width: 80px; height: 80px" alt="">
                            </router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'external', params: {src:'ORP', name: 'Orissa Post', image:'https://simplyodisha.com/wp-content/uploads/2018/04/OrissaPost-Newspaper.jpg'}}"><img src="https://simplyodisha.com/wp-content/uploads/2018/04/OrissaPost-Newspaper.jpg" style="max-width: 80px; height: 80px" alt=""></router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'external', params: {src:'ODR', name: 'Odisha Reporter', image:'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSYtYzOsqIjmFEETyJmd36DFtdzMStygungkcbNhAm4FeywWIKi'}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSYtYzOsqIjmFEETyJmd36DFtdzMStygungkcbNhAm4FeywWIKi" style="max-width: 80px" alt=""></router-link>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-8">
                <router-view :key="$route.fullPath"></router-view>  <!-- Very important. As I am trying to access the same component through different routes and props. I use the key to specify the vue router of the full path-->
                <modals-container></modals-container>
            </div>
        </div>

    </div>
@endsection

