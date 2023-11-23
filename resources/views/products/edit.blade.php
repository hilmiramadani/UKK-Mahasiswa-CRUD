@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Edit Mahasiswa</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tempat, tgl lahir</label>
                <input class="form-control" name="description" placeholder="Descriptoin" value="{{ $product->description }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid px-3">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection