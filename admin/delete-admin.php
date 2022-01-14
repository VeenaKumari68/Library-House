<?php 
 include('../config/constants.php');

//get the id of admin to deleted
$id = $_GET['id'];

//create sql query to delete admin
$sql="DELETE FROM tbl_admin WHERE id=$id";
$res=mysqli_query($conn, $sql);

//check the query exceuted
if ($res==TRUE) 
{
//create session
$_SESSION['delete']="<div class='success'> Admin Deleted Successfully !</div>";
header('location:'.SITEURL.'admin/manage-admin.php');	
 
}
else
{
$_SESSION['delete']="Failed to Delete Admin, Try Again";
header('location:'.SITEURL.'admin/manage-admin.php');
}
//redirect to manage admin page 

 ?>