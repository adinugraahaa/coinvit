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
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Dropdown <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
              </ul>
            </li>

            <li class="pull-right">
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-comments"></i></a>
            </li>
            <li class="pull-right dropdown" style="font-size: 16px;">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">
               <i class="fa fa-user"></i>
                Account <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="pull-right" style="font-size: 16px;"><a href="balance.php">Balance</a></li>
          </ul>
        
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <!-- Left side column. contains the logo and sidebar -->



        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <!-- Content Header (Page header) -->
            <aside class="main-sidebar">
             <!-- sidebar: style can be found in sidebar.less -->
              <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                  <div class="pull-left">
                    <img src="https://bittrexblobstorage.blob.core.windows.net/public/c41db2ef-2635-4438-a1c1-0a680c8857e1.png" style="width: 100%; max-width: 45px; height: auto;">
                  </div>
                  <div class="pull-left info">
                    <p style="font-size: 28px; font-style: italic;">STELLAR</p>
                    <b>Lumens</b>
                  </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
                </form>
                <div class="sidebar" style="margin-right: 8px; margin-left: 8px;">
                  <button type="button" class="btn bg-maroon btn-block">TOKEN</button>
                  <button type="button" class="btn btn-block btn-default">FIAT</button>
                </div>


                <div class="checkbox" style="color: white; margin-right: 10px; margin-left: 15px;">
                <label>
                  <input type="checkbox" id="fav">
                  Show Favourites
                  <i class="fa fa-star text-yellow"></i>
                </label>
                </div>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                  <?php
                    for ($i=1; $i <20 ; $i++) { 
                      echo '
                      <li style="font-size: 15px; margin-top: 10px; margin-bottom: 10px;">
                        <a href="">
                          <div class="pull-left">  
                            <span class="fa fa-caret-up text-green">
                            </span>
                            <span>BTC</span>
                          </div>
                          <span> | Bitcoin | Bitcoin.com | <i class="fa fa-star-o text-yellow"></i></span>
                        </a>
                        
                      </li>';
                    }
                  ?>

                </ul>
              </section>
              <!-- /.sidebar -->
            </aside>



          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <section>
              <div class="info-box">

                <div class="info-box-content">
                  <div class="row">

                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p style="font-size: 30px;">Account Balances</p>
                      <span class="info-box-text">Estimated Holding</span>
                    </div>
                    
                    <div class="col-md-2 col-sm-6 col-xs-6 text-right">
                       <div class="description-block">
                          <span class="description-text">CRYPTO</span>
                          <h5 class="description-header" style="font-size: 20px;">$35,210.43</h5>
                        </div>
                  </div>
                    
                    <div class="col-md-2 col-sm-6 col-xs-6 text-right">
                       <div class="description-block">
                          <span class="description-text">FIAT</span>
                          <h5 class="description-header" style="font-size: 20px;">$35,210.43</h5>
                        </div>
                    </div>

                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </section>

            <section class="content">
              <div class="row">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Order Book</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                   <!-- col -->
                   <div class="col-md-12 col-sm-12 col-xs-12">

                    <!-- Balance -->
                    <table class="table table-hover" id="balance" width="100%" cellspacing="0">
                      <thead style="background-color: #f4f4f5;">
                         <tr style="background-color: #f4f4f5;">
                          <th>CURRENCY NAME</th>
                          <th>SYMBOL</th>
                          <th>AVAILABLE BALANCE</th>
                          <th>PENDING DEPOSIT</th>
                          <th>RESERVED</th>
                          <th>TOTAL</th>
                          <th>EST. BTC  VALUE</th>
                          <th>% CHANGE</th>
                        </tr>
                      </thead>
                       <tbody>
                       <?php
                          for ($i=0; $i <20 ; $i++) {?> 
                          <tr>
                            <td>Bitcoin</td>
                            <td>BTC</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0%</td>
                          </tr>   
                        <?php
                          }
                       ?>
                      </tbody>
                    </table>   
                    <!-- End Balance -->
                    </div>
                  <!-- End col-->
            </div>

           
            </div>


            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Pending <b>(Deposit/Withdrawal)</b></h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6  col-sm-12 col-xs-12">
                    <!-- Pending withdrawals -->
                    <table class="table table-hover" id="pw" width="100%" cellspacing="0">
                      <thead>
                         <tr style="background-color: #f4f4f5;">
                          <th>DATE</th>
                          <th>SYMBOL</th>
                          <th>QUANTITY</th>
                          <th>STATUS</th>
                        </tr>
                      </thead>
                       <tbody>
                       <?php
                          for ($i=0; $i <20 ; $i++) {?> 
                          <tr>
                            <td>08-09-2018</td>
                            <td>Bitcoin</td>
                            <td>BTC</td>
                            <td>Pending</td>
                          </tr>   
                        <?php
                          }
                       ?>
                      </tbody>
                    </table>   
                    <!-- End Pending Withdrawals -->
                  </div>
                  <!-- /.col -->
                  

                  <div class="col-md-6 col-sm-12 col-xs-12">
                     <!-- Pending Deposits -->
                    <table class="table table-hover" id="pd" width="100%" cellspacing="0">
                      <thead>
                         <tr style="background-color: #f4f4f5;">
                          <th>LAST CHECKED</th>
                          <th>SYMBOL</th>
                          <th>QUANTITY</th>
                          <th>CONFIRMATION</th>
                        </tr>
                      </thead>
                       <tbody>
                       <?php
                          for ($i=0; $i <20 ; $i++) {?> 
                          <tr>
                            <td>08-09-2018</td>
                            <td>Bitcoin</td>
                            <td>BTC</td>
                            <td>Pending</td>
                          </tr>   
                        <?php
                          }
                       ?>
                      </tbody>
                    </table>   
                    <!-- End Pending Deposits -->  
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box pending -->

            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">History <b>(Deposit/Withdrawal)</b></h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <!-- History Deposits -->
                    <table class="table table-hover" id="dh" width="100%" cellspacing="0">
                      <thead>
                         <tr style="background-color: #f4f4f5;">
                          <th>LAST CHECKED</th>
                          <th>SYMBOL</th>
                          <th>QUANTITY</th>
                          <th>CONFIRMATION</th>
                        </tr>
                      </thead>
                       <tbody>
                       <?php
                          for ($i=0; $i <20 ; $i++) {?> 
                          <tr>
                            <td>08-09-2018</td>
                            <td>Bitcoin</td>
                            <td>BTC</td>
                            <td>Pending</td>
                          </tr>   
                        <?php
                          }
                       ?>
                      </tbody>
                    </table>   
                    <!-- End History Deposits -->
                  </div>
                  <!-- /.col -->
                  

                  <div class="col-md-6  col-sm-12 col-xs-12">
                     <!-- History Withdrawal -->
                    <table class="table table-hover" id="wh" width="100%" cellspacing="0">
                      <thead>
                         <tr style="background-color: #f4f4f5;">
                          <th>LAST CHECKED</th>
                          <th>SYMBOL</th>
                          <th>QUANTITY</th>
                          <th>CONFIRMATION</th>
                        </tr>
                      </thead>
                       <tbody>
                       <?php
                          for ($i=0; $i <20 ; $i++) {?> 
                          <tr>
                            <td>08-09-2018</td>
                            <td>Bitcoin</td>
                            <td>BTC</td>
                            <td>Pending</td>
                          </tr>   
                        <?php
                          }
                       ?>
                      </tbody>
                    </table>   
                    <!-- End History Withdrawal -->

                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box history -->

            </div>
            
        </section>

         <!-- Add the sidebar's background. This div must be placed
          immediately after the control sidebar -->
          <div class="control-sidebar-bg"></div>

        </div>
<!-- ./wrapper -->
        </div>
        <!-- End Tab_1 -->
        <div class="tab-pane" id="tab_2" style="background-color: white;">
          <table id="datatable" class="display  table table-hover" width="100%" cellspacing="0">
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
        </div>

     
        
 




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



<script type="text/javascript">
  // DataTables
  $(function () {
    $('#balance').DataTable({
      'paging'      : true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#pw').DataTable({
      'paging'      : true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#pd').DataTable({
      'paging'      : true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#wh').DataTable({
      'paging'      : true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#dh').DataTable({
      'paging'      : true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
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

</body>
</html>
