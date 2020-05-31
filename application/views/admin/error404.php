<?php $this->load->view('inc/inner-header.php');?>
    <div class="container contact-section">
          <div class="row">
                <div class="col-md-12" style="background:#ffffff;">
                      <div class="page-content-area">


                          <div class="row">
                              <div class="col-md-12">
                                <h1>404 Page Not Found</h1>
                                <p>The page you requested was not found.</p>
                              </div>
                          </div>
                      </div>
                </div>
          </div>
    </div>
<?php $this->load->view('inc/footer.php');?>
<input type="hidden" value="<?php echo $content->page_title; ?>" id="page-head"/>
<script>
    var heading = $('#page-head').val();
    $('#page-heading').text(heading);
    $('#page-heading').addClass('nouppercase');
</script>

<!-- <style type="text/css">
h1 {
color: #444;
background-color: transparent;
border-bottom: 1px solid #D0D0D0;
font-size: 19px;
font-weight: normal;
margin: 0 0 14px 0;
padding: 14px 15px 10px 15px;

p {
	margin: 12px 15px 12px 15px;
}
</style> -->
