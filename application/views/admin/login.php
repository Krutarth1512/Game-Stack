<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Game Stack | Log in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap441/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="text-center p-4 m-4">
  <h3>
    <a href=""><b>Game Stack</b></a>
  </h3>

  <div class="row m-4">
    <div class="offset-md-4 col-md-4">
      <div class="card">
        <div class="card-body">
          <p>Only the Authorised user can go</p>
          <?php  echo validation_errors(); ?>
          <?php if($this->session->flashdata('wrong_data')){?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('wrong_data');?>
            </div>
          <?php }?>
          <?php if($this->session->flashdata('no_email')){?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('no_email');?>
            </div>
          <?php }?>
          <form action="<?php echo base_url(); ?>index.php/admin/login" method="post">
            <div class="form-group has-feedback">
              <span class="fa fa-envelope form-control-feedback"></span>
              <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group has-feedback">
              <span class="fa fa-lock form-control-feedback"></span>
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>

            <div class="row">
              <div class="col-8">
              </div>
              <div class="col-4">
                <input type="submit" class="btn btn-primary btn-block btn-flat" value="Sign In">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url(); ?>admin_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
