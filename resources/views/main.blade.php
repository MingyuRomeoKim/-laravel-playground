@extends('retro/layouts/app')

@section('main', 'Main Page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 page-sidebar bordered">
                <aside>
                    <div class="navbar-collapse collapse">
                        <div class="inner-box">
                            <div class="categories-list  list-filter">
                                <h5 class="list-title"><strong>카테고리</strong></h5>
                                <ul class=" list-unstyled">
                                    <li>
                                        <a class="app-genres" href="#">
                                            일상
                                        </a>
                                    </li>
                                    <li>
                                        <a class="app-genres" href="#">
                                            술친구
                                        </a>
                                    </li>
                                </ul>


                            </div>
                            <!--/.categories-list-->

                            <br>

                            <a class="btn btn-lg btn-primary btn-block" data-toggle="modal"
                               data-target="#shareModal">Share this</a>
                            <br>

                            <div style="clear:both"></div>
                        </div>
                    </div>
                    <!--/.categories-list-->
                </aside>
            </div>
            <!--/.page-side-bar-->
            <div class="col-sm-8 page-content col-thin-left bordered">

                <form action="/search/" method="get" onsubmit="ga('send', 'event', 'appslist', 'dosearch');">
                    <div class="search-row-wrapper">
                        <div class="container text-center">

                            <div class="col-sm-5">
                                <input class="form-control keyword" name="q" type="text"
                                       placeholder="e.g. Instagram">
                            </div>


                            <div class="col-sm-2 hidden-xs">
                                <button class="btn btn-block btn-primary"
                                        onclick="ga('send', 'event', 'appslist', 'searchbtn');"><i
                                            class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <br>

                <div class="category-list">
                    <br>

                    <!--/.listing-filter-->

                    <div class="adds-wrapper">

                        <a class="app-line" onclick="ga('send', 'event', 'appslist', 'goSite');"
                           href="/board/1">
                            <div class="item-list row">

                                <div class="col-sm-1 " style="width: 40px;">
                                    <div class="add-image app-icon">
                                        <img class=" no-margin app-icon-pixelated"
                                             src="https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?url=http://is2.mzstatic.com/image/thumb/Purple2/v4/b0/c1/9e/b0c19eb5-e576-f668-fa81-bd08c16d874e/mzl.qucuygly.png/100x100bb-85.jpg&container=focus&resize_w=15&resize_h=15&refresh=2592000"
                                             alt="img">
                                    </div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-7 right-border">
                                    테스트1 데이터입니다.
                                </div>

                                <div class="col-sm-2 right-border">
                                    2009-05-25
                                </div>

                                <div class="col-sm-1 ">
                                    <h2 class="item-price">

                                        <span style="color: #00733e">free</span>
                                    </h2>
                                </div>


                                <!--/.add-desc-box-->
                            </div>


                        </a>

                        <a class="app-line" onclick="ga('send', 'event', 'appslist', 'goSite');"
                           href="/board/2">
                            <div class="item-list row">

                                <div class="col-sm-1 " style="width: 40px;">
                                    <div class="add-image app-icon">
                                        <img class=" no-margin app-icon-pixelated"
                                             src="https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?url=http://is2.mzstatic.com/image/thumb/Purple/74/de/9a/mzl.watcngrg.png/100x100bb-85.jpg&container=focus&resize_w=15&resize_h=15&refresh=2592000"
                                             alt="img">
                                    </div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-7 right-border">
                                    테스트2데이터입니다.
                                </div>

                                <div class="col-sm-2 right-border">
                                    2009-12-04
                                </div>

                                <div class="col-sm-1 ">
                                    <h2 class="item-price">

                                        $ 0.99
                                    </h2>
                                </div>


                                <!--/.add-desc-box-->
                            </div>

                        </a>


                    </div> <!--/.adds-wrapper-->

                </div>
{{--                <div class="pagination-bar text-center">--}}
{{--                    <ul class="pagination">--}}
{{--                        <!-- Previous Page Link -->--}}
{{--                        <li class="disabled"><span>&laquo;</span></li>--}}

{{--                        <!-- Pagination Elements -->--}}
{{--                        <!-- "Three Dots" Separator -->--}}

{{--                        <!-- Array Of Links -->--}}
{{--                        <li class="active"><span>1</span></li>--}}
{{--                        <li><a href="/search/?q=retro game&amp;page=2">2</a></li>--}}
{{--                        <li><a href="/search/?q=retro game&amp;page=3">3</a></li>--}}
{{--                        <li><a href="/search/?q=retro game&amp;page=4">4</a></li>--}}
{{--                        <li><a href="/search/?q=retro game&amp;page=5">5</a></li>--}}
{{--                        <li><a href="/search/?q=retro game&amp;page=6">6</a></li>--}}
{{--                        <li><a href="/search/?q=retro game&amp;page=7">7</a></li>--}}
{{--                        <li><a href="/search/?q=retro game&amp;page=8">8</a></li>--}}
{{--                        <!-- "Three Dots" Separator -->--}}
{{--                        <li class="disabled"><span>...</span></li>--}}

{{--                        <!-- Array Of Links -->--}}
{{--                        <!-- "Three Dots" Separator -->--}}

{{--                        <!-- Array Of Links -->--}}
{{--                        <li><a href="/search/?q=retro game&amp;page=24">24</a></li>--}}
{{--                        <li><a href="/search/?q=retro game&amp;page=25">25</a></li>--}}

{{--                        <!-- Next Page Link -->--}}
{{--                        <li><a href="/search/?q=retro game&amp;page=2" rel="next">&raquo;</a></li>--}}
{{--                    </ul>--}}

{{--                </div>--}}
                <!--/.pagination-bar -->

            </div>
            <!--/.page-content-->

        </div>


    </div>
@endsection