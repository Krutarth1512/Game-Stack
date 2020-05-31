<?php $this->load->view('admin/admin_inc/admin_header.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <section class="content p-3">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header p-4">
                  <h3 class="card-title">Number of products added</h3>
                </div>
                  <?php if($this->session->flashdata('add')){ ?>
                    <div class="alert alert-success">
                      <?php echo $this->session->flashdata('add'); ?>
                    </div>
                  <?php }?>
                <table class="table">
                  <thead>
                    <tr class="row text-center">
                      <th class="col-md-1" scope="col">P ID</th>
                      <th class="col-md-2" scope="col">Image</th>
                      <th class="col-md-2" scope="col">Name</th>
                      <th class="col-md-1" scope="col">Price</th>
                      <th class="col-md-3" scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($product)){?>
                       <?php foreach($product as $p ){?>
                        <tr scope="row" class="row text-center">
                          <th class="col-md-1"><?php echo $p->pic_id; ?></th>
                          <td class="col-md-2"><img src="<?php echo base_url(); ?>uploads/<?php echo $p->pro_pic; ?>" width="75px;" /></td>
                          <td class="col-md-2"><?php echo $p->pro_name; ?></td>
                          <td class="col-md-1">C$. <?php echo $p->pro_price; ?></td>
                          <td class="col-md-3"><?php echo $p->pro_details; ?></td>

                          <td class="col-md-1"><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#confirm-delete" data-href="<?php echo base_url(); ?>index.php/admin/productlist/delete/<?php echo $p->pic_id; ?>">Delete</a></td>
                          <td class="col-md-1"><a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>index.php/admin/productlist/edit/<?php echo $p->pic_id; ?>">Modify</a></td>
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
