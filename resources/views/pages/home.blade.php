@extends('welcomeg')
@section('title', 'Home')

@section('css')

@endsection

@section('contents')

<div>
      <div class="col-sm-12 bg-dark">
          <p class="sizes-home">Deporte</p>
      </div>
</div>


<div id="parallax1" class="parallax-slide"></div>

<div>
    <div class="col-sm-12 bg-dark">
        <p class="sizes-home">Electro</p>
    </div>
</div>

<div id="parallax2" class="parallax-slide"></div>


</div>




@endsection
@section('scripts')

<script>


$(document).ready(function() {

  // Find the initial scroll top when the page is loaded.
  var initScrollTop = $(window).scrollTop();

  // Set the image's vertical background position based on the scroll top when the page is loaded.
  $(parallax1).css({'background-position-y' : (initScrollTop/75)+'%'});

  // When the user scrolls...
  $(window).scroll(function() {

    // Find the new scroll top.
    var scrollTop = $(window).scrollTop();

    // Set the new background position.
    $(parallax1).css({'background-position-y' : (scrollTop/75)+'%'});

  });

});


</script>

<style>

html,body{

    background: #343a40 !important;;
    background-color: #343a40 !important;

}

.parallax-slide {
  height: 100vh;
}

h1 {
  padding-top: 10%;
}
#parallax1 {
  background: url('images/home-1.jpg') no-repeat center;
  background-attachment: fixed;
}
#parallax2 {
  background: url('images/home-2.jpg') no-repeat center;
  background-attachment: fixed;
}
</style>

@endsection
