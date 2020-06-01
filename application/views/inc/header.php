<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GameStack Canada | Best Games Selling Store</title>
    <link rel="icon" href="<?php echo base_url();?>assets/icons/logo.png" type="image/png">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/contact.css">
    <link rel="icon" href="<?php echo base_url();?>assets/icons/logo.png" type="image/png">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    

</head>
<style>
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<body>

    <div class="page">

        <header class="header">
            <div class="header-inner">
                <div class="logo">
                    <h1>
                        <a href="<?php echo base_url();?>index.php/index">Game<span>Stack</span></a>
                    </h1>
                </div>
                <div class="top-nav">
                    <ul>
                        <li><a href="<?php echo base_url();?>index.php/home">Home</a></li>
                        <li><a href="<?php echo base_url();?>index.php/catalogue">Video Games</a></li>
                        <li><a href="<?php echo base_url();?>index.php/compare">Compare</a></li>
                        <li><a href="<?php echo base_url();?>index.php/gallery">Gallery</a></li>
                        <li><a href="<?php echo base_url();?>index.php/contactUs">Contact</a></li>
                        <!-- <li><a href="<?php echo base_url();?>index.php/clogin">Login</a></li>-->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn"><img src="<?php echo base_url();?>assets/images/person.png" width="20px" alt=""></a>
                            <div class="dropdown-content">
                            <a href="#">Profile</a>
                            <a href="<?php echo base_url();?>index.php/register">Sign Up</a>
                            <a href="#">Logout</a>
                            </div>
                        </li>
						<li><a href="<?php echo base_url();?>index.php/cart"><img src="<?php echo base_url();?>assets/images/cart.png" width="20px" alt=""></a></li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>

        </header>