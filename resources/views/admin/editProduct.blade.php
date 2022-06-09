<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/public" />
  @include('admin.header')
  <style>
    .mainDiv {
      background-image: linear-gradient(to right bottom, #3c45e8, #0074fc, #0097ff, #00b5fa, #6ed0f2);
    }

    .product {
      background-image: linear-gradient(to left bottom, #3c45e8, #0074fc, #0097ff, #00b5fa, #6ed0f2);
      width: 600px;
      padding: 10px;
      margin-top: 10px;
    }

    .product h1 {
      font-size: 30px;
      color: #000;
      font-weight: bold;
      margin: 10px;
      padding-bottom: 10px;

    }

    label {
      display: inline-block;
      width: 200px;
      text-align: center;
      font-size: 19px;
      font-weight: bold;
      color: #000;
    }

    .inputDiv {
      margin-bottom: 13px;
    }

    .inputDiv input {
      color: #000;
    }

    .inputDiv .btn {
      color: #000;
      font-size: 19px;
      font-weight: bold;
      background-color: #03fc17;
      margin: 10px;
      padding: 10px;
    }

    .oldImg {
      width: 100px;
      height: 100px;
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
              <h1>Edit Product Information</h1>

              <form action="{{url('/updateProduct',$edit->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="inputDiv">
                  <label>Product Name</label>
                  <input type="text" name="name" value="{{$edit->pName}}" />
                </div>
                <div class="inputDiv">
                  <label>Price</label>
                  <input type="number" name="price" value="{{$edit->pPrice}}" />
                </div>
                <div class="inputDiv">
                  <label>Quantity</label>
                  <input type="number" name="quantity" value="{{$edit->pQuantity}}" />
                </div>
                <div class="inputDiv">
                  <label>Description</label>
                  <input type="text" name="description" value="{{$edit->pDesc}}" />
                </div>
                <div class="inputDiv">
                  <label>Old Image</label>
                  <img src="ProductImage/{{$edit->pImg}}" class="oldImg">
                </div>

                <div class="inputDiv">
                  <label>Image</label>
                  <input type="file" name="image" />
                </div>
                <div class="inputDiv">
                  <input class="btn" type="submit" value="Update Product" />
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