<?php $this->load->view('admin/admin_inc/admin_header.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Number of users registered</h3>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">User ID</th>
                      <th scope="col">Email</th>
                      <th scope="col">Address</th>
                      <th scope="col">City</th>
                      <th scope="col">State</th>
                      <th scope="col">Country</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(count($user)>0){?>
                       <?php foreach($user as $u ){?>
                        <tr>
                          <th scope="row"><?php echo $u->user_id; ?></th>
                          <td><?php echo $u->email; ?></td>
                          <td><?php echo $u->address; ?></td>
                          <td><?php echo $u->city; ?></td>
                          <td><?php echo $u->state; ?></td>
                          <td><?php echo $u->country; ?></td>
                          <td><a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>index.php/admin/users/delete/<?php echo $u->user_id; ?>">Delete</a></td>
                          <td><a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>index.php/admin/users/edit/<?php echo $u->user_id; ?>">Modify</a></td>
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
