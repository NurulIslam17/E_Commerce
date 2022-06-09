<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Latest Products</h2>
          <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
          <div style=" display:inline-block; float:right; padding:10px">
            <form action="{{url('/search')}}" method="get">
              <input type="search" class="p-1" name="search" placeholder="Search the Product">
              <input type="submit" value="Search" class="btn btn-success ml-1" style="background-color:#f33f3f; border:none">
            </form>
          </div>
        </div>
      </div>


      @foreach($data as $x)
      <div class="col-md-4">
        <div class="product-item">
          <a href="#"><img height="300px" src="ProductImage/{{$x->pImg}}" alt="{{$x->pImg}}"></a>
          <div class="down-content">
            <a href="#">
              <h4>{{$x->pName}}</h4>
            </a>
            <h6>৳{{$x->pPrice}}</h6>
            <p>{{$x->pDesc}}</p>
            <ul class="stars">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
            </ul>
            <span>Reviews (3)</span>
          </div>
          <div class="text-center pb-2">
            <form action="{{url('/addCart',$x->id)}}" method="post">
              @csrf
              <input type="number" name="cartQuantity" style="width: 25%; text-align:center; padding:5px;" value="1" min="1" />
              <input type="submit" value="Add Cart" class="btn" style="background-color: blue; color:#FFF;" />
            </form>
          </div>
        </div>
      </div>

      @endforeach

      @if(method_exists($data,'links'))
      <div class="d-flex justify-content-center">
        {!! $data->links() !!}
      </div>
      @endif

    </div>
  </div>
</div>