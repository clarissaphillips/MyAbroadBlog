<?php
  /* Keep count of blog entries */
  $entryCount = "count.txt";
  if (!file_exists($entryCount)) { // create new file if none exists
    $fp = fopen($entryCount, 'w') or die("can't open file");
    fwrite($fp,"0");
    fclose($fp);
  }
  $numEntry = file($entryCount); //put all elts of file into $numEntry array
  $numEntry[0]++; //increment entry count
  $fp = fopen($entryCount , "w");
  fputs($fp , $numEntry[0]);
  fclose($fp);

  /* Get info from addentry.html form */
  $title = $_POST['title'];
  $body = $_POST['body'];
  $entryNum = $numEntry[0];

  /* Get date and time of entry */
  $date = date('l, F jS, Y h:i A');

  /* Create date, title and entry .txt files */
  $filename = "title_" . $entryNum . ".txt";
  $titleFile = fopen($filename, 'x');
  fputs($titleFile, $title);
  fclose($titleFile);

  $filename = "body_" . $entryNum . ".txt";
  $bodyFile = fopen($filename, 'x');
  fputs($bodyFile, $body);
  fclose($bodyFile);

  $filename = "date_" . $entryNum . ".txt";
  $dateFile = fopen($filename, 'x');
  fputs($dateFile , $date);
  fclose($dateFile);

  header( 'Location: viewBlog.php' );
?>
