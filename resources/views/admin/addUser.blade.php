<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.header')
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
            <h1>Add User</h1>
        </div>
       
        @include('admin.footer')

        <!-- partial -->
      </div>
    </div>
  </div>

  @include('admin.script')
</body>

</html>