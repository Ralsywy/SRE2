@extends('base')


@section('content')

<div class="dash-header">
  <div class="nb">
    <h2>Nombre d'inscrits</h2>
    <h3>{{$total}}</h3>
  </div>
  <div class="nb">
    <h2>Nombre d'accompagnateurs</h2>
    <h3>{{$accompagnateurs-1}}</h3>
  </div>
</div>

<div class="all-dash">
  <div class="dash">
    <h1>Statut des dossiers</h1>
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
          ['Inscrits',     {{$rdc}}],
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
      ['Inscrits',     {{$inscritfr}}],
      ['Non inscrits',     {{$total-$inscritfr}}],
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

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Suivis', 'Inscription'],
      ["Réfugiés politiques",     {{$refugie}}],
      ["Non réfugiés politiques",     {{$total-$refugie}}],
    ]);

    var options = {
      pieHole: 0.4,
      backgroundColor: 'none',
      slices: [{color: '#FF6666'}, {color: '#999999'}],
      legend: 'visible',
      
    };

    var chart = new google.visualization.PieChart(document.getElementById('refugiechart'));
    chart.draw(data, options);
  }
  
</script>
<div class="dash">
<h1>Nombre de réfugiés politiques</h1>
<div id="refugiechart" class="chart"></div>
</div>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Suivis', 'Inscription'],
      ["Inscrits",     {{$france}}],
      ["Non inscrits",     {{$total-$france}}],
    ]);

    var options = {
      pieHole: 0.4,
      backgroundColor: 'none',
      slices: [{color: '#76B6EC'}, {color: '#999999'}],
      legend: 'visible',
      
    };

    var chart = new google.visualization.PieChart(document.getElementById('francechart'));
    chart.draw(data, options);
  }
  
</script>
<div class="dash">
<h1>Nombre d'inscrits à France Travail</h1>
<div id="francechart" class="chart"></div>
</div>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Suivis', 'Inscription'],
      ["Inscrits",     {{$cma}}],
      ["Non inscrits",     {{$total-$cma}}],
    ]);

    var options = {
      pieHole: 0.4,
      backgroundColor: 'none',
      slices: [{color: '#B23CFF'}, {color: '#999999'}],
      legend: 'visible',
      
    };

    var chart = new google.visualization.PieChart(document.getElementById('cmachart'));
    chart.draw(data, options);
  }
  
</script>
<div class="dash">
<h1>Nombre d'inscrits à la Chambre<br>des Métiers et de l'Artisanat</h1>
<div id="cmachart" class="chart"></div>
</div>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Suivis', 'Inscription'],
      ["Inscrits",     {{$soelis}}],
      ["Non inscrits",     {{$total-$soelis}}],
    ]);

    var options = {
      pieHole: 0.4,
      backgroundColor: 'none',
      slices: [{color: '#38ED7C'}, {color: '#999999'}],
      legend: 'visible',
      
    };

    var chart = new google.visualization.PieChart(document.getElementById('soelischart'));
    chart.draw(data, options);
  }
  
</script>
<div class="dash">
<h1>Nombre d'inscrits à Soélis</h1>
<div id="soelischart" class="chart"></div>
</div>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Suivis', 'Inscription'],
      ["Inscrits",     {{$mission}}],
      ["Non inscrits",     {{$total-$mission}}],
    ]);

    var options = {
      pieHole: 0.4,
      backgroundColor: 'none',
      slices: [{color: '#FFCA3C'}, {color: '#999999'}],
      legend: 'visible',
      
    };

    var chart = new google.visualization.PieChart(document.getElementById('missionchart'));
    chart.draw(data, options);
  }
  
</script>
<div class="dash">
<h1>Nombre d'inscrits à la Mission Locale</h1>
<div id="missionchart" class="chart"></div>
</div>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Suivis', 'Inscription'],
      ["Inscrits",     {{$cap}}],
      ["Non inscrits",     {{$total-$cap}}],
    ]);

    var options = {
      pieHole: 0.4,
      backgroundColor: 'none',
      slices: [{color: '#FF3C3C'}, {color: '#999999'}],
      legend: 'visible',
      
    };

    var chart = new google.visualization.PieChart(document.getElementById('capchart'));
    chart.draw(data, options);
  }
  
</script>
<div class="dash">
<h1>Nombre d'inscrits à Cap Emploi</h1>
<div id="capchart" class="chart"></div>
</div>

</div>
@endsection