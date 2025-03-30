<x-layout>
    <x-slot:heading>Product List</x-slot>
<x-table>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ $product['id'] }}</th>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['category'] }}</td>
        </tr>
        @endforeach
  </tbody>
</x-table>
</x-layout>
