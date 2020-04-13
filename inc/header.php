<!-- <div class="topnav container my_nav_custom" id="myTopnav">
  <div><a href="#home" class=""><div>

  </div></a></div>
  <div><a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a></div>
  
</div> -->
<!-- <style>
   
</style>

</head>
<body> -->

<nav class="">

<div class="vindhyachal-logo-nav"></div>







<div class="nav-menu-item">
  
  <a href="<?=$base_url;?>//home.php" class="myvisitedlink">HOME</a>
  <a id="" href="<?=$base_url;?>//ourcapablity.php" ><label for="our-capablity-selector" class="myvisitedlink1">OUR CAPABILITY</label></a>

  <a  href="<?=$base_url;?>//in-society.php"  class="myvisitedlink-insocity" >IN SOCIETY</a>
  <a href="<?=$base_url;?>//sedex.php" class="myvisitedlink-sedex">SEDEX</a> 



  <!-- <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">CAREERS</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="<?=$base_url;?>//careers.php">LIFE AT VINDHYANCHAL D.</a>
    <a href="<?=$base_url;?>//current_opening.php">CURRENT OPENINGS</a>
  </div>
</div> -->





<!-- <div class="dropdown">
  <button onclick="myFunction1()" class="dropbtn">INVESTORS</button>
  <div id="myDropdown1" class="dropdown-content">
    <a href="<?=$base_url;?>//finances.php">FINANCIALS</a>
    <a href="<?=$base_url;?>//board_of_directors.php">BOARD OF DIRECTORS</a>
  </div>
</div> -->




<div class="dropdown101">
  <button class="dropbtn101 myvisitedlink-car ">CAREERS</button>
  <div class="dropdown-content101">
    <a href="<?=$base_url;?>//careers.php">LIFE AT VINDHYANCHAL D.</a>
    <a  href="<?=$base_url;?>//current_opening.php">CURRENT OPENINGS</a>
    
  </div>
</div>

<div class="dropdown101">
  <button class="dropbtn101  myvisitedlink-investor " style="padding-left:11px">INVESTORS</button>
  <div class="dropdown-content101">
    <a href="<?=$base_url;?>//finances.php">FINANCIALS</a>
    <a  href="<?=$base_url;?>//board_of_directors.php">BOARD OF DIRECTORS</a>
    
  </div>
</div>












  <!-- <a onclick="drop_down()">INVESTORS</a> -->
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  <a href="<?=$base_url;?>//about-us.php" class="myvisitedlink-aboutus" >ABOUT US</a>
</div>
<!-- <i  id="hamburger" onclick="openNav()" class="material-icons hiddenmunu" id="open-button" style="font-size:30px">menu</i> -->
<span style="font-size:20px;cursor:pointer; color:white;" onclick="openNav()" class="resopnsive-menu-bar-nav" id="cross">&#9776; </span>


 </nav>


 <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->









 <div id="mySidenav" class="sidenav">
 
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
 
 
 <a href="<?=$base_url;?>//home.php">HOME</a>
  <a href="<?=$base_url;?>//ourcapablity.php">OUR CAPABILITY</a>
  <a href="<?=$base_url;?>//in-society.php">IN SOCIETY</a>
  <a href="<?=$base_url;?>//sedex.php">SEDEX</a>
 
 
 <button class="dropdown-btn">CAREERS 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container" id="deco">
    <a href="<?=$base_url;?>//careers.php">LIFE AT VINDHYANCHAL D.</a>
    <a href="<?=$base_url;?>//current_opening.php">CURRENT OPENINGS</a>
  </div>
 

  <script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
  </script>

<button class="dropdown-btn1">INVESTORS
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container" id="deco">
    <a href="<?=$base_url;?>//finances.php">FINANCIALS</a>
    <a href="<?=$base_url;?>//board_of_directors.php">BOARD OF DIRECTORS</a>
  </div>
 

  <script>

var dropdown = document.getElementsByClassName("dropdown-btn1");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
  </script>



<a href="<?=$base_url;?>//about-us.php">ABOUT US</a>

</div>


</div>







 <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->











 <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("cross").style.display = "none";

  

}



function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("cross").style.display = "initial";

 

}





</script>





<!-- <script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script> -->


<!-- <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
 
  if (!event.target.matches('.dropbtn')) {
    openDropdown.classList.remove('show');
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show1')) {
        openDropdown.classList.remove('show1');
      }
    }
  }
}
</script> -->