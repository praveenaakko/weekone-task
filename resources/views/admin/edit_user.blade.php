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


            <form action="{{url('/edit_user',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf


            <div class="div_center">
                <h1 class="font_size">Update User</h1>
                <div class="div_design">
                <label>User_id</label>
                <input class="text_color" type="text" name="id" placeholder="Edit a Title" value="{{ $user->id }}">
            </div>
            <div class="div_design">
                <label>Name</label>
                <input class="text_color" type="text" name="name" placeholder="" value="{{ $user->name }}">
            </div>

            <div class="div_design">
                <label>email</label>
                <input class="text_color" type="email"  name="email" placeholder=" " value="{{ $user->email }}">
            </div>
            <div class="div_design">
                <label>phone</label>
                <input class="text_color" type="number" name="phone" placeholder="Write a Title" value="{{ $user->phone }}">
            </div>

            <div class="div_design">
                <input type="submit" value="Update User" class="btn btn-primary">
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
