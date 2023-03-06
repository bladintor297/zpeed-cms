@extends('layouts.client')
@section('content')
<div class="container pt-5 mt-5">
    <div class="row pt-5 mt-5">
        <div class="col-sm-12">
            <div class="title-box text-center">
                <h3 class="title-a ">
                    <span class="title-inside">
                        <a href="">Our Clients and Partners</a>
                    </span>
                </h3>
                <p class="subtitle-a text-white">
                    We offer three main IT services.
                </p>
            </div>
        </div>
    </div>
    <div class="row pt-5 mt-5">
        <div class="title-box text-center">
            <h3 class="subtitle-a text-white p-0">
                Our Clients
            </h3>
            <div class="line-mf"></div>
        </div>
        <?php $i=0?>
        @foreach ($clients as $client)
            @if ($client->type === 'c')
                <div class="col-md-3">
                    <div class="client-box" data-aos="flip-right" data-aos-duration="500" data-aos-delay="{{$i++*50}}">
                        <a href="{{URL::asset('assets/img/client/'.$client->image)}}" data-gallery="clientGallery" class="client-lightbox">
                            <div class="client-img">
                                <img src="{{URL::asset('assets/img/client/'.$client->image)}}" alt="" class="img-fluid all">
                            </div>
                        </a>
                    </div>
                </div>
            @endif
            @if (Auth::check())
                    @if ($loop->last)
                        <div class="col-md-3">
                            <div class="client-box" >
                                <button id="li-btn" data-bs-toggle="modal" data-bs-target="#addClient">
                                    <div class="client-img ">
                                        <img src="{{URL::asset('assets/img/plus-icon.png')}}" alt="" class="img-fluid add">
                                    </div>
                                </button>
                            </div>
                        </div>
                    @endif
                @endif
        @endforeach
    </div>

    <div class="row pt-5 mt-5">
        <div class="title-box text-center">
            <h3 class="subtitle-a text-white p-0">
                Our Clients
            </h3>
            <div class="line-mf"></div>
        </div>
        @foreach ($clients as $client)
            @if ($client->type === 'p')
                <div class="col-md-3">
                    <div class="client-box" data-aos-offset="10" data-aos="flip-right" data-aos-duration="500" data-aos-delay="{{$i++*50}}">
                        <a href="{{URL::asset('assets/img/client/'.$client->image)}}" data-gallery="clientGallery" class="client-lightbox">
                            <div class="client-img">
                                <img src="{{URL::asset('assets/img/client/'.$client->image)}}" alt="" class="img-fluid all">
                            </div>
                        </a>
                    </div>
                </div>
            @endif
            @if (Auth::check())
                @if ($loop->last)
                    <div class="col-md-3">
                        <div class="client-box" >
                            <button id="li-btn" data-bs-toggle="modal" data-bs-target="#addClient">
                                <div class="client-img ">
                                    <img src="{{URL::asset('assets/img/plus-icon.png')}}" alt="" class="img-fluid add">
                                </div>
                            </button>
                        </div>
                    </div>
                @endif
            @endif
        @endforeach
    </div>
</div>
    
@endsection