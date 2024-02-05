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
        ['Suivis', 'Inscription'],
        ['Inscrits à France travail',     {{$francepourc}}],
        ['Inscrits à la chambre des métiers et de l\'artisanat ',     {{$cmapourc}}],
        ['Inscrits à la Mission locale',     {{$mission_localepourc}}],
        ['Inscrits à CAP emploi',     {{$cappourc}}],
        ['Inscrits à Soélis',      {{$soelispourc}}]
      ]);

      var options = {
        pieHole: 0.4,
        backgroundColor: 'none',
        slices: [{color: '#003AFF'}, {color: '#FF3030'}, {color: '#1B00A2'}, {color: '#56D51F'}, {color: '#2F9304'}],
        legend: 'visible',
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
    
  </script>

<div id="donutchart" style="height: 500px;"></div>
@endsection