@extends('master')
@section('title', 'Coinvit')

@section('css')
<link rel="stylesheet" href="{!! asset('css/index.css') !!}" type="text/css">
@endsection


@section('content')
<div class="container-fluid mx-0 px-0 mt-2">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="row">
              <div class="col-4 text-center px-0 mx-0" style="border-right:1px solid black">
                <h4 style="font-size: 16px; margin-bottom: 0px;">BTC/XLM</h4>
                <p style="font-size: 20px; color: green;" class="my-0">0.0014915</p>
                <p class="my-0" style="color: maroon;">-0.36%</p>
              </div>
              <div class="col-4 text-center px-0 mx-0" style="border-right: 1px solid black">
                <h4 style="font-size: 16px; margin-bottom: 0px;">BTC/XLM</h4>
                <p style="font-size: 20px; color: green;" class="my-0">0.0014915</p>
                <p class="my-0" style="color: maroon;">-0.36%</p>
              </div>
              <div class="col-4 text-center px-0 mx-0">
                <h4 style="font-size: 16px; margin-bottom: 0px;">BTC/XLM</h4>
                <p style="font-size: 20px; color: green;" class="my-0">0.0014915</p>
                <p class="my-0" style="color: maroon;">-0.36%</p>
              </div>
            </div>


        </div>
          <div class="swiper-slide">
            <div class="row">
            <div class="col-4 text-center px-0 mx-0" style="border-right: 1px solid black">
                <h4 style="font-size: 16px; margin-bottom: 0px;">BTC/XLM</h4>
                <p style="font-size: 20px; color: green;" class="my-0">0.0014915</p>
                <p class="my-0" style="color: maroon;">-0.36%</p>
              </div>
              <div class="col-4 text-center px-0 mx-0" style="border-right: 1px solid black">
                <h4 style="font-size: 16px; margin-bottom: 0px;">BTC/XLM</h4>
                <p style="font-size: 20px; color: green;" class="my-0">0.0014915</p>
                <p class="my-0 "style="color: maroon;">-0.36%</p>
              </div>
              <div class="col-4 text-center px-0 mx-0 mb-2">
                <h4 style="font-size: 16px; margin-bottom: 0px;">BTC/XLM</h4>
                <p style="font-size: 20px; color: green;" class="my-0">0.0014915</p>
                <p class="my-0 "style="color: maroon;">-0.36%</p>
              </div>
            </div>
            </div>
            
        </div>
         <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
          
          </div>

    
      </div>
      <div class="container-fluid con1">
      <div class="row con3 my-2">

                   <!-- col -->
                   <div class="col-12 col-md-6 ">
                    <h4 class="h4">ETH MARKET</h4>
                    <div class="w-100"></div>
                    <!-- BIDS -->
                    <table class="table table-hover" cellspacing="0" style="background-color: #fff; font-size: 13px">
                      <thead style="background-color: #f4f4f5;">
                        <tr>
                          <th>SUM</th>
                          <th>TOTAL</th>
                          <th>SIZE (XLM)</th>
                          <th>BID (BTC)</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                          for ($i=0; $i <10; $i++) {?> 
                          <tr style="background: linear-gradient(to left, rgb(220, 246, 222) 94.1%, rgb(255, 255, 255) 94.1%);">
                            <td>1.1697</td>
                            <td>1.1697</td>
                            <td>35252.525</td>
                            <td>0.00003326</td>
                            <td class="text-blue">SELL</td>                            
                          </tr>   
                        <?php
                          }
                       ?>
                      </tbody>
                    </table>
                    <div class="w-100"></div>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center font3">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>   
                    </div>
                    <!-- End Bids -->
                  <!-- End col-->

              <!-- col -->
              <div class="col-12 col-md-6 ">
                <h4 class="h4">BTC MARKET</h4>
                <div class="w-100"></div>
              <!-- ASKS -->
                 <table class="table table-hover" id="ask" cellspacing="0" style="background-color: #fff; font-size: 13px;  ">
                    <thead style="background-color: #f4f4f5;">
                      <tr>
                        <th></th>
                        <th>ASK (BTC)</th>
                        <th>SIZE (XLM)</th>
                        <th>TOTAL</th>
                        <th>SUM</th>
                      </tr>
                    </thead>
                  <tbody>
                    <?php
                          for ($i=0; $i <10; $i++) {?> 
                    <tr style="background: linear-gradient(to right, rgb(254, 214, 216) 89.7%, rgb(249, 249, 249) 89.7%);">
                    <td class="text-red">BUY</td>
                      <td>0.00003396</td>
                      <td>3949.866</td>
                      <td>0.1341</td>
                      <td>0.1341</td>
                    </tr>  
                        <?php
                          }
                       ?>
                  </tbody>
                </table>
                  <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center font3">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav> 
              </div>
          </div>
        <!-- My open order -->
          <div class="row con3 my-2">
            <!-- col -->
            <div class="col-12 col-md-12 ">
            <h3 class="text-left">My Opens Order</h3>
            <!-- My Open Orders -->
            <table class="table table-hover" width="100%" cellspacing="0" style="background-color: #fff; font-size: 13px;">
              <thead>
                <tr style="background-color: #f4f4f5;">
                  <th>TYPE</th>
                  <th>PRICE</th>
                  <th id="dis">AMOUNT</th>
                  <th>TOTAL</th>
                  <th id="dis">RATE/SHOP</th>
                  <th id="dis">DATE</th>
                  <th>ACTION</th>
                </tr>
              </thead>
               <tbody>
               <?php
                  for ($i=0; $i <3 ; $i++) {?> 
                  <tr>
                    <td class="text-left text-green">BUY</td>
                    <td class="text-right">0.00003348</td>
                    <td class="text-right" id="dis">296.38443478</td>
                    <td class="text-right">0.00992295</td>
                    <td class="text-right" id="dis">-</td>
                    <td id="dis"><?php echo date("Y-m-d H:i:s"); ?></td>
                    <td><a href="">Cancel</a></td>
                  </tr>   
                <?php
                  }
               ?>
              </tbody>
            </table>
            <!-- My Open Orders -->
            <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center font3">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
            </div>
            <!-- End Col -->

            <!-- col -->
            <div class="col-12 col-md-6 ">
            <h3 class="text-center" style="margin-bottom: 8px;">Market History</h3>
            <!-- Market History -->
            <table class="table table-hover" id="mh" width="100%" cellspacing="0" style="background-color: #fff; font-size: 13px;">
              <thead>
                <tr style="background-color: #f4f4f5;">
                  <th>DATE</th>
                  <th>ORDER</th>
                  <th id="dis">BID/ASK</th>
                  <th>TOTAL (XLM)</th>
                  <th>TOTAL (BTC)</th>
                </tr>
              </thead>
               <tbody>
               <?php
                  for ($i=0; $i <20 ; $i++) {?> 
                  <tr>
                    <td>13:39:05</td>
                    <td class="text-green">BUY</td>
                    <td id="dis">0.00003348</td>
                    <td>296.38443478</td>
                    <td>0.00992295</td>
                  </tr>   
                <?php
                  }
               ?>
              </tbody>
            </table>
            <!-- End Market History -->
            <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center font3">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
            </div>
            <!-- End Col -->


            <!-- col -->
            <div class="col-12 col-md-6 ">
            <h3 class="text-center" style="margin-bottom: 8px;">Your Trade History</h3>
            <!-- Market History -->
            <table class="table table-hover" id="yth" width="100%" cellspacing="0" style="background-color: #fff; font-size: 13px;">
              <thead>
                <tr style="background-color: #f4f4f5;">
                  <th>CLOSED</th>
                  <th>OPEN</th>
                  <th id="dis">BID/ASK</th>
                  <th>FILLED</th>
                  <th id="dis">RATE</th>
                  <th>COST</th>
                </tr>
              </thead>
               <tbody>
                <?php
                  for ($i=0; $i <20 ; $i++) {?> 
                  <tr>
                    <td>13:39:05</td>
                    <td>BUY</td>
                    <td id="dis">0.00003348</td>
                    <td>296.38443478</td>
                    <td id="dis">0.00992295</td>
                    <td>0.00992295</td>
                  </tr>  
                   <?php
                  }
               ?> 
              </tbody>
            </table>
            <!-- End Market History -->
            <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center font3">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
            </div>
            <!-- End Col -->
            </div>
            </div>
            <!-- LEFT -->

          <footer class="container-fluid " id="footer1">
          <div class="row">
            <div class="col-3 col-md-3 side-" style="color: #A8A5A5;">
              <h2 class="font2">ABOUT COINVIT</h2>
              <h4 class="font1"><a href="#">Contact Us</a></h4>
              <h4 class="font1"><a href="#">Fees</a></h4>
              <h4 class="font1"><a href="#">Privacy Policy</a></h4>
              <h4 class="font1"><a href="#">Terms of Use</a></h4>
            </div>
            <div class="col-3 col-md-3" style="color: #A8A5A5">
              <h2 class="font2">SUPPORT</h2>
              <h4 class="font1"><a href="#">++ Contact Support ++</a></h4>
              <h4 class="font1"><a href="#">Guides</a></h4>
              <h4 class="font1"><a href="#">++ SUBMIT A TOKEN ++</a></h4>
              <h4 class="font1"><a href="#">REPORT Abuse</a></h4>
              <h4 class="font1"><a href="#">API Documentation</a></h4>
            </div>
            <div class="col-3 col-md-3" style="color: #A8A5A5">
              <h2 class="font2">NEWS</h2>
              <h4 class="font1"><a href="#">Press Release</a></h4>
              <h4 class="font1"><a href="#">Follow us on Twitter</a></h4>
            </div>
            <div class="col-3 col-md-3" style="color: #A8A5A5">
              <label>
                <a href="">
                  <i class="fab fa-telegram"></i>
                </a>
              </label>
              
              <label>
                <a href="">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </label>
              
              <label>
                <a href="">
                  <i class="fab fa-twitter"></i>   
                </a>
              </label>
                            
              <label>
              <a href="">
                <i class="fab fa-reddit"></i>
              </a>
              </label>
                            
              <label>
              <a href="">
                <i class="fab fa-medium"></i>
              </a>
              </label>
                            
              <label>
              <a href="">
                <i class="fab fa-instagram"></i>
              </a>              
              </label>

            </div>
          </div>
        </footer>

        <!-- Modal -->
    <div class="modal fade" id="modal-lr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <ul class="nav nav-tabs clearfix" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
              </li>
              <li class="ml-auto">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                  </button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                      <div class="container text-center mt-4" style="height: 100px">
                        <h1>Hello, Friend</h1>
                      </div>
                <form action="../../index.html" method="post">
                      <div class="form-group has-feedback">
                        <label>Email address</label>
                        <input type="text" class="form-control" placeholder="Your email address">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Remember me 
                            </label>
                            <label style="float: right;">
                              <a href="#" class="text-right"> Forgot password ?</a>
                            </label>
                          </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-12">
                          <button type="submit" class="btn btn-default btn-block">Login</button>
                          <span class="text-center">Not yet an account?<a href="register.html" class="text-center"> Register</a></span>
                        </div>
                        <!-- /.col -->
                        
                      </div>
                    </form>
              </div>
              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <div class="container text-center mt-4" style="height: 100px">
                        <h1>Join with <b>WE</b> are</h1>
                      </div>
                <form action="../../index.html" method="post">
                      <div class="form-group has-feedback">
                        <label>Email address</label>
                        <input type="text" class="form-control" placeholder="Your email address">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Retype password">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="checkbox icheck text-center">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">Mystellar.org</a> Terms of Service
                            </label>
                          </div>
                              <p style="font-size: 12px; text-align: justify; margin-top: 8px; margin-bottom: 35px;">
                                We are committed to complying with all U.S. regulations that help prevent, detect and remediate unlawful behavior by customers and virtual currency developers when using the Bittrex trading platform or any of the company’s other services. 

                                Bittrex is not a regulated exchange under U.S. securities laws. More information can be found here . 
                              </p>
                        </div>
                        <!-- /.col -->

                        <div class="col-12">
                          <button type="submit" class="btn btn-default btn-block" style="padding: 8px; font-size: 17px;">Register</button>
                          <span class="text-center">Already have an account?<a href="login.php" class="text-center"> Login</a></span>
                        </div>
                        <!-- /.col -->
                      </div>
                    </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
 @endsection

@section('js')
  <script type="text/javascript" src="{!! asset('js/index2.js') !!}"></script>
@endsection
