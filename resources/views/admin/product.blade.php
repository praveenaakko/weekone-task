<!DOCTYPE html>
<html lang="en">
  <head>
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


            <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                @csrf


            <div class="div_center">
                <h1 class="font_size">Add Product</h1>
                <div class="div_design">
                <label>Product Title</label>
                <input class="text_color" type="text" name="title" placeholder="Write a Title" required="">
            </div>
            <div class="div_design">
                <label>Product Price</label>
                <input class="text_color" type="number" name="price" placeholder="Write a Title" required="">
            </div>

            <div class="div_design">
                <label>Discount Price</label>
                <input class="text_color" type="number"  name="dicount_price" placeholder=" Write discount Applied">
            </div>
            <div class="div_design">
                <label>Description</label>
                <input class="text_color" type="text" name="description" placeholder="Write a Title" required="">
            </div>
            <div class="div_design">
                <label>Product quantity</label>
                <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a Title" required="">
            </div>
            <div class="div_design" required="">
                <label>Product Catagory</label>

                <select class="text_color" name="catagory">
                    <option value="" selected="">Add Catagory here</option>

                 @foreach ($list as $list )


                <option value="">{{ $list->catagory }}</option>
                 @endforeach
                </select>
            </div >
            <div class="div_design" required="">
                <label>Product Image</label>
                <input type="file" name="image" >
            </div>
            <div class="div_design">
                <input type="submit" value='add_poduct' class="btn btn-primary">
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
