@extends('base')


@section('content')
<div class="all-dash">
<div class="dash-box-progress">
    <div class="dash-item a">Suivis en cours</div>
    <div class="dash-item b">{{$progress}} suivis ({{$progresspourc}}%)</div>
</div>
<div class="dash-box-finish">
    <div class="dash-item a">Suivis terminés</div>
    <div class="dash-item b">{{$finish}} suivis ({{$finishpourc}}%)</div>
</div>
</div>

<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Suivis', 'En cours/Terminés'],
        ['Suivis terminés',     {{$finish}}],
        ['Suivis en cours',      {{$progress}}]
      ]);

      var options = {
        pieHole: 0.4,
        backgroundColor: 'none',
        slices: [{color: '#40e630'}, {color: '#f7a63d'}],
        legend: 'none',
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>

<div id="donutchart" style="height: 500px;"></div>

@endsection