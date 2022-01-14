<?php include('../university/config/constants.php'); ?>
<html>
<head>
	 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png" href="images/logo.png" sizes="200x200">
   <link rel="stylesheet" type="text/css" href="css/book.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Special Edition</title>
</head>

<body>
<header class="header" style="background-color: rgba(1,1,0,.1);">
    <div class="containernav"> 
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
      <a href="file.php">MATHEMATICS</a>
    </div>
  </div> 
  <a href="faq.php">FAQ's</a>
     <a href="logn.php">REGISTER</a>         
    </nav>
   </div>
</header>
 <section class="book-search text-center">
        <div class="container-search">
            <form action="search.html" method="POST">
            <input type="search" name="search" placeholder="Search for book...">       
            </form>
        </div>
</section>

 <div class="container"> 
   <div id="alerts"></div>
   <h2>SPECIAL EDITION</h2>


<div class="productcont">
        <div class="product">
          <img class="cover" src="images/1.jpg" width="150px" height="200px"><br>
            <h3 class="productname">Five Queen's Road</h3>
             <cite class="author">By Sorayya Khan</cite>
            <p>Dina Lal, a Hindu resident of Lahore, refuses to leave his city when so many of his community are fleeing. Against the better judgment of his wife, he purchases Five Queen's Road from a departing Englishman.</p>
            <p class="price">585</p>
            <button class="addtocart">Add To Cart</button>
        </div>

        <div class="product">
          <img class="cover" src="images/2.jpg" width="150px" height="200px"><br>
            <h3 class="productname">The Kite Runner</h3>
            <cite class="author">By Khaled Hosseini</cite>
            <p>The novel is about two boys growing up in Afghanistan and how their friendship shapes the rest of their lives. As a boy, Amir witnesses the rape of his servant and illegitimate half-brother, Hassan.</p>
            <p class="price">899</p>
            <button class="addtocart">Add To Cart</button>
        </div>
        <div class="product">
          <img class="cover" src="images/3.jpg" width="150px" height="200px"><br>
            <h3 class="productname">The Little Prince</h3>
            <cite class="author">By Antoine de Saint-Exupéry</cite>
            <p>A little prince meets a pilot stranded in the desert. The prince tells the pilot that he was born on an asteroid and he recounts many strange encounters from his travels.</p>
            <p class="price">799</p>
            <button class="addtocart">Add To Cart</button>
        </div>
  </div>
  <br>
  <div class="productcont">
        <div class="product">
          <img class="cover" src="images/6.jpg" width="150px" height="200px"><br>
            <h3 class="productname">Burnt Shadows</h3>
            <cite class="author">By Kamila Shamsie</cite>
            <p>In the final days of the World War II in Japan, following to India on the brink of partition in 1947, to Pakistan in the early 1980s then to New York after 9/11 and Afghanistan in the wake of the ensuing US bombing.</p>
            <p class="price">505</p>
            <button class="addtocart">Add To Cart</button>
        </div>
        <div class="product">
          <img class="cover" src="images/5.jpg" width="150px" height="200px"><br>
            <h3 class="productname">The Fault In Our Stars</h3>
            <cite class="author">By John Green</cite>
            <p>The story of Hazel Grace Lancaster, a 16 year old girl who has had cancer for three years, and Augustus 'Gus' Waters, a 17 year old boy who's now in remission, and once had a tumour in his leg.</p>
            <p class="price">850</p>
            <button class="addtocart">Add To Cart</button>
        </div>
        <div class="product">
          <img class="cover" src="images/4.jpeg" width="150px" height="200px"><br>
            <h3 class="productname">Harry Potter</h3>
            <cite class="author">By J. K. Rowling</cite>
            <p>The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. </p>
            <p class="price">459</p>
            <button class="addtocart">Add To Cart</button>
        </div>
        </div>

        
  <div  class="container">
        <div class="cart-container">
          <h2>Cart</h2>
          <table>
            <thead>
              <tr>
              <th><strong>Book Name</strong></th>
              <th><strong>Price</strong></th>
            </tr>
            </thead>
            <tbody id="carttable">
            </tbody>
          </table>
          <hr>
          <table id="carttotals">
            <tr>
              <td><strong>Product</strong></td>
              <td><strong>Total</strong></td>
            </tr>
            <tr>
              <td>x <span id="itemsquantity">0</span></td>
             
              <td>Rs.<span id="total">0</span></td>
            </tr></table>

            
          <div class="cart-buttons">  
            <button id="emptycart">Empty Cart</button>
            <button id="checkout"><a href="order.php" style="text-decoration: none; color: white">  Checkout </a></button>
          </div>
        </div>
</div>

<script>
  /* get cart total from session on load */
updateCartTotal();

/* button event listeners */
document.getElementById("emptycart").addEventListener("click", emptyCart);
var btns = document.getElementsByClassName('addtocart');
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function() {addToCart(this);});
}

/* ADD TO CART functions */

function addToCart(elem) {
    //init
    var sibs = [];
    var getprice;
    var getproductName;
    var cart = [];
     var stringCart;
    //cycles siblings for product info near the add button
    while(elem = elem.previousSibling) {
        if (elem.nodeType === 3) continue; // text node
        if(elem.className == "price"){
            getprice = elem.innerText;
        }
        if (elem.className == "productname") {
            getproductName = elem.innerText;
        }
        sibs.push(elem);
    }
    //create product object
    var product = {
        productname : getproductName,
        price : getprice
    };
    //convert product data to JSON for storage
    var stringProduct = JSON.stringify(product);
    /*send product data to session storage */
    
    if(!sessionStorage.getItem('cart')){
        //append product JSON object to cart array
        cart.push(stringProduct);
        //cart to JSON
        stringCart = JSON.stringify(cart);
        //create session storage cart item
        sessionStorage.setItem('cart', stringCart);
        addedToCart(getproductName);
        updateCartTotal();
    }
    else {
        //get existing cart data from storage and convert back into array
       cart = JSON.parse(sessionStorage.getItem('cart'));
        //append new product JSON object
        cart.push(stringProduct);
        //cart back to JSON
        stringCart = JSON.stringify(cart);
        //overwrite cart data in sessionstorage 
        sessionStorage.setItem('cart', stringCart);
        addedToCart(getproductName);
        updateCartTotal();
    }
}
/* Calculate Cart Total */
function updateCartTotal(){
    //init
    var total = 0;
    var price = 0;
    var items = 0;
    var productname = "";
    var carttable = "";
    if(sessionStorage.getItem('cart')) {
        //get cart data & parse to array
        var cart = JSON.parse(sessionStorage.getItem('cart'));
        //get no of items in cart 
        items = cart.length;
        //loop over cart array
        for (var i = 0; i < items; i++){
            //convert each JSON product in array back into object
            var x = JSON.parse(cart[i]);
            //get property value of price
            price = parseFloat(x.price.split('PKR')[0]);
            productname = x.productname;
            //add price to total
            carttable += "<tr><td>" + productname + "</td><td>" + x.price.split('')[0]+ x.price.split('')[1]+ x.price.split('')[2] + "</td></tr>";
            total += price;
        }
        
    }
    //update total on website HTML
    document.getElementById("total").innerHTML = total.toFixed(0);
    //insert saved products to cart table
    document.getElementById("carttable").innerHTML = carttable;
    //update items in cart on website HTML
    document.getElementById("itemsquantity").innerHTML = items;
}
//user feedback on successful add
function addedToCart(pname) {
  var message = pname + " was added to the cart";
  var alerts = document.getElementById("alerts");
  alerts.innerHTML = message;
  if(!alerts.classList.contains("message")){
     alerts.classList.add("message");
  }
}
/* User Manually empty cart */
function emptyCart() {
    //remove cart session storage object & refresh cart totals
    if(sessionStorage.getItem('cart')){
        sessionStorage.removeItem('cart');
        updateCartTotal();
      //clear message and remove class style
      var alerts = document.getElementById("alerts");
      alerts.innerHTML = "";
      if(alerts.classList.contains("message")){
          alerts.classList.remove("message");
      }
    }
}
</script>


</body>
</html>