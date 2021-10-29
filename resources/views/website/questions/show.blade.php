@extends('website.layouts.layout-home')
@section('title','Question Detailes')

@section('content')
    <section class="hero-area bg-white shadow-sm overflow-hidden pt-40px pb-40px">
        <span class="stroke-shape stroke-shape-1"></span>
        <span class="stroke-shape stroke-shape-2"></span>
        <span class="stroke-shape stroke-shape-3"></span>
        <span class="stroke-shape stroke-shape-4"></span>
        <span class="stroke-shape stroke-shape-5"></span>
        <span class="stroke-shape stroke-shape-6"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="hero-content">
                        <h2 class="section-title pb-2 fs-24 lh-34">Find the best answer to your technical question, <br>
                            help others answer theirs
                        </h2>
                        <ul class="generic-list-item pt-3">
                            <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg
                                        xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24"
                                        width="20px" fill="#6c727c"><path d="M0 0h24v24H0V0z" fill="none"/><path
                                            d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg></span>
                                Anybody can ask a question
                            </li>
                            <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg
                                        xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24"
                                        width="20px" fill="#6c727c"><path d="M0 0h24v24H0V0z" fill="none"/><path
                                            d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg></span>
                                Anybody can answer
                            </li>
                            <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg
                                        xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 320 512"
                                        width="20px"><path fill="#6c727c"
                                                           d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"></path></svg></span>
                                The best answers are voted up and rise to the top
                            </li>
                        </ul>
                    </div><!-- end hero-content -->
                </div><!-- end col-lg-9 -->
                <div class="col-lg-3">
                    <div class="hero-btn-box text-right py-3">
                        <a href="{{ route('qusetions.create') }}" class="btn theme-btn">Ask a Question</a>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!--======================================
            END HERO AREA
    ======================================-->

    <!-- ================================
             START QUESTION AREA
    ================================= -->
    <section class="question-area pt-40px pb-40px" style="background-color: #e4e4fa">
        <div class="container">
            <div class="row">
                <div class="col-lg-9" style="background-color: white;border-radius: 10px;padding: 20px;">
                    <div class="question-main-bar mb-50px">
                        <div class="question-highlight">
                            <div class="media media-card shadow-none rounded-0 mb-0 bg-transparent p-0">
                                <div class="media-body">
                                    <h5 class="fs-20"><a href="show.blade.php">{{ $question->title }}</a>
                                    </h5>
                                    <div class="meta d-flex flex-wrap align-items-center fs-13 lh-20 py-1">
                                        <div class="pr-3">
                                            <span>Asked</span>
                                            <span class="text-black">{{ $question->created_at->diffForHumans() }}</span>
                                        </div>
                                        <div class="pr-3">
                                            <span class="pr-1">Viewed</span>
                                            <span class="text-black">{{$views}} times</span>
                                        </div>
                                    </div>
                                    <div class="tags">
                                        @foreach($question->tags as $tag)
                                            <a href="{{$tag->permalink}}" class="tag-link">{{$tag->name}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- end media -->
                        </div><!-- end question-highlight -->
                        <div class="question d-flex">
                            <div class="votes votes-styled w-auto">
                                <form action="{{ url("vote/question") }}" method="post" id="form-vote">
                                    @csrf
                                    <input hidden name="id" value="{{$question->id}}" />
                                    <input hidden name="score" id="score" />
                                    <div id="vote" class="upvotejs">
                                        <a class="upvote {{$score==1 ? 'upvote-on':''}}" id="vote-up" data-toggle="tooltip" data-placement="right" title="This question is useful"></a>
                                        <span class="count" id="vote-count">{{$vote_count}}</span>
                                        <a class="downvote  {{$score==-1 ? 'downvote-on':''}}" id="vote-down"  data-toggle="tooltip" data-placement="right" title="This question is not useful"></a>
                                        <a class="star" data-toggle="tooltip" data-placement="right" title="Bookmark this question."></a>
                                    </div>
                                </form>
                            </div><!-- end votes -->
{{--                            <div class="votes votes-styled w-auto">--}}
{{--                                <div >--}}
{{--                                    <form class="form-vote-up" action="{{ route('vote','question') }}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <button type="submit" id="upvote">--}}
{{--                                        <a class="upvote"--}}
{{--                                           data-toggle="tooltip"--}}
{{--                                           data-placement="right"--}}
{{--                                           title="This question is useful"--}}
{{--                                        >--}}
{{--                                        </a>--}}
{{--                                            asd--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                    <span class="count">{{$question->score}}</span>--}}
{{--                                    <form class="form-vote-down" action="{{ route('vote','question') }}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <button style="border: none; background: transparent" type="submit">--}}
{{--                                        <a class="downvote" data-toggle="tooltip" data-placement="right"--}}
{{--                                           title="This question is not useful">--}}
{{--                                        </a>--}}
{{--                                            --}}
{{--                                    <a class="star" data-toggle="tooltip" data-placement="right"--}}
{{--                                       title="Bookmark this question.">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- end votes -->--}}
                            <div class="question-post-body-wrap flex-grow-1">
                                <div class="question-post-body">
                                    {!! $question->body  !!}
                                </div><!-- end question-post-body -->
                                <div class="question-post-user-action">
                                    <div class="post-menu">
                                        <div class="btn-group">
                                            <button class="btn dropdown-toggle after-none" type="button"
                                                    id="shareDropdownMenu" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Share
                                            </button>
                                            <div class="dropdown-menu dropdown--menu dropdown--menu-2 mt-2"
                                                 aria-labelledby="shareDropdownMenu">
                                                <div class="py-3 px-4">
                                                    <h4 class="fs-15 pb-2">Share a link to this question</h4>
                                                    <form action="#" class="copy-to-clipboard">
                                                        <span class="text-success-message">Link Copied!</span>
                                                        <input type="text"
                                                               class="form-control form--control form-control-sm copy-input"
                                                               value="{{route('qusetions.show',$question->slug)}}">
                                                        <div
                                                            class="btn-box pt-2 d-flex align-items-center justify-content-between">
                                                            <a href="{{route('qusetions.show',$question->slug)}}" class="btn-text copy-btn">Copy link</a>
                                                            <ul class="social-icons social-icons-sm">
                                                                <li><a href="#" class="bg-8 text-white shadow-none"
                                                                       title="Share link to this question on Facebook"><i
                                                                            class="la la-facebook"></i></a></li>
                                                                <li><a href="#" class="bg-9 text-white shadow-none"
                                                                       title="Share link to this question on Twitter"><i
                                                                            class="la la-twitter"></i></a></li>
                                                                <li><a href="#" class="bg-dark text-white shadow-none"
                                                                       title="Share link to this question on DEV"><i
                                                                            class="lab la-dev"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- btn-group -->
                                        @if(Auth::id()==$question->user->id)
                                            <a href="{{ route('qusetions.edit',$question->id) }}" class="btn">Edit</a>
                                        @endif
                                        <button class="btn">Follow</button>
                                    </div><!-- end post-menu -->
                                    <div class="media media-card user-media owner align-items-center">
                                        <a href="{{ route('user.show',$question->user->id ) }}" class="media-img d-block">
                                            <img src="{{ $question->user->full_image_path }}" alt="avatar">
                                        </a>
                                        <div
                                            class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                            <div>
                                                <h5 class="pb-1"><a
                                                        href="{{ route('user.show',$question->user->id ) }}">{{$question->user->full_name}}</a>
                                                </h5>
                                                <div class="stats fs-12 d-flex align-items-center lh-18">
                                                    <span class="text-black pr-2">224,110</span>
                                                    <span class="pr-2 d-inline-flex align-items-center"><span
                                                            class="ball gold"></span>16</span>
                                                    <span class="pr-2 d-inline-flex align-items-center"><span
                                                            class="ball silver"></span>93</span>
                                                    <span class="pr-2 d-inline-flex align-items-center"><span
                                                            class="ball"></span>136</span>
                                                </div>
                                            </div>
                                            <small class="meta d-block text-right">
                                                <span class="text-black d-block lh-18">asked</span>
                                                <span
                                                    class="d-block lh-18 fs-12">{{ $question->created_at->diffForHumans() }}</span>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end question-post-user-action -->
                                <div class="comments-wrap">
                                    <ul class="comments-list">
                                        @foreach($question->comments as $comment)
                                            <li>
                                                {{--                                                <div class="comment-actions">--}}
                                                {{--                                                    <span class="comment-score">1</span>--}}
                                                {{--                                                </div>--}}
                                                <div class="comment-body">
                                                    <span class="comment-copy">{{$comment->body}}</span>
                                                    <span class="comment-separated">-</span>
                                                    <a href="{{ $comment->user->full_image_path }}" class="comment-user"
                                                       title="15,467 reputation">{{ $comment->user->full_name }}</a>
                                                    <span class="comment-separated">-</span>
                                                    <a href="#"
                                                       class="comment-date">{{$comment->created_at->diffForHumans()}}</a>
                                                </div>
                                            </li>

                                        @endforeach
                                    </ul>
                                    <div class="comment-form">
                                        <div class="comment-link-wrap text-center">
                                            <a class="collapse-btn comment-link" data-toggle="collapse"
                                               href="#addCommentCollapse" role="button" aria-expanded="false"
                                               aria-controls="addCommentCollapse"
                                               title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">Add
                                                a comment</a>
                                        </div>
                                        <div class="collapse border-top border-top-gray mt-2 pt-3"
                                             id="addCommentCollapse">
                                            <form method="post" action="{{ url("comment/question") }}" class="row pb-3">
                                                @csrf
                                                <input value="{{$question->id}}" name="id" hidden>
                                                <input value="{{$question->slug}}" name="question_slug" hidden>
                                                <div class="col-lg-12">
                                                    <h4 class="fs-16 pb-2">Leave a Comment</h4>
                                                    <div class="divider mb-2"><span></span></div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <div class="form-group">
                                                            <textarea
                                                                class="form-control form--control form-control-sm fs-13"
                                                                name="body" rows="5"
                                                                placeholder="Your comment here..."></textarea>
                                                            <div class="d-flex flex-wrap align-items-center pt-2">
                                                                <div
                                                                    class="badge bg-gray border border-gray mr-3 fw-regular fs-13">
                                                                    [named hyperlinks] (https://example.com)
                                                                </div>
                                                                <div class="mr-3 fw-bold fs-13">**bold**</div>
                                                                <div class="mr-3 font-italic fs-13">_italic_</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div
                                                        class="input-box d-flex flex-wrap align-items-center justify-content-between">
                                                        <button
                                                            class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray"
                                                            type="submit">Post Comment
                                                        </button>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                            </form>
                                        </div><!-- end collapse -->
                                    </div>
                                </div><!-- end comments-wrap -->
                            </div><!-- end question-post-body-wrap -->
                        </div><!-- end question -->
                        <br/><br/>
                        <div class="subheader d-flex align-items-center justify-content-between">
                            <div class="subheader-title">
                                <h3 class="fs-16">{{$question->answers->count()}} Answer</h3>
                            </div><!-- end subheader-title -->
                            <div class="subheader-actions d-flex align-items-center lh-1">
                                <label class="fs-13 fw-regular mr-1 mb-0">Order by</label>
                                <div class="w-100px">
                                    <select class="select-container">
                                        <option value="active">active</option>
                                        <option value="oldest">oldest</option>
                                        <option value="votes" selected="selected">votes</option>
                                    </select>
                                </div>
                            </div><!-- end subheader-actions -->
                        </div><!-- end subheader -->
                        @foreach($question->answers as $answer)
                            <div class="answer-wrap d-flex">
                                <div class="votes votes-styled w-auto">
                                    <div id="vote2" class="upvotejs">
                                        <a class="upvote upvote-on" data-toggle="tooltip" data-placement="right"
                                           title="This question is useful">
                                        </a>
                                        <span class="count">2</span>
                                        <a class="downvote" data-toggle="tooltip" data-placement="right"
                                           title="This question is not useful"></a>
                                        @if(Auth::id()==$question->user->id)
                                            <form method="post" action="{{route('answer.accepted')}}">
                                                @csrf
                                                <input type="text" name="answer_id" value="{{$answer->id}}" hidden>
                                                <input type="text" name="user_id" value="{{$question->user->id}}"
                                                       hidden>
                                                <button type="submit" id="btn-accepted" style="border: none">
                                                    <a class="star check @if($answer->accepted == 1) star-on @endif"
                                                       @if($answer->accepted == 1)
                                                           data-toggle="tooltip" data-placement="right"
                                                           title="You accepted this answer"
                                                       @else
                                                           data-toggle="tooltip" data-placement="right"
                                                           title="Click to accepted this answer"
                                                       @endif
                                                    >
                                                    </a>
                                                </button>
                                            </form>
                                        @elseif($answer->accepted == 1) <img data-toggle="tooltip"
                                                                             data-placement="right"
                                                                             title="The question owner accepted this answer"
                                                                             src="{{asset('website_assets/images/accept.png')}}"
                                                                             alt="">
                                        @elseif($answer->accepted == null)<img data-toggle="tooltip"
                                                                               data-placement="right"
                                                                               title="The question owner has not yet accepted this answer"
                                            src="{{asset('website_assets/images/unaccept.png')}}" alt="">
                                        @endif
                                    </div>
                                </div><!-- end votes -->
                                <div class="answer-body-wrap flex-grow-1">
                                    <div class="answer-body">
                                        {!! $answer->body !!}
                                    </div>
                                    <div class="question-post-user-action">
                                        <div class="post-menu">
                                            <div class="btn-group">
                                                <button class="btn dropdown-toggle after-none" type="button"
                                                        id="shareDropdownMenuTwo" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">Share
                                                </button>
                                                <div class="dropdown-menu dropdown--menu dropdown--menu-2 mt-2"
                                                     aria-labelledby="shareDropdownMenuTwo">
                                                    <div class="py-3 px-4">
                                                        <h4 class="fs-15 pb-2">Share a link to this question</h4>
                                                        <form action="#" class="copy-to-clipboard">
                                                            <span class="text-success-message">Link Copied!</span>
                                                            <input type="text"
                                                                   class="form-control form--control form-control-sm copy-input"
                                                                   value="{{route('answers.show',$answer->id)}}">
                                                            <div
                                                                class="btn-box pt-2 d-flex align-items-center justify-content-between">
                                                                <a href="#" class="btn-text copy-btn">Copy link</a>
                                                                <ul class="social-icons social-icons-sm">
                                                                    <li><a href="#" class="bg-8 text-white shadow-none"
                                                                           title="Share link to this question on Facebook"><i
                                                                                class="la la-facebook"></i></a></li>
                                                                    <li><a href="#" class="bg-9 text-white shadow-none"
                                                                           title="Share link to this question on Twitter"><i
                                                                                class="la la-twitter"></i></a></li>
                                                                    <li><a href="#"
                                                                           class="bg-dark text-white shadow-none"
                                                                           title="Share link to this question on DEV"><i
                                                                                class="lab la-dev"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- btn-group -->
                                            @if(Auth::id()==$answer->user_id)
                                                <a href="{{route('answers.edit',$answer->id)}}" class="btn">Edit</a>
                                            @endif
                                            <button class="btn">Follow</button>
                                        </div><!-- end post-menu -->
                                        <div class="media media-card user-media align-items-center">
                                            <a href="../users/profile.blade.php" class="media-img d-block">
                                                <img src="{{ $answer->user->full_image_path }}" alt="avatar">
                                            </a>
                                            <div class="media-body d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5 class="pb-1"><a
                                                            href="../users/profile.blade.php">{{$answer->user->full_name}}</a>
                                                    </h5>
                                                    <div class="stats fs-12 d-flex align-items-center lh-18">
                                                        <span class="text-black pr-2">15.5k</span>
                                                        <span class="pr-2 d-inline-flex align-items-center"><span
                                                                class="ball gold"></span>3</span>
                                                        <span class="pr-2 d-inline-flex align-items-center"><span
                                                                class="ball silver"></span>10</span>
                                                        <span class="pr-2 d-inline-flex align-items-center"><span
                                                                class="ball"></span>26</span>
                                                    </div>
                                                </div>
                                                <small class="meta d-block text-right">
                                                    <span class="text-black d-block lh-18">answered</span>
                                                    <span
                                                        class="d-block lh-18 fs-12">{{ $answer->created_at->diffForHumans() }}</span>
                                                </small>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end question-post-user-action -->
                                    <div class="comments-wrap">
                                        <ul class="comments-list">
                                            @foreach($answer->comments as $comment)
                                                <li>
                                                    <div class="comment-body">
                                                        <span class="comment-copy">{{$comment->body}}</span>
                                                        <span class="comment-separated">-</span>
                                                        <a href="../users/profile.blade.php" class="comment-user"
                                                           title="15,467 reputation">{{ $comment->user->full_name }}</a>
                                                        <span class="comment-separated">-</span>
                                                        <a href="#"
                                                           class="comment-date">{{$comment->created_at->diffForHumans()}}</a>
                                                    </div>
                                                </li>

                                            @endforeach
                                        </ul>
                                        <div class="comment-form">
                                            <div class="comment-link-wrap text-center">
                                                <a class="collapse-btn comment-link" data-toggle="collapse"
                                                   href="#addCommentCollapseTwo{{$answer->id}}" role="button"
                                                   aria-expanded="false"
                                                   aria-controls="addCommentCollapseTwo{{$answer->id}}"
                                                   title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">Add
                                                    a comment</a>
                                            </div>
                                            <div class="collapse border-top border-top-gray mt-2 pt-3"
                                                 id="addCommentCollapseTwo{{$answer->id}}">
                                                <form method="post" action="{{ url("comment/answer") }}"
                                                      class="row pb-3">
                                                    @csrf
                                                    <input value="{{$answer->id}}" name="id" hidden>
                                                    <input value="{{$question->slug}}" name="question_slug" hidden>
                                                    <div class="col-lg-12">
                                                        <h4 class="fs-16 pb-2">Leave a Comment</h4>
                                                        <div class="divider mb-2"><span></span></div>
                                                    </div><!-- end col-lg-12 -->
                                                    <div class="col-lg-12">
                                                        <div class="input-box">
                                                            <div class="form-group">
                                                            <textarea
                                                                class="form-control form--control form-control-sm fs-13"
                                                                name="body" rows="5"
                                                                placeholder="Your comment here..."></textarea>
                                                                <div class="d-flex flex-wrap align-items-center pt-2">
                                                                    <div
                                                                        class="badge bg-gray border border-gray mr-3 fw-regular fs-13">
                                                                        [named hyperlinks] (https://example.com)
                                                                    </div>
                                                                    <div class="mr-3 fw-bold fs-13">**bold**</div>
                                                                    <div class="mr-3 font-italic fs-13">_italic_</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                    <div class="col-lg-12">
                                                        <div
                                                            class="input-box d-flex flex-wrap align-items-center justify-content-between">
                                                            <button
                                                                class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray"
                                                                type="submit">Post Comment
                                                            </button>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                </form>
                                            </div><!-- end collapse -->
                                        </div>
                                    </div><!-- end comments-wrap -->
                                </div><!-- end answer-body-wrap -->
                            </div><!-- end answer-wrap -->
                            <br/>
                            <br/>
                        @endforeach
                        @if(Auth::id()!=$question->user_id)
                            <div class="subheader">
                                <div class="subheader-title">
                                    <h3 class="fs-16">Your Answer</h3>
                                </div><!-- end subheader-title -->
                            </div><!-- end subheader -->
                            <div class="post-form">
                                <form method="post" action="{{ route('answers.store') }}">
                                    @csrf
                                    <input name="question_id" value="{{$question->id}}" hidden>
                                    <input name="question_slug" value="{{$question->slug}}" hidden>
                                    <input name="user_id" value="{{Auth::id()}}" hidden>
                                    <div class="input-box">
                                        {{--                                    <label class="fs-14 text-black lh-20 fw-medium">Answer</label>--}}
                                        <div class="form-group">
                                        <textarea
                                            class="form-control form--control form-control-sm fs-13 user-text-editor"
                                            name="body" rows="6"
                                            placeholder="Your answer here...">Your answer here...</textarea>
                                        </div>
                                    </div>
                                    <button class="btn theme-btn theme-btn-sm" type="submit">Post Your Answer</button>
                                </form>
                            </div>
                        @endif
                    </div><!-- end question-main-bar -->
                </div><!-- end col-lg-9 -->
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
                                        <p class="fs-14">To get answer of question <a href="../Auth/signup.blade.php"
                                                                                      class="text-color hover-underline">Join<i
                                                    class="la la-arrow-right ml-1"></i></a></p>
                                    </div>
                                </div><!-- end row -->
                            </div>
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <div class="d-flex align-items-center pb-3">
                                    <svg class="mr-2" width="18" height="18" viewBox="0 0 18 18" fill="#6c727c">
                                        <path
                                            d="M1 6l8 5 8-5V4L9 9 1 4c0-1.1.9-2 2-2h12c1.09 0 2 .91 2 2v10c0 1.09-.91 2-2 2H3c-1.09 0-2-.91-2-2V6z"></path>
                                    </svg>
                                    <h3 class="fs-17">Love this site?</h3>
                                </div>
                                <div class="divider"><span></span></div>
                                <p class="fs-14 lh-20 py-3">Get the <span
                                        class="text-dark fw-medium">weekly newsletter!</span> In it, you'll get:</p>
                                <ul class="generic-list-item generic-list-item-bullet fs-14 pb-3">
                                    <li class="lh-20">The week's top questions and answers</li>
                                    <li class="lh-20">Important community announcements</li>
                                    <li class="lh-20">Questions that need answers</li>
                                </ul>
                                <button class="btn theme-btn theme-btn-gray w-100">Sign up for the digest</button>
                                <p class="fs-14 pt-1 text-center">See an example newsletter</p>
                            </div>
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="fs-17 pb-3">Related Questions</h3>
                                <div class="divider"><span></span></div>
                                <div class="sidebar-questions pt-3">
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="show.blade.php">How to select the dom element with
                                                    event.target</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 mins ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">Sudhir Kumbhare</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="show.blade.php">How can you cut an onion without
                                                    crying?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">48 mins ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">wimax</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="show.blade.php">How to change the behavior of
                                                    dropdown buttons in HTML</a></h5>
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
                                        <a href="#" class="tag-link tag-link-md">analytics</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">computer</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">python</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">javascript</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">c#</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="collapse" id="showMoreTags">
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">java</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">swift</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">html</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">angular</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">flutter</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">machine-language</a>
                                            <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                        </div><!-- end tag-item -->
                                    </div><!-- end collapse -->
                                    <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags"
                                       role="button" aria-expanded="false" aria-controls="showMoreTags">
                                        <span class="collapse-btn-hide">Show more<i
                                                class="la la-angle-down ml-1 fs-11"></i></span>
                                        <span class="collapse-btn-show">Show less<i
                                                class="la la-angle-up ml-1 fs-11"></i></span>
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

@endsection
@push('scripts')
    <script src="{{ asset('website_assets/js/jquery-te-1.4.0.min.js') }}"></script>
{{--    <script src="{{ asset('website_assets/js/upvote.vanilla.js') }}"></script>--}}
{{--    <script src="{{ asset('website_assets/js/upvote-script.js') }}"></script>--}}
    <script src="{{ asset('website_assets/js/jquery.multi-file.min.js') }}"></script>
    <script>
        $(document).ready(function ($) {
            $('#form-accepted').on('submit', function (e) {
                e.preventDefault();
                $.post($(this).attr('action'), $(this).serialize(), function (items) {
                    $('.btn-accepted').empty();
                    $('.btn-accepted').class('star-on');
                });
            });
        });
        // $('#form-vote-up').on('submit', function(e) {
        //     e.preventDefault();
        //     $.post($(this).attr('action') , $(this).serialize(), function(items) {
        //         // $('.count').empty();
        //         console.log(items);
        //         // for(i in items) {
        //         //     data = items[i];
        //         //     $('.ps-cart__content').append(`<div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
        //         //     <div class="ps-cart-item__thumbnail"><a href="${data.product.permalink}"></a><img src="${data.product.image_url}" alt=""></div>
        //         //     <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="${data.product.permalink}">${data.product.name}</a>
        //         //         <p><span>Quantity:<i>${data.quantity}</i></span><span>Total:<i>£${data.quantity * data.product.price}</i></span></p>
        //         //     </div>
        //         // </div>`);
        //         // }
        //     });
        // });

            const voteUp = $("#vote-up");
            const voteDown = $("#vote-down");
            const formVote = $("#form-vote");
            const voteCount = $("#vote-count");
            const scoreInput = $("#score");



            var count_votes = voteCount[0].innerHTML;
            var score = 0;

            if (voteUp.hasClass('upvote-on')){
                score = 1;
            }
            if (voteDown.hasClass('downvote-on')){
                score = -1;
            }
            voteUp.click(function (e) {
                if( score === 1 ) {
                    score = 0;
                    $("#score").attr("value", score);
                    // scoreInput.attr = ("value", score);
                    voteUp.removeClass("upvote-on");
                    count_votes = parseInt(count_votes) - 1;
                    voteCount[0].innerHTML = count_votes;
                }else{
                    score = 1;
                    $("#score").attr("value", score);

                    voteUp.addClass("upvote-on");
                    if (voteDown.hasClass("downvote-on")){
                        voteDown.removeClass("downvote-on");
                        count_votes = parseInt(count_votes) + 2;
                    }else {
                        count_votes = parseInt(count_votes) + 1;
                    }

                    voteCount[0].innerHTML = count_votes;
                }

                $.post($(formVote).attr('action'), $(formVote).serialize(), function (items) {
                    console.log(items)
                });
            });

        voteDown.click(function (e) {
            console.log('asd');
            if( score === -1 ) {
                score = 0;
                $("#score").attr("value", score);

                voteDown.removeClass("downvote-on");
                count_votes = parseInt(count_votes) + 1;
                voteCount[0].innerHTML = count_votes;
            }else{
                score = -1;
                $("#score").attr("value", score);

                voteDown.addClass("downvote-on");
                if (voteUp.hasClass("upvote-on")){
                    voteUp.removeClass("upvote-on");
                    count_votes = parseInt(count_votes) - 2;
                }else {
                    count_votes = parseInt(count_votes) - 1;
                }

                voteCount[0].innerHTML = count_votes;
            }

            $.post($(formVote).attr('action'), $(formVote).serialize(), function () {
                console.log('sucess')
            });
        });
    </script>
@endpush
