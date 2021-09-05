
<?php

include 'dbcon.php';


if(!empty($_GET['file'])){
  $filename=basename($_GET['file']);
  $filepath='pdf/'.$filename;
  if(!empty($filename) && file_exists($filepath)){
    header("Cache-Control: public");
    header("Content-Description: FILE Transfer");
    header("Content-Disposition: attachment; filename=$filename");
    header("Content-Type: application/pdf");
    header("Content-Transfer-Emcoding: binary");

    readfile($filepath);
    exit;
  }else{
    ?>
    <script>
      alert("This file doesn't exist");
    </script>
    <?php
  }
}



?>