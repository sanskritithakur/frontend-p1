<!DOCTYPE html>
<html>
<head>
<title>Age Checker</title>
<?php
require_once 'inc/head.php';
// require_once 'inc/header.php';
?>


<!-- <style>
    nav{
        position:static;
    }
</style> -->

</head>
<body>





<div class="age-conform-bi">



<!-- <div CLASS="v-logo ">
    <h5 class="h5-lite vind-h5">VINDHYACHAL</h5>
    <div></div>
<h5 class=" bottom-of-logo">DISTILLERIES</h5>
</div> -->

<div class="v-logo-container">

<div CLASS="v-logo ">
  
</div>



<h5 class="v-logo-top-heading">WELCOME TO VINDHYACHAL DISTILLERIES, MADHYA PRADESH'S #1 INTEGRATED ALCOBEV PLAYER.</h5>
<h5  class="v-logo-top-bottom">CAN WE PLEASE CONFIRM YOUR AGE?</h5>

<div class="age-conform-form">


<div>

<h5>Month</h5>
<input type="text" class="age-input form-box-decoration" style="width:141px"></input>
</div>




<div>

<h5>Days</h5> 
<input type="text" class="age-input form-box-decoration" style="width:75px"></input>
</div>





<div>

<h5>Year</h5>
<input type="text" class="age-input form-box-decoration" style="width:141px"></input>
</div>







</div>






<button class="age-submit"  onclick="window.location.href = '<?=$base_url;?>home.php';"  >Submit</button>






</div>

</div>












<?php
// require_once 'inc/footer.php';
require_once 'inc/footer-link.php';
?>