<?php
    $zip = new ZipArchive;
    $res = $zip->open('file.zip');
    if ($res === TRUE) {
      $zip->extractTo('/var/www/');//user defined path
      //$zip->extractTo(dirname(__FILE__)); //directory path using php file
      $zip->close();
      echo 'Files Unzipped!';
    } else {
      echo 'ERROR!';
    }
?>