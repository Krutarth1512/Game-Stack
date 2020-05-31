<?php $this->load->view('admin/admin_inc/admin_header.php'); ?>

  <div class="offset-md-2 col-md-10">
    <div class="wrap ml-4">
      <div class="container p-1">
        <h2>Product</h2>
      </div>

      <form class="" action="<?php base_url(); ?>product" method="post" enctype="multipart/form-data">
      <div class="row ml-2">
        <div class="col-md-8">
          <h5>Add Item</h5>
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
        <div class="col-md-4">
          <div class="row ml-5">
            <div class="card w-100 mr-3">
              <div class="card-header">
                Product Image
              </div>
              <div class="card-body">
                <input type="file" name="product_image" />
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

        <div class="col-md-8 pr-3">
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
                        <input type="text" class="form-control" id="regular-price" placeholder="Regular Price">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Sale Price</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="sale-price" placeholder="Sale Price">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Discount</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="discount" placeholder="Discount">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputs" class="col-md-4 col-form-label">Total</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="totalprice" placeholder="Total">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
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
                        <input type="text" class="form-control" id="input" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-6">  <select class="form-control" id="select-country"></select> </div>
                    <div class="col-sm-6">  <select class="form-control" id="select-states"></select> </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">  <select class="form-control" id="select-city" placeholder="select city"></select> </div>
                    <div class="col-sm-6">  <input class="form-control" type="text" placeholder=" --postal code-- "> </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputr" class="col-md-5 col-form-label">Shipping charges</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="static">
                    </div>
                  </div>
                </div>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="form-group-inline" id="linked-products">
                    <div class="form-group row mb-3">
                      <input class="form-control" type="text" placeholder=" --select category-- ">
                    </div>
                    <div class="form-group row">
                      <label for="inputr" class="col-md-4 col-form-label">Regular Price</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="static">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
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
                        <input type="text" class="form-control" id="input" placeholder="">
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

<script>
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
</script>


<script type="text/javascript">
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
</script>
