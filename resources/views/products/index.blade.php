
@extends('layouts.app')
{{-- @extends('products.layout') --}}

@section('content')
<div class="container">
    <div class=" mt-3 mb-3">
            <div class="d-flex justify-content-end">

                <a class="btn btn-success" href="{{ route('products.create') }}"> Create an Announcement</a>
            </div>

            <div class="d-flex justify-content-between bg-danger">

            </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($products as $product)

        <tr>
            <td>{{ $product->id }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- Check if there are more than 5 records to display pagination -->
    @if ($products->total() > 5)
    <div class="d-flex">
        {{ $products->links('vendor.pagination.custom') }}

    </div>
    @endif

</div>











@endsection
