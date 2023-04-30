@extends('master')

@section('body')
    <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card">
                            <div class="card-header">Product Manage Form</div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <theader>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>{{$product->price}}</td>
                                                <td><img src="{{asset($product->image)}}"alt=""width="130"height="75"/></td>
                                                <td>
                                                    <a href="{{route('product.edit',['id'=>$product->id])}}">Edit</a> |
                                                    <a href="">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </theader>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection