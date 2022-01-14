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
                <a href="manage-admin.php">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <span class="title_2">Admin</span>
                </a>
            </li>
            <li>
                <a href="manage-book.php"class="active">
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
	<h1 align="center">Manage Books</h1>
    <br>
    <a href="<?php echo SITEURL;?>admin/add-book.php" class="btn-primary"> Add Book</a>
    <br><br>
   
</div>
</div>
<table class="fulltable">
    <tr>
    <th>S.No</th>
    <th>Title</th>
    <th>Description/Author</th>
    <th>Price</th>
    <th>Featured</th>
    <th>Active</th>
    <th>Actions</th>
    </tr>

    <?php 
       $sql="SELECT * FROM tbl_book";
       $res=mysqli_query($conn,$sql);
       $count=mysqli_num_rows($res);
       $sn=1;

       if ($count>0) 
       {
           while ($row=mysqli_fetch_assoc($res)) 
           {
            $id=$row['id'];
            $title=$row['title'];
            $description=$row['description'];
            $price=$row['price'];
            $featured=$row['featured'];
            $active=$row['active'];
    ?>


    <tr>    
        <td><?php echo $sn++; ?>.</td>
        <td><?php echo "$title"; ?></td>
        <td><?php echo "$description"; ?></td>
        <td><?php echo "$price"; ?>&nbsp;PKR</td>
        <td><?php echo "$featured"; ?></td>
        <td><?php echo "$active"; ?></td>
        <td style="width: 20%">
          <a href="<?php echo SITEURL;?>admin/update-book.php?id=<?php echo $id; ?>" class="btn-secondary" style="padding:6%;margin-right: 3%">Update</a> 
          <a href="<?php echo SITEURL;?>admin/delete-book.php?id=<?php echo $id; ?>" class="btn-danger" style="padding: 6%">Delete</a> 
        </td>
    </tr>
    
    <?php

           }
       }
       else
       {
        echo "<tr> <td colspan='2' Book Not Found yet.</td> </tr>";
       }
    ?>

</table>

<br><br>
<div align="center">
     <?php
      if (isset($_SESSION['add'])) 
        {
            echo $_SESSION['add']; //display session message
            unset($_SESSION['add']); //remove session message
        }
        if (isset($_SESSION['delete'])) 
        {
            echo $_SESSION['delete']; //display session message
            unset($_SESSION['delete']); //remove session message
        }
        if (isset($_SESSION['upload'])) 
        {
            echo $_SESSION['upload']; //display session message
            unset($_SESSION['upload']); //remove session message
        }
        if (isset($_SESSION['unauthorize'])) 
        {
            echo $_SESSION['unauthorize']; //display session message
            unset($_SESSION['unauthorize']); //remove session message
        }
         if (isset($_SESSION['update'])) 
        {
            echo $_SESSION['update']; //display session message
            unset($_SESSION['update']); //remove session message
        }
    ?>
</div>
</body>
</html>