@extends('welcomeg')
@section('title', 'Home')

@section('css')

@endsection

@section('contents')

<div class="container pt-5">
    <div class="col-12 mt-5 bg-primary mb-4">
        <div class="col pb-5 pt-5">
            <div class="container bg-secondary col-sm-8 pt-3 pb-3">

                <div class="row">
                    <div class="col-sm">
                        <h3 class="col-sm-9 offset-sm-1 text-center ">Nombre</h3 >
                        <input type="text" class="col-sm-9 offset-sm-1">
                    </div>
                    <div class="col-sm">
                        <h3 class="col-sm-9 offset-sm-1 text-center " >Email</h3 >
                        <input type="text" class="col-sm-9 offset-sm-1">
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm">
                        <h3 class="col-sm-9 offset-sm-1 text-center">Asunto</h3 >
                        <input type="text" class="col-sm-9 offset-sm-1">
                    </div>
                    {{-- Espacio para rellenar lado derecho--}}
                    <div class="col-sm">
                    </div>

                </div>
                <div >
                    <h1>Mensaje</h1>
                    <textarea class="col-sm-10 col-xs-12 " rows="17" cols="50">
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('scripts')
<style>


</style>
@endsection
