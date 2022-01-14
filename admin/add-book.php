<?php include('../config/constants.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="../images/logo.png" sizes="200x200">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <link rel="stylesheet" href="../css/all.min.css">
    <title>Manage Book Panel</title>
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

<div class="wrapper" style="background-color: white">
    
    <h1 align="center">Add Book</h1>
     
       <?php  
        if (isset($_SESSION['upload'])) 
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
      ?>



    <form action="" method="POST">

    <input type="text" name="title" class="text-field" placeholder="Book Title" />
    <textarea name="description" cols="25" rows="5"  placeholder="Book Author or Book Edition" ></textarea><br><br>
    Select Image<input type="file" name="image" class="image" placeholder="select" />
    <input type="number" name="price" class="text-field" placeholder="Book Price" /> <br><br>
    Featured <input type="radio" name="featured" value="Yes"  class="radio" />Yes
    <input type="radio" name="featured" value="No" /> No  
    <br><br>
    Active <input type="radio" name="active" value="Yes"  class="radio" />Yes
    <input type="radio" name="active" value="No" /> No
    <input type="submit"  name="submit" class="button" value="Add Book"/>
    </form>
</div>
</div>

<?php  
//check whether button clicked
if (isset($_POST['submit'])) 
{
   //echo "clicked";
   //add book in database

   
   //get data from form
   $title=$_POST['title'];
   $description=$_POST['description'];
   $price=$_POST['price'];

   //check whether radio button is checked or not
   if (isset($_POST['featured'])) 
   {
     $featured=$_POST['featured'];
   }
   else
   {
    $featured="no";  //default setting
   }
   
   if (isset($_POST['active'])) 
   {
    $active=$_POST['active'];
   }    
    else
   {   
    $active="no";
   }

   //upload book image if selected
   if (isset($_FILES['image']['name'])) 
   {
    //get details from selected image
    $image_name=$_FILES['image']['name'];
        if ($image_name!="") 
        {
           //image is selected
            $ext= end(explode('.',$image_name));

            $image_name="Image-Name-".rand(0000,9999).".".$ext;

            //upload book image 
            //get source path and destination path
            $src=$_FILES['image']['tmp_name'];

            $dst="university/images".$image_name;
            $upload=move_uploaded_file($src, $dst);

                if ($upload==false) 
               {
                $_SESSION['upload']="Failed to upload Book Image";
                header('location'.SITEURL.'admin/add-book.php');
                //stop the process
                die();
               }

        }

   }
   else
   {
    $image_name="";  ///setting default 
   }

   //insert into database
   //create a sql query to add book
   $sql="INSERT  INTO tbl_book SET 
   title='$title',
   description='$description',
   price='$price',
   image_name='$image_name',
   featured='$featured',
   active='$active'
   ";
   //exceute query
   //redirect message to manage food page 
   $res=mysqli_query($conn, $sql);

      if ($res==true) 
      {
        $_SESSION['add']="Book Added Successfully !";
        header('location:'.SITEURL.'admin/manage-book.php');
      }
      else
      {
       $_SESSION['add']="Book Failed to Add";
        header('location:'.SITEURL.'admin/manage-book.php');
      }

}
?>



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