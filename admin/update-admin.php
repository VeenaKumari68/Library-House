<?php include('../config/constants.php'); ?>


<html>
<head>
	<link rel="icon" type="image/png" href="../images/logo2.png" sizes="200x200">
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
    <br><br><br>
    <h1 align="center">Update Admin</h1>

    <?php 
       //get id of selected admin
       $id=$_GET['id'];

       //create sql query to get details 
       $sql="SELECT * FROM tbl_admin WHERE id=$id";

       //exceute query
       $res=mysqli_query($conn, $sql);

       //check query
       if ($res==true) 
       {
           $count=mysqli_num_rows($res);
           //checking admin existence 
           if($count==1)  
            {
               //echo"Admin Available";
               $row=mysqli_fetch_assoc($res);
               $full_name= $row['full_name'];
               $username= $row['username'];
            }
            else{
                header('location'.SITEURL.'admin/manage-admin.php');
            }

        }
    ?>

 <form action="" method="POST">
    <br>
    <input type="text" name="full_name" value="<?php echo $full_name ?>" class="text-field" placeholder="full name" />
    <input type="text" name="username" value="<?php echo $username ?>" class="text-field" placeholder="Username" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" class="text-field" />
    <br><br><br>
    
    <input type="submit"  name="submit" value="Update Admin" class="button" />
    </form>
</div>
</div>

<?php 
  //check whether submit buttion is clicked or not
  if (isset($_POST['submit'])) 
  {
    //get all values from form to update
    $id=$_POST['id'];
    $full_name=$_POST['full_name'];
    $username=$_POST['username'];
    
    //sql query to update admin
    $sql="UPDATE tbl_admin SET 
    full_name='$full_name',
    username='$username'
    WHERE id='$id'
    ";
    //exceute query
    $res=mysqli_query($conn, $sql);
   //check query
    if ($res==true) 
    {
      $_SESSION['update']="Admin Updated Successfully";
      header("location:".SITEURL.'admin/manage-admin.php');
    }
    else
    {
     $_SESSION['update']="Failed to Update Admin, Try Again";
      header("location:".SITEURL.'admin/manage-admin.php');
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