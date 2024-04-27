@extends('index')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<table class="table table-dark mt-3">
    <tr>
        <th>Product_Name</th>
        <th>Price</th>
        <th>Description</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach($pro as $pros)
    <tr>
       <td>{{ $pros->p_name }}</td> 
       <td>{{ $pros->price }}</td>
       <td>{{ $pros->description }}</td>
       <td><a href="{{ route('edit',$pros->product_id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
       <td><a href="{{ route('delete',$pros->product_id) }}" class="btn btn-danger"><i class="bi bi-x-lg"></i></a></td>
    </tr>
    @endforeach
</table>
@endsection