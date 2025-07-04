<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AdditionalPrices;
use App\Http\Controllers\Controller;

class AdditionalPriceController extends Controller
{
    public function index(){
        $additionalprices = AdditionalPrices::latest()->get();
        return view('admin.AdditionalPrice.index',compact('additionalprices'));
    }

    public function create(){
        return view('admin.AdditionalPrice.create');
    }

    public function store(Request $request){
        // return $request->package_name;
        $additionalprice = AdditionalPrices::create([
            'services'=>$request->services,
            'additional_services'=>$request->additional_services,
            'basic_package_price'=>$request->basic_package_price,
            'advance_package_price'=>$request->advance_package_price,
            // 'status' => $status,
        ]);
        return redirect()->route('AdditionalPrice')->with(['message'=>'Additional Price Created Successfuly']);
    }

    public function edit($id){
        $additionalprice = AdditionalPrices::find($id);
        return view('admin.AdditionalPrice.edit',compact('additionalprice'));
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'services' => 'required|string',
            'additional_services' => 'required|string',
            'basic_package_price' => 'nullable|numeric|min:0',
            'advance_package_price' => 'nullable|numeric|min:0',
            // 'status' => 'required|in:0,1', // Uncomment if status is required
        ]);

        // At least one price must be present
        if (is_null($request->basic_package_price) && is_null($request->advance_package_price)) {
            return back()->withErrors(['basic_package_price' => 'At least one price (Basic or Advance) is required.', 'advance_package_price' => 'At least one price (Basic or Advance) is required.'])->withInput();
        }

        $additionalprice = AdditionalPrices::find($id);
        $additionalprice->update([
            'services'=>$request->services,
            'additional_services'=>$request->additional_services,
            'basic_package_price'=>$request->basic_package_price,
            'advance_package_price'=>$request->advance_package_price,
            'status' => $request->status,
        ]);
        return redirect()->route('AdditionalPrice')->with(['message'=>'Additional Price Updated Successfuly']);
    }

    public function destroy($id){
        AdditionalPrices::destroy($id);
        return redirect()->route('AdditionalPrice')->with(['message'=>'Additional Price Deleted Successfuly']);
    }
}
