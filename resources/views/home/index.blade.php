@php $lang=app()->getLocale(); $page='home';  @endphp
@extends('layouts.master')

@section('page_title')
    Home
@endsection

@section('head')

@endsection

@section('seo')


@stop

@section('content-wrapper')
    @include('home.navbar')
    @include('home.main-banner')
    {{--@include('home.categories-area')--}}
    @include('home.about')
    @include('home.doctors')
    {{--@include('home.queries')--}}
{{--    @include('home.client')--}}
    @include('home.blogs')
    {{--@include('home.fun-facts')--}}
{{--    @include('home.newsletter')--}}

@endsection