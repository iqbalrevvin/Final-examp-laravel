
@extends('layouts/master')
@section('content')
<div class="" >
  <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Chart Pengeluaran</h4>
          <div class="ml-auto text-right">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/home">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
</div>
<div class="panel" >
    <div id="chartpengeluaran"></div>
</div>

@endsection

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('chartpengeluaran', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Chart Pengeluaran'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Price'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [ {
        name: 'Pengeluaran perbulan',
        data:{{json_encode($data)}}
  
    },]
  });
  
  </script>
@endsection
