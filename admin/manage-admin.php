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
                <a href="Dashboard.php" >
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



<div class="main-content">
<div class="wrapper">
	<br>
	<h1 align="center">Manage Admin</h1>
	<br>
    <a href="../admin/add-admin.php" class="btn-primary"> Add Admin</a>
    <br><br><br><br>
	<div class="clearfix"></div>

</div>
</div>
<br>
<table class="fulltable">
	<tr>
	<th>S.No</th>
	<th>Full Name</th>
	<th>Username</th>
	<th>Action</th>
    </tr>
    
    <?php 
    $sql="SELECT * FROM tbl_admin"; //query to call admin
    $res = mysqli_query($conn, $sql);  //exceute the query
    if ($res==TRUE) {
    	//count rows to check data 
    	$count=mysqli_num_rows($res);
        $sn=1;//create variable and assign the value

    	//check the number of rows
    	if ($count>0) {
    		while ($rows=mysqli_fetch_assoc($res)) 
    		{//using while loop to get all the data from database	

    		//get invidual data
            $id=$rows['id'];
            $full_name=$rows['full_name'];
            $username=$rows['username'];
            //display the values in table
    ?>

    <tr>
		<td><?php echo $sn++; ?>.</td>
		<td><?php echo $full_name; ?></td>
		<td><?php echo $username; ?></td>
		
        <td>
        <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-info">Change Password</a>
            
		<a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>	

	    <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete</a> 
		</td>
	</tr>

          
    <?php

        }
    	}
    	else {
    	
    	}
    }
     ?>
	
</table>
<br><br>


<div align="center">
<?php 
    if (isset($_SESSION['add'])) 
    {
      echo $_SESSION['add'];
      unset($_SESSION['add']);
    }

    if (isset($_SESSION['delete'])) 
    {
      echo $_SESSION['delete'];
      unset($_SESSION['delete']);   
    }

    if (isset($_SESSION['update'])) 
    {
      echo $_SESSION['update'];
      unset($_SESSION['update']);   
    }

    if (isset($_SESSION['user-not-found'])) 
    {
      echo $_SESSION['user-not-found'];
      unset($_SESSION['user-not-found']);   
    }

    if (isset($_SESSION['pwd-not-match'])) 
    {
      echo $_SESSION['pwd-not-match'];
      unset($_SESSION['pwd-not-match']);   
    }
    if (isset($_SESSION['change-pwd'])) 
    {
      echo $_SESSION['change-pwd'];
      unset($_SESSION['change-pwd']);   
    }

?>
</div>

</body>
</html>