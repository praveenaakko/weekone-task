<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       <div class="row">
        @foreach($product as $product)


          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="" class="option1">
                      {{ $product->title }}
                      </a>
                      <a href="" class="option2">
                      Buy Now
                      </a>
                     <form action="">
                        <input type="submit" value="Add To Cart">
                     </form>
                   </div>
                </div>
                <div class="img-box">
                   <img src="product/{{ $product->image }}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                    {{ $product->title }}
                   </h5>
                   @if ($product->dicount_price!=null)


                   <h6 style="color:red">
                    Discount price
                    <br>
                    ${{ $product->dicount_price }}
                   </h6>

                   <h6 style="text-decoration: line-through; color:blue">
                     Price
                     <br>
                      ${{ $product->price }}
                   </h6>
                   @endif

                </div>
             </div>
          </div>

       @endforeach

    </div>
 </section>
