@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide custom-carousel" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="carousel-button active" aria-current="true" aria-label="Slide 1"></div>
            <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="carousel-button carousel-button-center" aria-label="Slide 2"></div>
            <div type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="carousel-button" aria-label="Slide 3"></div>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/model_1.jpg') }}" class="carousal-image d-block w-100" alt="Slide 1">
                <!-- <div class="carousel-caption carousel-caption-custom">
                    <p>WE ARE FASHION MANAGEMENT AGENCY</p>    
                    <h5>Model Managment </h5><h5>& Talent Agency</h5>
                    <button href="#" class="btn">BROWSE TALENT</button>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/model_1.jpg') }}" class="carousal-image d-block w-100" alt="Slide 2">
                <!-- <div class="carousel-caption carousel-caption-custom">
                    <p>WE ARE FASHION MANAGEMENT AGENCY</p>    
                    <h5>Model Managment </h5><h5>& Talent Agency</h5>
                    <button href="#" class="btn">BROWSE TALENT</button>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/model_1.jpg') }}" class="carousal-image d-block w-100" alt="Slide 3">
                <!-- <div class="carousel-caption carousel-caption-custom">
                    <p>WE ARE FASHION MANAGEMENT AGENCY</p>    
                    <h5>Model Managment </h5><h5>& Talent Agency</h5>
                    <button href="#" class="btn">BROWSE TALENT</button>
                </div> -->
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>
@endsection

