<?php include('../university/config/constants.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="images/logo.png" sizes="200x200">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Languages</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: "Trebuchet MS";
}
.header{
     width: 100%;
     font-size: 18px;
     color: #ffffff;
     background-color: rgba(0,0,0,.1);
     position:fixed ;
     top: 0;
     left: 0;
     z-index: 1;
     padding: 0px;
}
  .clr{
    clear: both;
}
 /* @media screen and (mix-blend-mode: difference) {
    .header {
      background-color: white;
      color: #595959;
      mix-blend-mode: difference;
    }

  } */
 .container{
  display: inline-flex;
  margin: auto 5px;
  padding: 10px;
 }
 .logo{
    float: left;
    margin: 0 50px;
}

.logo img{
    width: 30%;
    margin: 0 60px;
   
}
.navbar{
    float: right;
    margin:auto 10px ; 
    margin-left: 330px;
    margin-right: 0px;
    padding:auto 10px ;
}

.navbar a{
    color:white;
    overflow: auto;
    text-decoration: none;
    text-align: center;
    padding: 18px;
    font-size: 25px;

}
.navbar a:hover {
  color: grey;
  background-color: #ffffff;
  border-radius: 4px ;
}
 
.dropdown {
  display: inline-flex;
  overflow: hidden;
}

.dropdown .dropbtn {
  border: none;
  outline: none;
  background-color: inherit;
  font-family: inherit;
  margin:auto 8px;
  color:white;
  overflow: hidden;
  text-decoration: none;
  text-align: center;
  padding:  18px;
  font-size: 22px;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  color: grey;
  background-color: #ffffff;
  border-radius: 4px ;
}

.dropdown-content {
  display: none;
  position: absolute;
  background: rgba(255, 255, 255, 0.25);
  margin-top: 55px;
  margin-left: 8px;
  padding: auto 20px;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  font-size: 20px;
  padding: 12px 12px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.bg {
  /* The image used */
  background-image: url("images/lang.jpg");
  width: 100%;
  /* Full height */
  height: 70%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

section{
 margin:10px 30px 10px 30px;
}
#headnews {
  text-align: center;
  font-family: "Trebuchet MS";
  color: black;
  font-size: 35px;
  padding: 20px;
  margin:auto 0; 
}
.flip-card {
  background-color: transparent;
  display: inline-table;
  margin:15px 30px 5px 30px;
  width: 250px;
  height: 300px;
}
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.9s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.flip-card-front {
  background-color: #bbb;
  cursor: pointer;
  color: black;
}

.flip-card-back {
  width:250px;
   height:300px;
  background: linear-gradient(to right, #000000, #434343);
  color: white;
  cursor: pointer;
  transform: rotateY(180deg);
}
.flip-card-back p{
   text-align: center;
   margin: 10px;
   line-height: 1.26em;
   padding: 20px;
   font-size: 18px;
   font-family: "Trebuchet MS";
}
.flip-card-back a{
  color: #DAA520;
  text-decoration: none;
}
.pre{
  cursor: pointer;
  background: white;
  padding: 10px;
  margin: 5px;
}
.checked {
  color: orange;
}

</style>
</head>
<body bgcolor="lightgrey">
<header class="header" style="background-color: rgba(1,1,0,.1);">
    <div class="container"> 
    <img class="logo" src="images/logo.png" alt="logo" width="80px" height="70px">
   <nav class="navbar">
    <a href="index.php">HOME</a>   
     <a href="book.php">SPECIAL EDITION</a>   
     <div class="dropdown">
    <button class="dropbtn">CATEGORY
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="file.php">SOFTWARE</a>
      <a href="file2.php">HARDWARE</a>
      <a href="file5.php">ENGLISH</a>
       <a href="file3.php">LANGUAGE</a>
      <a href="file4.php">MATHEMATICS</a>
    </div>
      <a href="faq.php">FAQ's</a>
  </div> 
     <a href="logn.php">REGISTER</a>         
    </nav>
   </div>
</header>
        <div class="clr"></div>
    </div>   
</nav>

<div class="bg"></div>


<section>
    <h2 id="headnews">PYTHON</h2>
    <HR width="30%" align='center' size="8"color='purple'>
    <HR width="20%" align='center' size="8"color='orange'>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Beginning Python From Novice to Professional 2ndEdtion.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Beginning Python From Novice to Professional 2ndEdtion
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Beginning Python From Novice to Professional 2ndEdtion.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Dive into Python 3.jpg"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Dive into Python 3
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/Dive into Python 3.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Python Notes For Professionals.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Python Notes For Professionals
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Python Notes For Professionals.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

    
     <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Python Programming by Adam Stewart.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Python Programming by Adam Stewart
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Python Programming by Adam Stewart.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>
<div class="clr"></div>
</section>

<div class="clr"></div>
</section>
<br>
<hr>


<section>
    <h2 id="headnews">JAVA</h2>
    <HR width="30%" align='center' size="8"color='purple'>
    <HR width="20%" align='center' size="8"color='orange'>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Ivor Horton's Beginning Java 2, JDK 5 Edition.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Ivor Horton's Beginning Java 2, JDK 5 Edition
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Ivor Horton's Beginning Java 2, JDK 5 Edition.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Java Programming for Android Developers for Dummies.jpg"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Java Programming for Android Developers for Dummies
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/Java Programming for Android Developers for Dummies.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Java The Complete Reference Seventh Edition.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Java The Complete Reference Seventh Edition
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Java The Complete Reference Seventh Edition.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

    
    
<div class="clr"></div>
</section>



<div class="clr"></div>
</section>
<br>
<hr>
<section>
    <h2 id="headnews">HTML</h2>
    <HR width="30%" align='center' size="8"color='purple'>
    <HR width="20%" align='center' size="8"color='orange'>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Html and CSS design and build webistes.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Html and CSS design and build webistes
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Html and CSS design and build webistes.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/HTML,The Complete Reference.jpg"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>HTML,The Complete Reference
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/HTML,The Complete Reference.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/learn to code HTML and CSS develop and style website.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>learn to code HTML and CSS develop and style website
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/learn to code HTML and CSS develop and style website.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

    
     
<div class="clr"></div>
</section>

<div class="clr"></div>
</section>
<br>
<hr>
<section>
    <h2 id="headnews">PHP</h2>
    <HR width="30%" align='center' size="8"color='purple'>
    <HR width="20%" align='center' size="8"color='orange'>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Learning PHP, MySQL & JavaScript, 5th Edition.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Learning PHP, MySQL & JavaScript, 5th Edition
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Learning PHP, MySQL & JavaScript, 5th Edition.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/PHP Notes For Professionals.png"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>PHP Notes For Professionals
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/PHP Notes For Professionals.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="book.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Programming Python: Powerful Object-Oriented Programming Fourth Edition by Mark Lutz
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="ResearchPaper.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

    
    
<div class="clr"></div>
</section>
<br>
<hr>
<section>
    <h2 id="headnews">C++</h2>
    <HR width="30%" align='center' size="8"color='purple'>
    <HR width="20%" align='center' size="8"color='orange'>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/A Complete Guide to Programming in C++.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>A Complete Guide to Programming in C++ that will help you to learn alot.
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/A Complete Guide to Programming in C++.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Object Oriented Programming in C++.jpg"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Object Oriented Programming in C++
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/Object Oriented Programming in C++.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>



<div class="clr"></div>
</section>




</body>
</html>



