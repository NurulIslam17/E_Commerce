<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.header')
  <style>
    .listDiv{
      background-color: #FFF;
      width: 95%;
      color: #000;
      padding: 5px;
    }
    .listDiv h1{
      font-size: 30px;
      font-weight: bold;
      padding: 15px 5px;
    }
    table{
      width: 96%;
    }
    table , th , td{
      border: 1px solid #000;
      padding: 5px;
    }
    th{
      background-color: blue;
      color: #FFF;
      font-size: 20px;
      font-weight: bold;
    }
    tr:nth-child(odd){
      background-color: #cce2e3;
    }

    .imgTd{
        padding: 3px;
        margin: 0!important;
        width: 100px;
        height: 100px;
    }
    td img{
      width: 100%;
      height: 100%;
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
        <div class="content-wrapper bg-info">
            <center>
              <div class="listDiv">
              <h1> All Products Information</h1>
              <table>
                <tr>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Quantity(Pc)</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                @foreach($data as $x)
                <tr>
                  <td>{{$x->pName}}</td>
                  <td>{{$x->pPrice}}৳</td>
                  <td>{{$x->pQuantity}}</td>
                  <td>{{$x->pDesc}}</td>
                  <td class="imgTd">
                    <img src="ProductImage/{{$x->pImg}}">
                  </td>
                  <td class="imgTd">
                    <a href="{{url('/edit',$x->id)}}" class="btn btn-success fw-bold fs-6 m-1">Update</a><br>
                    <a href="{{url('/delete',$x->id)}}" class="btn btn-danger fw-bold fs-6 m-1">Delete</a>
                  </td>
                </tr>
                @endforeach

              </table>
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