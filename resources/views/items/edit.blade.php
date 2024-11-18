@extends('pages.dashboard')

@section('title', 'Edit Barang')

@section('content')
<form action="{{ route('item.update', $item) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
      @error('name')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="description" name="description" value="{{ $item->description }}" required>
      @error('description')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Harga</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $item->price }}" required>
        @error('price')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="stock" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stock" name="stock" value="{{ $item->stock }}" required>
        @error('stock')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="weight" class="form-label">Berat</label>
        <input type="number" class="form-control" id="weight" name="weight" value="{{ $item->weight }}" required>
        @error('weight')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="dimensions" class="form-label">Dimensi</label>
        <input type="text" class="form-control" id="dimensions" name="dimensions" value="{{ $item->dimensions }}" required>
        @error('dimensions')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="category" name="category" value="{{ $item->category }}" required>
        @error('category')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="available" {{ $item->status == 'available' ? 'selected' : '' }}>Tersedia</option>
            <option value="unavailable" {{ $item->status == 'unavailable' ? 'selected' : '' }}>Tidak Tersedia</option>
        </select>
    </div>
    <a href="{{ route('item.index') }}" class="btn btn-primary">Back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
