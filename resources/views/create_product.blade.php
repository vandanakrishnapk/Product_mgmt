@extends('index')
@section('content')
<div class="demo bg-dark text-light p-4 rounded mt-4 rounded" style="box-shadow:5px 5px 5px 5px black">
    <h2 class="text-light">Add Product..</h2>
    <form action="{{ route('do.create') }}" method="POST" id="form">
        @csrf 
        <label for="">Product Name:</label>
        <span id="sp1" style="color:red;font-size:12px;font-weight:bolder"></span>
        <input type="text" name="p_name" class="form-control mt-2" id="p_name" oninput="clearmsg('sp1')">

        <label for="">Price</label>
        <span id="sp2" style="color:red;font-size:12px;font-weight:bolder"></span>
        <input type="text" name="price" class="form-control mt-2" id="price" oninput="clearmsg('sp2')">

        <label for="">Description</label>
        <span id="sp3" style="color:red;font-size:12px;font-weight:bolder"></span>
        <textarea name="description" id="description" cols="30" rows="3" class="form-control mt-2" style="vertical-align:middle" oninput="clearmsg('sp3')"></textarea>

        <input type="submit" class="btn btn-primary mt-2" value="Add" style="margin-left:200px;">
    </form>
</div>

<script>
    var form = document.getElementById('form');
    form.addEventListener('submit', function(event) {
        if (!validate()) {
            event.preventDefault();
        }
    });

    function validate() {
        var name = document.getElementById("p_name").value;
        var price = document.getElementById("price").value;
        var description = document.getElementById("description").value;

        var isValid = true;

        if (name.trim() == "") {
            document.getElementById("sp1").innerHTML = "Product name should not be null";
            isValid = false;
        }

        if (price.trim() == "") {
            document.getElementById("sp2").innerHTML = "Price field should not be null";
            isValid = false;
        }

        if (description.trim() == "") {
            document.getElementById("sp3").innerHTML = "Description should not be null";
            isValid = false;
        }

        return isValid;
    }

    function clearmsg(sp) {
        document.getElementById(sp).innerHTML = "";
    }
</script>

@endsection
