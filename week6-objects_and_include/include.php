<!-- Instructions

Create an include file called include.php that has the following features:

a function called printHead() that prints the top of an HTML page with head tags, title, and a top body tag
a function called printFooter() that prints the copyright date and the bottom of an HTML page with end body and HTML tags
variables called $siteTitle and $userName that are set.
I will write a page that imports your include file and calls those functions and prints those variables. -->

<?php

$siteName = "Nathan's Week 6";
$userName = "©Rubeus Hagrid";

  function printHead($name) {
    ?>
    <html>
      <head><title><?php echo $name; ?></title>

      <body>
        <?php
  }

  function printFooter() {
    ?>
    <p>©2020 Nathan Crowther</p>
    </body></html>
    <?php
  }


?>
