


@extends('layouts.guest')

@section('content')


    <div class="main">
    <img src="{{asset('img/fondo8.jpg')}}" alt="" width="100%">
    </div>

    <style>
        .element{
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
        }
        .element>div{
            width: 50%;
        }
        .element>div>img{
           min-width: 100%;
        }
        .element>div:nth-child(2){
           font-size: 16px;
           font-weight: bold;
           padding: 0px 50px;
           text-align: center;
        }
        .element>div:nth-child(2)>button{
           background: transparent;
           border: 1px solid #000;
           padding: 10px 20px;
           display: inline-block;
           margin: auto;
        }

         .element1{
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
        }
        .element1>div{
            width: 50%;
        }
        .element1>div>img{
           min-width: 100%;
        }
        .element1>div:nth-child(1){
           font-size: 16px;
           font-weight: bold;
           padding: 0px 50px;
           text-align: center;
        }
        .element1>div:nth-child(1)>button{
           background: transparent;
           border: 1px solid #000;
           padding: 10px 20px;
           display: inline-block;
           margin: auto;
        }
    </style>
    <section>
        <div class="element">
            <div>
                <img src="{{asset('img/img3.jpg')}}" alt="" >
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis aliquid maxime ipsum molestias autem architecto vitae incidunt maiores possimus cum dignissimos voluptates laboriosam quasi qui, saepe itaque sed eaque!</p>
                <button>Ver Mas</button>
            </div>
        </div>
        <div class="element1">

                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis aliquid maxime ipsum molestias autem architecto vitae incidunt maiores possimus cum dignissimos voluptates laboriosam quasi qui, saepe itaque sed eaque!</p>
                    <button>Ver Mas</button>
                </div>
                <div>
                    <img src="{{asset('img/img1.jpg')}}" alt="" >
                </div>
            </div>
    </section>


    <style>
        .parallax{
                background: url('img/p1.jpg');
                background-size: 100%;
                background-repeat: no-repeat;
                height: 400px;
                width: 100%;
                background-attachment: fixed;
               display: flex;
               justify-content: center;
               align-items: center;
               font-size: 60pt;
               color: #fff;
               text-shadow:  2px 2px 5px #000;

        }
    </style>


    <section class="parallax">
            <p>Perfimex</p>
    </section>

    {{-- <br><br><br> --}}

<img src="{{asset('img/p2.jpg')}}" alt="" width="100%">
<img src="{{asset('img/p3.jpg')}}" alt="" width="100%">



    <style>
            footer{
                    background: #000;
                    height: 30px;
                    width: 100%;
                    text-align: center;
                    color: #fff;


            }
        </style>

    <footer>
        <p>Derechos de copyright</p>
    </footer>

@endsection

