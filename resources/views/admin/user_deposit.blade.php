@php($deps = search_deposit())
@extends('admin.atlantis.layout')
@Section('content')
        <div class="main-panel">
            <div class="content">
                @include('admin.atlantis.main_bar')
                <div class="page-inner mt--5">
                    @include('admin.atlantis.overview')
                    <div id="prnt"></div>  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color:{{$settings->header_color}}">
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title text-white" > <i class="fas fa-donate"></i> {{ __('messages.dpst_hstr') }} </h4>
                                        <div class="card-tools">
                                            <form action="{{ url('/admin/search/deposit')}}" method="post">
                                                <div class="input-group">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> {{ __('messages.srch') }} </span>
                                                    </div>
                                                    <input type="text" name="search_val" class="form-control" placeholder="{{ __('messages.search_by') }}">
                                                    <div class="input-group-append">
                                                        <button class="btn"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>                                                                             
                                    </div>
                                </div>
                                <div class="card-body pb-0 table-responsive">
                                    @include('admin.temp.user_deposits')                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
@endSection