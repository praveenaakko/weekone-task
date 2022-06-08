<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <style type="text/css">
  .center{
      margin: auto;
      width: 50%;
      border:2px solid white;
      text-align: center;
      margin-top:60px;
  }
  .font{
      text-align: center;
      font-size: 40px;
      padding:20px

  }
  .image_size{
      width: 150px;
      height: 150px;
  }
  .th_color
  {
      background: skyblue;
  }
  .th_des{
      padding: 30px;
  }

  </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <div class="main-panel">
        <div class="content-wrapper">
            @if (session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-atomic="true">x</button>
            {{ session()->get('message') }}
            @endif
            </div>
            <h2 class="font">All Products</h2>


            <table class="center">
                <tr class="th_color">
                    <th class="th_des">Title</th>
                    <th class="th_des">Description</th>
                    <th class="th_des">Quantity</th>
                    {{-- <th class="th_des">Catagory</th> --}}
                    <th class="th_des">Price</th>
                    <th class="th_des">Discount Price</th>
                    <th class="th_des">Image</th>
                    <th class="th_des">Edit</th>
                    <th class="th_des">Delete</th>
                </tr>
                @foreach ($product as $products )


                <tr>
                    <td>{{ $products->title}}</td>
                    <td>{{ $products->description}}</td>
                    <td>{{ $products->quantity }}</td>
                    {{-- <td>{{ $product->catagory}}</td> --}}
                    <td>{{ $products->price}}</td>
                    <td>{{ $products->dicount_price}}</td>
                    <td>
                        <img class="image_size" src="/product/{{ $products->image }}">
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ url('edit_product',$products->id) }}">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('delete_product',$products->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
                {{-- <span style="padding-top: 20px">
                {{ !!$products->withQueryString()->links('pagination::bootstrap-5')!! }}
                </span> --}}
            </table>

        <!-- partial -->


      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    @include('admin.script')

  </body>
</html>
