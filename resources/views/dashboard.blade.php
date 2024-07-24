@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-md-4 mb-4">
            <style scoped>
                .col-md-4.mb-4 { margin-left: 100px; }
            </style>
            <a class="nav-link {{ Request::is('kas-kecil') ? 'active' : '' }} " href="{{ url('kas-kecil') }}">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder mt-3 mb-3">
                                        Kas Kecil
                                    </h5>
                                    <p class="text-sm mt-1 mb-4 text-capitalize font-weight-bold">Add New Transaction</p>
                                </div>
                            </div>
                            <div class="col-4 text-end mt-4">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mx-auto mb-4">
            <a class="nav-link {{ Request::is('kas-besar') ? 'active' : '' }} " href="{{ url('kas-besar') }}">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder mt-3 mb-3">
                                        Kas Besar
                                    </h5>
                                    <p class="text-sm mt-1 mb-4 text-capitalize font-weight-bold">Add New Transaction</p>
                                </div>
                            </div>
                            <div class="col-4 text-end mt-4">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="image-container">
        <img src="{{ asset('/assets/img/logoedii.png') }}">
    </div>

    <style scoped>
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            /* Adjust height as needed */
        }

        .image-container img {
            opacity: 0.5;
            /* Set the desired opacity (0 to 1) */
            transition: opacity 0.5s ease;
            /* Add a smooth opacity transition */
        }

        .image-container img:hover {
            opacity: 0.5;
            /* Increase opacity on hover */
        }
    </style>
@endsection
