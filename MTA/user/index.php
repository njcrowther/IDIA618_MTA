<html class="no-js" lang="en">
    <head>
        <title>MTA Issue Submitter</title>

        

        <!-- * Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- * Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <!-- JS -->
        <script src="js/main.js"></script>
        <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

        
        
    </head>
    
    <body class="container">
        <!-- Navigation -->
        <div class="row nav">
            <h1>MTA USER PORTAL</h1>
        </div>

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