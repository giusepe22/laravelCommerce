<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Product;
use CodeCommerce\Category;

#use CodeCommerce\ProductImage;

class ProductsController extends Controller {

    private $productyModel;

    public function __construct(Product $productyModel) {
        $this->productyModel = $productyModel;
    }

    public function index() {
        $products = $this->productyModel->paginate(10); // paginate

        return view('products.index', compact('products'));
    }

    public function create(Category $category) {// ja estou recebendo um estancia de category
        $categories = $category->lists('name', 'id'); //listagem de todas a minhas categorias pelo name e id

        return view('products.create', compact('categories'));
    }

    public function store(Requests\ProductRequest $request) {
        $input = $request->all();

        $products = $this->productyModel->fill($input);

        $products->save();

        return redirect()->route('products');
    }

    public function destroy($id) {
        $this->productyModel->find($id)->delete();

        return redirect()->route('products');
    }

    public function show($id) {
        //
    }

    public function edit($id, Category $category) {         //--> recebendo category
        $categories = $category->lists('name', 'id');        // --> pra listar pelo nome e ID

        $products = $this->productyModel->find($id);

        return view('products.edit', compact('products', 'categories'));
    }

    public function update(Requests\ProductRequest $request, $id) {

        $this->productyModel->find($id)->update($request->all());

        return redirect()->route('products');
    }

    public function images($id) {

        $products = $this->model->find($id);    // pegando o id do product

        return view('products.images', compact('products'));
    }

}
