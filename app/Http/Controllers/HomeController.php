<?php

namespace App\Http\Controllers;

use App\News;
use App\Product;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use DB;
use Session;
use App\Mail\SendMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //get all banner data
        $banner = DB::table('banners')->get();
        //get all products
        $products = Product::all();

        //get all best sellers
        $bestSeller = Product::orderBy('sold_out', 'DESC')->take(6)->get();

        //get new 6 products
        $new = Product::orderBy('created_at', 'DESC')->take(6)->get();

        //get the current date
        date_default_timezone_set('Asia/Kuwait');
        $date = date('Y-m-d', time());

        //check if the product is new
        foreach ($products as $product)
        {
            $created=strtotime($product->created_at);
            $now=strtotime($date);
            $datediff=$now-$created;
            $diff = round($datediff / (60 * 60 * 24));
            if($diff>=15)$product->newitem=false;
        }

        //redefine the product price on sale
        $sales = DB::table('sales')->get();
        $sale_items = array();
        foreach ($sales as $each)
        {
            if($date>=$each->start && $date<=$each->end)$sale_items[]=$each;
        }
        foreach ($sale_items as $each)
        {
            foreach ($products as $product)
            {
                if($product->id == $each->product_id)
                {
                    $product->sale = true;
                    if($each->type == 'percentage')
                    {
                        $origin = $product->origin_price;
                        $sale_price = $origin*(100-$each->amount)/100;
                        $product->price = $sale_price;
                    }
                    else
                    {
                        $product->price = $each->amount;
                    }

                }
            }
            foreach ($bestSeller as $item)
            {
                if($item->id == $each->product_id)
                {
                    $item->sale = true;
                    if($each->type == 'percentage')
                    {
                        $origin = $item->origin_price;
                        $sale_price = $origin*(100-$each->amount)/100;
                        $item->price = $sale_price;
                    }
                    else
                    {
                        $item->price = $each->amount;
                    }

                }
            }
            foreach ($new as $item)
            {
                if($item->id == $each->product_id)
                {
                    $item->sale = true;
                    if($each->type == 'percentage')
                    {
                        $origin = $item->origin_price;
                        $sale_price = $origin*(100-$each->amount)/100;
                        $item->price = $sale_price;
                    }
                    else
                    {
                        $item->price = $each->amount;
                    }

                }
            }
        }

        //get latest news
        $blogs = News::orderBy('created_at', 'DESC')->take(6)->get();


        return view('front.home', compact('products', 'bestSeller', 'new', 'blogs', 'banner'));
    }

    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('front.product', compact('product'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
    return view('front.contact');
    }

    public function blog($id)
    {
        $blog = News::where('id', $id)->first();
        $blogs = News::orderBy('like', 'DESC')->take(3)->get();
        return view('front.blog', compact('blog', 'blogs'));
    }

    public function mail(Request $request)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;
        $target = 'liqiang1995914@gmail.com';
        Mail::to($target)->send(new SendMail($data));
        return back();
    }

    public function addOne(Request $request)
    {
        $id = $request->get('id');
        $qty = $request->get('qty', '1');
        $item = Product::find($id);
        $sales = DB::table('sales')->get();
        $sale_items = array();
        date_default_timezone_set('Asia/Kuwait');
        $date = date('Y-m-d', time());
        foreach ($sales as $each)
        {
            if($date>=$each->start && $date<=$each->end)$sale_items[]=$each;
        }
        foreach ($sale_items as $each)
        {
            if($item->id == $each->product_id)
            {
                $item->sale = true;
                if($each->type == 'percentage')
                {
                    $origin = $item->origin_price;
                    $sale_price = $origin*(100-$each->amount)/100;
                    $item->price = $sale_price;
                }
                else
                {
                    $item->price = $each->amount;
                }
            }
        }
        $newCart = $this->cartUpdate($item, $qty);
        return response()->json([
            "status" => "success",
            "qty" => $newCart['qty'],
            "cart_area" => $newCart['cart_area'],
            "totalPrice" => $newCart['totalPrice'],
        ]);
    }
    public function cartUpdate($item, $qty)
    {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($item, $qty);
        Session::put('cart', $cart);
        $qty = $cart->totalQty;
        $totalPrice = $cart->totalPrice;
        $cart_area = '';
        foreach(Session::get('cart')->items as $each)
        {
            $cart_area .= '<li class="item"><a href="'.route('cart').'" title="Product title here" class="product-image"><img src="'.asset("assets/images/products/".$each['item']['image']).'" alt="html Template" width="65"></a><div class="product-details"><a href="javascript:void(0)" title="Remove This Item" class="remove-cart" onclick="deleteItem('.$each['item']['id'].')"><i class="fa fa-times"></i></a><p class="product-name"><a href="'.route('cart').'">'.$each['item']['title'].'</a></p><strong>'.$each['qty'].'</strong> x <span class="price">$'.$each['item']['price'].'</span></div></li>';
        }
        $data['cart_area'] = $cart_area;
        $data['qty'] = $qty;
        $data['totalPrice'] = $totalPrice;
        return $data;
    }

    public function deleteItemFromCart(Request $request)
    {
        $id = $request->get('id');
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $cart->deleteCart($id);
        Session::put('cart', $cart);
        $cart_area = '';
        foreach(Session::get('cart')->items as $each)
        {
            $cart_area .= '<li class="item"><a href="'.route('cart').'" title="Product title here" class="product-image"><img src="'.asset("assets/images/products/".$each['item']['image']).'" alt="html Template" width="65"></a><div class="product-details"><a href="javascript:void(0)" title="Remove This Item" class="remove-cart" onclick="deleteItem('.$each['item']['id'].')"><i class="fa fa-times"></i></a><p class="product-name"><a href="'.route('cart').'">'.$each['item']['title'].'</a></p><strong>'.$each['qty'].'</strong> x <span class="price">$'.$each['item']['price'].'</span></div></li>';
        }
        $data = array();
        $data['cart_area'] = $cart_area;
        $data['qty'] = Session::get('cart')->totalQty;
        $data['totalPrice'] = Session::get('cart')->totalPrice;
        return response()->json([
        "status" => "success",
        "qty" => $data['qty'],
        "cart_area" => $data['cart_area'],
        "totalPrice" => $data['totalPrice'],
        ]);
    }
    public function deleteFromCartPage(Request $request)
    {
        $id = $request->get('id');
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $cart->deleteCart($id);
        Session::put('cart', $cart);
        $cart_table_area = '';
        foreach(Session::get('cart')->items as $each)
        {
            $cart_table_area .= '<tr><td class="cart_product"><a href="'.route('product', ['id'=>$each['item']['slug']]).'"><img src="'.asset('assets/images/products/'.$each['item']['image']).'" alt="Product"></a></td><td class="cart_description"><p class="product-name"><a href="'.route('product', ['id'=>$each['item']['id']]).'">'.$each['item']['title'].'</a></p><td class="availability in-stock"><span>'.$each['item']['description'].'</span></td><td class="price"><span>$'.$each['item']['price'].'</span></td><td class="qty"><span>'.$each['qty'].'</span></td><td class="price"><span>$'.$each['item']['price']*$each['qty'].'</span></td><td class="action"><a href="javascript:void(0)" onclick="deleteFromCartPage('.$each['item']['id'].')"><i class="icon-close"></i></a></td></tr>';
        }
        $data = array();
        $data['cart_table_area'] = $cart_table_area;
        $data['qty'] = Session::get('cart')->totalQty;
        $data['totalPrice'] = Session::get('cart')->totalPrice;
        return response()->json([
        "status" => "success",
        "qty" => $data['qty'],
        "cart_table_area" => $data['cart_table_area'],
        "totalPrice" => $data['totalPrice'],
        ]);
    }

    public function cart()
    {
        return view('front.cart');
    }

    public function search(Request $request)
    {
        if($request->category_id!='0')
        {
            $temps = Product::where('category_id', $request->category_id)->get();
        }
        else{
            $temps = Product::all();
        }

        $products = array();
        if($request->search)
        {
            foreach ($temps as $temp)
            {
                if(strpos($temp->title, $request->search) != false)
                {
                    $products[] = $temp;
                }
            }
        }
        else
        {
            foreach ($temps as $temp)$products[]=$temp;
        }

        //get the current date
        date_default_timezone_set('Asia/Kuwait');
        $date = date('Y-m-d', time());

        //check if the product is new
        foreach ($products as $product)
        {
            $created=strtotime($product->created_at);
            $now=strtotime($date);
            $datediff=$now-$created;
            $diff = round($datediff / (60 * 60 * 24));
            if($diff>=15)$product->newitem=false;
        }

        //redefine the product price on sale
        $sales = DB::table('sales')->get();
        $sale_items = array();
        foreach ($sales as $each)
        {
            if($date>=$each->start && $date<=$each->end)$sale_items[]=$each;
        }
        foreach ($sale_items as $each)
        {
            foreach ($products as $product)
            {
                if($product->id == $each->product_id)
                {
                    $product->sale = true;
                    if($each->type == 'percentage')
                    {
                        $origin = $product->origin_price;
                        $sale_price = $origin*(100-$each->amount)/100;
                        $product->price = $sale_price;
                    }
                    else
                    {
                        $product->price = $each->amount;
                    }

                }
            }
        }
        return view('front.view', compact('products'));
    }
    public function category($category_id)
    {
        //get all products
        $products = Product::where('category_id', $category_id)->get();

        //get the current date
        date_default_timezone_set('Asia/Kuwait');
        $date = date('Y-m-d', time());

        //check if the product is new
        foreach ($products as $product)
        {
            $created=strtotime($product->created_at);
            $now=strtotime($date);
            $datediff=$now-$created;
            $diff = round($datediff / (60 * 60 * 24));
            if($diff>=15)$product->newitem=false;
        }

        //redefine the product price on sale
        $sales = DB::table('sales')->get();
        $sale_items = array();
        foreach ($sales as $each)
        {
            if($date>=$each->start && $date<=$each->end)$sale_items[]=$each;
        }
        foreach ($sale_items as $each)
        {
            foreach ($products as $product)
            {
                if($product->id == $each->product_id)
                {
                    $product->sale = true;
                    if($each->type == 'percentage')
                    {
                        $origin = $product->origin_price;
                        $sale_price = $origin*(100-$each->amount)/100;
                        $product->price = $sale_price;
                    }
                    else
                    {
                        $product->price = $each->amount;
                    }

                }
            }
        }
        return view('front.view', compact('products'));
    }

    public function like($id)
    {
        if(Session::has('like'))
        {
            $news = News::find($id);
            $news->like--;
            $news->save();
            Session::forget('like');
            return back();
        }
        $news = News::find($id);
        $news->like++;
        $news->save();
        Session::put('like', true);
        return back();

    }

    public function checkout(Request $request)
    {
        $curl = curl_init();
        $id=$request->get('id');
        $name=$request->get('name');
        $amount= intval($request->get('amount'));
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.tap.company/v2/charges",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{
     \"amount\":".$amount.",
      \"currency\":\"USD\",
      \"description\":\"Test Description\",
      \"customer\":{\"first_name\":\"".$name."\",\"email\":\"test@test.com\",\"phone\":{\"country_code\":\"965\",\"number\":\"50000000\"}},
      \"source\":{\"id\":\"".$id."\"},
      \"redirect\":{\"url\":\"".route('home')."\"}}",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer sk_test_l0oGRfDNpO5CwZKguvTkcM4x",
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {

            foreach(Session::get('cart')->items as $each)
            {
                $order = new Order();
                $order->customer_name = json_decode($response)->customer->first_name;
                $order->token_id = json_decode($response)->source->id;
                $order->product_id = $each['item']['id'];
                $order->bulk = $each['qty'];
                $order->save();
            }

            Session::forget('cart');

            return $response;
        }

    }

}
