@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Update product Form</div>
                        <div class="card-body">
                            <p class="text-center">{{Session::get('message')}}</p>
                            <form action="{{route('product.store')}}"method="POST"enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text"class="form-control"name="name"value="{{$product->name}}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"name="description">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number"class="form-control"name="price"value="{{$product->price}}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file"class="form-control"name="image"/>
                                        <img src="{{asset($product->image)}}"alt=""width="130"height="70"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit"class="btn btn-outline-success px-5"value="Update New Product"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection