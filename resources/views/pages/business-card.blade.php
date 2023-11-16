@extends('index',['title' => 'Business Card'])

@section('content')
   <!-- START BUSINESS CARD -->
   <!--section id="service" class="container-fluid d-none d-sm-block" ></section-->
   <section id="service" class="container-fluid" >
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="img/1.png" class="w-100">
        </div>
      </div>
    </div>
  </section>
  <!-- END BUSINESS CARD -->
  
  <!-- START TOP -->
  <section id="getaquote" class="container py-3">
    <div class="row py-5">
      <div class="col-12">
        <a class="btn btn-lg btn-outline-secondary" href="https://www.facebook.com/media/set/?set=a.594556218661337&type=3" target="_blank" rel="noopener noreferrer">Gallery</a>
        <button data-bs-toggle="modal" data-bs-target="#designtemplates"  class="btn btn-lg btn-outline-secondary">Design Templates</button>
        <!-- START --><br><br>
        <h2 class="display-6 text-orange"><b>BUSINESS CARD</b></h2>

        <!-- <div class="row">
          <div class="col-12">
            <h2 class="display-6 text-gray text-center"><b>PRICES</b></h2>
          </div>
        </div> -->

        <div class="row py-3">
          <div class="col-md-6 col-sm-12 col-xs-12 col-12 col-lg-12 m-3">
            <p>
              Size : 2 x 3.5 inches<br>
              Printing Color : CMYK<br>
              Processing : 2-3 days<br>
              Quantity : 100pcs (1box)
            </p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12 m-3">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Variant</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Regular One-side 230gsm Matte Card Material</th>
                  <td>PHP 300.00</td>
                </tr>
                <tr>
                  <th scope="row">Regular Back-to-back 230gsm Matte Card Material</th>
                  <td>PHP 400.00</td>
                </tr>
                <tr>
                  <th scope="row">Matte-laminated/Scratch-proof One-side 250gsm</th>
                  <td>PHP 450.00</td>
                </tr>
                <tr>
                  <th scope="row">Matte-laminated/Scratch-proof Back-to-back 250gsm</th>
                  <td>PHP 550.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <BR>
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="display-6 text-gray"><b>ORIENTATION</b></h2>
            <div class="text-center">
              <img src="img/orientation.png" width="100%" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
                    
@endsection
