@extends('layouts.admin')
@section('content')
    <div class="container">

        <div class="card bg-white mt-3 mb-3">
            <p class="text-center fs-6 mt-2 fs-1 fw-bold ">Clients<br></p>
            <div class="input-group mb-3 ms-2 ">
                <input type="text" class="form-control me-3" id="myInput" onkeyup="myFunction()" placeholder="Search a client...." aria-label="Cari PRIP...." aria-describedby="basic-addon2">
            </div>
        </div>
        <div class="client-list">
            <ul id="myUL" class="list-group mb-4">
                @foreach ($clients as $client)
                    <li class="list-group-item ">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" style="display: none">{{$client->name}}</a>
                            <div class=" d-flex justify-content-start align-items-center">
                                <div class="mx-auto" style="width: 100px;">
                                    <img src="assets/img/client/{{$client->image}}" alt="" class="d-flex mx-auto" style="height: 50px">
                                </div>
                                <span class="text-capitalize">{{$client->name}}</span>
                            </div>
                            <div class="d-flex justify-content-end align-items-center gap-2">
                                <span class="badge bg-primary">client</span>
                                <button class="badge bg-danger rounded-pill">x</button>
                            </div>
                        </div>

                    </li>
                @endforeach
                <ul  class="list-group mt-1">
                    <button id="li-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <li class="list-group-item ">
                            <div class="d-flex justify-content-center align-items-center">
                                <span class="text-warning" style="font-size: 1.2rem">
                                    <i class="bi bi-plus-circle-dotted" > </i> New Client
                                </span>
                            </div>
                        </li>
                    </button>
                </ul>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            {!! Form::open(['action' => '\App\Http\Controllers\ClientController@store', 'method'=>'POST','enctype' => 'multipart/form-data']) !!}
                                @csrf
                                <div class="modal-header text-center">
                                    <h5 class="modal-title" id="staticBackdropLabel">Add Client</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <input type="text" class="form-control" name="name" placeholder="Client's Name" required>
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control" name="acronym" placeholder="Acronym" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input input class="form-control" name="image" type="file" id="formFile" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Add Client</button>
                                </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </ul>
            
        </div>
    </div>

@endsection