<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<head>
<style>

#myVideo {
 position: absolute;
  top: 0;
  left: 0;
  z-index: -100;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

</style>
</head>
<?php $title="Bloodbank | home page"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">

   <?php require 'message.php'; ?>


   <video autoplay muted loop id="myVideo">
      <source src="video.mp4" type="video/mp4">
   </video>

    <?php require 'footer.php'; ?>
      

</body>
</html>