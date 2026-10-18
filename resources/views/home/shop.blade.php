 <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        @foreach($product as $mridul)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="products/{{$mridul->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                 {{$mridul->title}}
                </h6>
                <h6>
               Price
                  <span>
                     ${{$mridul->price}}
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
  <div class="btn-group">
    <a href="{{ url('details', $mridul->id) }}" class="crimson-btn">
        View Details
    </a>

    <a href="{{ url('add_cart', $mridul->id) }}" class="btn-add-cart">
        Add to Cart
    </a>
</div>


    
          </div>
        </div>
        <!--over-->
      @endforeach
        </div>
      </div>
    </div>
  </section>

<style>
.btn-group {
    display: flex;
    justify-content: flex-start; 
    gap: 10px;                 
    margin-top: 15px;
    padding: 0 0 20px 15px;   
}

.btn-group a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    
    padding: 8px 7px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    border-radius: 4px;
    
    color: white !important;
    transition: all 0.3s ease;
    white-space: nowrap;
}


.crimson-btn {
    background-color: #db2777; 
}

.btn-add-cart {
    background-color: #fb7185;
}

.crimson-btn:hover, .btn-add-cart:hover {
    opacity: 0.8;
}
</style>


  <!-- end shop section -->