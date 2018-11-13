@exntends('master')
@section('name', 'Register')

@section('content')

	<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html">Join with <b>We</b> are</a>
  </div>

  <div class="register-box-body">
   <form action="../../index.html" method="post">
      {!! csrf_field() !!}
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
        <div class="col-xs-12">
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

        <div class="col-xs-12">
          <button type="submit" class="btn btn-default btn-block" style="padding: 8px; font-size: 17px;">Register</button>
          <span class="text-center">Already have an account?<a href="login.php" class="text-center"> Login</a></span>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.form-box -->
</div>
@endsection