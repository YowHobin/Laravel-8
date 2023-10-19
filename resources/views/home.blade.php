@extends('layouts.app')

@section('content')
<div class="container  pt-3 ">
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-1">
                <p>{{ $message }}</p>
            </div>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between  ">
                    <div class="d-flex mt-1 ">
                        <span class="fw-bold">Announcements</span>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Create an Announcement
                    </button>
                </div>
                    <div class="card-body d-flex column justify-content-around ">
                        @foreach ($products as $product)
                        <div class="card " style="width: 18rem;">
                            {{-- <img src={{ asset('img/features-3.png')}} class="card-img-top" alt="..."> --}}
                            <img src="/image/{{ $product->image }}" class="card-img-top rounded" style="height: 10rem;" alt="...">
                            <div class="card-body bg-body-secondary  overflow-y-auto" style="height: 15rem;">

                                <h5 class="card-text text-center fw-bold ">{{ $product->name }}</h5>
                                <p class="card-text text-center ">{{ $product->detail }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
            <!-- Check if there are more than 5 records to display pagination -->
            @if ($products->total() > 2)
                <div class="d-flex mt-3">
                    {{ $products->links('vendor.pagination.custom') }}

                </div>
            @endif
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create an Announcement</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Detail:</strong>
                                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control" placeholder="image">
                            </div>
                        </div>

                        {{--  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div> --}}

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


