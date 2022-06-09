<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Latest Products</h2>
          <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
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
        </div>
      </div>

      @endforeach

      <div class="d-flex justify-content-center">
        {!! $data->links() !!}
      </div>
      
    </div>
  </div>
</div>