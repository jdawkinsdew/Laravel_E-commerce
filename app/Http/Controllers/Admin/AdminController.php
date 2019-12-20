<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Customer;
use App\Order;
use App\News;
use App\Category;
use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function orders()
    {
        $data = Order::all();
        return view('admin.orders',compact('data'));
    }

    public function customers()
    {
        $data = Customer::all();
        return view('admin.customers',compact('data'));
    }

    public function setting()
    {
        $data=Banner::all();
        return view('admin.setting',compact('data'));
    }

    public function editbannersetting(Request $request)
    {
        $banner=Banner::find((int)$request->bannerId);

        $banner->title=$request->title;

        $banner->subscription=$request->subscription;

        $banner->text=$request->text;

        $image=$request->file('image');

        if($image)
        {
            $image_path = public_path('assets/images/banners/'.$banner->image);

            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $image->move(public_path('assets/images/banners'), $banner->image);
        }

        $banner->save();

        return response()->json(['success'=>$banner]);
    }
    public function news()
    {
        $data = News::all();
        return view('admin.news',compact('data'));
    }

    public function addnews(Request $request)
    {
        $news =new News();


        $image=$request->file('image');

        if($image)
        {
            $new_name = rand(). '.png';
            $image->move(public_path('assets/images/news'), $new_name);
            $news->image=$new_name;
        }

        $news->title=$request->title;
        $news->image = $new_name;
        $news->content=$request->description;

        $news->save();

        return response()->json(['success'=>$news]);
    }

    public function deleteNews(Request $request)
    {
        $id=$request->newsId;

        $news=News::find($id);

        $image_path = public_path('assets/images/news/'.$news->image);

        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $news->delete();
        return response()->json(['success'=>$id]);
    }

    public function products()
    {
        $category = Category::all();
        $data = Product::all();
        return view('admin.products',compact('data'),compact('category'));
    }


    public function addProduct(Request $request)
    {
        // $validation = Validator::make($request->all(), rule($request));
        // if($validation->passes())
        // {
        $product=new Product();

        $image=$request->file('image');

        if($image)
        {
            $new_name = rand(). '.png';
            $image->move(public_path('assets/images/products'), $new_name);
            $product->image=$new_name;
        }

        $product->title=$request->title;
        $product->slug = str_slug($request->title, '-');
        $product->description=$request->description;
        if($request->category!="undefined")$product->category_id=(int)$request->category;
        $product->SKU=$request->sku;
        $product->price=(int)$request->price;
        $product->origin_price=(int)$request->price;
        $product->source=(int)$request->product_source;
        $product->stock=(int)$request->source;
        $product->status=$request->status;
        $product->tags=$request->tags;
        $product->special=($request->special=='on');

        $product->save();

        if(isset($product->category_id))
            $product->category_id=Category::find($product->category_id)->title;

        return response()->json(['success'=>$product]);
        // }else {

        //     return response()->json(['errors'=> $validation->errors()]);
        // }

    }

    public function deleteProduct(Request $request)
    {
        $id=$request->productId;
        $product=Product::find($id);

        if($product->image!='product_default.jpg'){

            $image_path = public_path('assets/images/products/'.$product->image);

            if(File::exists($image_path)) {
                File::delete($image_path);
            }

        }

        $product->delete();
        return response()->json(['success'=>$id]);
    }

    public function selectProduct(Request $request)
    {
        $id=$request->productId;
        $product=Product::find($id);

        if(isset($product->category_id))
            $product->category_id=Category::find($product->category_id)->title;
        return response()->json(['success'=>$product]);
    }

    public function editProduct(Request $request)
    {
        $id=$request->productId;

        $product=Product::find($id);

        $image=$request->file('edit_image');

        if($image)
        {
            if($product->image!='product_default.jpg'){
                $image_path = public_path('assets/images/products/'.$product->image);

                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
            $new_name = rand(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/products'), $new_name);

        }else{
            $new_name = $product->image;
        }

        $product->title=$request->edit_title;
        $product->image=$new_name;
        $product->description=$request->edit_description;
        $product->slug=str_slug($request->edit_title, '-');
        if($request->category!="undefined")$product->category_id=(int)$request->category;
        $product->origin_price=(int)$request->edit_price;
        $product->SKU=$request->edit_sku;
        $product->price=(int)$request->edit_price;
        $product->source=$request->edit_product_source;
        $product->stock=(int)$request->edit_source;
        $product->status=$request->edit_status;
        $product->tags=$request->tags;
        $product->special=(boolean)$request->edit_special;

        $product->save();

        if(isset($product->category_id))
            $product->category_id=Category::find($product->category_id)->title;

        return response()->json(['success'=>$product]);
    }
    public function rule($request)
    {
        $rule['content']='required|max:6000';

        // $rule['payment_type'] = 'required';
        // $rule['services'] = 'required';
        // if($request->payment_type=='0')
        // {
        //     $rule['recurrent_number'] = 'required|numeric|min:1';
        //     $rule['recurrent_unit'] = 'required';
        // }
        // $rule['price'] = 'required|regex:/^\d+(\.\d{1,2})?$/';
        // if($request->edit_item_id==null)
        // {
        //     $rule['name']='required|max:45|unique:invoice_packages';
        // }else {
        //     $rule['name']='required|max:45|unique:invoice_packages,name,'.$request->edit_item_id;
        // }
        return $rule;
    }
}
