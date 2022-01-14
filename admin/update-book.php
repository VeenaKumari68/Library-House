<?php include('../config/constants.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="../images/logo.png" sizes="200x200">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
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
                <a href="manage-admin.php">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <span class="title_2">Admin</span>
                </a>
            </li>
            <li>
                <a href="manage-book.php"  class="active">
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
	<h1 align="center">Update Books</h1>

<?php
    //check whether id is set ot not
    if (isset($_GET['id'])) 
    {
       //get details 
       $id = $_GET['id'];

      //sql query to get the selected book
      $sql = "SELECT * FROM tbl_book WHERE id=$id";

      //exceute query	
      $res = mysqli_query($conn, $sql);

      //get values based on query exceuted
      $row2 = mysqli_fetch_assoc($res);

      //get individual values of seleted book
      $title = $row2['title'];
      $description = $row2['description'];
      $price = $row2['price'];
      $current_image = $row2['image_name'];
      $featured = $row2['featured'];
      $active = $row2['active'];

    }
    else
    {
     header('location:'.SITEURL.'admin/manage-book.php');
    }
?>


<form action="" method="POST">

    <input type="text" name="title" class="text-field" placeholder="Book Title" value="<?php echo $title; ?>" />
    <textarea name="description" cols="25" rows="5"  placeholder=Book Author or Book Edition ><?php echo $description; ?></textarea><br><br>
    Select New Image<input type="file" name="image" class="image" placeholder="select" value="<?php echo $image_name; ?>" />
    <input type="number" name="price" class="text-field" placeholder="Book Price" value="<?php echo $price; ?>"/> <br><br>
    Featured 
    <input <?php if ($featured=="Yes") {echo "checked";} ?> type="radio" name="featured" value="Yes"  class="radio" />Yes
    <input <?php if ($featured=="No") {echo "checked";} ?> type="radio" name="featured" value="No" /> No  
    <br><br>
    Active
    <input  <?php if ($active=="Yes") {echo "checked";} ?> type="radio" name="active" value="Yes"  class="radio" />Yes
    <input <?php if ($active=="No") {echo "checked";} ?> type="radio" name="active" value="No" /> No

    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="current_image"
    value="<?php echo $current_image ?>">
    <input type="submit"  name="submit" class="button" value="Update Book"/>
    </form>    

<?php  
    if (isset($_POST['submit'])) 
    {
     //get all details from form
      $id=$_POST['id'];
      $title=$_POST['title'];
      $description=$_POST['description'];
      $price=$_POST['price'];
      $featured=$_POST['featured'];
      $active=$_POST['active'];

     //upload image if selected
     //check whether upload button is clicked or not
      if (isset($_FILES['image']['name'])) 
      {
      	$image_name=$_FILES['image']['name'];
      	  if ($image_name!="") 
      	  {
      	  	$ext = end(explode('.', $image_name));
      	  	$image_name = "Book-Name-".rand(0000,9999).'.'.$ext;
      	  	$src_path = $_FILES['image']['temp_name'];
      	  	$dest_path = "../images/".$image_name;

      	  	$upload = move_uploaded_file($src_path, $dest_path);

      	  	if ($upload==false) 
      	  	{
      	  		$_SESSION['upload']="Failed to Upload";
      	  		header('locartion:'.SITEURL.'admin/manage-book.php');
      	  		die();  
      	  	}
      	  	    //remove image if selected
      	  	    //remove current image if available
      	  	    if ($current_image!=="") 
      	  	    {
      	  	    $remove_path = "..images/".current_image;
      	  	    $remove= unlink($remove_path);

      	  	    	if ($remove==false)
      	  	    	{
      	  	        $_SESSION['removed-failed']="Failed to Remove current Image";
      	  	    	header('locartion:'.SITEURL.'admin/manage-book.php');
      	  	    	die();
      	  	    	}
      	  	    	       
      	  	    }    	  
      	  }
      	
    }
      else
      {
      	$image_name=$current_image;
      }
     
     //update book details in database
      $sql2="UPDATE tbl_book SET 
      title='$title',
      description='$description',
      price='$price',
      image_name='$image_name',
      featured='$featured',
      active='$active'
      WHERE id=$id
      ";
      //exceute query
      $res2=mysqli_query($conn, $sql2);

      if ($res2==true) 
      {
      	$_SESSION['update']="Book Updated Successfully!";
      	header('location:'.SITEURL.'admin/manage-book.php');
      }
      else
      {
      	$_SESSION['update']="Failed to Update";
      	header('location:'.SITEURL.'admin/manage-book.php');
      }

     //redirect to maage-book page	
    }
?>

</div>
</div>    
<style>
*{
  box-sizing: border-box;
  font-family: 'Trebuchet MS', sans-serif;   
  margin:0 auto;
}
form {
    width: 340px;
    height: 430px;
    margin: 30px auto;
    background: white;
    border-radius: 3px;
    box-shadow: 0 0 10px rgba(0,0,0, .4); 
    text-align: center;
    padding-top: 1px;
}

form.register{                                     /* Register form height */
    height: 420px;
}

form .text-field {                                /* Input fields; Username, Password etc. */
    border: 1px solid #a6a6a6;
    width: 260px;
    height: 50px;
    border-radius: 3px;
    margin-top: 10px;
    padding-left: 10px;
    outline: none;
}
textarea{
    height: 70px;
    border: 1px solid #a6a6a6;
    width: 260px;
    border-radius: 3px;
    margin-top: 10px;
    padding-left: 10px;
    outline: none;
}
.radio{
    margin-left: 4%;
    margin-right: 5px;

}
.image{
    margin-left: 30px auto;
    border: 1px solid #a6a6a6;
    padding: 3%;
}
form .text-field:focus {
    box-shadow: inset 0 0 2px rgba(0,0,0, .3);
    background: white;
}
form .button {                                             /* Submit button */
    border-radius: 3px;
    width: 240px;
    height: 40px;
    margin-top: 20px;
    cursor: pointer;
    border:none;
    background: #ffdd00;
    font-weight: bold;
    font-size: 13px;
}
form .button:hover{
    background: #ffcc00;
}
</style>

</body>
</html>