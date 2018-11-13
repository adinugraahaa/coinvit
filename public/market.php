<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Coinvit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style type="text/css">
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
      background-color: #373435;
    border-color: #373435;
    }

    .chat{
        display: none;
        width: 350px;
        left: 0;
        position: fixed;
        top: 50%;
        margin-top: -2.5em;
    }
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    .submenu{
      padding-top: 5px;
    }
    .logo-socmed{
      margin-top: 20px;
      padding: 5px;
      font-size: 28px;
    }

    .main-footer {
      background: #27323a;
      color: #c3c1c1;
    }
  </style>

  <!-- Google Font -->
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Header Navbar: style can be found in header.less -->
      <nav>
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">XLM</a></li>
            <li><a href="#tab_2" data-toggle="tab">BTC</a></li>
            <li><a href="#tab_3" data-toggle="tab">ETH</a></li>
           
            <li class="pull-right">
              <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
                Coinvit
                <!-- <img style="max-width:100px; margin-top: -7px;" src="/img/transparent-white-logo.png"> -->
              </a>
            </li>
            <li class="pull-right">
              <a href="#" class="slide-toggle"><i class="fa fa-comments"></i>
              <span>Chatroom</span>
              </a>
            </li>
           
            <li class="pull-right" style="font-size: 16px;">
              <a href="#">
                <i class="fa fa-moon-o"></i>    
              </a>
            </li>
            <li class="pull-right" style="font-size: 16px;">
              <a href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/db/Google_Translate_Icon.png" width="20" height="20">    
              </a>
            </li>
            <li class="pull-right dropdown" style="font-size: 16px;">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Login / Register <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a class="submenu" tabindex="-1" href="#">
                     Decentralize <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Generate new wallet</a></li>
                      <li><a tabindex="-1" href="#">Login with your own private key</a></li>
                    </ul>

                  </li>

                  <li>
                    <a href="" tabindex="-1" href="#">
                     Centralize <span class="caret"></span>
                    </a>
                  </li>
            </li>
            <li class="pull-right dropdown" style="font-size: 16px;">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Centralize <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a class="submenu" tabindex="-1" href="#">
                      Coinvit Deposit Withdrawal <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">BUY CRYPTO with CREDIT CARD</a></li>
                    </ul>

                  </li>

                  <li>
                    <a role="menuitem" tabindex="-1" href="#">
                      Coinvit Balance History
                    </a>
                  </li>

                  <li>
                    <a role="menuitem" tabindex="-1" href="#">
                      Open Orders + Trade History
                    </a>
                  </li>

                  <li>
                    <a role="menuitem" tabindex="-1" href="#">
                      Open Orders + Trade History
                    </a>
                  </li>

                  <li class="dropdown-submenu">
                    <a class="submenu" tabindex="-1" href="#">
                      ACCOUNTS <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Profile</a></li>
                      <li><a tabindex="-1" href="#">Password</a></li>
                      <li><a tabindex="-1" href="#">2FA Two-Factor-Authentication</a></li>
                      <li><a tabindex="-1" href="#">API keys</a></li>
                      <li><a tabindex="-1" href="#">Whitelist</a></li>
                      <li><a tabindex="-1" href="#">Notifications</a></li>
                      <li><a tabindex="-1" href="#">Refferal Bonus</a></li>
                    </ul>

                  </li>

                </ul>
            </li>
            <li class="pull-right dropdown" style="font-size: 16px;">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Decentralize <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" style="margin-top: 5px;">
                <li class="dropdown-submenu">
                  <a class="submenu" tabindex="-1" href="#">
                    Decentralize New Wallet <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#">BUY CRYPTO with CREDIT CARD</a></li>
                  </ul>

                </li>
                <li class="dropdown-submenu">
                  <a class="submenu" tabindex="-1" href="#">
                    Decentralize Balance <span class="caret"></span>
                  </a>

                   <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#">BUY CRYPTO with CREDIT CARD</a></li>
                  </ul>

                </li>
              </ul>
            </li>
            <li class="pull-right" style="font-size: 16px;"><a href="balance.php">Markets</a></li>
          </ul>
        
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->



        <div class="tab-content" style="margin-top: -25px;">
          <div class="tab-pane active" id="tab_1">
           
          <section>
          <div class="row" style="background-color: #d92b60; color: #fff; height: 10em;">

            <div class="col-md-4 col-sm-4 col-xs-4">
              <p style="font-size: 50px;">Bitcoin (BTC)</p>
            </div>
            
            <div class="col-md-4 col-sm-4 col-xs-4">
              <div class="row"> 
                <div class="col-md-6">  
                  <p style="font-size: 30px;">LAST PRICE:</p>
                </div>
                <div class="col-md-6">  
                  <p style="font-size: 30px;">0.99600000 USD</p>
                </div>
              </div>

              <div class="row"> 
                <div class="col-md-6">  
                  <p style="font-size: 30px;">24hr Volume:</p>
                </div>
                <div class="col-md-6">  
                  <p style="font-size: 30px;">1295170.80 USD</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-4">
                <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                width="100" height="100">
            </div>

          </div>
            <div class="info-box">

              <div class="info-box-content">

                <h3 style="margin-top: 50px; margin-bottom: 20px;">USDT MARKET</h3>
                <!-- Market History -->
                <table class="table table-hover" id="mh" width="100%" cellspacing="0" style="background-color: #fff;">
                  <thead>
                    <tr style="background-color: #f4f4f5;">
                      <th>MARKET</th>
                      <th>CURRENCY</th>
                      <th>VOLUME</th>
                      <th>% CHANGE</th>
                      <th>LAST PRICE</th>
                      <th>24HR HIGH</th>
                      <th>24HR LOW</th>
                      <th>% SPREAD</th>
                      <th>ADDED</th>
                    </tr>
                  </thead>
                   <tbody>
                   <?php
                      for ($i=0; $i <20 ; $i++) {?> 
                      <tr>
                        <td>USD-BTC</td>
                        <td>Bitcoin</td>
                        <td>1286578.70</td>
                        <td class="text-red">-0.1</td>
                        <td>7154.88900000</td>
                        <td>7325.00000000</td>
                        <td>7011.00000000</td>
                        <td>0.0</td>
                        <td>05/31/2018</td>
                      </tr>   
                    <?php
                      }
                   ?>
                  </tbody>
                </table>
                <!-- End Market History -->

                <h3 style="margin-top: 50px; margin-bottom: 20px;">BITCOIN MARKET</h3>
                <!-- Market History -->
                <table class="table table-hover" id="mh" width="100%" cellspacing="0" style="background-color: #fff;">
                  <thead>
                    <tr style="background-color: #f4f4f5;">
                      <th>MARKET</th>
                      <th>CURRENCY</th>
                      <th>VOLUME</th>
                      <th>% CHANGE</th>
                      <th>LAST PRICE</th>
                      <th>24HR HIGH</th>
                      <th>24HR LOW</th>
                      <th>% SPREAD</th>
                      <th>ADDED</th>
                    </tr>
                  </thead>
                   <tbody>
                   <?php
                      for ($i=0; $i <20 ; $i++) {?> 
                      <tr>
                        <td>USD-BTC</td>
                        <td>Bitcoin</td>
                        <td>1286578.70</td>
                        <td class="text-red">-0.1</td>
                        <td>7154.88900000</td>
                        <td>7325.00000000</td>
                        <td>7011.00000000</td>
                        <td>0.0</td>
                        <td>05/31/2018</td>
                      </tr>   
                    <?php
                      }
                   ?>
                  </tbody>
                </table>
                <!-- End Market History -->

                <h3 style="margin-top: 50px; margin-bottom: 20px;">ETHEREUM MARKET</h3>
                <!-- Market History -->
                <table class="table table-hover" id="mh" width="100%" cellspacing="0" style="background-color: #fff;">
                  <thead>
                    <tr style="background-color: #f4f4f5;">
                      <th>MARKET</th>
                      <th>CURRENCY</th>
                      <th>VOLUME</th>
                      <th>% CHANGE</th>
                      <th>LAST PRICE</th>
                      <th>24HR HIGH</th>
                      <th>24HR LOW</th>
                      <th>% SPREAD</th>
                      <th>ADDED</th>
                    </tr>
                  </thead>
                   <tbody>
                   <?php
                      for ($i=0; $i <20 ; $i++) {?> 
                      <tr>
                        <td>USD-BTC</td>
                        <td>Bitcoin</td>
                        <td>1286578.70</td>
                        <td class="text-red">-0.1</td>
                        <td>7154.88900000</td>
                        <td>7325.00000000</td>
                        <td>7011.00000000</td>
                        <td>0.0</td>
                        <td>05/31/2018</td>
                      </tr>   
                    <?php
                      }
                   ?>
                  </tbody>
                </table>
                <!-- End Market History -->

                <h3 style="margin-top: 50px; margin-bottom: 20px;">USDT MARKET</h3>
                <!-- Market History -->
                <table class="table table-hover" id="mh" width="100%" cellspacing="0" style="background-color: #fff;">
                  <thead>
                    <tr style="background-color: #f4f4f5;">
                      <th>MARKET</th>
                      <th>CURRENCY</th>
                      <th>VOLUME</th>
                      <th>% CHANGE</th>
                      <th>LAST PRICE</th>
                      <th>24HR HIGH</th>
                      <th>24HR LOW</th>
                      <th>% SPREAD</th>
                      <th>ADDED</th>
                    </tr>
                  </thead>
                   <tbody>
                   <?php
                      for ($i=0; $i <20 ; $i++) {?> 
                      <tr>
                        <td>USD-BTC</td>
                        <td>Bitcoin</td>
                        <td>1286578.70</td>
                        <td class="text-red">-0.1</td>
                        <td>7154.88900000</td>
                        <td>7325.00000000</td>
                        <td>7011.00000000</td>
                        <td>0.0</td>
                        <td>05/31/2018</td>
                      </tr>   
                    <?php
                      }
                   ?>
                  </tbody>
                </table>
                <!-- End Market History -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </section>
         
        <footer>
        <div class="container"> 
          <div class="row">
            <div class="col-md-3">
              <h2 style="color: white;">ABOUT COINVIT</h2>
              <h4><a href="#">Contact Us</a></h4>
              <h4><a href="#">Fees</a></h4>
              <h4><a href="#">Privacy Policy</a></h4>
              <h4><a href="#">Terms of Use</a></h4>
            </div>
            <div class="col-md-3">
              <h2 style="color: white;">SUPPORT</h2>
              <h4><a href="#">++ Contact Support ++</a></h4>
              <h4><a href="#">Guides</a></h4>
              <h4><a href="#">++ SUBMIT A TOKEN ++</a></h4>
              <h4><a href="#">REPORT Abuse</a></h4>
              <h4><a href="#">API Documentation</a></h4>
            </div>
            <div class="col-md-3">
              <h2 style="color: white;">NEWS</h2>
              <h4><a href="#">Press Release</a></h4>
              <h4><a href="#">Follow us on Twitter</a></h4>
            </div>
            <div class="col-md-3">
              <label>
                <a href="">
                  <i class="fa fa-telegram logo-socmed"></i>
                </a>
              </label>
              
              <label>
                <a href="">
                  <i class="fa fa-facebook-square logo-socmed"></i>
                </a>
              </label>
              
              <label>
                <a href="">
                  <i class="fa fa-twitter logo-socmed"></i>   
                </a>
              </label>
                            
              <label>
              <a href="">
                <i class="fa fa-reddit logo-socmed"></i>
              </a>
              </label>
                            
              <label>
              <a href="">
                <i class="fa fa-medium logo-socmed"></i>
              </a>
              </label>
                            
              <label>
              <a href="">
                <i class="fa fa-instagram logo-socmed"></i>
              </a>              
              </label>

            </div>
          </div>
        </div>
        </footer>
        
        
        </div>
        <!-- End Tab_1 -->

        <div class="tab-pane" id="tab_2" style="background-color: white;">
          <table id="datatable" class="display  table table-hover" width="100%" cellspacing="0" style="background-color: #fff;">
          <thead>
            <tr>
              <th>Date</th>
              <th>Open</th>
              <th>High</th>
              <th>Low</th>
              <th>Close</th>
            </tr>
          </thead>
          <tbody>
                  <tr>
                <td>2012-01-01</td>
                <td>5198</td>
                <td>5629</td>
                <td>5159</td>
                <td>5385</td>
              </tr>
              <tr>
                <td>2012-02-01</td>
                <td>5366</td>
                <td>5499</td>
                <td>5135</td>
                <td>5295</td>
              </tr>
              <tr>
                <td>2012-03-01</td>
                <td>5296</td>
                <td>5378</td>
                <td>5154</td>
                <td>5248</td>
              </tr>
              <tr>
                <td>2012-04-01</td>
                <td>5254</td>
                <td>5279</td>
                <td>4788</td>
                <td>4924</td>
              </tr>
              <tr>
                <td>2012-05-01</td>
                <td>4910</td>
                <td>5286</td>
                <td>4770</td>
                <td>5278</td>
              </tr>
              <tr>
                <td>2012-06-01</td>
                <td>5283</td>
                <td>5348</td>
                <td>5032</td>
                <td>5229</td>
              </tr>
              <tr>
                <td>2012-07-01</td>
                <td>5220</td>
                <td>5448</td>
                <td>5164</td>
                <td>5258</td>
              </tr>
              <tr>
                <td>2012-08-01</td>
                <td>5276</td>
                <td>5735</td>
                <td>5215</td>
                <td>5703</td>
              </tr>
              <tr>
                <td>2012-09-01</td>
                <td>5704</td>
                <td>5815</td>
                <td>4888</td>
                <td>5619</td>
              </tr>
          </tbody>
        </table>
        <br/>
        <div id="chartContainer" style="height: 360px; width: 100%; border: 1px solid grey;"></div>



        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
          like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
   

     
        
 




<!-- Canvas JS -->
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/amstock.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<script type="text/javascript">
  var chartData = [];
generateChartData();


function generateChartData() {
  var firstDate = new Date();
  firstDate.setHours( 0, 0, 0, 0 );
  firstDate.setDate( firstDate.getDate() - 2000 );

  for ( var i = 0; i < 2000; i++ ) {
    var newDate = new Date( firstDate );

    newDate.setDate( newDate.getDate() + i );

    var open = Math.round( Math.random() * ( 30 ) + 100 );
    var close = open + Math.round( Math.random() * ( 15 ) - Math.random() * 10 );

    var low;
    if ( open < close ) {
      low = open - Math.round( Math.random() * 5 );
    } else {
      low = close - Math.round( Math.random() * 5 );
    }

    var high;
    if ( open < close ) {
      high = close + Math.round( Math.random() * 5 );
    } else {
      high = open + Math.round( Math.random() * 5 );
    }

    var volume = Math.round( Math.random() * ( 1000 + i ) ) + 100 + i;
    var value = Math.round( Math.random() * ( 30 ) + 100 );

    chartData[ i ] = ( {
      "date": newDate,
      "open": open,
      "close": close,
      "high": high,
      "low": low,
      "volume": volume,
      "value": value
    } );
  }
}

var chart = AmCharts.makeChart( "chartdiv", {
  "type": "stock",
  "theme": "light",
  "dataSets": [ {
    "fieldMappings": [ {
      "fromField": "open",
      "toField": "open"
    }, {
      "fromField": "close",
      "toField": "close"
    }, {
      "fromField": "high",
      "toField": "high"
    }, {
      "fromField": "low",
      "toField": "low"
    }, {
      "fromField": "volume",
      "toField": "volume"
    }, {
      "fromField": "value",
      "toField": "value"
    } ],
    "color": "#7f8da9",
    "dataProvider": chartData,
    "title": "West Stock",
    "categoryField": "date"
  }, {
    "fieldMappings": [ {
      "fromField": "value",
      "toField": "value"
    } ],
    "color": "#fac314",
    "dataProvider": chartData,
    "compared": true,
    "title": "East Stock",
    "categoryField": "date"
  } ],


  "panels": [ {
      "title": "Value",
      "showCategoryAxis": false,
      "percentHeight": 70,
      "valueAxes": [ {
        "id": "v1",
        "dashLength": 5
      } ],

      "categoryAxis": {
        "dashLength": 5
      },

      "stockGraphs": [ {
        "type": "candlestick",
        "id": "g1",
        "openField": "open",
        "closeField": "close",
        "highField": "high",
        "lowField": "low",
        "valueField": "close",
        "lineColor": "#47f255",
        "fillColors": "#47f255",
        "negativeLineColor": "#db4c3c",
        "negativeFillColors": "#db4c3c",
        "fillAlphas": 1,
        "useDataSetColors": false,
        "comparable": true,
        "compareField": "value",
        "showBalloon": false,
        "proCandlesticks": true
      } ],

      "stockLegend": {
        "valueTextRegular": undefined,
        "periodValueTextComparing": "[[percents.value.close]]%"
      }
    },

    {
      "title": "Volume",
      "percentHeight": 30,
      "marginTop": 1,
      "showCategoryAxis": true,
      "valueAxes": [ {
        "dashLength": 5
      } ],

      "categoryAxis": {
        "dashLength": 5
      },

      "stockGraphs": [ {
        "valueField": "volume",
        "type": "column",
        "showBalloon": false,
        "fillAlphas": 1
      } ],

      "stockLegend": {
        "markerType": "none",
        "markerSize": 0,
        "labelText": "",
        "periodValueTextRegular": "[[value.close]]"
      }
    }
  ],

  "chartScrollbarSettings": {
    "graph": "g1",
    "graphType": "line",
    "usePeriod": "WW"
  },

  "chartCursorSettings": {
    "valueLineBalloonEnabled": true,
    "valueLineEnabled": true
  },

  "periodSelector": {
    "position": "bottom",
    "periods": [ {
      "period": "DD",
      "count": 10,
      "label": "10 days"
    }, {
      "period": "MM",
      "selected": true,
      "count": 1,
      "label": "1 month"
    }, {
      "period": "YYYY",
      "count": 1,
      "label": "1 year"
    }, {
      "period": "YTD",
      "label": "YTD"
    }, {
      "period": "MAX",
      "label": "MAX"
    } ]
  },
  "export": {
    "enabled": true
  }
} );
</script>

<script type="text/javascript">
  // DataTables
  $(function () {
    
    $('#mh').DataTable({
      'paging'      : true,
      'searching'   : true,
      'info'        : false,
      'ordering'    : true,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    
  })

</script>
<script type="text/javascript">
// Scroll in Sidebar Asset
  $(function(){
  $('#asset').slimScroll({
    color: '#d2d6de',
    railOpacity: 0.3,
    height: 'calc(100vh - 220px)'
  });
});
</script>
<!-- <script type="text/javascript">
// CandleStick Chart
window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer",
  {
    title:{
    },
    zoomEnabled: true,
    axisY: {
      includeZero:false,
      title: "Prices",
      prefix: "$ "
    },
    axisX: {
      interval:2,
      intervalType: "month",
      valueFormatString: "MMM-YY",
      labelAngle: -45
    },
    data: [
    {
      type: "candlestick",
      color: "#b41244", 
      risingColor : "#5ff23e",
      dataPoints: [
      {x: new Date(2012,01,01),y:[5198, 5629, 5159, 5385]},
      {x: new Date(2012,02,01),y:[5366, 5499, 5135, 5295]},
      {x: new Date(2012,03,01),y:[5296, 5378, 5154, 5248]},
      {x: new Date(2012,04,01),y:[5254, 5279, 4788, 4924]},
      {x: new Date(2012,05,01),y:[4910, 5286, 4770, 5278]},
      {x: new Date(2012,06,01),y:[5283, 5348, 5032, 5229]},
      {x: new Date(2012,07,01),y:[5220, 5448, 5164, 5258]},
      {x: new Date(2012,08,01),y:[5276, 5735, 5215, 5703]},
      {x: new Date(2012,09,01),y:[5704, 5815, 4888, 5619]},
      {x: new Date(2012,10,01),y:[5609, 5885, 5548, 5879]},
      {x: new Date(2012,11,01),y:[5878, 5965, 5823, 5905]},
      {x: new Date(2013,00,01),y:[5937, 6111, 5935, 6034]},
      {x: new Date(2013,01,01),y:[6040, 6052, 5671, 5693]},
      {x: new Date(2013,02,01),y:[5702, 5971, 5604, 5682]},
      {x: new Date(2013,03,01),y:[5697, 5962, 5477, 5930]},
      {x: new Date(2013,04,01),y:[5911, 6229, 5910, 5985]},
      {x: new Date(2013,05,01),y:[5997, 6011, 5566, 5842]},
      {x: new Date(2013,06,01),y:[5834, 6093, 5675, 5742]},
      {x: new Date(2013,07,01),y:[5776, 5808, 5118, 5471]},
      {x: new Date(2013,08,01),y:[5480, 6142, 5318, 5735]},
      {x: new Date(2013,09,01),y:[5756, 6309, 5700, 6299]},
      {x: new Date(2013,10,01),y:[6289, 6342, 5972, 6176]},
      {x: new Date(2013,11,01),y:[6171, 6415, 6129, 6304]}
      ]
    }
    ]
  });
  chart.render();

}
</script> -->

<script type="text/javascript">
  <!-- Chart code -->
/**
 * This demo uses direct URL to Poloniex exchance, which means that depending on your browser settings,
 * it may not work dure to CORS restrictions.
 * Please consult Poloniex API for further information:
 * https://poloniex.com/support/api/
 */

var chart = AmCharts.makeChart("frameChart", {
  "type": "serial",
  "theme": "light",
  "dataLoader": {
    "url": "https://poloniex.com/public?command=returnOrderBook&currencyPair=BTC_ETH&depth=50",
    "format": "json",
    "reload": 30,
    "postProcess": function(data) {
      
      // Function to process (sort and calculate cummulative volume)
      function processData(list, type, desc) {
        
        // Convert to data points
        for(var i = 0; i < list.length; i++) {
          list[i] = {
            value: Number(list[i][0]),
            volume: Number(list[i][1]),
          }
        }
       
        // Sort list just in case
        list.sort(function(a, b) {
          if (a.value > b.value) {
            return 1;
          }
          else if (a.value < b.value) {
            return -1;
          }
          else {
            return 0;
          }
        });
        
        // Calculate cummulative volume
        if (desc) {
          for(var i = list.length - 1; i >= 0; i--) {
            if (i < (list.length - 1)) {
              list[i].totalvolume = list[i+1].totalvolume + list[i].volume;
            }
            else {
              list[i].totalvolume = list[i].volume;
            }
            var dp = {};
            dp["value"] = list[i].value;
            dp[type + "volume"] = list[i].volume;
            dp[type + "totalvolume"] = list[i].totalvolume;
            res.unshift(dp);
          }
        }
        else {
          for(var i = 0; i < list.length; i++) {
            if (i > 0) {
              list[i].totalvolume = list[i-1].totalvolume + list[i].volume;
            }
            else {
              list[i].totalvolume = list[i].volume;
            }
            var dp = {};
            dp["value"] = list[i].value;
            dp[type + "volume"] = list[i].volume;
            dp[type + "totalvolume"] = list[i].totalvolume;
            res.push(dp);
          }
        }
       
      }
      
      // Init
      var res = [];
      processData(data.bids, "bids", true);
      processData(data.asks, "asks", false);
      
      //console.log(res);
      return res;
    }
  },
  "graphs": [{
    "id": "bids",
    "fillAlphas": 0.1,
    "lineAlpha": 1,
    "lineThickness": 2,
    "lineColor": "#0f0",
    "type": "step",
    "valueField": "bidstotalvolume",
    "balloonFunction": balloon
  }, {
    "id": "asks",
    "fillAlphas": 0.1,
    "lineAlpha": 1,
    "lineThickness": 2,
    "lineColor": "#f00",
    "type": "step",
    "valueField": "askstotalvolume",
    "balloonFunction": balloon
  }, {
    "lineAlpha": 0,
    "fillAlphas": 0.2,
    "lineColor": "#000",
    "type": "column",
    "clustered": false,
    "valueField": "bidsvolume",
    "showBalloon": false
  }, {
    "lineAlpha": 0,
    "fillAlphas": 0.2,
    "lineColor": "#000",
    "type": "column",
    "clustered": false,
    "valueField": "asksvolume",
    "showBalloon": false
  }],
  "categoryField": "value",
  "chartCursor": {},
  "balloon": {
    "textAlign": "left"
  },
  "valueAxes": [{
    "title": "Volume"
  }],
  "categoryAxis": {
    "title": "Price (BTC/ETH)",
    "minHorizontalGap": 100,
    "startOnAxis": true,
    "showFirstLabel": false,
    "showLastLabel": false
  },
  "export": {
    "enabled": true
  }
});

function balloon(item, graph) {
  var txt;
  if (graph.id == "asks") {
    txt = "Ask: <strong>" + formatNumber(item.dataContext.value, graph.chart, 4) + "</strong><br />"
      + "Total volume: <strong>" + formatNumber(item.dataContext.askstotalvolume, graph.chart, 4) + "</strong><br />"
      + "Volume: <strong>" + formatNumber(item.dataContext.asksvolume, graph.chart, 4) + "</strong>";
  }
  else {
    txt = "Bid: <strong>" + formatNumber(item.dataContext.value, graph.chart, 4) + "</strong><br />"
      + "Total volume: <strong>" + formatNumber(item.dataContext.bidstotalvolume, graph.chart, 4) + "</strong><br />"
      + "Volume: <strong>" + formatNumber(item.dataContext.bidsvolume, graph.chart, 4) + "</strong>";
  }
  return txt;
}

function formatNumber(val, chart, precision) {
  return AmCharts.formatNumber(
    val, 
    {
      precision: precision ? precision : chart.precision, 
      decimalSeparator: chart.decimalSeparator,
      thousandsSeparator: chart.thousandsSeparator
    }
  );
}
</script>

<script type="text/javascript">
  //Handle starring for glyphicon and font awesome
    $("span").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("i");
      var fa = $this.hasClass("fa");

      //Switch states
       if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }

    });

    $("li.cc").click(function (){
      var idx = $(this).index();
      $("li.cc").eq(idx).attr("id", "favo");
    });

    /*$("li").click(function (){
      var li = $("li a span i.fa-star");
      if (li.is("li a span i.fa-star")) {
            li.attr("id", "favo");
        }
    });*/

    $("#fav").change(function(){
      if (this.checked) {
        $("li#favo").show();
        $("li#cc").hide();
      }else{
        $("li#favo").show();
        $("li#cc").show();
      }

    });


    $(".slide-toggle").click(function(){
    $(".chat").animate({
      width: "toggle"
    });
  });

  $(document).ready(function(){
    $('.dropdown-submenu a.submenu').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });



    var chartCS = AmCharts.makeChart( "chartContainer", {
  "type": "serial",
  "theme": "light",
  "dataDateFormat":"YYYY-MM-DD",
  "valueAxes": [ {
    "position": "left"
  } ],
  "graphs": [ {
    "id": "g1",
    "balloonText": "Open:<b>[[open]]</b><br>Low:<b>[[low]]</b><br>High:<b>[[high]]</b><br>Close:<b>[[close]]</b><br>",
    "closeField": "close",
    "fillColors": "#47f255",
    "highField": "high",
    "lineColor": "#47f255",
    "lineAlpha": 1,
    "lowField": "low",
    "fillAlphas": 0.9,
    "negativeFillColors": "#db4c3c",
    "negativeLineColor": "#db4c3c",
    "openField": "open",
    "title": "Price:",
    "type": "candlestick",
    "valueField": "close"
  } ],
  "chartScrollbar": {
    "graph": "g1",
    "graphType": "line",
    "scrollbarHeight": 30
  },
  "chartCursor": {
    "valueLineEnabled": true,
    "valueLineBalloonEnabled": true
  },
  "categoryField": "date",
  "categoryAxis": {
    "parseDates": true
  },
  "dataProvider": [ {
    "date": "2011-08-01",
    "open": "136.65",
    "high": "136.96",
    "low": "134.15",
    "close": "136.49"
  }, {
    "date": "2011-08-02",
    "open": "135.26",
    "high": "135.95",
    "low": "131.50",
    "close": "131.85"
  }, {
    "date": "2011-08-05",
    "open": "132.90",
    "high": "135.27",
    "low": "128.30",
    "close": "135.25"
  }, {
    "date": "2011-08-06",
    "open": "134.94",
    "high": "137.24",
    "low": "132.63",
    "close": "135.03"
  }, {
    "date": "2011-08-07",
    "open": "136.76",
    "high": "136.86",
    "low": "132.00",
    "close": "134.01"
  }, {
    "date": "2011-08-08",
    "open": "131.11",
    "high": "133.00",
    "low": "125.09",
    "close": "126.39"
  }, {
    "date": "2011-08-09",
    "open": "123.12",
    "high": "127.75",
    "low": "120.30",
    "close": "125.00"
  }, {
    "date": "2011-08-12",
    "open": "128.32",
    "high": "129.35",
    "low": "126.50",
    "close": "127.79"
  }, {
    "date": "2011-08-13",
    "open": "128.29",
    "high": "128.30",
    "low": "123.71",
    "close": "124.03"
  }, {
    "date": "2011-08-14",
    "open": "122.74",
    "high": "124.86",
    "low": "119.65",
    "close": "119.90"
  }, {
    "date": "2011-08-15",
    "open": "117.01",
    "high": "118.50",
    "low": "111.62",
    "close": "117.05"
  }, {
    "date": "2011-08-16",
    "open": "122.01",
    "high": "123.50",
    "low": "119.82",
    "close": "122.06"
  }, {
    "date": "2011-08-19",
    "open": "123.96",
    "high": "124.50",
    "low": "120.50",
    "close": "122.22"
  }, {
    "date": "2011-08-20",
    "open": "122.21",
    "high": "128.96",
    "low": "121.00",
    "close": "127.57"
  }, {
    "date": "2011-08-21",
    "open": "131.22",
    "high": "132.75",
    "low": "130.33",
    "close": "132.51"
  }, {
    "date": "2011-08-22",
    "open": "133.09",
    "high": "133.34",
    "low": "129.76",
    "close": "131.07"
  }, {
    "date": "2011-08-23",
    "open": "130.53",
    "high": "135.37",
    "low": "129.81",
    "close": "135.30"
  }, {
    "date": "2011-08-26",
    "open": "133.39",
    "high": "134.66",
    "low": "132.10",
    "close": "132.25"
  }, {
    "date": "2011-08-27",
    "open": "130.99",
    "high": "132.41",
    "low": "126.63",
    "close": "126.82"
  }, {
    "date": "2011-08-28",
    "open": "129.88",
    "high": "134.18",
    "low": "129.54",
    "close": "134.08"
  }, {
    "date": "2011-08-29",
    "open": "132.67",
    "high": "138.25",
    "low": "132.30",
    "close": "136.25"
  }, {
    "date": "2011-08-30",
    "open": "139.49",
    "high": "139.65",
    "low": "137.41",
    "close": "138.48"
  }, {
    "date": "2011-09-03",
    "open": "139.94",
    "high": "145.73",
    "low": "139.84",
    "close": "144.16"
  }, {
    "date": "2011-09-04",
    "open": "144.97",
    "high": "145.84",
    "low": "136.10",
    "close": "136.76"
  }, {
    "date": "2011-09-05",
    "open": "135.56",
    "high": "137.57",
    "low": "132.71",
    "close": "135.01"
  }, {
    "date": "2011-09-06",
    "open": "132.01",
    "high": "132.30",
    "low": "130.00",
    "close": "131.77"
  }, {
    "date": "2011-09-09",
    "open": "136.99",
    "high": "138.04",
    "low": "133.95",
    "close": "136.71"
  }, {
    "date": "2011-09-10",
    "open": "137.90",
    "high": "138.30",
    "low": "133.75",
    "close": "135.49"
  }, {
    "date": "2011-09-11",
    "open": "135.99",
    "high": "139.40",
    "low": "135.75",
    "close": "136.85"
  }, {
    "date": "2011-09-12",
    "open": "138.83",
    "high": "139.00",
    "low": "136.65",
    "close": "137.20"
  }, {
    "date": "2011-09-13",
    "open": "136.57",
    "high": "138.98",
    "low": "136.20",
    "close": "138.81"
  }, {
    "date": "2011-09-16",
    "open": "138.99",
    "high": "140.59",
    "low": "137.60",
    "close": "138.41"
  }, {
    "date": "2011-09-17",
    "open": "139.06",
    "high": "142.85",
    "low": "137.83",
    "close": "140.92"
  }, {
    "date": "2011-09-18",
    "open": "143.02",
    "high": "143.16",
    "low": "139.40",
    "close": "140.77"
  }, {
    "date": "2011-09-19",
    "open": "140.15",
    "high": "141.79",
    "low": "139.32",
    "close": "140.31"
  }, {
    "date": "2011-09-20",
    "open": "141.14",
    "high": "144.65",
    "low": "140.31",
    "close": "144.15"
  }, {
    "date": "2011-09-23",
    "open": "146.73",
    "high": "149.85",
    "low": "146.65",
    "close": "148.28"
  }, {
    "date": "2011-09-24",
    "open": "146.84",
    "high": "153.22",
    "low": "146.82",
    "close": "153.18"
  }, {
    "date": "2011-09-25",
    "open": "154.47",
    "high": "155.00",
    "low": "151.25",
    "close": "152.77"
  }, {
    "date": "2011-09-26",
    "open": "153.77",
    "high": "154.52",
    "low": "152.32",
    "close": "154.50"
  }, {
    "date": "2011-09-27",
    "open": "153.44",
    "high": "154.60",
    "low": "152.75",
    "close": "153.47"
  }, {
    "date": "2011-09-30",
    "open": "154.63",
    "high": "157.41",
    "low": "152.93",
    "close": "156.34"
  }, {
    "date": "2011-10-01",
    "open": "156.55",
    "high": "158.59",
    "low": "155.89",
    "close": "158.45"
  }, {
    "date": "2011-10-02",
    "open": "157.78",
    "high": "159.18",
    "low": "157.01",
    "close": "157.92"
  }, {
    "date": "2011-10-03",
    "open": "158.00",
    "high": "158.08",
    "low": "153.50",
    "close": "156.24"
  }, {
    "date": "2011-10-04",
    "open": "158.37",
    "high": "161.58",
    "low": "157.70",
    "close": "161.45"
  }, {
    "date": "2011-10-07",
    "open": "163.49",
    "high": "167.91",
    "low": "162.97",
    "close": "167.91"
  }, {
    "date": "2011-10-08",
    "open": "170.20",
    "high": "171.11",
    "low": "166.68",
    "close": "167.86"
  }, {
    "date": "2011-10-09",
    "open": "167.55",
    "high": "167.88",
    "low": "165.60",
    "close": "166.79"
  }, {
    "date": "2011-10-10",
    "open": "169.49",
    "high": "171.88",
    "low": "153.21",
    "close": "162.23"
  }, {
    "date": "2011-10-11",
    "open": "163.01",
    "high": "167.28",
    "low": "161.80",
    "close": "167.25"
  }, {
    "date": "2011-10-14",
    "open": "167.98",
    "high": "169.57",
    "low": "163.50",
    "close": "166.98"
  }, {
    "date": "2011-10-15",
    "open": "165.54",
    "high": "170.18",
    "low": "165.15",
    "close": "169.58"
  }, {
    "date": "2011-10-16",
    "open": "172.69",
    "high": "173.04",
    "low": "169.18",
    "close": "172.75"
  }, {
    "date": "2011-10-17",
    "open": "171.50",
    "high": "174.19",
    "low": "171.05",
    "close": "173.50"
  }, {
    "date": "2011-10-18",
    "open": "174.24",
    "high": "174.63",
    "low": "170.00",
    "close": "170.42"
  }, {
    "date": "2011-10-21",
    "open": "170.35",
    "high": "174.90",
    "low": "169.96",
    "close": "174.36"
  }, {
    "date": "2011-10-22",
    "open": "188.56",
    "high": "188.60",
    "low": "182.76",
    "close": "186.16"
  }, {
    "date": "2011-10-23",
    "open": "185.81",
    "high": "187.21",
    "low": "179.24",
    "close": "185.93"
  }, {
    "date": "2011-10-24",
    "open": "184.87",
    "high": "185.90",
    "low": "181.66",
    "close": "182.78"
  }, {
    "date": "2011-10-25",
    "open": "185.29",
    "high": "185.37",
    "low": "182.88",
    "close": "184.70"
  }, {
    "date": "2011-10-28",
    "open": "185.45",
    "high": "186.59",
    "low": "184.70",
    "close": "185.09"
  }, {
    "date": "2011-10-29",
    "open": "186.18",
    "high": "189.37",
    "low": "184.73",
    "close": "187.00"
  }, {
    "date": "2011-10-30",
    "open": "187.63",
    "high": "190.12",
    "low": "184.95",
    "close": "189.95"
  }, {
    "date": "2011-10-31",
    "open": "188.60",
    "high": "190.10",
    "low": "180.00",
    "close": "187.44"
  }, {
    "date": "2011-11-01",
    "open": "189.21",
    "high": "189.44",
    "low": "183.49",
    "close": "187.87"
  }, {
    "date": "2011-11-04",
    "open": "185.29",
    "high": "188.96",
    "low": "184.24",
    "close": "186.18"
  }, {
    "date": "2011-11-05",
    "open": "187.05",
    "high": "192.00",
    "low": "185.27",
    "close": "191.79"
  }, {
    "date": "2011-11-06",
    "open": "190.61",
    "high": "192.68",
    "low": "186.13",
    "close": "186.30"
  }, {
    "date": "2011-11-07",
    "open": "186.67",
    "high": "186.90",
    "low": "167.77",
    "close": "175.47"
  }, {
    "date": "2011-11-08",
    "open": "171.15",
    "high": "175.12",
    "low": "165.21",
    "close": "165.37"
  }, {
    "date": "2011-11-11",
    "open": "165.28",
    "high": "167.70",
    "low": "150.63",
    "close": "153.76"
  }, {
    "date": "2011-11-12",
    "open": "160.85",
    "high": "170.98",
    "low": "153.76",
    "close": "169.96"
  }, {
    "date": "2011-11-13",
    "open": "177.16",
    "high": "177.57",
    "low": "163.74",
    "close": "166.11"
  }, {
    "date": "2011-11-14",
    "open": "166.39",
    "high": "169.59",
    "low": "160.30",
    "close": "164.30"
  }, {
    "date": "2011-11-15",
    "open": "165.30",
    "high": "167.02",
    "low": "159.33",
    "close": "166.39"
  }, {
    "date": "2011-11-18",
    "open": "166.10",
    "high": "168.20",
    "low": "162.10",
    "close": "163.95"
  }, {
    "date": "2011-11-19",
    "open": "165.67",
    "high": "171.79",
    "low": "163.53",
    "close": "168.85"
  }, {
    "date": "2011-11-20",
    "open": "165.84",
    "high": "172.35",
    "low": "164.67",
    "close": "168.46"
  }, {
    "date": "2011-11-22",
    "open": "172.00",
    "high": "172.05",
    "low": "169.75",
    "close": "171.54"
  }, {
    "date": "2011-11-25",
    "open": "173.59",
    "high": "177.27",
    "low": "172.35",
    "close": "172.54"
  }, {
    "date": "2011-11-26",
    "open": "175.22",
    "high": "175.79",
    "low": "170.01",
    "close": "174.81"
  }, {
    "date": "2011-11-27",
    "open": "176.82",
    "high": "180.60",
    "low": "175.35",
    "close": "180.22"
  }, {
    "date": "2011-11-28",
    "open": "179.43",
    "high": "185.17",
    "low": "179.15",
    "close": "184.29"
  }, {
    "date": "2011-11-29",
    "open": "187.34",
    "high": "187.70",
    "low": "179.70",
    "close": "182.22"
  }, {
    "date": "2011-12-02",
    "open": "181.86",
    "high": "184.14",
    "low": "177.70",
    "close": "178.86"
  }, {
    "date": "2011-12-03",
    "open": "177.15",
    "high": "180.90",
    "low": "176.99",
    "close": "179.81"
  }, {
    "date": "2011-12-04",
    "open": "182.89",
    "high": "186.00",
    "low": "182.41",
    "close": "185.50"
  }, {
    "date": "2011-12-05",
    "open": "186.19",
    "high": "190.10",
    "low": "186.12",
    "close": "189.95"
  }, {
    "date": "2011-12-06",
    "open": "190.54",
    "high": "194.99",
    "low": "188.04",
    "close": "194.30"
  }, {
    "date": "2011-12-09",
    "open": "193.59",
    "high": "195.66",
    "low": "192.69",
    "close": "194.21"
  }, {
    "date": "2011-12-10",
    "open": "194.75",
    "high": "196.83",
    "low": "187.39",
    "close": "188.54"
  }, {
    "date": "2011-12-11",
    "open": "193.44",
    "high": "194.48",
    "low": "185.76",
    "close": "190.86"
  }, {
    "date": "2011-12-12",
    "open": "190.19",
    "high": "192.12",
    "low": "187.82",
    "close": "191.83"
  }, {
    "date": "2011-12-13",
    "open": "190.37",
    "high": "193.20",
    "low": "189.54",
    "close": "190.39"
  }, {
    "date": "2011-12-16",
    "open": "190.72",
    "high": "192.65",
    "low": "182.98",
    "close": "184.40"
  }, {
    "date": "2011-12-17",
    "open": "186.52",
    "high": "187.33",
    "low": "178.60",
    "close": "182.98"
  }, {
    "date": "2011-12-18",
    "open": "182.98",
    "high": "184.64",
    "low": "180.90",
    "close": "183.12"
  }, {
    "date": "2011-12-19",
    "open": "185.43",
    "high": "187.83",
    "low": "183.33",
    "close": "187.21"
  }, {
    "date": "2011-12-20",
    "open": "190.12",
    "high": "193.91",
    "low": "189.89",
    "close": "193.91"
  }, {
    "date": "2011-12-23",
    "open": "195.03",
    "high": "199.33",
    "low": "194.79",
    "close": "198.80"
  }, {
    "date": "2011-12-25",
    "open": "199.01",
    "high": "200.96",
    "low": "196.82",
    "close": "198.95"
  }, {
    "date": "2011-12-26",
    "open": "198.95",
    "high": "202.96",
    "low": "197.80",
    "close": "198.57"
  }, {
    "date": "2011-12-27",
    "open": "200.59",
    "high": "201.56",
    "low": "196.88",
    "close": "199.83"
  }, {
    "date": "2011-12-30",
    "open": "199.50",
    "high": "200.50",
    "low": "197.75",
    "close": "198.08"
  }, {
    "date": "2012-01-01",
    "open": "199.27",
    "high": "200.26",
    "low": "192.55",
    "close": "194.84"
  }, {
    "date": "2012-01-02",
    "open": "195.41",
    "high": "197.39",
    "low": "192.69",
    "close": "194.93"
  }, {
    "date": "2012-01-03",
    "open": "191.45",
    "high": "193.00",
    "low": "178.89",
    "close": "180.05"
  }, {
    "date": "2012-01-06",
    "open": "181.25",
    "high": "183.60",
    "low": "170.23",
    "close": "177.64"
  }, {
    "date": "2012-01-07",
    "open": "180.14",
    "high": "182.46",
    "low": "170.80",
    "close": "171.25"
  }, {
    "date": "2012-01-08",
    "open": "171.30",
    "high": "179.50",
    "low": "168.30",
    "close": "179.40"
  }, {
    "date": "2012-01-09",
    "open": "177.58",
    "high": "181.00",
    "low": "175.41",
    "close": "178.02"
  }, {
    "date": "2012-01-10",
    "open": "176.00",
    "high": "177.85",
    "low": "170.00",
    "close": "172.69"
  }, {
    "date": "2012-01-13",
    "open": "177.52",
    "high": "179.42",
    "low": "175.17",
    "close": "178.78"
  }, {
    "date": "2012-01-14",
    "open": "177.72",
    "high": "179.22",
    "low": "164.66",
    "close": "169.04"
  }, {
    "date": "2012-01-15",
    "open": "165.23",
    "high": "169.01",
    "low": "156.70",
    "close": "159.64"
  }, {
    "date": "2012-01-16",
    "open": "161.51",
    "high": "165.36",
    "low": "158.42",
    "close": "160.89"
  }, {
    "date": "2012-01-17",
    "open": "161.71",
    "high": "165.75",
    "low": "159.61",
    "close": "161.36"
  }, {
    "date": "2012-01-21",
    "open": "148.06",
    "high": "159.98",
    "low": "146.00",
    "close": "155.64"
  }, {
    "date": "2012-01-22",
    "open": "136.19",
    "high": "140.00",
    "low": "126.14",
    "close": "139.07"
  }, {
    "date": "2012-01-23",
    "open": "139.99",
    "high": "140.70",
    "low": "132.01",
    "close": "135.60"
  }, {
    "date": "2012-01-24",
    "open": "138.99",
    "high": "139.09",
    "low": "129.61",
    "close": "130.01"
  }, {
    "date": "2012-01-27",
    "open": "128.16",
    "high": "133.20",
    "low": "126.45",
    "close": "130.01"
  }, {
    "date": "2012-01-28",
    "open": "131.15",
    "high": "132.79",
    "low": "129.05",
    "close": "131.54"
  }, {
    "date": "2012-01-29",
    "open": "131.37",
    "high": "135.45",
    "low": "130.00",
    "close": "132.18"
  }, {
    "date": "2012-01-30",
    "open": "129.45",
    "high": "136.65",
    "low": "129.40",
    "close": "135.36"
  }, {
    "date": "2012-01-31",
    "open": "136.24",
    "high": "136.59",
    "low": "132.18",
    "close": "133.75"
  }, {
    "date": "2012-02-03",
    "open": "134.21",
    "high": "135.90",
    "low": "131.42",
    "close": "131.65"
  }, {
    "date": "2012-02-04",
    "open": "130.43",
    "high": "134.00",
    "low": "128.90",
    "close": "129.36"
  }, {
    "date": "2012-02-05",
    "open": "130.83",
    "high": "131.92",
    "low": "121.77",
    "close": "122.00"
  }, {
    "date": "2012-02-06",
    "open": "119.97",
    "high": "124.78",
    "low": "117.27",
    "close": "121.24"
  }, {
    "date": "2012-02-07",
    "open": "122.08",
    "high": "125.70",
    "low": "121.60",
    "close": "125.48"
  }, {
    "date": "2012-02-10",
    "open": "128.01",
    "high": "129.98",
    "low": "127.20",
    "close": "129.45"
  }, {
    "date": "2012-02-11",
    "open": "130.70",
    "high": "131.00",
    "low": "123.62",
    "close": "124.86"
  }, {
    "date": "2012-02-12",
    "open": "126.68",
    "high": "129.78",
    "low": "125.63",
    "close": "129.40"
  } ],

  "export": {
    "enabled": true,
    "position": "bottom-right"
  }
} );

chartCS.addListener( "rendered", zoomChart );
zoomChart();

// this method is called when chart is first inited as we listen for "dataUpdated" event
function zoomChart() {
  // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
  chart.zoomToIndexes( chart.dataProvider.length - 10, chart.dataProvider.length - 1 );
}
</script>


</body>
</html>
