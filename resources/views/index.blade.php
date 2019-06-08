@extends('master-page')
@section('title')
    Home page
@stop
@section('style')
    <style>
    </style>
@stop
@section('contain')
<div class="ui internally celled grid">
  <div class="row">
    <div class="three wide column  mobile hidden" style="padding-left:0;padding-top:0">
      <img class="ui fluid image" src="{{asset('assets\images\wireframe\ad.png')}}">
    </div>
    <div class="ten wide column">
      <div class="ui three cards mobile hidden">
      
      </div> 
    </div>
    <div class="three wide column  mobile hidden" style="padding-top:0;padding-right:0;">
      <img class="ui fluid image" src="{{asset('assets\images\wireframe\ad.png')}}">
    </div>
    <div class="ui container">
        <div class="ui inverted divider"></div>
      </div>
  </div>
</div>
@stop()
