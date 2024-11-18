@extends('pages.dashboard')
@section('title', 'Barang')
@section('content')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Barang</h1>
    
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                <h6 class="m-0 font-weight-bold text-primary">List Barang</h6>
                                <a href="{{ route('item.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Barang</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kota Tujuan</th>
                                                <th>Jenis Paket</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $index => $product)
                                            <tr>
                                                <td>{{$index + 1}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>{{$product->category}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>
                                                    <a href="{{ route('item.show', $product) }}" class="btn btn-primary"><i class="fas fa-solid fa-eye"></i></a>
                                                    <a href="{{ route('item.edit', $product) }}" class="btn btn-primary"><i class="fas fa-solid fa-pen"></i></a>
                                                        <form action="{{ route('item.destroy', $product) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <!-- /.container-fluid -->
@endsection