@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Full Width</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="sort-source-wrapper">
        <div class="container">
            <ul class="nav nav-pills sort-source secundary pull-right" data-sort-id="portfolio" data-option-key="filter">
                <li data-option-value="*" class="active"><a href="#">Show All</a></li>
                <li data-option-value=".websites"><a href="#">Websites</a></li>
                <li data-option-value=".logos"><a href="#">Logos</a></li>
                <li data-option-value=".brands"><a href="#">Brands</a></li>
            </ul>
        </div>
    </div>
    <ul class="portfolio-list sort-destination full-width" data-sort-id="portfolio">
        <li class="isotope-item websites">
            <div class="portfolio-item img-thumbnail">
                <a href="single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project.jpg')}}">
                <span class="thumb-info-title">
                <span class="thumb-info-inner">SEO</span>
                <span class="thumb-info-type">Website</span>
                </span>
                <span class="thumb-info-action">
                <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
                </a>
            </div>
        </li>
        <li class="isotope-item brands">
            <div class="portfolio-item img-thumbnail">
                <a href="single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-1.jpg')}}">
                <span class="thumb-info-title">
                <span class="thumb-info-inner">Okler</span>
                <span class="thumb-info-type">Brand</span>
                </span>
                <span class="thumb-info-action">
                <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
                </a>
            </div>
        </li>
        <li class="isotope-item websites">
            <div class="portfolio-item img-thumbnail">
                <a href="single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-7.jpg')}}">
                <span class="thumb-info-title">
                <span class="thumb-info-inner">The Code</span>
                <span class="thumb-info-type">Website</span>
                </span>
                <span class="thumb-info-action">
                <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
                </a>
            </div>
        </li>
        <li class="isotope-item websites">
            <div class="portfolio-item img-thumbnail">
                <a href="single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-4.jpg')}}">
                <span class="thumb-info-title">
                <span class="thumb-info-inner">The Code</span>
                <span class="thumb-info-type">Website</span>
                </span>
                <span class="thumb-info-action">
                <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
                </a>
            </div>
        </li>
        <li class="isotope-item websites">
            <div class="portfolio-item img-thumbnail">
                <a href="single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-5.jpg')}}">
                <span class="thumb-info-title">
                <span class="thumb-info-inner">SEO</span>
                <span class="thumb-info-type">Website</span>
                </span>
                <span class="thumb-info-action">
                <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
                </a>
            </div>
        </li>
        <li class="isotope-item brands">
            <div class="portfolio-item img-thumbnail">
                <a href="single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-6.jpg')}}">
                <span class="thumb-info-title">
                <span class="thumb-info-inner">Okler</span>
                <span class="thumb-info-type">Brand</span>
                </span>
                <span class="thumb-info-action">
                <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
                </a>
            </div>
        </li>
        <li class="isotope-item logos">
            <div class="portfolio-item img-thumbnail">
                <a href="single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-5.jpg')}}">
                <span class="thumb-info-title">
                <span class="thumb-info-inner">The Fly</span>
                <span class="thumb-info-type">Logo</span>
                </span>
                <span class="thumb-info-action">
                <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
                </a>
            </div>
        </li>
        <li class="isotope-item logos">
            <div class="portfolio-item img-thumbnail">
                <a href="single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-2.jpg')}}">
                <span class="thumb-info-title">
                <span class="thumb-info-inner">The Fly</span>
                <span class="thumb-info-type">Logo</span>
                </span>
                <span class="thumb-info-action">
                <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
                </a>
            </div>
        </li>
        <li class="isotope-item brands">
            <div class="portfolio-item img-thumbnail">
                <a href="single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-1.jpg')}}">
                <span class="thumb-info-title">
                <span class="thumb-info-inner">Okler</span>
                <span class="thumb-info-type">Brand</span>
                </span>
                <span class="thumb-info-action">
                <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
                </a>
            </div>
        </li>
        <li class="isotope-item websites">
            <div class="portfolio-item img-thumbnail">
                <a href="single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-6.jpg')}}">
                <span class="thumb-info-title">
                <span class="thumb-info-inner">SEO</span>
                <span class="thumb-info-type">Website</span>
                </span>
                <span class="thumb-info-action">
                <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
                </a>
            </div>
        </li>
    </ul>
</div>
<section class="call-to-action featured footer no-arrow">
    <div class="container">
        <div class="row">
            <div class="center">
                <h3>Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website! <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">Buy Now!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
            </div>
        </div>
    </div>
</section>
@endsection()