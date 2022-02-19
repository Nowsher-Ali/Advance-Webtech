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
        </tr>
        @endforeach
    </tbody>
  </table>
  {{  $serializeArray = serialize($products) }} 
  <a href="{{ route('customer.checkout', $serializeArray) }}" class="btn btn-success">Checkout</a>
@endsection

       
