<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
   public function index()
   {
    $stocks = Stock::all();
    return view('layouts.stock', compact('stocks'));
   }
   public function index2()
   {
    $stocks = Stock::all();
    return view('layouts.stock', compact('stocks'));
   }

 
   public function show()
   {
    $stock_id = request('id');
    $stock = Stock::find($stock_id);
    return view ('stocks.show',compact('stock'));
   }
   


   public function search()
   {
        $word = request('stock');
        $stocks = Stock::where('partName','like','%'. $word .'%')
        ->orWhere ('partReference','like','%'. $word .'%')->orwhere('supplier','like','%'. $word .'%')
        ->orwhere('price','like','%'. $word .'%')//;
     //   dd($products->toSql(),$products->getBindings());
        ->get();
        return view('stocks.search', compact('stocks'));

   }

   public function delete()
   {
        $stock_id = request('id');
        $stock = Stock::find($stock_id);
        try{
            $stock->delete();
            return "ok";

        }
        catch(Exception $e) {
            return "error";
        }


   }

}