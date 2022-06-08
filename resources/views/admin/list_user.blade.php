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
            <h2 class="font">All users</h2>


            <table class="center">
                <tr class="th_color">
                    <th class="th_des">id</th>
                    <th class="th_des">name</th>
                    <th class="th_des">email</th>
                    {{-- <th class="th_des">Catagory</th> --}}
                    <th class="th_des">phone</th>

                    <th class="th_des">Edit</th>
                    <th class="th_des">Delete</th>
                </tr>
                @foreach ($user as $user )


                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td>{{ $product->catagory}}</td> --}}
                    <td>{{ $user->phone}}</td>


                    <td>
                        <a class="btn btn-success" href="{{ url('edit_user',$user->id) }}">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('delete_user',$user->id) }}">Delete</a>
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
