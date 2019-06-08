<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets\images\logo.png')}}" />

  <!-- Site Properties -->
  <title>Video404 - @yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/library/semantic.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
@yield('style')
</head>
<body>
  <div class="ui center aligned container mobile hidden">
    <div class="ui celled horizontal list">
      <a class="item">Site Map</a>
      <a class="item">About Us</a>
      <a class="item">Contact</a>
      <a class="item">Support</a>
      <a class="item">Terms and Conditions</a>
      <a class="item">Privacy Policy</a>
    </div>
  </div>
  <div class="ui main text container">
    <h1 class="ui header" style="color:#5ac4a9">Sticky Example</h1>
    <p>This example shows how to use lazy loaded images, a sticky menu, and a simple text container</p>
  </div>
  <div class="ui borderless main menu">
    <div class="ui container">
      @if(empty($id))
        <a class="active item" href="/">
          <i class="home icon"></i>
        </a>
        @foreach($category as $c )
          <a href="{{asset('/category')}}/{{$c->id.'/'.strtolower(preg_replace('#[ -]+#', '-', $c->cat_name)).'.html'}}" class="item">{{$c->cat_name}}</a>
        @endforeach
      @else
        <a class="item" href="/">
          <i class="home icon"></i>
        </a>
        @foreach($category as $c )
          @if($c->id==$id)
          <a href="{{asset('/category')}}/{{$c->id.'/'.strtolower(preg_replace('#[ -]+#', '-', $c->cat_name)).'.html'}}" class="active item">{{$c->cat_name}}</a>
          @else
          <a href="{{asset('/category')}}/{{$c->id.'/'.strtolower(preg_replace('#[ -]+#', '-', $c->cat_name)).'.html'}}" class="item">{{$c->cat_name}}</a>
          @endif
        @endforeach
      @endif
      <div class="right menu">
        <div class="item">
          <form action="{{URL::TO('/search/result')}}" class="ui icon input">
            <input type="text" name="text_search" id="text_search" placeholder="Search . . .">
            <i class="circular search link icon"></i>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="ui container">
      <div class="ui inverted divider"></div>
    </div>
	<!-- Following Menu for mobile -->
	<div class="ui fixed secondary menu">
		<div class="ui text container">
			<a class="toc item left aligned">
				<i class="sidebar icon"></i>
			</a>
      <div class="toc item center aligned">
				<strong>Menu</strong>
			</div>
      <div class="toc item right aligned">
      <i class="sidebar icon"></i>
			</div>
		</div>
	</div>

	<!-- Sidebar Menu -->
  <div class="ui vertical sidebar menu">
    @if(empty($id))
        <a class="active item" href="/">
          Home
        </a>
        @foreach($category as $c )
          <a href="{{asset('/category')}}/{{$c->id.'/'.strtolower(preg_replace('#[ -]+#', '-', $c->cat_name)).'.html'}}" class="item">{{$c->cat_name}}</a>
        @endforeach
      @else
        <a class="item" href="/">
          Home
        </a>
        @foreach($category as $c )
          @if($c->id==$id)
          <a href="{{asset('/category')}}/{{$c->id.'/'.strtolower(preg_replace('#[ -]+#', '-', $c->cat_name)).'.html'}}" class="active item">{{$c->cat_name}}</a>
          @else
          <a href="{{asset('/category')}}/{{$c->id.'/'.strtolower(preg_replace('#[ -]+#', '-', $c->cat_name)).'.html'}}" class="item">{{$c->cat_name}}</a>
          @endif
        @endforeach
      @endif
  </div>
  <div class="ui container">
    @yield('contain')
  </div>
  <div class="ui inverted vertical footer segment"style="margin: 0em 0em 0em;">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Tag</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Tag</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Tag</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
      <div class="ui inverted section divider"></div>
      <img src="{{asset('assets/images/logo.png')}}" class="ui centered mini image">
      <div class="ui horizontal inverted small divided link list">
        <a class="item">Site Map</a>
        <a class="item">About Us</a>
        <a class="item">Contact</a>
        <a class="item">Support</a>
        <a class="item">Terms and Conditions</a>
        <a class="item">Privacy Policy</a>
      </div>
    </div>
  </div>
  <div id="stop" class="scrollTop">
    <span><a href="">
      <!-- TOP -->
    <i class="square inverted arrow up icon link" data-content="Top Right" data-position="top right"></i>
    </a></span>
  </div>
  <script src="{{asset('assets/library/jquery.min.js')}}"></script>
  <script src="{{asset('assets/library/semantic.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script>
     $(document)
    .ready(function() {
      $('.special.card .image').dimmer({
        on: 'hover'
      });
      $('.eye.rating')
        .rating()
      ;
      $('.card .dimmer')
        .dimmer({
          on: 'hover'
        })
      ;
    })
  ;
  @yield('script')  
  </script>
  <script>$(function() {
    
    var $allVideos = $("iframe[src*='//player.vimeo.com'], iframe[src*='//www.youtube.com'], object, embed"),
    $fluidEl = $("figure");
	    	
	$allVideos.each(function() {
	
	  $(this)
	    // jQuery .data does not work on object/embed elements
	    .attr('data-aspectRatio', this.height / this.width)
	    .removeAttr('height')
	    .removeAttr('width');
	
	});
	
	$(window).resize(function() {
	   
	  $allVideos.each(function() {
	  
	    var $el = $(this);
        var newWidth = $el.parents('figure').width();
	    $el
	        .width(newWidth)
	        .height(newWidth * $el.attr('data-aspectRatio'));
	  
	  });
	
	}).resize();

});</script>
</body>

</html>
