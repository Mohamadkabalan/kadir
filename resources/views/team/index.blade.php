@php $lang=app()->getLocale(); $page='team';  @endphp
@extends('layouts.master')

@section('page_title')
    Mannschaft
@endsection

@section('head')
@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    <div class="page-banner-area item-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{__('translation.teams')}}</h2>
                        <ul>
                            <li>
                                <a href="/">{{__('translation.home')}}</a>
                            </li>
                            <li>{{__('translation.teams')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php $teams = \App\Team::all();  @endphp
    @if($teams)
        <!-- Start Doctor Area -->
        <section class="team-area pt-100 pb-100">
            <div class="container">

                        <div class="section-title">
                            <h2>{{ __('translation.our-specialized-doctor-details') }}</h2>
                            <div class="bar"></div>
                            <p>{{ __('translation.team-section-description') }}</p>
                        </div>

                <div class="row">
                    @foreach($teams as $team)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-doctor">
                               <div class="doctor-image">
                                    <img src="{{ 'storage/'.str_replace('\\', '/', $team->image) }}" alt="image">
                                </div>

                                <div class="doctor-content">
                                    <h3><a href="javascript:;">@if($lang=='de') {{$team->name_de}} @else {{$team->name_ar}} @endif</a></h3>
                                    <p class="designation pt-3">@if($lang=='de') {{$team->description_de}} @else {{$team->description_ar}} @endif</p>
                                    {{--<a href="javascript:;" class="department-btn">@if($lang=='de') {{$team->position_de}} @else {{$team->position_ar}} @endif</a>--}}

{{--                                    <div class="doctor-btn">
                                        <a href="/doctors-details/{{$team->id}}" class="default-btn">{{ __('translation.learn-more') }}</a>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Doctor Area -->
    @endif

@endsection

@push('scripts')

@endpush