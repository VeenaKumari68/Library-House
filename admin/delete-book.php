<?php  
include('../config/constants.php'); 

if (isset($_GET['id'])) 
{
  //get id and image name
  $id = $_GET['id'];
  $image_name = $_GET['image_name'];

  //remove image if available
  if ($image_name !="") 
  {
  	$path ="..images/book/".$image_name;

  	//remove image file from image folder
  	$remove = inlink($path);

  	 //check whether image is removed or not
      if ($remove==false) 
      {
      	$_SESSION['upload'] = "Failed to Remove Book Image/Cover";
      	header('location:'.SITEURL.'admin/manage-book.php');
      	die();
      }
  }
  
  //delete book from database
    $sql = "DELETE FROM tbl_book WHERE id=$id";
    $res = mysqli_query($conn, $sql);

      //check query 
       if ($res==true) 
       {
       	 //book deleted
       	$_SESSION['delete'] = "Book Deleted Successfully!";
       	header('location:'.SITEURL.'admin/manage-book.php');

       }
       else
       {
       	//failed to delete
       	$_SESSION['delete'] = "Unauthorized Access";
       	header('location:'.SITEURL.'admin/manage-book.php');

       }
  //redirect to manage book page 
}

else 
{
  $_SESSION['unauthorize']="Unauthorized Access";
  header('location:'.SITEURL.'admin/manage-book.php');
}

?>