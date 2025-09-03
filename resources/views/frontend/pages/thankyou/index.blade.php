@extends('frontend.layouts.app')

@section('page.title', 'Garib Nawaz Online Academy')

@section('page.description', 'Garib Nawaz Online Academy')

@section('page.type', 'website')

@section('page.content')



<!--  ----------------- Thank You --------------------- -->


<section class="thankyou_page pd80 bg_image2 text-center pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="thankyou_hed">Thank You!</h3>
                <h5 class="thankyou_hed1">For Contacting Us!</h5>
                <p class="thanks_para mb-3">We will reach you out immediately</p>
                <div  class="mt-4" >
                <a class="backhomebutton" href="{{ url(route('index')) }}">Back to Home Page</a>
                </div>
            </div>
        </div>  
    </div>
</section>




<!--  ----------------- thank you End --------------------- -->


@endsection