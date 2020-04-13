 <?php include 'databaseconn.php';?>

<html>
<head>
  <title>Vet Patient Portal</title>

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
      <h1>Vet Patient Portal</h1>
  </div>

  <div class="row" style="margin: 0;">
    <!-- Left Bar -->
    <div class="col-7">
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
    <div class="col-5">
      <table id="tableData">
        <th>Owner Name</th>
        <th>Dog Name</th>
        <th>Shots</th>
      </table>
    </div>
  </div>
</body>
</html>


<!-- Using the attached files, fully build out the vet system that displays the patients (highlighting those without shots and ordered by dog's name), and lets you insert new patients.

You will need to be creative and build some navigation between the pages so it works like a real system (because it is!). This is like stitching a number of previous lessons together...following this week's videos will only get you so far.

FOR ADVANCED ONLY: Can you make the whole thing in just one PHP page? Hint: you'll use $_GET[] to take values from the URL.

Hey for this week, I'd love for you to write an API that puts info into a database and one that pulls data out. Specifically, an API that takes a user id and then returns all the info on that user. If you can do those two things, you will be an API master.

-->
