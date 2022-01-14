<?php include('../university/config/constants.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>FAQ's</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/logo.png" sizes="200x200">
    <link rel="stylesheet" type="text/css" href="css/faq.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
</head>
<body>

  <header class="header" style="background-color: rgba(1,1,0,.1);">
    <div class="container2"> 
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
  </div> 
  <a href="faq.php">FAQ's</a>
     <a href="logn.php">REGISTER</a>         
    </nav>
   </div>
</header>
<img src="images/faqs.jpg" height="400px" width="100%">
<h2 align="center">Frequently Asked Questions</h2>
   <br><br>
<section>
<button class="accordion"> What hours is the the Library open ?</button>
<div class="panel">
Customer queries are answered during normal working hours - though hours may vary occasionally dependent upon staffing commitments: Monday - Friday from 09:00 to 17:00
</div>

<button class="accordion">Can I purchase a digital version of the book ?</button>
<div class="panel">
 We are providing our services for free download and our special edition so once you have purchased the eBook it is yours after the payment through our website or you can also download our free trail books.
</div>

<button class="accordion">How many books does this Library have ? </button>
<div class="panel">
  There is a vast collection of books around 200 in different categories and further we will try our best to increase out this number for our user’s ease.
</div>
<button class="accordion">What type of books this Library have ?</button>
<div class="panel">
We currently have included technical and non-technical books both of your interest so you can grab knowledge of your mean with the entertainment too.
</div> 

<button class="accordion">What are the steps to buy a book from this Library ?</button>
<div class="panel">
   Steps are simple; first choose out the book you want to buy then place your order with the fulfillment of the required fields and then you will soon receive your confirmation.
</div>
</section>
<br><br>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

  <h2 align="center">For Further Query, Contact Us</h2>
  <br><br><br>

    <section id="contact-form">
  <form id="contact" name="contact" accept-charset="utf-8">
    <label><input name="name" type="text" placeholder="Name"/></label>
    <label><input name="email" type="email" placeholder="Email"/></label>
    <label><input name="country" type="country" placeholder="country" /></label>
        
    <label><textarea name="message" placeholder="Message"></textarea></label>
    <input name="submit" type="submit" value="Send"/>
  </form>
  <aside>
<img src="images/Googlemap.jpg" width="450px" height="380px" id="map">
</aside>
</section>


</body>
</html>