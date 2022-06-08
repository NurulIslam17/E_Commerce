<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.header')
  <style>
    .mainDiv{
      background-image: linear-gradient(to left top, #34f4f4, #00c5f4, #0092f0, #005cd7, #1610a0);
    }
    .product{
      background-image: linear-gradient(to right bottom, #29f4f3, #00c0ed, #0089e0, #0050bf, #0a0583);
      width: 600px;
      padding: 10px;
      margin-top: 10px;
    }
    .product h1{
      font-size: 30px;
      color: #000;
      font-weight: bold;
      margin: 10px;
      padding-bottom: 10px;

    }
    label{
      display: inline-block;
      width: 200px;
      text-align: center;
      font-size: 19px;
      font-weight: bold;
      color: #000;
    }
    .inputDiv{
      margin-bottom: 13px;
    }
    .inputDiv input{
      color: #000;
    }
    .inputDiv .btn{
      color: #000;
      font-size: 19px;
      font-weight: bold;
      background-color: #03fc17;
      margin: 10px;
      padding: 10px;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      @include('admin.navbar');
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper mainDiv ">
          <center>
            <div class="product">
              <h1>Add Information</h1>

              <form action="{{url('/uploadProduct')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="inputDiv">
                  <label>Product Name</label>
                  <input type="text" name="name" placeholder="Product Name" />
                </div>
                <div class="inputDiv">
                  <label>Price</label>
                  <input type="number" name="price" placeholder="Product Price" />
                </div>
                <div class="inputDiv">
                  <label>Quantity</label>
                  <input type="number" name="quantity" placeholder="Product Quantity" />
                </div>
                <div class="inputDiv">
                  <label>Description</label>
                  <input type="text" name="description" placeholder="Product Description" />
                </div>
                <div class="inputDiv">
                  <label>Image</label>
                  <input type="file" name="image"/>
                </div>
                <div class="inputDiv">
                  <input class="btn" type="submit" value="Uplaod Product" />
                </div>
              </form>
            </div>
          </center>
        </div>

        @include('admin.footer')

        <!-- partial -->
      </div>
    </div>
  </div>

  @include('admin.script')
</body>

</html>