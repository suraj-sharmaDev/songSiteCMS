<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>songs</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
</head>

<body>
    <section id="header">
        <div id="company" style="background-color:#5cd7f2;padding-top:10px;"><a href="../index.php"><span class="title" style="color:rgb(255,255,255);"><strong>Company Name</strong></span></a>
            <a href="../_includes/user_logout.php">
                <span class="float-right" style="padding-right:20px;padding-left:20px;">LogOut<i class="fa fa-unlock-alt"></i></span>
            </a>
            <a href="index.php">
                <span class="float-right">Admin<i class="fa fa-user"></i></span>
            </a>
        </div>
    </section>
    <section id="admin-panel">
        <div class="row">
            <div class="col-4 admin-side-panel-div" style="background-color:#d7e3f7;max-width:250px;">
                <div>
                    <div id="admin-icon"><i class="fa fa-user-circle-o" style="font-size:40px;"></i>
                        <p>Admin</p>
                    </div>
                    <div class="admin-side-panel"><a href="index.php"><span><i class="fa fa-home"></i>&nbsp; Dashboard</span></a></div>
                    <div class="admin-side-panel"><a href="categories.php"><span><i class="fa fa-th-list"></i>&nbsp; Categories</span></a></div>
                    <div class="admin-side-panel"><a href="categories.php"><span><i class="fa fa-music"></i>&nbsp; Songs</span></a></div>
                    <div class="admin-side-panel"><a href="ads.php"><span><i class="fa fa-money"></i>&nbsp; Ads</span></a></div>
                </div>
            </div>
