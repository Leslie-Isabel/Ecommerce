<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use App\Provider;
use App\PurchaseDetails;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases=Purchase::all();
        return view('admin.purchase.index',compact('purchases'));
    }

    
    public function create()
    {
        $providers=Provider::all();
        return view('admin.purchase.create',compact('providers'));
    }

    
    public function store(StoreRequest $request)
    {
        $purchase=Purchase::create($request->all());

        foreach($request->product_id as $key=>$product){
            $result[]=array("product_id"=>$request->product_id[$key],
            "quantity"=>$request->quantity[$key],"price"=>$request->price[$key]);
        }
        $purchase->purchaseDetails()->create($result);

        return redirect()->route('purchases.index');
    }

   
    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show',compact('purchase'));
    }

    
    public function edit(Purchase $purchase)
    {
        $providers=Provider::all();
        return view('admin.purchase.show',compact('purchase','providers'));
    }

    
    public function update(UpdateRequest $request, Purchase $purchase)
    {
        //$purchase->update($request->all());
        //return redirect()->route('purchases.index');
    }

    
    public function destroy(Purchase $purchase)
    {
        //$purchase->delete();
        //return redirect()->route('purchases.index');
    } 
}
