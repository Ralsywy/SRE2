@extends('base')


@section('content')
<div class="all-dash">
  <div class="dash">
    <h1>Statut des dossiers ({{$total}} au total)</h1>
    <div id="inscritchart" class="chart"></div>
  </div>

  <script type="text/javascript">
  const randomInt = (min, max) => {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  };
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Suivis', 'Inscription'],
        ['Suivis en cours',{{$progress}}],
        ['Suivis terminés',{{$finish}}],
      ]);

      var options = {
        pieHole: 0.4,
        backgroundColor: 'none',
        slices: [{color: '#b474fc'}, {color: '#999999'}],
        legend: 'visible',
      };

      var chart = new google.visualization.PieChart(document.getElementById('inscritchart'));
      chart.draw(data, options);
    }
    
  </script>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Suivis', 'Inscription'],
      ['Femmes',     {{$total-$monsieur}}],
      ['Hommes',     {{$monsieur}}],
    ]);

    var options = {
      pieHole: 0.4,
      backgroundColor: 'none',
      slices: [{color: '#ff85fb'}, {color: '#78a3ff'}],
      legend: 'visible',
    };

    var chart = new google.visualization.PieChart(document.getElementById('genrechart'));
    chart.draw(data, options);
  }
  
</script>
<div class="dash">
<h1>Genre</h1>
<div id="genrechart" class="chart"></div>
</div>
  
  <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Suivis', 'Inscription'],
          ['Inscrits aux Restos du Coeur',     {{$rdc}}],
          ['Non inscrits',     {{$total-$rdc}}],
        ]);

        var options = {
          pieHole: 0.4,
          backgroundColor: 'none',
          slices: [{color: '#ff78b2'}, {color: '#999999'}],
          legend: 'visible',
        };

        var chart = new google.visualization.PieChart(document.getElementById('rdcchart'));
        chart.draw(data, options);
      }
      
    </script>
  <div class="dash">
    <h1>Nombre d'inscrits aux Restos du Coeur</h1>
    <div id="rdcchart" class="chart"></div>
  </div>

  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Suivis', 'Inscription'],
        ['Bénévoles',     {{$rdc}}],
        ['Non bénévoles',     {{$total-$benevole}}],
      ]);

      var options = {
        pieHole: 0.4,
        backgroundColor: 'none',
        slices: [{color: '#6fdb60'}, {color: '#999999'}],
        legend: 'visible',
      };

      var chart = new google.visualization.PieChart(document.getElementById('benevolechart'));
      chart.draw(data, options);
    }
    
  </script>
<div class="dash">
  <h1>Nombre de bénévoles</h1>
  <div id="benevolechart" class="chart"></div>
</div>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Suivis', 'Inscription'],
      ['Inscrits aux ateliers de français',     {{$inscritfr}}],
      ['Non inscrits aux ateliers de français',     {{$total-$inscritfr}}],
    ]);

    var options = {
      pieHole: 0.4,
      backgroundColor: 'none',
      slices: [{color: '#5676d6'}, {color: '#999999'}],
      legend: 'visible',
    };

    var chart = new google.visualization.PieChart(document.getElementById('inscritfrchart'));
    chart.draw(data, options);
  }
  
</script>
<div class="dash">
<h1>Nombre d'inscrits aux ateliers de français</h1>
<div id="inscritfrchart" class="chart"></div>
</div>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Suivis', 'Inscription'],
      ["Demandeurs d'asile",     {{$asile}}],
      ["Non demandeurs d'asile",     {{$total-$asile}}],
    ]);

    var options = {
      pieHole: 0.4,
      backgroundColor: 'none',
      slices: [{color: '#f5a356'}, {color: '#999999'}],
      legend: 'visible',
      
    };

    var chart = new google.visualization.PieChart(document.getElementById('asilechart'));
    chart.draw(data, options);
  }
  
</script>
<div class="dash">
<h1>Nombre de demandeurs d'asile</h1>
<div id="asilechart" class="chart"></div>
</div>
</div>
@endsection