<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\customer;
use App\Models\products;
use App\Models\orders;


class StoreApiController extends Controller
{
    //
    public function get_customers(Request $request){
      $customers = customer::all();
      return response()->json($customers);
    }
    public function get_products(Request $request){
      $products = products::all();
      return response()->json($products);
    }
    public function get_orders(Request $request){
      $orders = orders::all();
      return response()->json($orders);
    }
    public function post_customers(Request $request){
      $customer = new customer;
      $customer->first_name = $request->first_name;
      $customer->last_name = $request->last_name;
      $customer->shipping_address = $request->shipping_address;
      $customer->billing_address = $request->billing_address;
      $customer->save();
      return response()->json($customer);
    }
}
