<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Product;
use CodeCommerce\Category;
use CodeCommerce\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
#use PhpParser\Node\Scalar\MagicConst\File;


class ProductsController extends Controller {

    private $productyModel; //model de Product

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

        $product = $this->productyModel->find($id);    // pegando o id do product
        return view('products.images', compact('product'));
    }

    public function createImage($id){

        $product = $this->productyModel->find($id);
        return view('products.create_image', compact('product'));
    }


    public function storeImage(Requests\ProductImageRequest $request, $id, ProductImage $productImage){

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $image = $productImage::create(['product_id'=>$id, 'extension'=>$extension]);

        Storage::disk('public_local')->put($image->id.'.'.$extension, File::get($file));

        return redirect()->route('products.images', ['id'=>$id]);

    }

    public function destroyImage(ProductImage $productImage, $id){

        $image = $productImage->find($id);

        if (file_exists(public_path().'/uploads/'.$image->id.'.'.$image->extension)) { // verificando se existe image
            Storage::disk('public_local')->delete($image->id.'.'. $image->extension);// remoção do cara
        }

        $product = $image->product;// acessando o product
        $image->delete();// e removendo para depois redirecionar com return redirect();

        return redirect()->route('products.images', ['id'=>$product->id]);
    }

}
