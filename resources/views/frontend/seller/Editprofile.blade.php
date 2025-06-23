@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('seller.updateProduct', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>

        <label for="description">Description:</label>
        <textarea name="description">{{ $product->description }}</textarea>

        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ $product->price }}" min="0" required>

        <label for="status">Status:</label>
        <select name="status">
            <option value="1" {{ $product->status ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !$product->status ? 'selected' : '' }}>Inactive</option>
        </select>

        <button type="submit">Update Product</button>
    </form>
@endsection
