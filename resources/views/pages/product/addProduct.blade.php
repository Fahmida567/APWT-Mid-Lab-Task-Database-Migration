<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

{{-- @extends('../../layouts.app')
@section('content') --}}

<body>
    <div class="d-flex justify-content-center align-items-center" style="
    
    width: 100%;
    ">
        <div>
            <div class="form-area">
                <div class="p-4" style=" 
                    border:2px solid white;
                    border-radius: 10px;
                    width: 600px;
                    color: white;
                ">
                    <form action="{{route('addProduct')}}" method="post">
                        {{csrf_field()}}
                        @if(session('product-added successfully'))
                        <div class="alert alert-secondary w-100 text-center" role="alert">
                            <span class="fw-bold"> {{ session('product-added') }}</span>
                        </div>
                        @endif
                        <h4 class="fw-bold text-dark text-center">Add Product</h4>

                        <input type="text" name="p_name" placeholder="Enter product name"  class="form-control my-1 w-100">
                        <div>
                            @error('p_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <input type="text" placeholder="Enter product code"  name="p_code" class="form-control my-1  w-100">
                        <div>
                            @error('p_code')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       
                        <input type="text" placeholder="Enter product description" name="p_desc" class="my-1  form-control w-100">
                        <div>
                            @error('p_desc')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                       
                        <input type="text" placeholder="Enter product category" name="p_category" class="my-1 form-control w-100">
                        <div>
                            @error('p_category')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <input type="text" placeholder="Enter product price" name="p_price" class="my-1 form-control w-100">
                        <div>
                            @error('p_price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                         
                        <input type="text" placeholder="Enter product quantity" name="p_quantity" class="my-1 form-control w-100">
                        <div>
                            @error('p_quantity')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        
                        <input type="text" placeholder="Enter product rating" name="p_rating" class="my-1 form-control w-100">
                        <div>
                            @error('p_rating')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        
                        <input type="text" placeholder="Enter product purchased" name="p_purchased" class="my-1 form-control w-100">
                        <div>
                            @error('p_purchased')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        
                       
                        <div class="d-flex">
                            <a href={{route('productList')}} class="btn btn-danger btn-sm mt-3 px-3">Back</a>
                            <div class="ms-auto">
                                <input type="submit" value="Add Product" class="btn btn-success btn-sm mt-3">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</body>
{{-- @endsection --}}

</html>