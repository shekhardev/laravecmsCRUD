<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
use File;

class ProdutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();

      // load the view and pass the nerds
      return view('products.index')
          ->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // load the create form (app/views/products/create.blade.php)
      return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate
      // read more on validation at http://laravel.com/docs/validation
      $rules = array(
          'name'       => 'required',


      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect('products/create')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $product = new Product;
          $product->name       = Input::get('name');
          $product->isDefault      = Input::get('isDefault');
          $product->save();

          // redirect
          Session::flash('message', 'Successfully created Badge!');
          return Redirect('products');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // get the nerd
      $product = Product::find($id);

      // show the view and pass the nerd to it
      return view('products.show')
          ->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // get the product
      $product = Product::find($id);

      // show the edit form and pass the nerd
      return view('products.edit')
          ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // validate
      // read more on validation at http://laravel.com/docs/validation
      $rules = array(
          'name'       => 'required',
          'isDefault'      => 'required'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect('products/' . $id . '/edit')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $product = Product::find($id);
          $product->name       = Input::get('name');
          $product->email      = Input::get('email');
          $product->nerd_level = Input::get('nerd_level');
          $product->save();

          // redirect
          Session::flash('message', 'Successfully updated Badges!');
          return Redirect('products');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // delete
      $product = Product::find($id);
      $product->delete();

      // redirect
      Session::flash('message', 'Successfully deleted the Badge!');
      return Redirect('products');
    }
}
