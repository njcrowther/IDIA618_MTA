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

    <?php include 'newIssue_form.php';?>
       
    </body>
</html>

<?php

    } else {
    //   Redirect to Dashboard
    header('Location: dashboard_page.php');
    }
?>