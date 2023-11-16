<!-- STARTS Modal SIGNUP-->
<div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  text-center" >
        <div class="modal-content">
          <button type="button" class="btn-close m-3 align-self-end" data-bs-dismiss="modal" aria-label="Close"></button>
          <form action="" class="col-11 align-self-center">
            <h5 class="display-6 text-gray text-center">
            <b>CREATE ACCOUNT</b></h5>
              <label>Please enter details to create account!</label>
            <div class="modal-body">
              
              <div class="row g-2">

                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid"required>
                    <label for="floatingInputGrid">Firstname</label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid"required>
                    <label for="floatingInputGrid">Lastname</label>
                  </div>
                </div>
                <div class="form-floating mb-3 ">
                  <input required type="text" class="form-control" id="floatingInput" placeholder="" required>
                  <label>Username</label>
                </div>
                <div class="form-floating mb-3 ">
                  <input required type="email" class="form-control" id="floatingInput" placeholder="" required>
                  <label>Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input required type="password" class="form-control" id="floatingPassword" placeholder="" required>
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                  <input required type="password" class="form-control" id="floatingPassword" placeholder="" required>
                  <label for="floatingPassword">Re-type password</label>
                </div>
                  
              </div>
              <button type="submit" class="myBtn myOrange d-grid gap-2 col-6 mx-auto btn btn-md">Create Account</button><BR><BR>
              Already have an account? <a class="btn btn-sm rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#logInform">Login</a><BR><BR>
  
              <!-- <a href="https://www.facebook.com/printcraffiti" class="" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook text-secondary fs-4 m-1"></i></a> 
              <a href="https://www.m.me/printcraffiti" class="" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-messenger text-secondary fs-4 m-1"></i></a> 
              <a href="" class=""><i class="fa-brands fa-pinterest text-secondary fs-4 m-1"></i></a> 
              <a href="" class=""><i class="fa-brands fa-viber text-secondary fs-4 m-1"></i></a>  -->
            </div>
          </form>
        </div>
      </div>
    </div><!-- END Modal SIGNUP-->