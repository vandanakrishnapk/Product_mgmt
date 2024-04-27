@extends('index')
@section('content')
<div class="demo bg-dark text-light p-4 mt-5 rounded" style="box-shadow:5px 5px 5px 5px black">
<form action="{{ route('update',$pid->product_id) }}" method="POST">
    @csrf 
    <label>Product Name:</label>
    <input type="text" name="p_name" class="form-control" value="{{ $pid->p_name }}">
    <span id="sp1" style="color:red;font-size:12px;font-weight:bolder"></span>
    <label>Price</label>
    <input type="text" name="price" class="form-control" value="{{ $pid->price }}">
    <span id="sp2" style="color:red;font-size:12px;font-weight:bolder"></span>
    <label>Description</label>
    <input type="text" name="description" value="{{ $pid->description }}" class="form-control">
    <span id="sp3" style="color:red;font-size:12px;font-weight:bolder"></span>
    <input type="submit" onclick="validate();return false;"  class="btn btn-primary mt-3" value="update" style="margin-left:200px">
</form>
</div>

@endsection