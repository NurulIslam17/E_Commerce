<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.header')
  <style>
    .main {
      background-image: linear-gradient(to right bottom, #39ead9, #00c9f2, #00a2ff, #0072ff, #1a12eb);
    }

    .tableDiv {
      width: 90%;
    }

    table {
      width: 100%;
      background-color: grey;
      padding: 5px;
    }

    th,
    td {
      padding: 5px;
    }

    th {
      background-color: #0072ff;
      font-size: 20px;
      font-weight: bold;
    }

    td {
      font-size: 18px;
      color: #000;
    }

    tr:nth-child(even) {
      background-color: #dbf0aa;
    }

    tr:nth-child(odd) {
      background-color: #d2f288;
    }

    a {
      font-size: 19px;
      font-weight: bold;
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
        <div class="content-wrapper main">
          <center>
            <div class="tableDiv">
              @if(session()->has('statusUp'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('statusUp')}}
              </div>
              @endif
              <table>
                <tr>
                  <th>Customer</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                @foreach($data as $x)
                <tr>
                  <td>{{$x->name}}</td>
                  <td>{{$x->phone}}</td>
                  <td>{{$x->address}}</td>
                  <td>{{$x->product}}</td>
                  <td>{{$x->quantity}}</td>
                  <td>{{$x->price}} ৳</td>
                  <td>{{$x->status}}</td>
                  <td>
                    <a class="btn btn-info" href="{{url('/delivered',$x->id)}}">Delivered</a>
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