<?php include('../config/constants.php'); ?>

<!DOCTYPE html>
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
                <a href="manage-admin.php" class="active">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <span class="title_2">Admin</span>
                </a>
            </li>
            <li>
                <a href="manage-book.php"  >
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
    <h1 align="center">Update Admin Password</h1>
    
    <?php
       if (isset($_GET['id'])) 
       {
         $id=$_GET['id'];
       }
    ?>
<form action="" method="POST">
    <br>
    <input type="password" name="current_password"  class="text-field" placeholder="current password" />
    <input type="password" name="new_password"  class="text-field" placeholder="new password" />
    <input type="password" name="confirm_password"  class="text-field" placeholder="confirm password" />
     
    <input type="hidden" name="id" value="<?php echo $id; ?>" class="text-field" />
    <input type="submit"  name="submit" value="Update Password" class="button" />
</form>

</div>
</div>

<?php 
   //check the submit button
if (isset($_POST['submit']))
{
  //get data from form
  $id=$_POST['id'];
  $current_password=md5($_POST['current_password']);
  $new_password=md5($_POST['new_password']);
  $confirm_password=md5($_POST['confirm_password']);
  
 //check user id and current password

  $sql="SELECT * FROM tbl_admin 
  WHERE id=$id AND 
  password=$'current_password'
  ";
  
  //exceute query
  $res=mysqli_query($conn, $sql);

    if ($res==TRUE) 
    {
      $count=mysqli_num_rows($res); //to check data availability

        if ($count==1) 
        {
           //echo "User Found";
           //check whether new password and confirm password matches
           if ($new_password==$confirm_password) 
           {
            //echo "password match";
            $sql2="UPDATE tbl_admin SET
             password=$'new_password'
             WHERE id=$id
            ";

             $res2=mysqli_query($conn, $sql2);
                  if($res2==true)
                   {
                     $_SESSION['change-pwd']="Password changed";
                     //redirect page to manage admin
                     header('location:'.SITEURL.'admin/manage-admin.php');
                   }

                  else
                  {
                     $_SESSION['change-pwd']="Password Not changed ";
                     //redirect page to manage admin
                     header('location:'.SITEURL.'admin/manage-admin.php');
                  }
            }


            else
            { //create session variable to display message
              $_SESSION['pwd-not-match']="Password Not match";
              //redirect page to manage admin
              header('location:'.SITEURL.'admin/manage-admin.php');
           }
        }

        else
        {
          //create session variable to display message
          $_SESSION['user-not-found']="User Not Found";
          //redirect page to manage admin
          header('location:'.SITEURL.'admin/manage-admin.php');
        }
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
    width: 300px;
    height: 300px;
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
    background: #FFdd00;
    font-weight: bold;
    font-size: 13px;
}
form .button:hover{
    background: #ffcc00;
}

</style>

</body>
</html>