<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP IMS</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/fullcalendar.css"/>
    <link rel="stylesheet" href="css/matrix-style.css"/>
    <link rel="stylesheet" href="css/matrix-media.css"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="header">

    <h2 style="color: white;position: absolute">
        <a href="dashboard.html" style="color:white; margin-left: 30px; margin-top: 40px">PHP IMS</a>
    </h2>
</div>



<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="profile-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i
                    class="icon icon-user"></i> <span class="text">Welcome Admin</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="logout.php"><i class="icon-key"></i>Log Out</a></li>
            </ul>
        </li>

    </ul>
</div>

<!--sidebar-menu-->
<div id="sidebar">
    <ul>
        <li class="active">
            <a href="index.html"><i class="icon icon-dashboard"></i><span>Dashboard</span></a>
        </li>
        <li>
            <a href="addnew_user.php"><i class="icon icon-user"></i><span>Add New User</span></a>
        </li>
        <li>
            <a href="addnew_unit.php"><i class="icon icon-user"></i><span>Add New Unit</span></a>
        </li>
        <li>
            <a href="addSupplier.php"><i class="icon icon-user"></i><span>Add New Supplier</span></a>
        </li>
        <li>
            <a href="addProduct.php"><i class="icon icon-plus-sign-alt"></i><span>Add New Product</span></a>
        </li>
        <li>
            <a href="purchase.php"><i class="icon icon-shopping-cart"></i><span>Purchase</span></a>
        </li>
        <li>
            <a href="sale.php"><i class="icon icon-shopping-cart"></i><span>Sale</span></a>
        </li>
        <li>
            <a href="view_bills.php"><i class="icon icon-shopping-cart"></i><span>Bills Record</span></a>
        </li>
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span>Reports</span>
            <ul>
                <li><a href="purchase_report.php">Purchase</a></li>
                <li><a href="view_bills.php">Sales</a></li>
                <li><a href="stock.php">Stock</a></li>
                <li><a href="supplier_report.php">Supplier</a></li>
            </ul>
        </li>

    </ul>
</div>
<!--sidebar-menu-->
<div id="search">

        <a href="logout.php" style="color:white"><i class="icon icon-share-alt"></i><span>LogOut</span></a>

</div>