<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/logo.png" sizes="200x200">
    <link rel="stylesheet" href="../css/all.min.css">
    
    
 <title>Admin Panel</title>
<style>

@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: 'Nunito', sans-serif;
}
body {
    background: #f3f4f8;
    color: #374049;

}

.wrapper2 {
    position: fixed;
    left: 0;
    width: 250px;
    height: 100%;
    background: #fada3a;
    box-shadow:1px 1px 10px rgba(0, 0, 0, 0.26);
}
.wrapper2 .navbar {
    position: relative;
}

.title-1
{
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    font-size: 20px;
    font-style: normal;
    margin-top: 16px;
    color:#374049;
    font-family: 'Share Tech Mono', monospace;

}


.wrapper2 .navbar .profile_wrap {
    padding: 25px;
    text-align: center;
}
.wrapper2 .navbar .profile_wrap .profile_img {
    width: 70px;
    margin: 0 auto 10px;
    display: block;
}
.wrapper2 .navbar .profile_wrap .profile_img img {
    width: 100%;
}
.wrapper2 .navbar .profile_wrap .profile_info .name {
    font-size: 17px;
    text-transform: capitalize;
    font-weight: 800;
    color: #374049;
}
.wrapper2 .navbar .profile_wrap .profile_info .role {
    font-weight: 600;
    font-size: 15px;
    color: #90959b;
}

.wrapper2 .navbar ul 
{
    padding: 10px 40px;
}
.wrapper2 .navbar ul li > a {
    display: block;
    position: relative;
    font-size: 18px;
    padding: 15px;
    height: 50px;
    color: #000000;
    font-weight: 600;
    transition: all 2s ease;
  
}
.wrapper2 .navbar ul li a span.icon {
    margin-right: 10px;
}

.wrapper2 .navbar ul li a > span {
    display: inline-block;
}




a.active .icon,
a:hover .icon
{
    color: #ffad41;
}
a.active .title,
a:hover .title
{
    color: #374049;
    font-weight: 800;
}



.navbar ul li:nth-child(1) > a:hover .icon
{
    color:#01ec3f;
}
.navbar ul li:nth-child(3) > a:hover .icon
{
    color: royalblue;
}
.navbar ul li:nth-child(4) > a:hover .icon
{
    color: #ff375c;
}
.navbar ul li:nth-child(5) > a:hover .icon
{
    color: #41ffed;
}
.navbar ul li:nth-child(6) > a:hover .icon
{
    color: #ff5100;
}
.navbar ul li:nth-child(7) > a:hover .icon
{
    color: #e65aff;
}
.navbar ul li:nth-child(8) > a:hover .icon
{
    color: #ff4141;
}
section{
    margin-left: 22%;
}
.col-4{
  width: 20%;
  border-radius: 4px;
  box-shadow:  5px 5px 20px 5px rgba(0,0,0,0.27);
  margin: 2%;
  padding: 2%;
  text-align: center;
  float: left;  
}
h1{
    font-size: 40px;
}
input[type="search"]{
    width: 70%;
    margin-left: 15%;
    outline: none;
    border:none;
    padding: 0.5%;
    border-radius: 5px;
    border:2px solid black;
}
</style>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Our Progress And User's Satisfication"
	},
	data: [{        
		type: "line",
      	indexLabelFontSize: 16,
		dataPoints: [
			{ y: 450 },
			{ y: 414},
			{ y: 520, indexLabel: "\u2191 highest",markerColor: "red", markerType: "triangle" },
			{ y: 460 },
			{ y: 450 },
			{ y: 500 },
			{ y: 480 },
			{ y: 480 },
			{ y: 410 , indexLabel: "\u2193 lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
			{ y: 500 },
			{ y: 480 },
			{ y: 510 }
		]
	}]
});
chart.render();

}
</script>

</head>
<body>
<div class="wrapper2">

    <div class="navbar">
             <div class="profile_wrap">
            <div class="profile_img">
                <img src="../images/Avtar.png" alt="" style="border-radius: 50%">
            </div>
            <div class="profile_info">
                <h2 class="name">ADMINISTRATOR</h2>
                <p class="role">Admin</p>
            </div>
        </div>


        <ul>
            <li>
                <a href="Dashboard.php" class="active">
                    <span class="icon"><i class="fa fa-tachometer-alt"></i></span>
                    <span class="title_2">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="manage-admin.php">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <span class="title_2">Admin</span>
                </a>
            </li>
            <li>
                <a href="manage-book.php">
                    <span class="icon"><i class="far fa-file-alt"></i></span>
                    <span class="title_2">Books</span>
                </a>
            </li>
            <li>
                <a href="manage-order.php">
                    <span class="icon"><i class="fa fa-link"></i></span>
                    <span class="title_2">Orders</span>
                </a>
            </li>

            <li>
                <a href="http://localhost/phpmyadmin/">
                    <span class="icon"><i class="fa fa-database"></i></span>
                    <span class="title_2">Database</span>
                </a>
            </li>
            <li>
                <a href="reviews.php">
                    <span class="icon"><i class="fa fa-users"></i></span>
                    <span class="title_2">Reviews</span>
                </a>
            </li>
            <li>
                <a href="http://localhost//university/">
                    <span class="icon"><i class="fa fa-globe"></i></span>
                    <span class="title_2">Website</span>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <span class="icon"><i class="fa fa-cog"></i></span>
                    <span class="title_2">Logout</span>
                </a>
            </li>
            </ul>
    </div>

</div>


<section>
    <br>
    <input type="search" name="search" placeholder="search...">
    <br><br><br>
    <div id="chartContainer" style="height: 300px; max-width: 920px; margin: 0px auto;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <br><br>
    <div class="col-4 text-center">
        <h1 style="color:#510080">3</h1><br>
        Admins     
    </div>
    <div class="col-4 text-center">
        <h1 style="color: #00FA9A">7</h1><br>
        Books      
    </div>
    <div class="col-4 text-center">
        <h1 style="color: #FFA500">3</h1><br>
        Orders     
    </div>
    <div class="col-4 text-center">
        <h1 style="color: #DC143C">Rs.2707</h1><br>
        Revenue     
    </div>

    <div class="clearfix"></div>
</section>

</body>
</html>