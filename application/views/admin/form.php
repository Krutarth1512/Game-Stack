<?php $this->load->view('admin/admin_inc/admin_header.php'); ?>

        <!--
        ==================================================
            Form
        ================================================== -->
        <div class="container">
          <div class="row">
            <div class="offset-md-2 col-md-6" style="padding-top:60px;">
              <?php if($this->session->flashdata('add')){ ?>
                <div class="alert alert-success">
                  <?php echo $this->session->flashdata('add'); ?>
                </div>
              <?php }?>
              <form method="post" action="<?php echo base_url(); ?>index.php/admin/form">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control rounded-0" name="fname" id="inputname4" placeholder="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control rounded-0" name="lname" id="inputname4" placeholder="">
                  </div>

                  <div class="form-group col-md-9">
                    <label class="form-check" for="gender">Gender</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label" for="exampleRadios1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                      <label class="form-check-label" for="exampleRadios2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                      <label class="form-check-label" for="exampleRadios3">Not Specified</label>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="inputAddress">Contact Number</label>
                    <input type="text" class="form-control rounded-0" id="input" name="" placeholder="">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control rounded-0" name="email" id="inputEmail4" placeholder="">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control rounded-0" name="password" id="inputPassword4" placeholder="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname">Profile Image</label>
                    <?php echo form_open_multipart('upload/do_upload');?>
                    <input type="file" name="userfile" size="20" />
                  </div>
                </div>

                <div class="row accordion" id="accordionExample">
                  <div class="card col-md-4 ">
                    <h5 style="padding: 20px 2px; font-family: 'Roboto'; font-weight: 500; font-size: 16px;">Product data</h5>
                    <div class="card-header" id="headingOne">
                      <h5 class=""><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          General
                        </button> </h5>
                    </div>
                    <div class="card-header" id="headingTwo">
                      <h5 class=""><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Invertory
                        </button>  </h5>
                    </div>
                    <div class="card-header" id="headingThree">
                      <h5 class="">  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Shipping
                        </button></h5>
                    </div>
                    <div class="card-header" id="headingFour">
                      <h5 class=""><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                          Linked Products
                        </button></h5>
                    </div>
                    <div class="card-header" id="headingfive">
                      <h5 class=""><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                          Advanced
                        </button></h5>
                    </div>
                  </div>

                  <div class="card col-md-8">
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="form-group-inline" id="general">
                          <div class="form-group row mb-3">
                            <input class="form-control" type="text" placeholder=" --select category-- ">
                          </div>
                          <div class="form-group row">
                            <label for="inputr" class="col-md-4 col-form-label">Regular Price</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="static">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputs" class="col-md-4 col-form-label">Sale Price</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="input" placeholder="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="form-group-inline" id="inventory">
                          <div class="form-group row mb-3">
                            <input class="form-control" type="text" placeholder=" --select category-- ">
                          </div>
                          <div class="form-group row">
                            <label for="inputr" class="col-md-4 col-form-label">Regular Price</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="static">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputs" class="col-md-4 col-form-label">Sale Price</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="input" placeholder="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="form-group-inline" id="shipping">
                          <div class="form-group row mb-3">
                            <input class="form-control" type="text" placeholder=" --select category-- ">
                          </div>
                          <div class="form-group row">
                            <label for="inputr" class="col-md-4 col-form-label">Regular Price</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="static">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputs" class="col-md-4 col-form-label">Sale Price</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="input" placeholder="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="form-group-inline" id="linked-product">
                          <div class="form-group row mb-3">
                            <input class="form-control" type="text" placeholder=" --select category-- ">
                          </div>
                          <div class="form-group row">
                            <label for="inputr" class="col-md-4 col-form-label">Regular Price</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="static">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputs" class="col-md-4 col-form-label">Sale Price</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="input" placeholder="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="form-group-inline" id="advanced">
                          <div class="form-group row mb-3">
                            <input class="form-control" type="text" placeholder=" --select category-- ">
                          </div>
                          <div class="form-group row">
                            <label for="inputr" class="col-md-4 col-form-label">Regular Price</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="static">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputs" class="col-md-4 col-form-label">Sale Price</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="input" placeholder="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>

              <div class="form-group mb-5">
                <input type="submit" name="register" class="btn btn-primary" value="Register">
              </div>
            </form>
          </div>
        </div>
      </div>

<?php $this->load->view('admin/admin_inc/admin_footer.php');
