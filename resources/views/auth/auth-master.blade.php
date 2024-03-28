<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Signin Template · Bootstrap v5.1</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/signin.css') !!}" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
    integrity="sha512-..."
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ URL::asset('css/auth-master.css') }}" />
    
    {{-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> --}}

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">

    
    <main class="form-signin">

        @yield('content')
        
    </main>
    
     {{-- --footer --}}
     <div class="footer-wrapper d-flex justify-content-center">
      <div class="footer-sizing">
          <div class="footer-top row d-flex justify-content-start">
              <div class="footer-top-list col-sm">
                  <div class="footer-top-list-title">CUSTOMER SERVICE</div>
                  <div class="custom-list-item">Help Centre</div>
                  <div class="custom-list-item">Shopme Blog</div>
                  <div class="custom-list-item">Shopmee Mall</div>
                  <div class="custom-list-item">How To Buy</div>
                  <div class="custom-list-item">How To Sell</div>
                  <div class="custom-list-item">Payment</div>
                  <div class="custom-list-item">Shipping</div>
                  <div class="custom-list-item">Contact Us</div>
              </div>
              <div class="footer-top-list col-sm">
                  <div class="footer-top-list-title">ABOUT SHOPMEE</div>
                  <div class="custom-list-item">Help Centre</div>
                  <div class="custom-list-item">Shopme Blog</div>
                  <div class="custom-list-item">Shopmee Mall</div>
                  <div class="custom-list-item">How To Buy</div>
                  <div class="custom-list-item">How To Sell</div>
                  <div class="custom-list-item">Payment</div>
                  <div class="custom-list-item">Shipping</div>
                  <div class="custom-list-item">Contact Us</div>
              </div>
              <div class="footer-top-list col-sm">
                  <div class="footer-top-list-title">ABOUT SHOPMEE</div>
                  <div class="custom-list-item">Help Centre</div>
                  <div class="custom-list-item">Shopme Blog</div>
                  <div class="custom-list-item">Shopmee Mall</div>
                  <div class="custom-list-item">How To Buy</div>
                  <div class="custom-list-item">How To Sell</div>
                  <div class="custom-list-item">Payment</div>
                  <div class="custom-list-item">Shipping</div>
                  <div class="custom-list-item">Contact Us</div>
              </div>
              <div class="footer-top-list col-sm">
                  <div class="footer-top-list-title">ABOUT SHOPMEE</div>
                  <div class="custom-list-item">Help Centre</div>
                  <div class="custom-list-item">Shopme Blog</div>
                  <div class="custom-list-item">Shopmee Mall</div>
                  <div class="custom-list-item">How To Buy</div>
                  <div class="custom-list-item">How To Sell</div>
                  <div class="custom-list-item">Payment</div>
                  <div class="custom-list-item">Shipping</div>
                  <div class="custom-list-item">Contact Us</div>
              </div>
              <div class="footer-top-list col-sm">
                  <div class="footer-top-list-title">ABOUT SHOPMEE</div>
                  <div class="custom-list-item">Help Centre</div>
                  <div class="custom-list-item">Shopme Blog</div>
                  <div class="custom-list-item">Shopmee Mall</div>
                  <div class="custom-list-item">How To Buy</div>
                  <div class="custom-list-item">How To Sell</div>
                  <div class="custom-list-item">Payment</div>
                  <div class="custom-list-item">Shipping</div>
                  <div class="custom-list-item">Contact Us</div>
              </div>
          </div>
          <div class="footer-bot d-flex">
              <div class="p-2 flex-grow-1">© 2024 ShopMee. All Rights Reserved .</div>
              <div class="p-2">
                  Country & Region:
                  Singapore
                  Indonesia
                  Thailand
                  Malaysia
                  Vietnam
                  Philippines
                  Brazil
                  México
                  Colombia
                  Chile
                  Taiwan
              </div>
          </div>
      </div>
  </div>
  {{-- --footer --}}

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>