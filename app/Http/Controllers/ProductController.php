<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Requests\ProductCreateRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index() {
        $products = Product::paginate(10);

        return view('product.index',['products'=> $products]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(ProductCreateRequest $request)
    {
        $inputs = $request->all();
        Product::create($inputs);

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    public function edit($id) {
        $model = Product::findOrFail($id);

        return view('product.edit', ['product' => $model]);
    }

    public function update(ProductCreateRequest $request, $id) {
        $model = Product::findOrFail($id);
        $input = $request->all();

        $model->update($input);

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    public function delete($id) {
        $model = Product::findOrFail($id);
        $model->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!');
    }


    public function sellProduct($productId, $quantitySold)
    {
    $product = Product::findOrFail($productId);
    $currentQuantity = $product->quantity;
    
    if ($currentQuantity >= $quantitySold) {
        $product->quantity = $currentQuantity - $quantitySold;
        $product->save();

       
    } else {
        
    }

   
    }
}
