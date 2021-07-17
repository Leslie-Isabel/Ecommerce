<?php

namespace App\Http\Controllers;

use App\Client;
use App\Sale;
use Illuminate\Http\Request;
use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;

class SaleController extends Controller
{
    public function index()
    {
        $sales=Sale::all();
        return view('admin.sale.index',compact('sales'));
    }

    
    public function create()
    {
        $clients=Client::all();
        return view('admin.sale.create',compact('clients'));
    }

    
    public function store(StoreRequest $request)
    {
        $sale=Sale::create($request->all());

        foreach($request->product_id as $key=>$product){
            $result[]=array("product_id"=>$request->product_id[$key],
            "quantity"=>$request->quantity[$key],"discount"=>$request->discount[$key],"price"=>$request->price[$key]);
        }
        $sale->saleDetails()->create($result);

        return redirect()->route('sales.index');
    }

   
    public function show(Sale $sale)
    {
        return view('admin.sale.show',compact('sale'));
    }

    
    public function edit(Sale $sale)
    {
        $clients=Client::all();
        return view('admin.sale.show',compact('sale','clients'));
    }

    
    public function update(UpdateRequest $request, Sale $sale)
    {
        //$sale->update($request->all());
        //return redirect()->route('sales.index');
    }

    
    public function destroy(Sale $sale)
    {
        //$sale->delete();
        //return redirect()->route('sales.index');
    } 
}
