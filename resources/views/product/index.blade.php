
<a href="{{ route('product.create') }}">Create</a>
<table border="1" style="width: 100%;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if($products->count() > 0)
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a href="{{ route('product.edit', $product->id) }}">Edit</a>
                        <!-- <a href="{{ route('product.delete1', $product->id) }}">Delete1</a> -->
                       
                        <form action="{{ route('product.delete', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

