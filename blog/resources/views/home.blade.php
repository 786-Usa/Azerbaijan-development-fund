@extends('app')

@section('title', 'Goldman Sachs')

@section('content')
    @include('partials.hero')
    @include('partials.firmAction')
    @include('partials.ourClients')
    @include('partials.careers')

    @include('partials.opportunity')
    @include('partials.container')


@endsection
