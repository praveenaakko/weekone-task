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
            <h2 class="font">Bill Modules</h2>


            <table class="center">
                <tr class="th_color">

                    <th class="th_des">Id</th>
                    <th class="th_des">Product</th>
                    <th class="th_des">Email</th>
                    <th class="th_des">customer_name</th>


                    <th class="th_des">Price</th>
                    <th class="th_des">Edit</th>
                    <th class="th_des">Delete</th>
                    <th class="th_des">SendMail</th>


                </tr>
                @foreach ($product as $products)


                <tr>
                    <td>{{ $products->id}}</td>
                    <td>{{ $products->title}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->name}}</td>

                    <td>{{ $products->price}}</td>


                      <td>
                        <a class="btn btn-success" href="{{ url('delete_bill',$products->id) }}">Edit</a>
                      </td>

                    <td>
                        <a class="btn btn-danger" href="{{ url('delete_bill',$products->id) }}">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('mail') }}">Sendmail</a>
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
