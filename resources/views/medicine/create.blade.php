@extends('base')

@include('_navbar')

@section('content')

    <div class="container col-md-6 offset-md-3 mt-5">
        <h1 class="text-center">Create Medicine</h1>
        <hr>

        <form action="{{ '/medicine' }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="dosage">Dosage</label>
                <input type="text" name="dosage" id="dosage" class="form-control">
                @error('dosage')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="expiry_date">Expiry Date</label>
                <input type="date" name="expiry_date" id="expiry_date" class="form-control">
                @error('expiry_date')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control">
                @error('stock')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control">
                @error('price')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex">
                {{-- <div class="flex-grow-1">
                    <a href="{{ '/' }}">Already have an account? Log in</a>
                </div> --}}
                <button class="btn btn-primary px-5" type="submit">Create</button>
            </div>
        </form>
    </div>

@endsection

