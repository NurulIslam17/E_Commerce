<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>E-Cloths</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <style>
    .mainDiv {
      padding-top: 100px;
      padding-bottom: 30px;
      width: 30%;
      align: center;
      background-color: blue;
    }

    table {
      width: 95%;
      background-color: #fff;
    }

    th {
      background-color: grey;
      padding: 5px;
      font-size: 20px;
      color: #FFF;
    }

    td {
      padding: 5px;
      font-size: 17px;
    }

    table,
    th,
    td {
      border: 1px solid #000;
    }

    tr:nth-child(even) {
      background-color: #c2ede8;
    }

    body {
      background-color: blue;
    }
  </style>


</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2>Sixteen <em>Clothing</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
              @if (Route::has('login'))
              @auth
            <li class="nav-item">
              <a class="nav-link" href="{{url('/viewCartProduct')}}">
                <i class="fa-solid fa-cart-shopping fa-lg"></i>
                Cart[{{$count}}]</a>
            </li>

            <x-app-layout>
            </x-app-layout>
            @else
            <li>
              <a href="{{ route('login') }}" class="nav-link">Log in</a>
            </li>

            @if (Route::has('register'))
            <li>
              <a href="{{ route('register') }}" class="nav-link">Register</a>
            </li>
            @endif
            @endauth
            @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Table  -->
  <center>

    <div class="mainDiv">
      @if(session()->has('msg'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{session()->get('msg')}}
      </div>
      @endif

      @if(session()->has('orderMsg'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"> X </button>
        {{session()->get('orderMsg')}}
      </div>
      @endif

      <table>
        <tr>
          <th>Product name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
          <th>Total</th>
        </tr>

        <form action="{{url('/order')}}" method="post">
          @csrf
          @foreach($cart as $x)
          <tr>
            <td>
              <input type="text" name="productName[]" value="{{$x->p_title}}" hidden>
              {{$x->p_title}}
            </td>
            <td>
              <input type="number" name="quantity[]" value="{{$x->quantity}}" hidden>
              {{$x->quantity}}
            </td>
            <td>
              <input type="number" name="price[]" value="{{$x->price}}" hidden>
              {{$x->price}}???
            </td>
            <td>
              {{$x->price * $x->quantity}}???
            </td>
            <td>
              <a class="btn btn-danger" href="{{url('/deleteProductCart',$x->id)}}">Delete</a>
            </td>
          </tr>
          @endforeach
      </table>
      <div>
        <button class="btn btn-success" href="">Order</button>
      </div>
      </form>
    </div>




  </center>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>


</body>

</html>