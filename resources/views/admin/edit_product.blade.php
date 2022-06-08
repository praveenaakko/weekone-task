<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
  @include('admin.css')
  <style type="text/css">
  .div_center{
      text-align:center;
      padding-top: 40px;
  }
  .font_size
  {
      font-size: 40px;
      padding-bottom: 40px;
  }
  .text_color{
      color: black;
      padding-bottom: 20px;
  }
  label{
      display: inline-block;
      width: 200px;
  }
  .div_design{
      padding-bottom: 15px;
  }
</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session()->has('message'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-atomic="true">x</button>
                {{ session()->get('message') }}
                @endif
                </div>


            <form action="{{url('/update_product',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf


            <div class="div_center">
                <h1 class="font_size">Update Product</h1>
                <div class="div_design">
                <label>Product Title</label>
                <input class="text_color" type="text" name="title" placeholder="Edit a Title" value="{{ $product->title }}">
            </div>
            <div class="div_design">
                <label>Product Price</label>
                <input class="text_color" type="number" name="price" placeholder="Write a Title" value="{{ $product->price }}">
            </div>

            <div class="div_design">
                <label>Discount Price</label>
                <input class="text_color" type="number"  name="dicount_price" placeholder=" Write discount Applied" value="{{ $product->dicount_price }}">
            </div>
            <div class="div_design">
                <label>Description</label>
                <input class="text_color" type="text" name="description" placeholder="Write a Title" value="{{ $product->description }}">
            </div>
            <div class="div_design">
                <label>Product quantity</label>
                <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a Title" value="{{ $product->quantity }}">
            </div>
            <div class="div_design" required="">
                <label>Current Product Image</label>
                <img style="margin: auto"  height="100" width="100" src="/product/{{ $product->image }}">
            </div>


            <div class="div_design" required="">
                <label>Change Product Image</label>
                <input type="file" name="image" >
            </div>
            <div class="div_design">
                <input type="submit" value="Update Product" class="btn btn-primary">
            </div>
        </form>

        </div>




        </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
</div>

    <!-- plugins:js -->
    @include('admin.script')

  </body>
</html>
