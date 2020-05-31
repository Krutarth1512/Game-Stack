<?php $this->load->view('admin/admin_inc/admin_header.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Number of products added</h3>
                </div>
                  <?php if($this->session->flashdata('add')){ ?>
                    <div class="alert alert-success">
                      <?php echo $this->session->flashdata('add'); ?>
                    </div>
                  <?php }?>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">P ID</th>
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($product)){?>
                       <?php foreach($product as $p ){?>
                        <tr>
                          <th scope="row"><?php echo $p->pic_id; ?></th>
                          <td><img src="<?php echo base_url(); ?>uploads/<?php echo $p->picture; ?>" width="75px;" /></td>
                          <td><?php echo $p->productname; ?></td>
                          <td>Rs. <?php echo $p->product_price; ?></td>
                          <td><?php echo $p->product_detail; ?></td>

                          <td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#confirm-delete" data-href="<?php echo base_url(); ?>index.php/admin/productlist/delete/<?php echo $p->pic_id; ?>">Delete</a></td>
                          <td><a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>index.php/admin/productlist/edit/<?php echo $p->pic_id; ?>">Modify</a></td>
                        </tr>
                       <?php } ?>
                      <?php } ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </section>
    </div>

<?php $this->load->view('admin/admin_inc/admin_footer.php'); ?>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="delModalLabel" aria-hidden="true">
   <div class="modal-dialog delete-modal">
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           </div>
           <div class="modal-body">
               <img src="<?php echo base_url(); ?>assets/admin/images/warning.png" />
               <h4 class="modal-title">Are you sure you want to delete this <b>Product</b></h4>
               <p><strong>Note:</strong> This action can’t be undone.</p>

           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               <a class="btn btn-danger btn-ok">Delete</a>
           </div>
       </div>
   </div>
</div>
<script>
     $('#confirm-delete').on('show.bs.modal', function(e) {
         $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

         $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
     });
</script>
