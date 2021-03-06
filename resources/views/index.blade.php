@extends('app')
@section('body')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="col-xs-12">
                    <h3>Welcome Anonymous! Just follow steps below to Login to EasyLiker.</h3>
                </div>

                {{--<div class="title_right">--}}
                    {{--<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" class="form-control" placeholder="Search for...">--}}
                            {{--<span class="input-group-btn">--}}
                              {{--<button class="btn btn-default" type="button">Go!</button>--}}
                            {{--</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    {{--<ul class="dropdown-menu" role="menu">--}}
                                        {{--<li><a href="#">Settings 1</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="#">Settings 2</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <h3>Allow Permission To The App, And Copy Paste The Url Below</h3>
                            <a target="_blank" href="{{ url('get-token') }}" class="btn btn-primary">Get Token Here</a>
                            <h3>DON'T FORGET TO ALLOW <a target="_blank" href="Facebook Followers [Settings]" class="btn btn-primary">Facebook Followers [Settings]</a> As Well</h3>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" placeholder="Paste your token to login system" class="form-control col-md-7 col-xs-12">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <a href="{{ url('get-token') }}" class="btn btn-danger">Login</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts-footer')

@endsection