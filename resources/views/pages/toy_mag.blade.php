@extends('layouts.shop_new')
@section('topheader')
    <div class="top-header-container">
        <div class="top-wrap">
            <div class="top-left">
                <h3 class="informer-title">umag барои мағозаи бозичаҳо</h3>
                <h1 class="full-text">асбобҳоро гиред <br/> барои ҳисоби осон ва қулайи </br> мол ва фурӯшҳо </h1>
                <a href="/request-form" class="green-request">озмоиш ройгон</a>
            </div>
            <div class="top-right">
                <img src="/img/home-page/business-type_6_hover.svg" alt="графикаи барномаи umag">
                <style>
                    li.for-active.for-active-6{background: #e4e4e4}
                    @media(min-width: 767px){.top-right img {width: auto; height: 31rem; margin-top: 40px; margin-bottom: 35px }.top-right {justify-content: center}}
                    @media(max-width: 767px){.top-right img {height: 31rem!important; margin-top: 25px; margin-bottom:0px; position: relative}}
                </style>
            </div>
        </div>
        <div class="bottom-wrap">
            <div class="col__one">
                <h4 class="col-title">дар ҳар куҷо бошед</h4>
                <p>бо umag шумо метавонед бизнеси худро аз ҳар нуқтаи ҷаҳон тавассути интернет назорат кунед</p>
                <span class="play_col first-vid" data-video="Ibn2xm_am08"> <i class="play_button"></i> бинед, ки чӣ гуна кор мекунад</span>
            </div>      
            <div class="col__two">
                <h4 class="col-title">аз дуздӣ халос шавед</h4>
                <p>барномаи мо ба шумо кӯмак мекунад, ки дуздиро ошкор кунед ва хароҷотҳоро дар мағозаи худ кам кунед</p>
                <span class="play_col second-vid" data-video="hJpx8FOSChE"> <i class="play_button"></i> бинед, ки чӣ гуна кор мекунад</span>
            </div>      
            <div class="col__three">
                <h4 class="col-title">дар бораи захираҳои мағоза хавотир нашавед</h4>
                <p>молро дар анбор тавассути барномаи мо пайгирӣ кунед </p>
                <span class="play_col third-vid" data-video="USLcEnA89iE"> <i class="play_button"></i> бинед, ки чӣ гуна кор мекунад</span>
            </div>      
        </div>
    </div>
    @endsection
@endsection
@section('iframe')
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/gsL6_imqk30" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection