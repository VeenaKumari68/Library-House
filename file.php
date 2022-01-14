<?php include('../university/config/constants.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/logo.png" sizes="200x200">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Software</title>
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
  font-size: 25px;
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
  min-width: 170px;
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
  background-image: url("images/software.jpg");
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
    <h2 id="headnews">Introduction To Software Engineering</h2>
    <HR width="30%" align='center' size="8"color='purple'>
    <HR width="20%" align='center' size="8"color='orange'>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Beginning Software Engineering by Rod Stephen.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Beginning Software Engineering by Rod Stephen
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Beginning Software Engineering by Rod Stephen.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Software Engineering A Practitioners Approach.jpg"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Software Engineering A Practitioners Approach
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/Software Engineering A Practitioners Approach.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Software Engineering and Development.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Software Engineering and Development
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Software Engineering and Development.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Software Engineering by Chirstien faulkner.png"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Software Engineering by Chirstien faulkner
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
         <br><br><a class="pre" href="books/Software Engineering by Chirstien faulkner.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

 <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Software Engineering by John P.Flynt.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Software Engineering by John P.Flynt
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Software Engineering by John P.Flynt.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>
     <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Software Engineering by Sommerville.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Software Engineering by Sommerville
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Software Engineering by Sommerville.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>
     

<div class="clr"></div>
</section>
<br>
<hr>

<section>
    <h2 id="headnews">Artificial Intelligence</h2>
    <HR width="30%" align='center' size="8"color='purple'>
    <HR width="20%" align='center' size="8"color='orange'>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Advanced Artificial Intelligence.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Advanced Artificial Intelligence
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Advanced Artificial Intelligence.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Artificial Intelligence Illuminated.jpg"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Artificial Intelligence Illuminated
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/Artificial Intelligence Illuminated.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Advanced DataMining Techniques.png"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Advanced DataMining Techniques
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/Advanced DataMining Techniques.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Artificial Intelligence by Margaret A.Boden.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Artificial Intelligence by Margaret A.Boden
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Artificial Intelligence by Margaret A.Boden.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

    
     <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Artificial Intelligence by Mixhael C. Harris.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Artificial Intelligence by Mixhael C. Harris
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Artificial Intelligence by Mixhael C. Harris.pdf" target="_blank" style="color: black">Preview</a></p>
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
    <h2 id="headnews">Data Structures</h2>
    <HR width="30%" align='center' size="8"color='purple'>
    <HR width="20%" align='center' size="8"color='orange'>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Data Structure and Algorithms  in Java Robert lafore.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Data Structure and Algorithms  in Java Robert lafore
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Data Structure and Algorithms  in Java Robert lafore.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Data Structures and Algorithms in JAVA.png"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Data Structure and Algorithms in JAVA
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/Data Structure and Algorithms in JAVA.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Data Structures and Algorithms-DSA.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Data Structures and Algorithms-DSA
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Data Structures and Algorithms-DSA.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

    
     <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/SCHAUMS Outline of Data Structures with JAVA.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>SCHAUMS Outline of Data Structures with JAVA
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/SCHAUMS Outline of Data Structures with JAVA.pdf" target="_blank" style="color: black">Preview</a></p>
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
    <h2 id="headnews">DataBase</h2>
    <HR width="30%" align='center' size="8"color='purple'>
    <HR width="20%" align='center' size="8"color='orange'>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Beginning PLSQL by Donald Bales.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Beginning PLSQL  by Donald Bales
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Beginning PLSQL  by Donald Bales.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/My SQL Database.jpg"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>My SQL Database
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/My SQL Database.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Oracle 11G  by Joan Casteel.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Oracle 11G by Joan Casteel
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Oracle 11G by Joan Casteel.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>

    
     <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Oracle Database 11g PLSQL.jpg" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Oracle Database 11g PLSQL
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Oracle Database 11g PLSQL.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>
<div class="clr"></div>
</section>
<br>
<hr>

<section>
    <h2 id="headnews">Software Construction And Development</h2>
    <HR width="30%" align='center' size="8"color='purple'>
    <HR width="20%" align='center' size="8"color='orange'>
    <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Global Software Development.png" width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Global Software Development
        <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        <br><br><a class="pre" href="books/Global Software Development.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
    </div>
    </div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="books/Model-Driven Software Development.png"  width="250px" height="300px">
    </div>
    <div class="flip-card-back">
      <p>Model-Driven Software Development
       <br><br>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
       <br><br><a class="pre" href="books/Model-Driven Software Development.pdf" target="_blank" style="color: black">Preview</a></p>
    </div>
  </div>
</div>


<div class="clr"></div>
</section>



<div class="clr"></div>
</section>


</body>
</html>

