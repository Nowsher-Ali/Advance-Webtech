@extends('layouts.app')
@section('EditProduct')
<form action="{{ route('edit.confirm', ['id' => $p->id]) }}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pname" value="{{ $p->name }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Price</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="price" value="{{ $p->price }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection