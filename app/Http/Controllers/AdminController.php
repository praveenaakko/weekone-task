<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\User;


class AdminController extends Controller
{
    public function view_category(){

        $list=Catagory::all();
        return view('admin.catagory',compact('list'));
    }
    public function add_catagory(Request $request){
        $data=new Catagory();
        $data->catagory=$request->catagory;
        $data->save();
        return redirect()->back()->with('message','Catagory Added Successfully');

    }
    public function delete_catagory($id){
        $data=Catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message','Deleted Successfully');

    }
    public function view_product(){
        $list=Catagory::all();

        return view('admin.product',compact('list'));

    }
    public function add_product(Request $request){
        $product=new Product();
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->dicount_price=$request->dicount_price;

        $product->catagory=$request->catagory;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;





        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');



    }
    public function show_product(){

        $product=Product::all();
        return view('admin.show_product',compact('product'));

    }
    public function delete_product($id){
        $product=Product::find($id);
        $product->delete();
        return redirect()->back()->with('message','deleted successfully');

    }
    public function edit_product($id){
        $product=Product::find($id);

        return view('admin.edit_product',compact('product'));

    }
    public function update_product(Request $request ,$id){
        $product=Product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->dicount_price=$request->dicount_price;
        $product->quantity=$request->quantity;
        $image=$request->image;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);

        $product->image=$imagename;

        }
        $product->save();
        return redirect()->back()->with('message','Product Updated');



    }
    public function list_user(){
        $user=User::all();
        return view('admin.list_user',compact('user'));
    }
    public function delete_user($id){
        $product=User::find($id);
        $product->delete();
        return redirect()->back()->with('message','deleted successfully');

    }

        public function edit_user(Request $request ,$id){
            $user=User::find($id);
            $user->name=$request->name;
            $user->id=$request->id;
            $user->email=$request->email;
            $user->phone=$request->phone;




            $user->save();
            return redirect()->back()->with('message','Product Updated');




        }
        public function bill_module(){

            $product=product::all();
            return view('admin.billmodule',compact('product'));
        }


    }


