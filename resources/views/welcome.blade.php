@extends('layouts.app')

@section('content')
    <div class="loader" style="color: black">
        <img src="images/loader1.gif">
    </div>
    <div class="container-fluid" style="background-color: white !important;">
        <div class="row">
            <div class="col-lg-4 border-right col-xs-12">
                <div class="container mt-4 mb-4">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Browse By:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr><td>CAA</td></tr>
                        <tr><td>Section 144 imposed</td></tr>
                        <tr><td>IPL Auctions</td></tr>
                        <tr><td>News</td></tr>
                        <tr><td>Perfect ReCapture</td></tr>
                        <tr><td>Petrol Diesel Price</td></tr>
                        </tbody>

                    </table>
                    <div class="text-center">
                        <button class="button button-2">View More</button>
                    </div>

                    <hr>
                    <h6 class="font-weight-bold">News Digest!</h6>

                    <br>

                    <div class="row mb-3">
                        <div class="col-lg-4 col-4">
                            <router-link to="/bhubaneswar/source"><img src="https://www.freshercooker.in/wp-content/uploads/2019/10/0-9.jpeg" style="max-width: 80px;" alt=""></router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ7MUiuedqOHZ1H0b5U1l9s1SjDxhISaDQL5jfRNJp-xDitq_wf" style="max-width: 80px" alt=""></a>
                        </div>
                        <div class="col-lg-4 col-4">
                            <a href=""><img src="https://seeklogo.net/wp-content/uploads/2014/08/samsung-logo-preview.png" style="max-width: 80px" alt=""></a>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4 col-4">
                            <router-link
                                :to="{name: 'external', params: {src:'TOI', name: 'Times of India'}}">
                                <img src="https://pbs.twimg.com/profile_images/1282407636/icon_512.png" style="max-width: 80px;" alt="">
                            </router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <a href=""><img src="https://images.squarespace-cdn.com/content/v1/5cb636ea93a63267f424e168/1557132988464-36QGJD3T9BUQ1Q2MN68R/ke17ZwdGBToddI8pDm48kPJXHKy2-mnvrsdpGQjlhod7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmrMDYraMJMCQwFxTSOIP7LpSBEQpA-g5k6VTjWbSuadHJq0dp98hg5AZvIaPb3DoM/the_guardian_icon.png" style="max-width: 80px" alt=""></a>
                        </div>
                        <div class="col-lg-4 col-4">
                            <a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ2PX2Q0FUUJasiiR49vi4C0fNmjpnWHKoaOmJgSwI5CuEZG8_I" style="max-width: 80px" alt=""></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-4">
                            <router-link :to="{name: 'localwire', params: {source: 'LocalWire'} }"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRllbn1vzcYswkUfiORGrv5ntZB-vDcFHBFWtMwe26ObmmjZ7Cl" style="max-width: 80px;" alt=""></router-link>
                        </div>
                        <div class="col-lg-4 col-4">
                            <a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT3vnrdDSAWgrv6RSJ9z9Pzy0NlM9TKdZ4kniJ8nojUVIg54Zse" style="max-width: 80px" alt=""></a>
                        </div>
                        <div class="col-lg-4 col-4">
                            <a href=""><img src="https://surfshark.com/wp-content/uploads/2019/09/beebom-1.png" style="max-width: 80px" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <router-view></router-view>
            </div>
        </div>

    </div>
@endsection

