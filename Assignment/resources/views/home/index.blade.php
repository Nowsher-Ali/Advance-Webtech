@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->price}}</td>
            <td><a href="{{ route('add.cart', ['id' => $p->id]) }}" class="btn btn-warning">Add To Cart</a>
            <a href="{{ route('product.edit', ['id' => $p->id]) }}" class="btn btn-success">Update</a>
            <a href="{{ route('product.delete', ['id' => $p->id]) }}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="{{ route('AddProduct') }}" class="btn btn-primary">Add New Product</a>
@endsection

       
