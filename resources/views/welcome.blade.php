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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, deserunt ea eligendi exercitationem minima neque, quas quos, sed veniam veritatis voluptas. Culpa cupiditate dolor eaque enim ipsa, quisquam voluptatibus!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
