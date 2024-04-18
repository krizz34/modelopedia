@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="hero-img" style="background-image: url(&quot;https://modelopedia.com/public/files/images/bg_1.jpg&quot;);">
	<div class="hero-overlay"></div>
    <!-- <div class="hero-title animate text-center fadeInUp">
        <h1 class="karlie-kloss">KARLIE KLOSS</h1>
        <h2><span>Women of the week</span></h2>
    </div> -->
	<div class="hero-title align-items-center justify-content-center">
            <div class="animate text-center fadeInUp">
                <h1 class="karlie-kloss">KARLIE KLOSS</h1>
                <h2><span>Women of the week</span></h2>
            </div>
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
            </div>
            </a>
    </div>
</div>
@endsection

