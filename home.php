<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<?php
require_once 'inc/head.php';
require_once 'inc/header.php';
?>
<style>
nav{
    background-color:transparent;
    /* position:absolute; */
    position:fixed!important;
}
@media only screen and (max-width: 600px) {

    nav{
    background-color:black!important;
    position:sticky;
}
}

.myvisitedlink:after {
   
    background-color:white;
   
}
.myNav{
    background-color:black!important;
}


</style>
</head>
<body >

<script>

$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 100) {
	    $("nav").addClass("myNav");;
	  }

	  else{
		  $("nav").removeClass("myNav");  	
	  }
  })
})

</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>





<div class="landing_screen" id="my-nab" >
    <div class="overlay" >
        <div class="center_text"> <h1>MAKERS'S CHOICE</h1>
        <p>Vindhyachal Distilleries Private Limited was incorporated on 7th March 1984 with its Registered Office at Bhopal. 
            It commenced production from 7th<br> October 1987. The total land is over 100 acres.</p>
    <div class="logos">
        <div class="logo1 mylogo"></div>
        <div class="logo2 mylogo"></div>
    </div>    
    </div>
       </div>
</div>

<div class=" part2 " id="myDIV" onscroll="myFunction()">
    <div class="discription">
<div id="specific-margin">
<p class="title-decoration" style="font-weight:400!important">Who we are?</p>
    
    <div id="underline"></div>
</div>
    
    <h3>WE ARE IN ALCOHOL BUSINESS</h3>
<p>Vindhyachal Distilleries Private Limited was incorporated on 7th March 1984 with its Registered Office at Bhopal. It commenced production from 7th October 1987. The total land is over 100 acres. <br><br>The distillery is located in Village Pilukhedi, Tehsil Narsinghgarh, District Rajgarh (Biaora), a backward district of Madhya Pradesh. It is situated on National Highway 12, about 40 km. from Bhopal Airport.</p>
<button onclick="window.location.href = '<?=$base_url;?>//about-us.php';" class="mybutton" >READ MORE<button>
    </div>
    <div class="picture">
        
    </div>
</div>

<!-- part3 -->
<div class=" part3 part3-bg" >
   <div class="overlay row-reverse " id="best-alco-div">
   <div class="discription3  paddingt-35 padding-d3">
<h3>THE BEST ALCOHOL MAKER IN THE CITY.</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
</div>
  <div class="picture2 marginr-80">
      
  </div>

   </div>
</div>
<!-- part4 -->
<div class=" part3 background-black " >
   <div class="overlay1 ">
   <div class="discription3  paddingt-35 padding-d3">
<h3>PRODUCTION CAPACITY</h3>
    <p>We have both automatic and semi-automatic IMFL Bottling Plant. The automatic plant capacity is 240 bottles per minute and semi-automatic plant capacity is 80 bottles per minute.</p>

    <button class="mybutton"  onclick="window.location.href = '<?=$base_url;?>//ourcapablity.php';" >READ MORE<button>
</div>
  <div class="picture2 marginr-80" id="pic-beer-bottle">
      
  </div>

   </div>
</div>




<!-- part5 -->


<div class=" part-5 part5-bg flex-direc-col" >
<h3 class="ourproduct color-w">OUR PRODUCTS</h3>
<p class="color-w font-light">We are presently producing Grain Alcohol from fermentation of both Jowar and Bajra.</p>
<div class="alcohol-display">
<div class="alcohol-box">
<div class="image-container-a bottle-type1"></div>
<h5>Extra Neutral Alcohol (ENA)</h5>
<button class="extra-liq-button" onclick="window.location.href = '<?=$base_url;?>ena.php';"  >READ MORE</button>

</div>
<div class="alcohol-box">
<div class="image-container-a bottle-type2"></div>
<h5>Indian Made Foreign Liquor (IMFL).</h5>
<button class="extra-liq-button" onclick="window.location.href = '<?=$base_url;?>imfl.php';"  >READ MORE</button>
</div>
<div class="alcohol-box">
<div class="image-container-a bottle-type3"></div>
<h5>Country Liquor</h5>
<button class="extra-liq-button" onclick="window.location.href = '<?=$base_url;?>country-liq.php';"  >READ MORE</button>

</div>



</div>
</div>





<div class="footer-div">



<div class="footer-div-link">
  
  <a id="" href="<?=$base_url;?>ourcapablity.php"><label for="our-capablity-selector">OUR CAPABILITY</label></a>

  <a  href="<?=$base_url;?>//in-society.php" >IN SOCIETY</a>
  <a href="<?=$base_url;?>//about-us.php">ABOUT US</a>

  <a href="<?=$base_url;?>//sedex.php">SEDEX</a>
  <a  href="<?=$base_url;?>//careers.php" >CAREERS</a>
 
  <a href="<?=$base_url;?>//contact_us_page.php">CONTACT</a>
</div>

<div class="sns-icons">
<div class="ic-container"><a style="margin-bottom:-4px"><i class="fa fa-facebook"></i></a></div>
<div class="ic-container"><a style="margin-bottom:-4px"><i class="fa fa-linkedin"></i></a></div>
<div class="ic-container"><a style="margin-bottom:-4px"><i class="fa fa-twitter"></i></a></div>


</div>


<h6 class="gila-khedi-h">Gila Khedi, Madhya Pradesh 465667</h6>
<p class="gila-khedi-p">SUPPORT@VINDHYACHAL.COM</p>
<p class="gila-khedi-p">075666 13924</p>
<div class="bottom-horizontal"></div>
<h6 style="  text-align: center; color:white;margin-top:10px;font-weight:100;font-size:17px">@2019 ALL RIGHTS RESERVED. (CREATED BY KRISHNA AGRAWAL FOR HACKERKERNEL)</h6>

</div>






<!-- <script>

$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 100) {
	    $("nav").addClass("myNav");;
	  }

	  else{
		  $("nav").removeClass("myNav");  	
	  }
  })
})

</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> -->



<?php
// require_once 'inc/footer.php';
require_once 'inc/footer-link.php';
?>