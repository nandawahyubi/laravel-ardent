@extends('layouts.default')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story text-center">
                    Care for Your Car
                </p>
                <h2 class="primary-header">
                    Start Caring Today
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="{{ asset('img/create-checkout.png') }}" alt="" class="cover">
                            <h1 class="package">
                                {{ $package->title }}
                            </h1>
                            <p class="description">
                                Perawatan ini akan membuat kendaraan Anda terlihat menarik dan akan menambah
                                kenyamanan Anda dalam berkendara
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('checkout.store', $package->id) }}" class="basic-form" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="full-name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="full-name" name="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ Auth::user()->email }}" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="no_telp" class="form-label">Phone Number</label>
                                <input type="number" min="0" class="form-control" id="no_telp" name="no_telp"
                                    value="{{ Auth::user()->no_telp }}">
                            </div>
                            <div class=" mb-4">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ Auth::user()->address }}">
                            </div>
                            <div class=" mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="vehicle_brand" class="form-label">Vehicle Brand</label>
                                        <input type="text" class="form-control" id="vehicle_brand" name="vehicle_brand">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="vehicle_color" class="form-label">Vehicle Color</label>
                                        <input type="text" class="form-control" id="vehicle_color" name="vehicle_color">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="production_year" class="form-label">Production Year</label>
                                        <input type="number" min="1900" max="2025" class="form-control"
                                            id="production_year" name="production_year">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="number_plate" class="form-label">Number Plate</label>
                                        <input type="text" maxlength="10" class="form-control" id="number_plate"
                                            name="number_plate">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="order_schedule" class="form-label">Order Schedule</label>
                                        <input type="text" class="form-control" id="order_schedule"
                                            name="order_schedule" onchange="realtimeDate()" autocomplete="off">
                                    </div>
                                    <div class="col-lg-6 col-12" hidden>
                                        <label for="order_schedule_complate" class="form-label">Order Schedule
                                            Complate</label>
                                        <input type="text" class="form-control" id="order_schedule_complate"
                                            name="order_schedule_complate">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                            <p class="text-center subheader mt-4">
                                <img src="{{ asset('img/ic_secure.svg') }}" alt=""> Your payment is secure and
                                encrypted.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection