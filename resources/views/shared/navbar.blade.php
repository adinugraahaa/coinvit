<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="{!! action('PagesController@home') !!}">
        <img src="logo/logocoinvit.png" width="100" height="30">
      </a>
      <a href="" class="navbar-brand ml-auto" id="" data-toggle="modal" data-target="#modal-lr">Login | Register</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-white">
      <li class="nav-item active">
        <a class="nav-link" href="balance.php">Markets <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{!! action('PagesController@exchange') !!}">Exchange</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Decentralize</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" tabindex="-1" href="#">Generate new wallet</a>
      <a class="dropdown-item" tabindex="-1" href="#">Login with your own private key</a>
      </div>
      </li>
      <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Centralize</a>
          <div class="dropdown-menu">
      <a class="dropdown-item" tabindex="-1" href="#">Coinvit Deposit Withdrawal</a>
      <a class="dropdown-item" tabindex="-1" href="#">BUY CRYPTO with CREDIT CARD</a>
      </div>
      </li>
      <li class="nav-item my-2 mr-2">
        <a href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/db/Google_Translate_Icon.png" width="20" height="20">    
              </a>
      </li>
      <li class="nav-item my-2">
        <a href="#">
                <i class="fa fa-moon-o"></i>    
              </a>
      </li>
      <li class="nav-item my-2">
        <a href="#">
                <i class="fa fa-wifi text-green"></i>    
              </a>
      </li>
    </ul>
    
  </div>
</nav>
<!-- end navbar -->