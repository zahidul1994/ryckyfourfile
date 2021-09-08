
@extends('layouts.user')
@section('title','My Offer')
@section('content')

<img src="{{asset('assets/images/plan/'.$offer->offer)}}"  width="100%">

@stop