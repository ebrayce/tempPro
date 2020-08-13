@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <router-link to="/foo">Haha</router-link>
                    <div class="card-body">
                        <router-view></router-view>
{{--                       <example-component></example-component>--}}
                        <vue-progress-bar></vue-progress-bar>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
