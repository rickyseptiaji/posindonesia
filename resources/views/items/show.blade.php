@extends('pages.dashboard')

@section('title', 'Edit Barang')

@section('content')
<form>
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" readonly>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="description" name="description" value="{{ $item->description }}" readonly>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Harga</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $item->price }}" readonly>
      </div>
      <div class="mb-3">
        <label for="stock" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stock" name="stock" value="{{ $item->stock }}" readonly>
      </div>
      <div class="mb-3">
        <label for="weight" class="form-label">Berat</label>
        <input type="number" class="form-control" id="weight" name="weight" value="{{ $item->weight }}" readonly>
      </div>
      <div class="mb-3">
        <label for="dimensions" class="form-label">Dimensi</label>
        <input type="text" class="form-control" id="dimensions" name="dimensions" value="{{ $item->dimensions }}" readonly>
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="category" name="category" value="{{ $item->category }}" readonly>
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="{{ $item->status }}" readonly>
      </div>
    <a href="{{ route('item.index') }}" class="btn btn-primary">Back</a>
  </form>
@endsection
