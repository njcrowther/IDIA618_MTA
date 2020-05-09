<?php
    session_start();
    // echo "Session Username is " . $_SESSION["username"];
    // If Logged In
    if(isset($_SESSION["username"])) {

  ?>   
<html>
<head>
  <title>MTA Issue Tracker Dashboard</title>

  <!-- My JS -->
  <script src="js/dashboard.js" type="text/javascript"></script>
  <script src="../js/main.js" type="text/javascript"></script>
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 
   <!-- CSS -->
   <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>

<!-- onload="init()" -->
<body onload="init()">

    <!-- Navigation -->
    <!-- style="margin:0;" -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <a class="navbar-brand" href="#">MTA Issue Tracker Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Sign in Button -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="signout_process.php">Sign Out</a></li>
          <li class="nav-item active"> <a class="nav-link" href="newuser.php">Create User</a></li>
        </ul>
      </div>
    </nav>

    <div class="row" style="margin: 0;">
      <!-- Left Bar -->
      <div class="col-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#filter-table">Filter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#new-issue">New Issue</a>
          </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
          <!-- Search.php -->
          <div class="tab-pane active container" id="filter-table">
            <?php include 'filter.php';?>
          </div>

          <!-- newPatient.php -->
          <div class="tab-pane container" id="new-issue">
            <?php include '../newIssue_form.php';?>
          </div>

        </div>
      </div>

      <!-- Right Bar – Search Results -->
      <div class="col-8">
        <table id="tableData" class="table">
          <th>Image Path</th>
          <th>Location</th>
          <th>Issue Type</th>
          <th>Notes</th>
        </table>
      </div>

      <!-- MODAL -->
      <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center">
              <h4 class="modal-title white-text w-100 font-weight-bold py-2">Update Issue</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>

            <form action="updateIssue_process.php" method="post" class="modal-body">
              <!-- Body -->
              <div class="modal-body">
                <div class="md-form mb-5">
                  <input name="row-id" type="hidden" id="modal-input-row-id">
                  <input name="notes" type="text" id="modal-input-notes" class="form-control validate">
                  <label data-error="wrong" data-success="right" for="form3">Notes</label>
                </div>
              </div>

              <!-- Footer -->
              <div class="modal-footer justify-content-center">
                <input type="submit" value="Save Changes" class="btn btn-outline-warning waves-effect">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
  
</body>
</html>

<?php

    } else {
      echo "<h1>You Need to Log In</h1><br>
      <h2><a href='login_page.php'>Sign In</a></h2>";
    }
?>


<!-- Make issue tracker for riders of the Maryland MTA
//   Riders report broken benches, elevators, hanging wires, etc. 
//   Make short screen cast of you using it and post to YouTube 
//   Maryland 311 app
//   How do you want people to report things? Open ended text? Dropdowns? Use location data? Maps? Stop information?-->