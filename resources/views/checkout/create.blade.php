@extends('layouts.default')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
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
                                Signature Nano Ceramic Coating
                            </h1>
                            <p class="description">
                                Perawatan ini akan membuat kendaraan Anda terlihat menarik dan akan menambah
                                kenyamanan Anda dalam berkendara
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="#" class="basic-form">
                            <div class="mb-4">
                                <label for="full-name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="full-name">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="no-telp" class="form-label">Phone Number</label>
                                <input type="number" min="0" class="form-control" id="no-telp">
                            </div>
                            <div class="mb-4">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address">
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="vehicle-brand" class="form-label">Vehicle Brand</label>
                                        <input type="text" class="form-control" id="vehicle-brand">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="vehicle-color" class="form-label">Vehicle Color</label>
                                        <input type="text" class="form-control" id="vehicle-color">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="production-year" class="form-label">Production Year</label>
                                        <input type="number" min="1900" max="2025" class="form-control"
                                            id="production-year">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="number-plate" class="form-label">Number Plate</label>
                                        <input type="text" maxlength="10" class="form-control" id="number-plate">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="order-schedule" class="form-label">Order Schedule</label>
                                        <input type="text" class="form-control" id="order-schedule"
                                            onchange="realtimeDate()">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="order-schedule-complate" class="form-label">Order Schedule
                                            Complate</label>
                                        <input type="text" class="form-control" disabled id="order-schedule-complate">
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