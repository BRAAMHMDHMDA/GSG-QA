
@extends('website.layouts.layout-home')
@section('title','Unauthorized')
@section('content')

    <!-- ================================
         START ERROR AREA
================================= -->
    <section class="error-area section-padding position-relative">
        <span class="icon-shape icon-shape-1"></span>
        <span class="icon-shape icon-shape-2"></span>
        <span class="icon-shape icon-shape-3"></span>
        <span class="icon-shape icon-shape-4"></span>
        <span class="icon-shape icon-shape-5"></span>
        <span class="icon-shape icon-shape-6"></span>
        <span class="icon-shape icon-shape-7"></span>
        <div class="container">
            <div class="text-center">
                <img src="https://media.istockphoto.com/photos/rubber-stamp-picture-id545992942?k=6&m=545992942&s=612x612&w=0&h=XD1kddQeDrbG9DEQQxGNf6_3snw4gdFZv8GqSFta6Is=" alt="error-image" class="img-fluid mb-20px w-20">
                <h2 class="section-title pb-3">Oops! Unauthorized!</h2>
                <p class="section-desc pb-4">You Cannot Access This Page.</p>
                <a class="btn theme-btn" href="{{route('home')}}"> Go to homepage </a>
            </div>
        </div><!-- end container -->
    </section>
    <!-- ================================
             END ERROR AREA
    ================================= -->
@endsection
