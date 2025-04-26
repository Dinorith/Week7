@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Our Services</h1>
        <p class="lead">Explore the wide range of services we offer to help you succeed.</p>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">Custom websites designed to meet your business needs.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Graphic Design</h5>
                    <p class="card-text">Creative designs that make your brand stand out.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Digital Marketing</h5>
                    <p class="card-text">Marketing strategies that drive traffic and increase sales.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
