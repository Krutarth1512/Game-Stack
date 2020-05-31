<?php $this->load->view('admin/admin_inc/admin_header.php'); ?>
        <!--
        ==================================================
            Form
        ================================================== -->
        <div class="container">
          <div class="row">
            <div class="offset-md-2 col-md-10" style="padding-top:60px;">
              <?php if($this->session->flashdata('add')){ ?>
                <div class="alert alert-success">
                  <?php echo $this->session->flashdata('add'); ?>
                </div>
              <?php }?>
              <form method="post" action="<?php echo base_url();?>index.php/admin/productlist/edit/<?php echo $this->uri->segment(4);?>" enctype="multipart/form-data">
                <div class="row ml-2">
                  <div class="col-md-8">
                    <h5>Modify Item</h5>
                    <div class="form-group">
                      <label for="exampleInput1">Product name</label>
                      <input name="pname" type="text" class="form-control rounded-0" value="<?php echo $ed->productname; ?>" id="exampleInput1" aria-describedby="Help" placeholder="Enter product name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInput1">Product price</label>
                      <input name="price" type="text" class="form-control rounded-0" value="<?php echo $ed->product_price;?>" id="exampleInput1" aria-describedby="Help" placeholder="Enter product price">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Description</label>
                      <textarea name="pdetail" class="form-control rounded-0"  id="exampleFormControlTextarea1" rows="5"><?php echo $ed->product_detail;?></textarea>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row ml-5">
                      <div class="card w-100 mr-3">
                        <div class="card-header">
                          Product Image
                        </div>
                        <div class="card-body">
                          <input type="file" name="product_image"/>
                          <img src="<?php echo base_url(); ?>uploads/<?php echo $ed->picture; ?>" width="100px;" />
                        </div>
                      </div>
                    </div>
                    <div class="row ml-5">
                      <div class="card w-100 mr-3">
                        <div class="card-header">
                          Product Gallery
                        </div>
                        <div class="card-body">
                          <a href="#">Add product gallery images</a>
                        </div>
                      </div>
                    </div>
                    <div class="row ml-5">
                      <div class="card w-100 mr-3">
                        <div class="card-header">
                          Select category
                        </div>
                        <div class="card-body">
                          <label class="container">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                            First category edited
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="submit" name="submit" class="btn btn-primary" value="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
        
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <?php $this->load->view('admin/admin_inc/admin_footer.php'); ?>
