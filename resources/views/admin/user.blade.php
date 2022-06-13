<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.header')
  <style>
    .mainDiv {
      background-image: linear-gradient(to left bottom, #460df0, #0061ff, #008cff, #00aeff, #85ccf0);
    }
    .tableDiv{
      width: 90%;
      background-color: #fff;
      color: #000;
      padding: 10px 0;
    }
    .tableDiv h1{
      font-size: 30px;
      margin: 5px 0;
      font-weight: bold;
    }
    table{
      width: 95%;
    }
    table,th,td{
      border: 1px solid #000;
    }
    th{
      background-color: blue;
      color: #fff;
      font-size: 20px;
      padding: 5px;
      font-weight: bold;
    }
    td{

      font-size: 18px;
      padding: 5px;
      font-weight: bold;
    }
    tr:nth-child(even){
      background-color: #85ccf0;
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
        <div class="content-wrapper mainDiv">
          <center>
            <div class="tableDiv">
              <h1>Users Information</h1>
              <table>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>type</th>
                  <th>Phone</th>
                  <th>Address</th>
                </tr>
                @foreach($data as $x)
                <tr>
                  <td>{{$x->name}}</td>
                  <td>{{$x->email}}</td>
                  <td>{{$x->usertype}}</td>
                  <td>{{$x->phone}}</td>
                  <td>{{$x->address}}</td>
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