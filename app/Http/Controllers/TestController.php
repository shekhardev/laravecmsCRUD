<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function index(){
      return view('testView.test');
    }
    public function store(Request $request){
       return [
      'name'        => 'required',
       'sku'         => 'required' ,
             ];
    $product = new Test(array(
      'name' => $request->get('name'),
      'sku'  => $request->get('sku'),
      'file'  => $request->get('file')

      ));
    $product->save();
    $imageName = $product->id . '.' . $product->name. '.'.
        $request->file('file')->getClientOriginalExtension();
    $request->file('file')->move(
        base_path() . '/storage/images/catalog/', $imageName
      );
    return 'Data saved';
    }
}
