<div>
    Product:
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Category</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product['id'] }}</td>
                <td>{{$product['name'] }}</td>
                <td>{{$product['category'] }}</td>
            <tr>
            @endforeach
        </tbody>
    </table>
</div>
