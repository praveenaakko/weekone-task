<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color{
            color: black;
        }
        .center{
            margin:auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
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
            </div>

                @endif
        <div class="div_center">
            <h2 class="h2_font">Add Catagory</h2>
            <form action="{{ url('/add_catagory') }}" method="POST">
                @csrf
                <input class="input_color" type="text" name="catagory" placeholder="Write Category name">
                <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
            </form>

        </div>
        <table class="center">

            <tr>
                <td>
                    catagory name
                </td>
                <td>action</td>
            </tr>
            @foreach ($list as $list )

            <tr>
                <td>{{$list->catagory }}</td>
                <td>
                    <a class="btn btn-danger" href="{{ url('delete_catagory', $list->id) }}">Delete</a>
                </td>
            </tr>

            @endforeach
        </table>



      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

  </body>
</html>
