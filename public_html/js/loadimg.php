<?php

  function excess($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
      if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
    }
    return $result;
  }
  $dir = "public_html/img"; 
  $files = scandir($dir); 
  $files = excess($files); 
?>

<?php for ($i = 0; $i < count($files); $i++) { ?>
  <a href = "./public_html/comment.php"><img src="<?=$dir."/".$files[$i]?>" width ="250px">
 <!-- <img src="<?=$dir."/".$files[$i]?>" width="250px" alt="" />-->
  <?php if (($i + 1) % 4 == 0) { ?><br /><?php } ?>
<?php } ?>