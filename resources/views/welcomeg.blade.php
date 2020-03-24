<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Personal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>
    <body>
        <div class="row">
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
            <div class="col-sm ">
                <div class="container ">
                    <img class="img-fluid float-lefts shake" src="/images/HOME.png" alt="Mi foto" width="auto" height="auto">
                </div>
            </div>
        </div>
    </body>
</html>
<script>
 $('#demo').jrumble({
    rangeX: 10,
	rangeY: 10,
	rangeRot: 4
 });
</script>
