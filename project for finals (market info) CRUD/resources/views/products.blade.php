@extends('layouts.app')
@section('content')
    <style>
        .jumbotron{
            border-radius:0;
            background-image: url(https://farm6.static.flickr.com/5047/5280964052_360e9c2b53_b.jpg);
            background-repeat:no-repeat;
            background-color:blue;
            background-position:center;
            
        }

        .bg-white{
            border:3px solid rgb(50,50,50);
            box-shadow:5px 5px 5px rgb(50,50,50);
        }
    </style>
    <div class="jumbotron text-white jumbotron-image shadow">
    </div>
    <div class="container justify-content-center mb-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h5 class="font-weight-bold">
                    <u>Our products</u> 
                </h5>
                <hr>
           </div>
            
                <div class="row col-sm-10 offset-sm-1">
                    <div class="card col-sm-4">
                        <img class="card-img-top" src="https://console.kr-asia.com/wp-content/uploads/2018/09/VCG21gic17196529-600x600.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text lead text-justify">One of the most significant selling points for fresh fruits and vegetables is that these foodstuffs are considered by dietitians, physicians and consumers themselves to be "healthy."</p>
                        </div>
                    </div>


                    <div class="card col-sm-4">
                        <img class="card-img-top" src="https://fastly.4sqi.net/img/general/600x600/402332771_zqwY6Gd360xrIzpfJvrkLgHs7osXzI0pkmp7RM202Nc.jpg">
                        <div class="card-body">
                            <p class="card-text lead text-justify">
                                Larger types of stores that sell groceries, such as supermarkets and hypermarkets, usually stock significant amounts of non-food products, such as clothing and household items.
                            </p>
                        </div>
                    </div>


                    <div class="card col-sm-4">
                        <img class="card-img-top" src="https://fastly.4sqi.net/img/general/600x600/34153525_SxqRvfDnESVq3cnlq-GGwmukWmro0tBThba6dOM9oqs.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text lead text-justify">
                            a store with extended opening hours and in a convenient location, stocking a limited range of household goods and groceries.
                            </p>

                        </div>
                    </div>
                </div>



                <div class="row col-sm-10 offset-sm-1 mt-3">
                    <div class="card col-sm-4">
                        <img class="card-img-top" src="https://assets.moneymax.ph/blog/ph_PH/wp-content/uploads/2020/04/06205856/frankie-cordoba-UfRLtAHHaP8-unsplash-e1586177943626.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text lead text-justify">
                            Happy customers receive good customer service. This begins as a greeting or acknowledgement as they enter the store and continues as courteousness throughout their shopping experience.
                            </p>
                        </div>
                    </div>


                    <div class="card col-sm-4">
                        <img class="card-img-top" src="https://allday.com.ph/wp-content/uploads/2017/09/promo-bg.jpg">
                        <div class="card-body">
                            <p class="card-text lead text-justify">
                            Don't miss out on the latest products and discounts! Subscribe. Earn points plus get discounts and freebies with SMAC! 
                            </p>
                        </div>
                    </div>


                    <div class="card col-sm-4">
                        <img class="card-img-top" src="https://cdn.goodao.net/dusungcool/c7d044587.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text lead text-justify">
                            All tenants were given Safe Malling Tool Kits so that all follow suit. Employees undergo rapid testing before they can be deployed in the malls; face masks and shields, gloves are being issued to them. We over-deliver on the protocols required by the government on safe malling
                            </p>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    @include('partials.footer')
@endsection