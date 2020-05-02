<!-- Start User Session -->
<?php
    session_start();
    // echo "Session Username is " . $_SESSION["username"];
    
    // Show Issue Submission if not logged in. Otherwise redirect to dashboard (see end of file)
    if(!isset($_SESSION["username"])) {

?>

<html class="no-js" lang="en">
    <head>
        <title>MTA Issue Submitter</title>
        <!-- My JS -->
        <script src="js/main.js" type="text/javascript"></script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <!-- JS -->
        <script src="js/main.js"></script>
        <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

        
        
    </head>
    
    <body class="container">
        <!-- Navigation -->
    <!-- style="margin:0;" -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <a class="navbar-brand" href="#">MTA Issue Submission</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Sign in Button -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="../MTA/dashboard/login_page.php">Sign In</a></li>
        </ul>
      </div>
    </nav>

        <form action="">
            <!-- Location -->
            <h2 class="row">Location:</h2>
            <select name="location" id="location" class="row">
                <option value="Bus 1">Bus 1</option>
                <option value="Bus 2">Bus 2</option>
                <option value="Bus 3">Bus 3</option>
                <option value="Stop 1">Stop 1</option>
            </select>

            <!-- Upload Image -->
            <!-- <div class="row">
                <input type="file" name="file" id="pic" />
                <label for="file" class="btn-1">Upload a Picture!</label>
            </div> -->
            
            <!-- Issue Type -->
            <h2>Issue Type</h2>
            <select name="issue-type" id="issue-type" class="row">
                <option value="broken bench">Broken Bench</option>
                <option value="electrical">Electrical</option>
                <option value="other">Other</option>
            </select>



            <!-- Submit Button -->
            <div class="submit-container row">
                <button type="button" onclick="addIssue()">SUBMIT ISSUE</button>
            </div> 
        </form>
    </body>
</html>

<?php

    } else {
    //   Redirect to Dashboard
    header('Location: dashboard_page.php');
    }
?>