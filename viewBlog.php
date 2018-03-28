<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> Clarissa's Abroad Blog! </title>
    <style type = "text/css">

            .left  { width: 70%;
                     float: left }
            .right { width: 30%;
                     float: right }
            .table { position: absolute;
                     top: 10em;
                     left: 2em;
                     width: 80%;
                     margin-left: auto;
                     margin-right: auto }
    </style>
  </head>

  <body>
    <div class = "table">
      <?php
        $entryCount = "count.txt";
        if (!file_exists($entryCount)) { //redirect to login.html if no entries exist
          header( 'Location: login.html' );
        }
        $countArr = file($entryCount);
        $numEntries = $countArr[0]

        for ($i=$numEntries; $i > 0 ; $i--) {

          /* Get content for each entry */
          $filename = "title_" + $i + ".txt";
          $fp = fopen($filename, 'r');
          $titleArr = file($filename);

          $filename = "date_" + $i + ".txt";
          $fp = fopen($filename, 'r');
          $dateArr = file($filename);

          $filename = "body_" + $i + ".txt";
          $fp = fopen($filename, 'r');
          $bodyArr = file($filename);

          echo "<div class = 'left'>";
          /* Format entry date (<h2>) */
          $date = "";
          foreach ($dateArr as $key => $value) {
            $date += $value;
          }
          echo "<h3>", $date, "</h3>";

          /* Format entry title (<h2>) */
          $title = "";
          foreach ($titleArr as $key => $value) {
            $title += $value;
          }
          echo "<h2>", $title, "</h2>";

          /* Format entry body (<p>) */
          $body = ""
          foreach ($bodyArr as $key => $value) {
            $body += $value;
          }
          echo "<p>", $body;
          echo "<br>Sincerely<br>";
          echo "<br>Clarissa Phillips<br></p>";
          echo "<br><br><hr>";
          echo "</div>";
        }
      ?>
      <div class = 'right'>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="#archive">Archives</a></li>
          <ul>
            <li><a href="#january">January 2018</a></li>
            <li><a href="#february">February 2018</a></li>
          </ul>
        </ul>
      </div>

