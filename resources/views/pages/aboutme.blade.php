@extends('welcomeg')
@section('title', 'Sobre mi')

@section('css')

@endsection

@section('contents')

<div class="contenedor-img mt-5">
    <div class="row ">
        <div class="col-sm ">

        </div>
        <div class="col-sm ">
            <div class="contaniner">
                <div class="col t-home img-fluid">
                    <h2 id="demo" class="sizes shake">Programador</h2>
                    <h2 class="sizes shake">Bootstrap</h2>
                    <h2 class="sizes shake">Eloquent</h2>
                    <h2 class="sizes shake">Laravel</h2>
                    <h2 class="sizes shake">Vuejs</h2>
                    <h2 class="sizes shake">CSS</h2>

                </div>
            </div>
        </div>
    </div>
</div>




@endsection
@section('scripts')

<style>

/* computadora*/
@media screen and (min-width: 601px) {

    html {
    background: url('images/HOME7.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size:  cover;
    -o-background-size: cover;
    background-size: cover ;

}

body{

    background-color: transparent !important;
    background: transparent;


}
}
  /* movil */
  @media screen and (max-width: 600px) {

    html {
    background: url('images/HOME-7.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size:  cover;
    -o-background-size: cover;
    background-size: cover ;

}

body{

    background-color: transparent !important;
    background: transparent;


}

  }
</style>
</style>
@endsection
