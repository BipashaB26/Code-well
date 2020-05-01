<!DOCTYPE html>
<html>
<head>
<title>Welcome Admin | IGU | Kolkata</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body  bgcolor="#CCCCCC" background="HD-Wallpaper-Book-Backgrounds.jpg">

<div class="topnav" id="myTopnav">
  <a href="adminhome.php" class="active">Home</a>
    <div class="dropdown">
    <button class="dropbtn">Course 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   <a href="insert_CRS_MSTR.php">Add Course </a>
      <a href="search_CRS_MSTR.php">Edit Course </a>
      <a href="display_CRS_MSTR.php">Course Details</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Course combination
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   <a href="insert.php">Add Course  combination</a>
      <a href="search.php">Edit Course combination </a>
      <a href="display.php">Course combination Details</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Cutt-off Marks 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   <a href="insert_cutoff.php">Add Cutt-off Marks</a>
      <a href="search_cutoff.php">Edit cutt-off marks</a>
      <a href="display_cutoff.php">Cutt-off Details</a>
    </div>
  </div> 
    <div class="dropdown">
    <button class="dropbtn">Form Price
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   <a href="insert_form_price.php">Add Form price</a>
      <a href="search_form_price.php">Edit Form Price</a>
      <a href="display_form_price.php">Form Price Details</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Important Dates 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   <a href="IMP_insert.php">Add Important dates</a>
      <a href="imp_search.php">Edit Important dates</a>
      <a href="IMP_display2.php">Important dates Details</a>
    </div>
  </div> 
   <a href="start12.php" class="active">Log Out</a>



</div>
<table>
<thead>
<tr >
<th>
<svg height="130" width="500">
<defs>
<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
<stop offset="0%" style="stop-color:rgba(32,113,199,1.00); stop-opacity:1"/>
<stop offset="100%" style="stop-color:rgbrgba(0,0,0,1.00); stop-opacity:1"/>
</linearGradient>
</defs>
<ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)"/>
<text fill="#FFFFFF" font-size="45" font-family="germania-one" x="50" y="86">IGU</text>
Sorry your browser did not support logo
</svg></th>

<th><font size="+5" >Welcome!</font></th>
</tr>
</thead>
</table>

<br><br><br><br><br><br><br><br><br>
<h1 align="center"><mark><font color="#FF0004">ADMISSIONS 2018 </font></mark></h1>






</body>
</html>