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
      this is article
      </div> 
      <div class="ui container">
        <div class="ui inverted divider"></div>
      </div>
      <div class="ui container center aligned">
      <!-- {{ $article->links('/vendor/pagination/custom') }} -->
      </div>
    </div>
    <div class="three wide column  mobile hidden" style="padding-top:0;padding-right:0;">
      <img class="ui fluid image" src="{{asset('assets\images\wireframe\ad.png')}}">
    </div>
  </div>
  <div class="row">
    <div class="three wide column  mobile hidden">
      <img class="ui fluid image" src="{{asset('assets\images\wireframe\ad.png')}}">
    </div>
    <div class="ten wide column">
      <div class="ui four column doubling stackable grid container">
        <div class="column">
        <img class="ui fluid image" src="{{asset('assets\images\wireframe\text-image.png')}}">
        </div>
        <div class="column">
        <img class="ui fluid image" src="{{asset('assets\images\wireframe\text-image.png')}}">
        </div>
        <div class="column">
        <img class="ui fluid image" src="{{asset('assets\images\wireframe\text-image.png')}}">
        </div>
        <div class="column">
        <img class="ui fluid image" src="{{asset('assets\images\wireframe\text-image.png')}}">
        </div>
      </div>
    </div>
    <div class="three wide column  mobile hidden" style="padding-top:0;padding-right:0;">
      <img class="ui fluid image" src="{{asset('assets\images\wireframe\ad.png')}}">
    </div>
  </div>
</div>
@stop()
