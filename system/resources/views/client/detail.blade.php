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
  <!-- product section -->
  <section>
     <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{url("public/$produk->foto") }}"
                            alt="Card image cap" id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">

                        
                        <div class="card-body">
                            <h1 class="h2">{{ $produk->nama }}</h1>
                            <p class="h3 py-2">Rp.{{ number_format($produk->harga )}}</p>
                           
                            
                            <h6>Description:</h6>
                            <p>{{ $produk->deskripsi }}
                                <h6> seller : {{ $produk->seller->username }}</h6>
                            </p>
                            <ul class="list-inline">
                               
                                <li class="list-inline-item">
                                    <h6>Avaliable stok :</h6>
                                   
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $produk->stok }} </strong></p>
                                </li>
                            </ul>

                           
                            {{-- <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear"> --}}
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span
                                                    class="btn btn-success btn-size">S</span></li>
                                            <li class="list-inline-item"><span
                                                    class="btn btn-success btn-size">M</span></li>
                                            <li class="list-inline-item"><span
                                                    class="btn btn-success btn-size">L</span></li>
                                            <li class="list-inline-item"><span
                                                    class="btn btn-success btn-size">XL</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity"
                                                    value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary"
                                                    id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                    </div>
                                    
                                    <form action="{{ url('alamat') }}" method="GET">
                                        <input type="hidden" name="alamat" value="cart">    

                                    <div class="col d-grid">
                                        <button class="btn btn-success btn-lg">Add To Cart</button>
                                    </div>
                                    </form>
                                </div>
                            {{-- </form> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

  </section>

  <!-- end product section -->

  @push('script')
    <!-- Start Slider Script -->
    <script src="{{ asset('/public/assets/js/slick.min.js') }}"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote();
        });
    </script>
@endpush

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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