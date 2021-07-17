@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
  @if(Session::has('success'))
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
    <div class="card">
        <div class="card-header">
            <h5>DAFTAR PRODUK</h5>
        </div>
        <div class="card-body">
            <a href="{{ route('admin.addform') }}" class="btn btn-success mb-4" style="color:white; width:250px;">TAMBAH PRODUK</a>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                  <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td><img style="height:100px;" src="{{ asset('/storage/'.$product->image) }}" alt=""></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->gender }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('product.editform',['id'=>$product->id]) }}" class="btn btn-primary w-100 m-1" style="color:white;">EDIT</a>
                        <a href="{{ route('product.remove',['id'=>$product->id]) }}" class="btn btn-danger w-100 m-1" style="color:white;">HAPUS</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection