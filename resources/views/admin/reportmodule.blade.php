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
            <h2 class="font">Sales report</h2>


            <table class="center">
                <tr class="th_color">


                    <th class="th_des">daily</th>
                    <th class="th_des">weekly</th>
                    <th class="th_des">monthly</th>
                    <th class="th_des">yearly</th>
                    <th class="th_des">Export</th>



                </tr>



                <tr>
                    <td>100</td>
                    <td>1500</td>
                    <td>14000</td>
                    <td>25000</td>



                      <td>
                        <a class="btn btn-success" href="">Export</a>
                      </td>



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
