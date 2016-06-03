<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;

class ProductsController extends Controller
{
    private $productyModel;

    public function __construct(Product $productyModel) {
        $this->productyModel = $productyModel;
    }

    public function index()
    {
        $products = $this->productyModel->all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Requests\ProductRequest $request)
    {
        $input = $request->all();

        $products = $this->productyModel->fill($input);

        $products->save();

       return redirect()->route('products');
    }

    public function destroy($id)
    {
        $this->productyModel->find($id)->delete();

        return redirect()->route('products');

    }

    public function show($id) {
        //
    }

    public function edit($id)
    {
        $products = $this->productyModel->find($id);

        return view('products.edit', compact('products'));

    }

    public function update(Requests\ProductRequest $request, $id)
    {
        $this->productyModel->find($id)->update($request->all());

        return redirect()->route('products');
    }
}