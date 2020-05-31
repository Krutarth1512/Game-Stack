<?php $this->load->view('admin/admin_inc/admin_header.php'); ?>

  <div class="offset-md-2 col-md-9">
    <div class="wrap ml-5 p-3">
      <div class="container p-3">
        <h2>Product</h2>
      </div>

      <form class="" action="<?php echo base_url(); ?>index.php/admin/product" method="post" enctype="multipart/form-data">
      <div class="row ml-2">
        <div class="col-md-8">
          <h5>Add Item</h5>
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
          <div class="form-group">
            <label for="exampleInput1">Product name</label>
            <input name="pname" type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="Help" placeholder="Enter product name">
          </div>
          <div class="form-group">
            <label for="exampleInput1">Product price</label>
            <input name="price" type="text" class="form-control rounded-0" id="exampleInput1" aria-describedby="Help" placeholder="Enter product price">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="pdetail" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
        </div>
        <div class="col-md-4 p-2">
          <div class="row ml-3">
            <div class="card">
              <div class="card-header p-2">
                Product Image
              </div>
              <div class="card-body">
                <input type="file" name="product_image" />
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="row accordion" id="accordionExample">
            <div class="card col-md-4">
              <h5 style="padding: 20px 2px; font-family: 'Roboto'; font-weight: 500; font-size: 16px;">Product data</h5>
              <div class="card-header" id="headingOne">
                <h5 class=""><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    General
                  </button> </h5>
              </div>
              <div class="card-header" id="headingTwo">
                <h5 class=""><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Requirements(mini)
                  </button>  </h5>
              </div>
              <div class="card-header" id="headingThree">
                <h5 class="">  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Requirements(recom.)
                  </button></h5>
              </div>
            </div>

            <div class="card col-md-8">
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="form-group-inline" id="general">
                    <div class="form-group row mb-3">
                      <input class="form-control" type="text" name="type" placeholder="type">
                    </div>
                    <div class="form-group row">
                      <label for="inputr" class="col-md-4 col-form-label">Edition</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="edition" placeholder="Edition">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Platform</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="platform" placeholder="Platform">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Release Date</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="rrelease" placeholder="Release Date">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="form-group-inline" id="minimum">
                    <div class="form-group row mb-3">
                      <input class="form-control" type="text" name="mos" placeholder=" --OS-- ">
                    </div>
                    <div class="form-group row">
                      <label for="inputr" class="col-md-4 col-form-label">Processor</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="mprocessor">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Graphics</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="mgraphics" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">System RAM</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="mram" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Resoltuion</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="mresoltuion" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Video Preset</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="mvideo" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                <div class="form-group-inline" id="recommended">
                    <div class="form-group row mb-3">
                      <input class="form-control" type="text" name="ros" placeholder=" --OS-- ">
                    </div>
                    <div class="form-group row">
                      <label for="inputr" class="col-md-4 col-form-label">Processor</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="rprocessor">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Graphics</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="rgraphics" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">System RAM</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="rram" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Resoltuion</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="rresoltuion" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Video Preset</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="rvideo" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="submit">

    </form>
    </div>
  </div>

<?php $this->load->view('admin/admin_inc/admin_footer.php'); ?>

<!-- <script type="text/javascript">
  $('#regular-price').keyup(function() {
    updateTotal();
  });
  $('#sale-price').keyup(function() {
    updateTotal();
  });
  var updateTotal = function () {
  var input1 = parseInt($('#regular-price').val());
  var input2 = parseInt($('#sale-price').val());
  if (isNaN(input1) || isNaN(input2)) {
    $('#totalprice').text('Both inputs must be numbers');
  } else {
    $('#totalprice').val(input1 + input2);
  }
  };
</script> -->

<!-- <script>
  $('#sale-price').keyup(function() {
    updateTotal();
  });
  $('#discount').keyup(function(){
    updateTotal();
  });
  var updateTotal = function(){
    var input1 = parseInt($('#sale-price').val());
    var input2 = parseInt($('#discount').val());
    if(isNaN(input1) || isNaN(input2)) {
      $('#totalprice').val((input1 * input2)/100);
    }
  }
</script> -->


<!-- <script type="text/javascript">
  var country = ['--select country--','india','china','japan'];
  var states = [];
  states['--select country--']=[];
  states['india']=['punjab','delhi','haryana'];
  states['china']=['Beijing','shanghai'];
  states['japan']=['tokyo','nagasaki'];
  console.log(states);
  var city = [];
  city['punjab']=['ludhiana','patiala'];
  city['haryana']=['ambala','kurukshetra'];
  console.log(city);

  $(country).each(function(index, value){
    var currentValue = '<option value="'+value+'">'+value+'</option>';
    $('#select-country').append(currentValue);
  });

  $('#select-country').on('change',function(){
    var current  = $(this).val();
    if (current!='') {
      $('#select-states').empty();
      $(states[current]).each(function(index, value){
          var currentValue = '<option value="'+value+'">'+value+'</option>';
          $('#select-states').append(currentValue);
      });
    }else{
      alert('Please select a country first');
    }
  });

  $('#select-states').on('change',function(){
    var current  = $(this).val();
    if (current!='') {
      $('#select-city').empty();
      $(city[current]).each(function(index, value){
        var currentValue = '<option value="'+value+'">'+value+'</option>';
        $('#select-city').append(currentValue);
      });
    } else{
      alert('please select a state first');
    }
  });
</script> -->
