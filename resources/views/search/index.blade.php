@extends('layouts.app')
  
{{-- @section('title', 'Home Product') --}}
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Mahasiswa</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">+ Tambah Mahasiswa</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover table-striped">
        <thead class="bg-table">
            <tr>
                <th>No</th>
                <th class="px-5">Nama</th>
                <th class="px-3">NIM</th>
                <th class="px-5">Jurusan</th>
                <th>Tempat, tgl lahir</th>
                <th class="text-center px-5">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle px-5">{{ $rs->title }}</td>
                        <td class="align-middle px-3">{{ $rs->price }}</td>
                        <td class="align-middle px-5">{{ $rs->product_code }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>  
                        <td class="align-middle text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" class="btn-info"><i class="bi bi-info-circle px-2"></i></a>
                                <a href="{{ route('products.edit', $rs->id)}}" class="btn-edit"><i class="bi bi-pencil-square px-3"></i></a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST"  onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete"><i class="bi bi-trash3"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="8">Mahasiswa tidak tersedia</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection