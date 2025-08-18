@extends('layouts.shop')
@section('topheader')
    <div class="top-header-container">
        <div class="top-header-content">
            <div class="container sides-padding-40">
                <div class="header-content-left">
                    <div class="header-content-left-top">
                        <div class="title" id="title">Асбобҳои пурқувват барои идоракунии <br>мағозаи <span class="dropdown" id="dropdown">маҳсулотии </span>Шумо</div>
                    </div>
                    <div>
                        <div class="sticky-request-btn-wrap">
                            <a href="/request-form" class="sticky-request-btn" data-sticky-btn>Оғоз кунед ройгон</a>
                        </div>
                    </div>
                </div>
                <div class="header-content-right">
                    <div class="play-button"></div>
                    <div class="header-content-right-bar">
                        <div class="quote-text">Пеш UMAG мо бо ҳисобкунак кор мекардем <br>ва ин дар ҳама ҷиҳатҳо нороҳат буд</div>
                        <div class="quote-author">— Айгул Идиришова<br><span>Мағозаи “Султан” ш. Алмато</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.play-button').on('click', function() {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [{"src": 'https://www.youtube.com/watch?v=S9bEN6fDQwk'}]
            })
        });
    </script>
@endsection