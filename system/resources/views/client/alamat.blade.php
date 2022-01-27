<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>pcoint</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{url('public')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{url('public')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('public')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{url('public')}}/images/loading.gif" alt="#" /></div>
      </div>
  <!-- header section strats -->
 @include('client.section.header')
  <!-- end header section -->

<div class="site-section">
<div class="container">
  <div class="row mb-5">
    <form class="col-md-12" method="post">
      <div class="site-blocks-table">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="product-thumbnail">Image</th>
              <th class="product-name">Product</th>
              <th class="product-price">Price</th>
              <th class="product-quantity">Quantity</th>
              <th class="product-total">Total</th>
              <th class="product-remove">Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="product-thumbnail">
              <img src="{{url('public/assets')}}/img/top_img.png" alt="Images" width="20%">
              </td>
              <td class="product-name">
                <h2 class="h5 text-black">Laptop Asus</h2>
              </td>
              <td>RP 5.500.000,00</td>
              <td>
                <div class="input-group mb-3" style="max-width: 120px;">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                  </div>
                  <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                  </div>
                </div>

              </td>
              <td>RP 5.500.000,00</td>
              <td><a href="#" class="btn height-auto btn-sm"><i class="fa fa-trash"></i></a></td>
            </tr>

          </tbody>
        </table>
      </div>
    </form>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="row mb-5">
        <div class="col-md-6 mb-3 mb-md-0">
          <button class="btn btn-success btn-sm btn-block">Update Cart</button>
        </div>
        <div class="col-md-6">
          <button class="btn btn-outline-success btn-sm btn-block">Continue Shopping</button>
        </div>
      </div>

      
  <div class="container">
     <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
          <h3>Perkirakan pengiriman</h3>
          <p>Masukkan tujuan Anda untuk mendapatkan perkiraan pengiriman</p>
          <form action="#" class="info">
            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
              <label for="">Provinsi</label>
              <select name="" class="form-control select2" onchange="gantiProvinsi(this.value)">
          <option value="">Pilih Provinsi</option>
                @foreach($list_provinsi as $provinsi)
                  <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                @endforeach
              </select>
            </div>
              </div>
            </div>
                <div class="col-md-10">
              <label for="country">Kabupaten</label>
      <select name="" class="form-control select2" id="kabupaten" onchange="gantiKabupaten(this.value)">
        <option value="">Pilih Provinsi Terlebih Dahulu</option>
        <option value=""></option>
      </select>
            </div>
                <div class="col-md-10">
              <label for="country">Kecamatan</label>
              <select name="" class="form-control select2" id="kecamatan" onchange="gantiKecamatan(this.value)">
        <option value="">Pilih Kabupaten Terlebih Dahulu</option>
        <option value=""></option>
      </select>
            </div>
                <div class="col-md-10">
              <label for="country">Desa</label>
              <select name="" class="form-control select2" id="desa">
        <option value="">Pilih Kecamatan Terlebih Dahulu</option>
        <option value=""></option>
      </select>
            </div>
            <p><a href="checkout.html" class="btn btn-success py-3 px-4">Estimate</a></p>
          </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
      </div>

    <div class="col-md-6 pl-5">
      <div class="row justify-content-end">
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-12 text-right border-bottom mb-5">
              <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <span class="text-black">Subtotal</span>
            </div>
            <div class="col-md-6 text-right">
              <strong class="text-black">RP 5.500.000,00</strong>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6">
              <span class="text-black">Total</span>
            </div>
            <div class="col-md-6 text-right">
              <strong class="text-black">RP 5.500.000,00</strong>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-success btn-lg btn-block" onclick="window.location='checkout'">Proceed To Checkout</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



@push('script')
    <script>
      function gantiProvinsi(id) {
        $.get("api/provinsi/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/>`;
          }
          $("#kabupaten").html(option)
        });
      }
      function gantiKabupaten(id) {
        $.get("api/kabupaten/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/>`;
          }
          $("#kecamatan").html(option)
        });
      }
      function gantiKecamatan(id) {
        $.get("api/kecamatan/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/>`;
          }
          $("#desa").html(option)
        });
      }
    </script>
@endpush




<!-- footer section -->
@include('client.section.footer')
<!-- footer section -->

<script src="{{url('public')}}/js/jquery.min.js"></script>
      <script src="{{url('public')}}/js/popper.min.js"></script>
      <script src="{{url('public')}}/js/bootstrap.bundle.min.js"></script>
      <script src="{{url('public')}}/js/jquery-3.0.0.min.js"></script>
      <script src="{{url('public')}}/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="{{url('public')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{url('public')}}/js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>