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

<body>

    <div class="page">

        <header class="header">
            <div class="header-inner">
                <div class="logo">
                    <h1>
                        <a href="<?php echo base_url();?>index.php/home">Game<span>Stack</span></a>
                    </h1>
                </div>
            </div>
        </header>

        <div class="feature"></div>

        <div class="row">

<?php  echo validation_errors(); ?>
<?php if($this->session->flashdata('wrong_data')){?>
<div class="alert alert-danger">
wrong password
</div>
<?php }?>
<?php if($this->session->flashdata('no_email')){?>
<div class="alert alert-danger">
<?php echo $this->session->flashdata('no_email');?>
</div>
<?php }?>

                <form method="post" action="<?php echo base_url(); ?>index.php/clogin">

                    <div class="box">
					
						<h1> Sign in </h1>

                        <input type="email" name="email" placeholder="Email" />

                        <input type="password" name="password" placeholder="Password" />

                        <div>
                            <input type="submit" class="submit-button" value="Login">
                        </div>

						<h3><a href="<?php echo base_url(); ?>index.php/register">Create Account</a></h3>

                    </div>

                </form>

            </div>
        </div>

        <div class="footerblurb">

            <div class="footerblurb-inner">
                <div class="clr"></div>
            </div>

        </div>

<?php $this->load->view('inc/footer.php'); ?>