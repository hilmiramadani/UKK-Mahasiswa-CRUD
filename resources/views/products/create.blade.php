@extends('layouts.app')
  
{{-- @section('title', 'Create Product') --}}
  
@section('contents')
    <h1 class="mb-0">Tambah Mahasiswa</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="NIM">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Jurusan">
            </div>
            <div class="col">
                <input class="form-control" name="description" placeholder="Tempat, tgl lahir"></input>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid px-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection