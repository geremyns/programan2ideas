@extends('welcomeg')
@section('title', 'Home')

@section('css')

@endsection

@section('contents')

{{-- Seccion Deporte --}}
<div>
      <div class="col-sm-12 bg-dark mt-5">
          <p class="sizes-home">Deporte</p>
      </div>
</div>


<div id="parallax1" class="parallax-slide"></div>

{{-- End seccion Deporte --}}

{{-- Seccion Electro --}}

<div>
    <div class="col-sm-12 bg-dark">
        <p class="sizes-home">Electro</p>
    </div>
</div>

<div id="parallax2" class="parallax-slide"></div>

{{-- End seccion Electro --}}


{{-- Seccion ropa --}}

<div>
    <div class="col-sm-12 bg-dark">
        <p class="sizes-home">Ropa</p>
    </div>
</div>

<div id="parallax3" class="parallax-slide"></div>

{{-- End seccion ropa --}}


{{-- Seccion Comida --}}

<div>
    <div class="col-sm-12 bg-dark">
        <p class="sizes-home">Comida</p>
    </div>
</div>

<div id="parallax4" class="parallax-slide"></div>

{{-- End seccion Comida --}}

{{-- Seccion Transporte --}}
<div>
    <div class="col-sm-12 bg-dark">
        <p class="sizes-home">Transporte</p>
    </div>
</div>

<div id="parallax5" class="parallax-slide" > </div>
{{-- End seccion Transporte --}}

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

/* computadora*/
@media screen and (min-width: 601px) {

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
  -webkit-background-size: cover;
  -moz-background-size:  cover;
  -o-background-size: cover;
  background-size: cover ;
}
#parallax2 {
  background: url('images/home-2.jpg') no-repeat center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size:  cover;
  -o-background-size: cover;
  background-size: cover ;
}

#parallax3 {
  background: url('images/home-3.jpg') no-repeat center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size:  cover;
  -o-background-size: cover;
  background-size: cover ;
}

#parallax4 {
  background: url('images/home-4.jpg') no-repeat center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size:  cover;
  -o-background-size: cover;
  background-size: cover ;
}
#parallax5 {
  background: url('images/home-5.jpg') no-repeat center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size:  cover;
  -o-background-size: cover;
  background-size: cover ;
}
}



  /* movil */
  @media screen and (max-width: 600px) {
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
  background: url('images/home-1-m.jpg') no-repeat center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size:  cover;
  -o-background-size: cover;
  background-size: cover ;
}
#parallax2 {
  background: url('images/home-2-m.jpg') no-repeat center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size:  cover;
  -o-background-size: cover;
  background-size: cover ;
}

#parallax3 {
  background: url('images/home-3-m.jpg') no-repeat center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size:  cover;
  -o-background-size: cover;
  background-size: cover ;
}

#parallax4 {
  background: url('images/home-4-m.jpg') no-repeat center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size:  cover;
  -o-background-size: cover;
  background-size: cover ;
}
#parallax5 {
  background: url('images/home-5-m.jpg') no-repeat center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size:  cover;
  -o-background-size: cover;
  background-size: cover ;
}

  }
</style>

@endsection
