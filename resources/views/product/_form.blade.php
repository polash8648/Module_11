
    <input type="text" name="name" value="<?= (isset($product))?$product->name:''; ?>" placeholder="Product Name"><br>
    <input type="number" name="price" value="<?= (isset($product))?$product->price:'0'; ?>" placeholder="Price"><br>
    <input type="number" name="quantity" value="<?= (isset($product))?$product->quantity:'0'; ?>" placeholder="Quantity"><br>
    <button type="submit">Add Product</button>

