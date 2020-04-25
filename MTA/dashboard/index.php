<?php
    session_start();
    echo "Session Username is " . $_SESSION["username"];
    // If Logged In
    if(isset($_SESSION["username"])) {

  ?>   
<html>
<head>
  <title>MTA Issue Tracker Dashboard</title>

  <!-- My JS -->
  <script src="js/main.js" type="text/javascript"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<!-- onload="init()" -->
<body onload="init()">

  
    <!-- Header -->
    <div class="row" style="margin: 0;">
        <h1>MTA Issue Tracker Dashboard</h1>
    </div>

    <div class="row" style="margin: 0;">
      <!-- Left Bar -->
      <div class="col-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#search">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#newPatient">New Patient</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#bibliography">Bibliography</a>
          </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
          <!-- Search.php -->
          <div class="tab-pane active container" id="search">
            <?php include 'search.php';?>
          </div>

          <!-- newPatient.php -->
          <div class="tab-pane container" id="newPatient">
            <?php include 'newpatient.php';?>
          </div>

          <!-- Bibliography -->
          <div class="tab-pane container" id="bibliography">
            <?php include 'bibliography.php';?>
          </div>
        </div>
      </div>

      <!-- Right Bar – Search Results -->
      <div class="col-8">
        <table id="tableData">
          <th>Image Path</th>
          <th>Location</th>
          <th>Issue Type</th>
          <th>Notes</th>
        </table>
      </div>
    </div>
  
  
</body>
</html>

<?php

    } else {
      echo "<h1>You Need to Log In</h1>";
    }
?>


<!-- Make issue tracker for riders of the Maryland MTA
//   Riders report broken benches, elevators, hanging wires, etc. 
//   Make short screen cast of you using it and post to YouTube 
//   Maryland 311 app
//   How do you want people to report things? Open ended text? Dropdowns? Use location data? Maps? Stop information?-->