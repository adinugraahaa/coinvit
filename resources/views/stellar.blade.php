@extends('master')
@section('title','Exchange')

@section('css')
<link rel="stylesheet" href="{!! asset('css/stellar2.css') !!}" type="text/css">
@endsection

@section('content')
<ul class="nav nav-pills nav-justified nav-fill" id="pills-tab nav1" role="tablist">
  <li class="nav-item text-dark">
    <a class="nav-link active" id="pills-charts-tab" data-toggle="pill" href="#pills-charts" role="tab" aria-controls="pills-charts" aria-selected="true">Charts</a>

  </li>
  <li class="nav-item">
    <a class="nav-link " id="pills-trade-tab" data-toggle="pill" href="#pills-trade" role="tab" aria-controls="pills-trade" aria-selected="false">Trade</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-order-tab" data-toggle="pill" href="#pills-order" role="tab" aria-controls="pills-order" aria-selected="false">Open Orders</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade  show active" id="pills-charts" role="tabpanel" aria-labelledby="pills-charts-tab">
    <div class="container-fluid " id="head1">
      <div class="row">
        <div class="col-8">
          <a href="" data-toggle="modal" data-target="#typecoin" class="m-0 py-0" style="font-size: 24px;">BNB/BTC <i class="fas fa-caret-down" style="color: white"></i></a>
          <p class="mx-0 py-0 clrchange" style="font-size: 24px; color: red;">0.0014915 <span style="font-size: 13px; color: white">$9.53</span></p>
          <p class="mx-0 py-0" style="font-size: 16px;">Vol 1,129.28 BTC</p>

        </div>
        <div class="col-4 text-right">
          <button class="btn btn-outline-secondary my-3" type="button"><i class="far fa-star">Favorites</i>
          </button>
          <p class="m-0">Low 0,00014755</p>
          <p class="m-0">High 0,00014964</p>
        </div>
      </div>
    </div>
    <section>
      <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-time-tab" data-toggle="pill" href="#pills-time" role="tab" aria-controls="pills-time" aria-selected="true">Time</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-1Day-tab" data-toggle="pill" href="#pills-1Day" role="tab" aria-controls="pills-1Day" aria-selected="false">1Day</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-1Week-tab" data-toggle="pill" href="#pills-1Week" role="tab" aria-controls="pills-1Week" aria-selected="false">1Week</a>
          </li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-hashpopup="true" aria-expanded="false">Min
            </a>
            <div class="dropdown-menu">
              <a href="#pills-min" class="dropdown-item nav-link" data-toggle="pill" role="tab" aria-controls="pills-min1" aria-selected="false" id="pills-min1-tab">  1m</a>
              <a href="" class="dropdown-item">5m</a>
              <a href="" class="dropdown-item">15m</a>
              <a href="" class="dropdown-item">30m</a>
            </div>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-time" role="tabpanel" aria-labelledby="pills-time-tab">
             <div id="chartContainer" style="height: 600px; width: 100%;"></div>
          </div>
          <div class="tab-pane fade" id="pills-1Day" role="tabpanel" aria-labelledby="pills-1Day-tab">
            <div id="chartContainer" style="height: 600px; width: 100%;"></div>
          </div>
          <div class="tab-pane fade" id="pills-1Week" role="tabpanel" aria-labelledby="pills-1Week-tab">
            <div id="chartContainer" style="height: 600px; width: 100%;"></div>
          </div>
          <div class="tab-pane fade" id="pills-min1" role="tabpanel" aria-labelledby="pills-min1-tab">
          TEST
        </div>
        </div>       
          </section>
              <h4 class="h4">Trade History</h4>
              <div class="w-100"></div>
              <table class="table table-hover" cellspacing="0" style="background-color: #fff; font-size: 13px">
                      <thead style="background-color: #f4f4f5;">
                        <tr>
                          <th>Price</th>
                          <th>Amount</th>
                          <th>Time</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                          for ($i=0; $i <10; $i++) {?> 
                          <tr style="background: linear-gradient(to left, rgb(220, 246, 222) 94.1%, rgb(255, 255, 255) 94.1%);">
                            <td>0,00014833</td>
                            <td>6.74</td>
                            <td><?php  echo date("H:i:s");?></td>                           
                          </tr>   
                        <?php
                          } 
                       ?>
                      </tbody>
                    </table>
            
           

        </div>
  <div class="tab-pane fade" id="pills-trade" role="tabpanel" aria-labelledby="pills-trade-tab">   
    <div class="container-fluid p-1">
        <div class="row">
          <div class="col-6">
            <a href="" data-toggle="modal" data-target="#typecoin2" style="font-size: 24px">BNB/BTC</a>
              <i class="fas fa-caret-down" style="color: black"></i>
              <div class="w-100"></div>
              <div class="btn-group" role="group" aria-label="basic example" style=" width:100%;">
                <button type="button" class="btn1">Buy</button>
                <button type="button" class="btn2">Sell</button>
              </div>
                <form action="" class="px-2" style="font-size: 14px;">
                     <div class="form-group">
                        <label for="quantity">Quantity</label>
                          <input type="number" class="form-control" id="quantity" placeholder="XLM">
                      </div>
                      <div class="form-group mb-2">
                        <label for="price">Price</label>
                          <input type="number" class="form-control" id="price" placeholder="BTC">
                      </div>
                      <div class="form-group">
                        <label for="total">Total</label>
                          <input type="number" class="form-control" id="total" placeholder="BTC">
                      </div>
                  </form>
                  <button class="btn btn-primary" type="submit" style="width: 100%;">BUY</button>
                </div>
                
               <!-- col -->
                   <div class="col-6">

                    <!-- BIDS -->
                    <table class="table table-hover" id="bid" width="100%" cellspacing="0" style="background-color: #fff; font-size: 14px;">
                      <thead style="background-color: #f4f4f5;">
                        <tr>
                          <th>SIZE (XLM)</th>
                          <th>BID (BTC)</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                          for ($i=0; $i <5 ; $i++) {?> 
                          <tr style="background: linear-gradient(to left, rgb(220, 246, 222) 94.1%, rgb(255, 255, 255) 94.1%);">
                            <td>35252.525</td>
                            <td>0.00003326</td>
                          </tr>   
                        <?php
                          }
                       ?>
                      </tbody>
                    </table>   
                    </div>
                    <!-- End Bids -->
                  <!-- End col-->
                  </div>
              </div>
              </div>
  <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">...</div>
</div>



@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script type="text/javascript" src="{!! asset('js/stellar2.js') !!}"></script>
 <!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<script type="text/javascript">
  // DataTables
  $(function () {
    
    $('#bid').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'lengthChange': false,
      'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#ask').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#mh').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'ordering'    : true,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#oo').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'ordering'    : true,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#yth').DataTable({
      'paging'      : true,
      'searching'   : false,
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


    $("#fav").change(function(){
      if (this.checked) { 
        var favo = $("ul li a span i.fa-star");

        if (favo) {
          $("ul li").attr({"id" : "btc"})
          $("ul li#btc").hide();
        }else{
          $("ul li").attr({"id" : ""})
        }
      }else{
        $("ul li").show();
      }

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
@endsection