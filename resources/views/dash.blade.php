@extends('base')


@section('content')
<div class="all-dash">
<div class="dash-box-progress">
    <div class="dash-item a">Suivis en cours</div>
    <div class="dash-item b">24 suivis (50%)</div>
</div>
<div class="dash-box-finish">
    <div class="dash-item a">Suivis terminés</div>
    <div class="dash-item b">24 suivis (54%)</div>
</div>
</div>

<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Suivis', 'En cours/Terminés'],
        ['Suivis terminés',     24],
        ['Suivis en cours',      24]
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