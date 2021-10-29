@extends('website.layouts.layout-home')
@section('title' , 'Home')

@section('content')
{{--    <section class="question-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-2 pr-0">--}}
{{--                    <div class="sidebar position-sticky top-0 pt-40px">--}}
{{--                        <ul class="generic-list-item generic-list-item-highlight fs-15">--}}
{{--                            <li class="lh-26"><a href="index.html"><i class="la la-home mr-1 text-black"></i> Home</a></li>--}}
{{--                            <li class="lh-26 active"><a href="home-3.html"><i class="la la-globe mr-1 text-black"></i> Questions</a></li>--}}
{{--                            <li class="lh-26"><a href="{{ route('tags.index') }}"><i class="la la-tags mr-1 text-black"></i> Tags</a></li>--}}
{{--                            <li class="lh-26"><a href="user-list.html"><i class="la la-user mr-1 text-black"></i> Users</a></li>--}}
{{--                            <li class="lh-26"><a href="badges-list.html"><i class="la la-id-badge mr-1 text-black"></i> Badges</a></li>--}}
{{--                            <li class="lh-26"><a href="category-list.html"><i class="la la-sort mr-1 text-black"></i> Categories</a></li>--}}
{{--                            <li class="lh-26"><a href="job-list.html"><i class="la la-mouse mr-1 text-black"></i> Jobs</a></li>--}}
{{--                            <li class="lh-26"><a href="companies.html"><i class="la la-briefcase mr-1 text-black"></i> Companies</a></li>--}}
{{--                        </ul>--}}
{{--                    </div><!-- end sidebar -->--}}
{{--                </div><!-- end col-lg-2 -->--}}
{{--                <div class="col-lg-7 px-0">--}}
{{--                    <div class="question-main-bar border-left border-left-gray pt-40px pb-40px">--}}
{{--                        <div class="filters pb-4 pl-3">--}}
{{--                            <div class="d-flex flex-wrap align-items-center justify-content-between pb-3">--}}
{{--                                <h3 class="fs-22 fw-medium">All Questions</h3>--}}
{{--                                <a href="{{ route('qusetions.create') }}" class="btn theme-btn theme-btn-sm">Ask Question</a>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex flex-wrap align-items-center justify-content-between">--}}
{{--                                <p class="pt-1 fs-15 fw-medium lh-20">{{ $questions->total() }} questions</p>--}}
{{--                                <div class="filter-option-box w-20">--}}
{{--                                    <select class="custom-select">--}}
{{--                                        <option value="newest" selected="selected">Newest </option>--}}
{{--                                        <option value="featured">Bountied (390)</option>--}}
{{--                                        <option value="frequent">Frequent </option>--}}
{{--                                        <option value="votes">Votes </option>--}}
{{--                                        <option value="active">Active </option>--}}
{{--                                        <option value="unanswered">Unanswered </option>--}}
{{--                                    </select>--}}
{{--                                </div><!-- end filter-option-box -->--}}
{{--                            </div>--}}
{{--                        </div><!-- end filters -->--}}
{{--                        <div class="questions-snippet border-top border-top-gray">--}}
{{--                            @foreach($questions as $qusetion)--}}
{{--                                <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray" >--}}
{{--                                    <div class="votes text-center votes-2">--}}
{{--                                        <div class="vote-block">--}}
{{--                                            <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">3</span>--}}
{{--                                            <span class="vote-text d-block fs-13 lh-18">votes</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="answer-block answered my-2">--}}
{{--                                            <span class="answer-counts d-block lh-20 fw-medium">3</span>--}}
{{--                                            <span class="answer-text d-block fs-13 lh-18">answers</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="view-block">--}}
{{--                                            <span class="view-counts d-block lh-20 fw-medium">12</span>--}}
{{--                                            <span class="view-text d-block fs-13 lh-18">views</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <h5 class="mb-2 fw-medium"><a href="{{ route('qusetions.show',$qusetion->id) }}">{{$qusetion->title}}</a></h5>--}}
{{--                                        <p class="mb-2 truncate lh-20 fs-15">{{ $qusetion->body }}</p>--}}
{{--                                        <div class="tags">--}}
{{--                                            @foreach($qusetion->tags as $tag)--}}
{{--                                                <a href="{{$tag->permalink}}" class="tag-link">{{$tag->name}}</a>--}}
{{--                                            @endforeach--}}
{{--                                        </div>--}}
{{--                                        <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">--}}
{{--                                            <a href="../user-profile.html" class="media-img d-block">--}}
{{--                                                <img src="{{ asset('website_assets/images/img3.jpg') }}" alt="avatar">--}}
{{--                                            </a>--}}
{{--                                            <div class="media-body d-flex flex-wrap align-items-center justify-content-between">--}}
{{--                                                <div>--}}
{{--                                                    <h5 class="pb-1"><a href="../user-profile.html">{{$qusetion->user->name}}</a></h5>--}}
{{--                                                    <div class="stats fs-12 d-flex align-items-center lh-18">--}}
{{--                                                        <span class="text-black pr-2" title="Reputation score">224</span>--}}
{{--                                                        <span class="pr-2 d-inline-flex align-items-center" title="Gold badge"><span class="ball gold"></span>16</span>--}}
{{--                                                        <span class="pr-2 d-inline-flex align-items-center" title="Silver badge"><span class="ball silver"></span>93</span>--}}
{{--                                                        <span class="pr-2 d-inline-flex align-items-center" title="Bronze badge"><span class="ball"></span>136</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <small class="meta d-block text-right">--}}
{{--                                                    <span class="text-black d-block lh-18">asked</span>--}}
{{--                                                    <span class="d-block lh-18 fs-12">{{ $qusetion->created_at->diffForHumans() }}</span>--}}
{{--                                                </small>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- end media -->--}}
{{--                            @endforeach--}}

{{--                        </div><!-- end questions-snippet -->--}}
{{--                        <div class="pager pt-30px px-3">--}}
{{--                            <nav aria-label="Page navigation example">--}}
{{--                              {{$questions->links()}}--}}
{{--                        </div>--}}
{{--                    </div><!-- end question-main-bar -->--}}
{{--                </div><!-- end col-lg-7 -->--}}
{{--                <div class="col-lg-3">--}}
{{--                    <div class="sidebar pt-40px">--}}
{{--                        <div class="card card-item">--}}
{{--                            <div class="card-body">--}}
{{--                                <h3 class="fs-17 pb-3">Related Questions</h3>--}}
{{--                                <div class="divider"><span></span></div>--}}
{{--                                <div class="sidebar-questions pt-3">--}}
{{--                                    <div class="media media-card media--card media--card-2">--}}
{{--                                        <div class="media-body">--}}
{{--                                            <h5><a href="../question-details.html">Using web3 to call precompile contract</a></h5>--}}
{{--                                            <small class="meta">--}}
{{--                                                <span class="pr-1">2 mins ago</span>--}}
{{--                                                <span class="pr-1">. by</span>--}}
{{--                                                <a href="#" class="author">Sudhir Kumbhare</a>--}}
{{--                                            </small>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- end media -->--}}
{{--                                    <div class="media media-card media--card media--card-2">--}}
{{--                                        <div class="media-body">--}}
{{--                                            <h5><a href="../question-details.html">Is it true while finding Time Complexity of the algorithm [closed]</a></h5>--}}
{{--                                            <small class="meta">--}}
{{--                                                <span class="pr-1">48 mins ago</span>--}}
{{--                                                <span class="pr-1">. by</span>--}}
{{--                                                <a href="#" class="author">wimax</a>--}}
{{--                                            </small>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- end media -->--}}
{{--                                    <div class="media media-card media--card media--card-2">--}}
{{--                                        <div class="media-body">--}}
{{--                                            <h5><a href="../question-details.html">image picker and store them into firebase with flutter</a></h5>--}}
{{--                                            <small class="meta">--}}
{{--                                                <span class="pr-1">1 hour ago</span>--}}
{{--                                                <span class="pr-1">. by</span>--}}
{{--                                                <a href="#" class="author">Antonin gavrel</a>--}}
{{--                                            </small>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- end media -->--}}
{{--                                </div><!-- end sidebar-questions -->--}}
{{--                            </div>--}}
{{--                        </div><!-- end card -->--}}
{{--                        <div class="card card-item">--}}
{{--                            <div class="card-body">--}}
{{--                                <h3 class="fs-17 pb-3">Related Tags</h3>--}}
{{--                                <div class="divider"><span></span></div>--}}
{{--                                <div class="tags pt-4">--}}
{{--                                    <div class="tag-item">--}}
{{--                                        <a href="#" class="tag-link tag-link-md">analytics</a>--}}
{{--                                        <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                    </div><!-- end tag-item -->--}}
{{--                                    <div class="tag-item">--}}
{{--                                        <a href="#" class="tag-link tag-link-md">computer</a>--}}
{{--                                        <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                    </div><!-- end tag-item -->--}}
{{--                                    <div class="tag-item">--}}
{{--                                        <a href="#" class="tag-link tag-link-md">python</a>--}}
{{--                                        <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                    </div><!-- end tag-item -->--}}
{{--                                    <div class="tag-item">--}}
{{--                                        <a href="#" class="tag-link tag-link-md">javascript</a>--}}
{{--                                        <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                    </div><!-- end tag-item -->--}}
{{--                                    <div class="tag-item">--}}
{{--                                        <a href="#" class="tag-link tag-link-md">c#</a>--}}
{{--                                        <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                    </div><!-- end tag-item -->--}}
{{--                                    <div class="collapse" id="showMoreTags">--}}
{{--                                        <div class="tag-item">--}}
{{--                                            <a href="#" class="tag-link tag-link-md">java</a>--}}
{{--                                            <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                        </div><!-- end tag-item -->--}}
{{--                                        <div class="tag-item">--}}
{{--                                            <a href="#" class="tag-link tag-link-md">swift</a>--}}
{{--                                            <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                        </div><!-- end tag-item -->--}}
{{--                                        <div class="tag-item">--}}
{{--                                            <a href="#" class="tag-link tag-link-md">html</a>--}}
{{--                                            <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                        </div><!-- end tag-item -->--}}
{{--                                        <div class="tag-item">--}}
{{--                                            <a href="#" class="tag-link tag-link-md">angular</a>--}}
{{--                                            <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                        </div><!-- end tag-item -->--}}
{{--                                        <div class="tag-item">--}}
{{--                                            <a href="#" class="tag-link tag-link-md">flutter</a>--}}
{{--                                            <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                        </div><!-- end tag-item -->--}}
{{--                                        <div class="tag-item">--}}
{{--                                            <a href="#" class="tag-link tag-link-md">machine-language</a>--}}
{{--                                            <span class="item-multiplier fs-13">--}}
{{--                                    <span>×</span>--}}
{{--                                    <span>32924</span>--}}
{{--                                </span>--}}
{{--                                        </div><!-- end tag-item -->--}}
{{--                                    </div><!-- end collapse -->--}}
{{--                                    <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags" role="button" aria-expanded="false" aria-controls="showMoreTags">--}}
{{--                                        <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>--}}
{{--                                        <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card -->--}}
{{--                        <div class="ad-card">--}}
{{--                            <h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>--}}
{{--                            <div class="ad-banner mb-4 mx-auto">--}}
{{--                                <span class="ad-text">290x500</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end ad-card -->--}}
{{--                    </div><!-- end sidebar -->--}}
{{--                </div><!-- end col-lg-3 -->--}}
{{--            </div><!-- end row -->--}}
{{--        </div><!-- end container -->--}}
{{--    </section><!-- end question-area -->--}}



<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm pt-60px pb-60px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content">
            <div class="d-flex align-items-center pb-3">
                <div class="icon-element shadow-sm flex-shrink-0 mr-3 border border-gray">
                    #
                </div>
                <h2 class="section-title fs-30">{{$tag->name}}</h2>
            </div>
{{--            <p class="section-desc pb-3">The observation, identification, description, experimental investigation, and theoretical explanation of phenomena is all part of science. Nothing is immune to the scientific process: from charm quarks that haven't existed naturally since the beginning of time to Pluto, recently demoted from planet to dwarf planet. Questions on knowledge about the material and physical aspects of our world are asked and answered here.</p>--}}
            <p class="section-desc text-black">{{$questions->total()}} Questions</p>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-80px pb-40px">
    <div class="container">
        <div class="row">
{{--            <div class="col-lg-2">--}}
{{--                <div class="sidebar">--}}
{{--                    <div class="card border-0 pt-45px">--}}
{{--                        <ul class="generic-list-item generic-list-item-highlight fs-15">--}}
{{--                            <li class="lh-26"><a href="home-2.html"><i class="la la-home mr-1 text-black"></i> Home</a></li>--}}
{{--                            <li class="lh-26 active"><a href="category.html"><i class="la la-flask mr-1 text-black"></i> Science</a></li>--}}
{{--                            <li class="lh-26"><a href="category.html"><i class="la la-pencil mr-1 text-black"></i> Math</a></li>--}}
{{--                            <li class="lh-26"><a href="category.html"><i class="la la-globe mr-1 text-black"></i> History</a></li>--}}
{{--                            <li class="lh-26"><a href="category.html"><i class="la la-book-open mr-1 text-black"></i> Literature</a></li>--}}
{{--                            <li class="lh-26"><a href="category.html"><i class="la la-laptop mr-1 text-black"></i> Technology</a></li>--}}
{{--                            <li class="lh-26"><a href="category.html"><i class="la la-dumbbell mr-1 text-black"></i> Health</a></li>--}}
{{--                            <li class="lh-26"><a href="category.html"><i class="la la-gavel mr-1 text-black"></i> Law</a></li>--}}
{{--                            <li class="lh-26"><a href="category.html"><i class="la la-briefcase mr-1 text-black"></i> Business</a></li>--}}
{{--                            <li class="lh-26"><a href="category.html"><i class="la la-file-text mr-1 text-black"></i> All Topics</a></li>--}}
{{--                            <li class="lh-26"><a href="category.html"><i class="la la-puzzle-piece mr-1 text-black"></i> Random</a></li>--}}
{{--                            <li class="lh-26"><a href="category.html"><i class="la la-check mr-1 text-black"></i> Unanswered</a></li>--}}
{{--                        </ul>--}}
{{--                    </div><!-- end card -->--}}
{{--                </div><!-- end sidebar -->--}}
{{--            </div><!-- end col-lg-2 -->--}}
            <div class="col-lg-9">
                <div class="question-tabs mb-50px">
                    <ul class="nav nav-tabs generic-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item"><div class="anim-bar"></div></li>
                        <li class="nav-item">
                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="best-tab" data-toggle="tab" href="#best" role="tab" aria-controls="best" aria-selected="false">Best</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="unanswered-tab" data-toggle="tab" href="#unanswered" role="tab" aria-controls="unanswered" aria-selected="false">Unanswered</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-40px" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="question-main-bar all-question-bar">
                                <div class="filters d-flex align-items-center justify-content-between pb-4">
                                    <h3 class="fs-17 fw-medium">All Questions</h3>
                                    <div class="filter-option-box w-20">
                                        <select class="select-container">
                                            <option value="all" selected="selected">All</option>
                                            <option value="newest">Newest</option>
                                            <option value="votes">Votes</option>
                                            <option value="best">Best</option>
                                            <option value="unanswered">Unanswered</option>
                                        </select>
                                    </div>
                                </div><!-- end filters -->
                                <div class="questions-snippet">
                                    @foreach($questions as $question)
                                        <div class="media media-card media--card align-items-center">
                                            <div class="votes @if($question->answers_count!=0) answered-accepted @endif">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts">0</span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                    <span class="vote-counts">{{$question->answers_count}}</span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="{{route('qusetions.show',$question->slug)}}">{{$question->title}}</a></h5>
                                                <small class="meta">
                                                    <span class="pr-1">{{$question->created_at->diffForHumans()}}</span>

                                                    <span>By: </span><a href="{{route('user.show',$question->user->id)}}" class="author">{{$question->user->full_name}}</a>
                                                </small>
                                                <div class="tags">
                                                    @foreach($question->tags as $tag)
                                                        <a href="{{$tag->permalink}}" class="tag-link">{{$tag->name}}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div><!-- end media -->
                                    @endforeach
                                </div><!-- end questions-snippet -->
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="best" role="tabpanel" aria-labelledby="best-tab">
                            <div class="question-main-bar best-question-bar">
                                <div class="filters pb-4">
                                    <h3 class="fs-17 fw-medium">Best</h3>
                                </div><!-- end filters -->
                                <div class="questions-snippet">
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">0</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">0</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">What is the fourth element of the periodic table of elements?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 hour ago</span>
                                                <a href="#" class="author">edublog</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Is silence a sound?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 min ago</span>
                                                <a href="#" class="author">Epsi95</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">What is the rock cycle song?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 mins ago</span>
                                                <a href="#" class="author">mstdmstd</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Why is the pan handle made of plastic?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">41 secs ago</span>
                                                <a href="#" class="author">Pratik Singh</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Does Coke stop your growth?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">55 mins ago</span>
                                                <a href="#" class="author">javabeginner</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Convert centigrade to Fahrenheit?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="#" class="author">Meow Meow</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">What superstitious beliefs have a scientific basis?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 days ago</span>
                                                <a href="#" class="author">DumBot</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Is the independent variable the thing you change?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">4 days ago</span>
                                                <a href="#" class="author">hgwd</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">10 examples of physical change and chemical change?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Dec 2 '19 at 17:23 </span>
                                                <a href="#" class="author">Braiam</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">What is the process that powers plate tectonics?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Jan 2 '20 at 7:23</span>
                                                <a href="#" class="author">Ajay Patidar</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end questions-snippet -->
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="unanswered" role="tabpanel" aria-labelledby="unanswered-tab">
                            <div class="question-main-bar unanswered-question-bar">
                                <div class="filters pb-4">
                                    <h3 class="fs-17 fw-medium">Unanswered</h3>
                                </div><!-- end filters -->
                                <div class="questions-snippet">
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">0</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">0</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">What is the fourth element of the periodic table of elements?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 hour ago</span>
                                                <a href="#" class="author">edublog</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">When did Mendel get the recongnition he deserved?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 min ago</span>
                                                <a href="#" class="author">Epsi95</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">How does the shape of a nerve help them?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 mins ago</span>
                                                <a href="#" class="author">mstdmstd</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Why is the pan handle made of plastic?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">41 secs ago</span>
                                                <a href="#" class="author">Pratik Singh</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">How a rain gauge works?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">55 mins ago</span>
                                                <a href="#" class="author">javabeginner</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Convert centigrade to Fahrenheit?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="#" class="author">Meow Meow</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">What superstitious beliefs have a scientific basis?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 days ago</span>
                                                <a href="#" class="author">DumBot</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Is the independent variable the thing you change?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">4 days ago</span>
                                                <a href="#" class="author">hgwd</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">10 examples of physical change and chemical change?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Dec 2 '19 at 17:23 </span>
                                                <a href="#" class="author">Braiam</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="question-details.html">What is the process that powers plate tectonics?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Jan 2 '20 at 7:23</span>
                                                <a href="#" class="author">Ajay Patidar</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">science</a>
                                                <a href="#" class="tag-link">chemistry</a>
                                                <a href="#" class="tag-link">periodic table</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end questions-snippet -->
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                    </div><!-- end tab-content -->
                    <div class="pager pt-30px">
{{--                        <nav aria-label="Page navigation example">--}}
{{--                            <ul class="pagination generic-pagination pr-1">--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                        <span aria-hidden="true"><i class="la la-arrow-left"></i></span>--}}
{{--                                        <span class="sr-only">Previous</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                <li class="page-item active"><a class="page-link" href="#">2</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link" href="#" aria-label="Next">--}}
{{--                                        <span aria-hidden="true"><i class="la la-arrow-right"></i></span>--}}
{{--                                        <span class="sr-only">Next</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                        <p class="fs-13 pt-3">Showing 1-10 results of 50,577 questions</p>--}}
                        {{$questions->links()}}
                    </div>
                </div><!-- end question-tabs -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Number Achievement</h3>
                            <div class="divider"><span></span></div>
                            <div class="row no-gutters text-center">
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color">980k</span>
                                        <p class="fs-14">Questions</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-2">610k</span>
                                        <p class="fs-14">Answers</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-3">650k</span>
                                        <p class="fs-14">Answer accepted</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-4">320k</span>
                                        <p class="fs-14">Users</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12 pt-3">
                                    <p class="fs-14">To get answer of question <a href="signup.html" class="text-color hover-underline">Join<i class="la la-arrow-right ml-1"></i></a></p>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Trending Questions</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">What are 5 functions of a fax machine?</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">2 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Sudhir Kumbhare</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">How many inches tall is a sixteen Oz monster energy can?</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">48 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">wimax</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">How do you do the slanted smiley face?</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">1 hour ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Antonin gavrel</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end sidebar-questions -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Trending Tags</h3>
                            <div class="divider"><span></span></div>
                            <div class="tags pt-4">
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">Science</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">Definitions</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">Chemistry</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">Nintendo DS</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">Medical</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="collapse" id="showMoreTags">
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">Atomic mass</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">Math and arithmetic</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">Scientists</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">Acids and bases</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">Human behavior</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">Earth science</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                </div><!-- end collapse -->
                                <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags" role="button" aria-expanded="false" aria-controls="showMoreTags">
                                    <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                    <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- end card -->
                    <div class="ad-card">
                        <h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
                        <div class="ad-banner mb-4 mx-auto">
                            <span class="ad-text">290x500</span>
                        </div>
                    </div><!-- end ad-card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end question-area -->
<!-- ================================
         END QUESTION AREA
================================= -->

@endsection
