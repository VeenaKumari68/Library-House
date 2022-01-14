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
                <a href="manage-book.php">
                    <span class="icon"><i class="far fa-file-alt"></i></span>
                    <span class="title_2">Books</span>
                </a>
            </li>
            <li>
                <a href="manage-order.php" class="active">
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
	<h1 align="center">Manage Order</h1>
    <br>
    <a href="add-order.php" class="btn-primary"> Add Order</a>
    <br><br>
	<div class="clearfix"></div>
</div>
</div>
<table style="width: 60%;
  margin-left: 18.5%;">
    
    <th>S.No</th>
    <th>Customer Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>City</th>
    <th>Phone</th>
    <th>Total</th>
    <th>Status</th>
    <th>Action</th>

    <tr>
        <td>1.</td>
        <td>Maria Dars</td>
        <td>maria12@gmail.com</td>
        <td>Block-A12 Unit-7 Latifabad</td>
        <td>Hyderabad</td>
        <td>+9234556854</td>
        <td>Rs.900</td>
        <td style="color: #FF8C00">On Delivery</td>
        <td> 
            <a href="update-order.php" class="btn-secondary" style="padding: 10%">Update</a><br><br>
            <a href="delete-order.php" class="btn-danger" style="padding: 10%">Cancel</a> 
        </td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Anmol</td>
        <td >anmolasghar@gmail.com</td>
        <td>Elsa Qazi Hostel MUET</td>
        <td>Jamshoro</td>
        <td>+9277694033</td>
        <td>Rs.445</td>
        <td style="color: #32CD32">Delivered</td>
        <td> 
        <a href="update-order.php" class="btn-secondary" style="padding: 10%">Update</a><br><br>
        <a href="delete-order.php" class="btn-danger" style="padding: 10%">Cancel</a>
        </td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Usmaan</td>
        <td>usmaan_khan@gmail.com</td>
        <td>Flat-12/4 Prime Square Saddar</td>
        <td>Karachi</td>
        <td>+9203993004</td>
        <td>Rs.1358</td>
        <td style="color: #4169E1">Ordered</td>
        <td>
        <a href="update-order.php" class="btn-secondary" style="padding: 10%">Update</a><br><br>
        <a href="delete-order.php" class="btn-danger" style="padding: 10%">Cancel</a>
        </td>
    </tr>

 <tr>
        <td>4.</td>
        <td>veena</td>
        <td>veena@gmail.com</td>
        <td>A-123 XYZ Qasimabad</td>
        <td>Hyd</td>
        <td>+9200300000</td>
        <td>Rs.1355</td>
        <td style="color: #4169E1">Ordered</td>
        <td>
        <a href="update-order.php" class="btn-secondary" style="padding: 10%">Update</a><br><br>
        <a href="delete-order.php" class="btn-danger" style="padding: 10%">Cancel</a>
        </td>
    </tr>

</table>
<br><br>
<div>
    
</div>
</body>
</html>