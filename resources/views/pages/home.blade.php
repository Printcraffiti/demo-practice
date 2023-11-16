@extends('index',['title' => 'Home'])

@section('content')

@include('partials.carousel.home-carousel')
<section id="service" class="container-fluid" >
    <div class="container py-3">
    <div class="row">
        <div class="col-12 text-center">
        <h2 class="display-6 text-orange"><b><BR>PRODUCTS</b></h2>
        </div>

    </div>

    <div class="row py-5">

        <div class="col-md-4 col-sm-6 col-xs-6 col-12 col-lg-4 mb-4">
        <div class="card card-shadow border p-3 btn-outline-secondary">
            <div class="text-center">
            <img src="img/bc.jpg" class="card-img-top" alt="">
            </div><br>
            <div class="text-center">
            <h5 class="text-uppercase py-2">BUSINESS CARD</h5>
            <p class="">
                Papers 300 gsm Matte Paper<br> Processing 2-3 Working Days
            </p>
            </div>
        </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-6 col-12 col-lg-4 mb-4">
        <div class="card card-shadow border p-3 btn-outline-secondary">
            <div class="text-center">
            <img src="img/nb.jpg" class="card-img-top" alt="">
            </div><br>
            <div class="text-center">
            <h5 class="text-uppercase py-2">NOTEBOOKS</h5>
            <p class="">
                Papers 230 gsm and 70gsm Matte Paper <br> Processing 2-3 Working Days
            </p>
            
            </div>
        </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-6 col-12 col-lg-4 mb-4">
        <div class="card card-shadow border p-3 btn-outline-secondary">
            <div class="text-center">
            <img src="img/lh.jpg" class="card-img-top" alt="">
            </div><br>
            <div class="text-center">
            <h5 class="text-uppercase py-2">MAGNETIC BOOKMARK</h5>
            <p class="">
                Papers 230 gsm Matte Paper <br> Processing 2-3 Working Days
            </p>
            
            </div>
        </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-6 col-12 col-lg-4 mb-4">
        <div class="card card-shadow border p-3 btn-outline-secondary">
            <div class="text-center">
            <img src="img/c.jpg"class="card-img-top" alt="">
            </div><br>
            <div class="text-center">
            <h5 class="text-uppercase py-2">CALENDARS</h5>
            <p class="">
                Papers 300 gsm Matte Paper <br> Processing 2-3 Working Days
            </p>
            
            </div>
        </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-6 col-12 col-lg-4 mb-4">
        <div class="card card-shadow border p-3 btn-outline-secondary">
            <div class="text-center">
            <img src="img/inv.jpg" class="card-img-top" alt="">
            </div><br>
            <div class="text-center">
            <h5 class="text-uppercase py-2">INVITATIONS</h5>
            <p class="">
                Papers 230 gsm Matte Paper <br> Processing 2-3 Working Days
            </p>
            
            </div>
        </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-6 col-12 col-lg-4 mb-4">
        <div class="card card-shadow border p-3 btn-outline-secondary">
            <div class="text-center">
            <img src="img/pp.jpg" class="card-img-top" alt="">
            </div><br>
            <div class="text-center">
            <h5 class="text-uppercase py-2">PHOTOPRINTS</h5>
            <p class="">
                Papers 230 gsm Glossy Paper <br> Processing 2-3 Working Days
            </p>
            
            </div>
        </div>
        </div>

    </div>
    </div>
</section>
                    
@endsection
