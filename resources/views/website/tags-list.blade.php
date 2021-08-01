@extends('website.layouts.layout-home')
@section('title','Tags List')

@section('content')
    <section class="question-area pt-40px pb-40px" style="background: ghostwhite">
        <div class="container">
            <div class="filters pb-3">
                <div class="d-flex flex-wrap align-items-center justify-content-between pb-4">
                    <div class="pr-3">
                        <h3 class="fs-22 fw-medium mr-0">Tags</h3>
                        <p class="fs-15 lh-22 my-2">A tag is a keyword or label that categorizes your question with other, similar questions.
                            <br> Using the right tags makes it easier for others to find and answer your question.</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <form method="get" action="{{route('tags.index')}}" class="mr-3 w-25">
                        <div class="form-group">
                            <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="name" value="{{request()->name}}" placeholder="Filter by tag name">
                            <button class="form-btn" type="submit"><i class="la la-search"></i></button>
                        </div>
                    </form>
                    <div class="btn-group btn--group mb-3" role="group" aria-label="Filter button group">
                        <a href="#" class="btn active">All</a>
                        <a href="#" class="btn">Popular</a>
                        <a href="#" class="btn">Name</a>
                        <a href="#" class="btn">New</a>
                    </div>
                </div>
            </div><!-- end filters -->
            <div class="row">
                @if(count($tags)!=0)
                   @foreach($tags as $tag)
                        <div class="col-lg-3 responsive-column-half">
                            <div class="card card-item">
                                <div class="card-body">
                                    <div class="tags pb-1">
                                        <a href="#" class="tag-link tag-link-md tag-link-blue"># {{$tag->name}}</a>
                                    </div>
                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                        <p class="pr-1 lh-18">21 questions</p>
                                        <p class="lh-18">90 asked today, 53 this week</p>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-3 -->
                    @endforeach
                @else
                 <div class="alert alert-danger" style="width: 50%">
                     No Tags
                 </div>
                @endif
            </div><!-- end row -->
            <div class="pager pt-30px">
                <nav aria-label="Page navigation example">
                    {{$tags->links() }}
                </nav>
{{--                <p class="fs-13 pt-2">Showing 1-20 of 50,577 results</p>--}}
            </div>
        </div><!-- end container -->
    </section><!-- end question-area -->
@endsection
