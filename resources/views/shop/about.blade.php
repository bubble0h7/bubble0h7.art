@extends('layouts.shop')

@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            <img id="self-portrait" src="{{ asset('img/self-portrait.png') }}" alt="bubble0h7"/>
            <div class="about">
                <h1>Hi. Hello.</h1>
                <p>
                    I'm a web dev by day, artist by night, from little ol' New Zealand. I've been drawing digitally 
                    for around 7 years, and I've wanted to open my own online store for forever... and it's finally here!
                    Recently, I attended GGWP, a local convention, to sell a bunch of things there. This online 
                    store is currently a place to pick up leftover products from that, and in future I will be adding new products and designs!
                </p>
                <p>
                    Thank you for your support!
                </p>
            </div>
        </div>
    </div>
@endsection