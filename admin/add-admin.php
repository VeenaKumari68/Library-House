<?php include('../config/constants.php'); ?>


<html>
<head>
	<link rel="icon" type="image/png" href="../images/logo.png" sizes="200x200">
   <link rel="stylesheet" href="../css/all.min.css">
	<title>Manage Admin Panel</title>
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
                <a href="dashboard.php">
                    <span class="icon"><i class="fa fa-tachometer-alt"></i></span>
                    <span class="title_2">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="manage-admin.php"  class="active">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <span class="title_2">Admin</span>
                </a>
            </li>
            <li>
                <a href="manage-book.php" >
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




<div class="main-content">
<div class="wrapper">
	<br><br><br>
	<h1 align="center">Add Admin</h1>
    <?php 
     if (isset($_SESSION['add'])) 
     {
        echo $_SESSION['add'];  //display session message
        unset($_SESSION['add']);  //remove session message
     }
     ?>

    <form action="" method="POST">
    <input type="text" name="full_name" class="text-field" placeholder="full name" />
    <input type="text" name="username" class="text-field" placeholder="Username" />
    <input type="password" name="password" class="text-field" placeholder="Password" />    
    <input type="submit"  name="submit" class="button" value="Add Admin"/>
    </form>
</div>
</div>

<?php
  if(isset($_POST['submit']))
  {
  	//echo"Button Clicked";


    //get the data from the form 
    $full_name=$_POST['full_name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);//password encrypted

    //sql query to save data into database
    $sql="INSERT INTO tbl_admin SET
    full_name='$full_name',
    username='$username',
    password='$password' 
    ";
   
   //exceuting query and saving data in database
   $res=mysqli_query($conn,$sql)or die(mysqli_error());
   

   //check whether the data is inserted or not and display appropriate message
   if($res==TRUE)
   {
    //echo "Data Inserted";
    //create session variable to display message
    $_SESSION['add']="Admin added Successfully!";
    //redirect page to manage admin
    header("location:".SITEURL.'admin/manage-admin.php');
   }
   else
   {
    //echo "Failed to insert data";
    $_SESSION['add']="Failed to add Admin";
    //redirect page to manage admin
    header("location:".SITEURL.'admin/add-admin.php');
   }


  }
?>


<style>
*{
  box-sizing: border-box;
  font-family: 'Trebuchet MS', sans-serif;   
  margin:0 auto;
}

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
    margin-top: ;
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
    font-weight: ;
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
    font-weight: ;

  
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
form {
    width: 280px;
    height: 260px;
    margin: 50px auto;
    background: white;
    border-radius: 3px;
    box-shadow: 0 0 10px rgba(0,0,0, .4); 
    text-align: center;
    padding-top: 1px;
}

form.register{                                                                              /* Register form height */
    height: 420px;
}

form .text-field {                                                                          /* Input fields; Username, Password etc. */
    border: 1px solid #a6a6a6;
    width: 250px;
    height: 50px;
    border-radius: 3px;
    margin-top: 10px;
    padding-left: 10px;
    outline: none;
}

form .text-field:focus {
    box-shadow: inset 0 0 2px rgba(0,0,0, .3);
    background: white;
}

form .button {                                                                              /* Submit button */
    border-radius: 3px;
    width: 240px;
    height: 40px;
    margin-top: 20px;
    cursor: pointer;
    border:none;
    background: #FFDB58;
    font-weight: bold;
    font-size: 13px;
}

</style>
</body>
</html>