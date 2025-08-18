{{--<div id="modal-notifications">--}}
{{--    <div class="modal-notifications--content">--}}
{{--        <p class="modal-title">Уважаемый Пользователь!</p>--}}
{{--        <button class="close" title="Закрыть"></button>--}}
{{--        <div class="modal-line"></div>--}}
{{--        <p class="modal-description">Хотим оповестить вас, что для всех клиентов ПО Umag c «17» октября 2022 года действует тариф "Единый", где стоимость лицензионного вознаграждения за право использования Программы  будет составлять:--}}
{{--            <br/>- Стоимость 1-ой торговой точки – <b>4 000 тг / месяц</b>--}}
{{--            <br/>- Стоимость 1-го сотрудника – <b>1 500 тг / месяц</b>--}}
{{--            <br/>- Стоимость 1-ой кассы – <b>2 000 тг / месяц</b>--}}
{{--        </p>--}}
{{--        <a href="/ceny" class="modal-btn">Перейти к подписке</a>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function(){--}}
{{--        const modalId = document.getElementById("modal-notifications");--}}
{{--        const modalBtn = document.querySelector('.modal-btn');--}}
{{--        const modalClose = document.querySelector(".close");--}}
{{--        $(modalClose).on("click", function() {--}}
{{--            localStorage.setItem("notifications", 'viewed');--}}
{{--            $(modalId).css('display' , 'none');--}}
{{--        })--}}
{{--        $(modalBtn).on("click", function() {--}}
{{--            localStorage.setItem("notifications", 'viewed');--}}
{{--            $(modalId).css('display' , 'none');--}}
{{--        })--}}


{{--        // const newsitem = document.querySelector(".news-item");--}}
{{--        // const newsicon = document.querySelector(".news-icon");--}}
{{--        // $(newsitem).on("click", function() {--}}
{{--        //    localStorage.setItem("news", 'noactive');--}}
{{--        //    $(newsicon).css('display' , 'none');--}}
{{--        // })--}}
{{--    })--}}

{{--    $( window ).on( "load", function() {--}}
{{--        const modalId = document.getElementById('modal-notifications');--}}
{{--        if (localStorage.getItem("notifications") === 'viewed'){--}}
{{--            $(modalId).css('display' , 'none');--}}
{{--        } else if(localStorage.getItem("notifications") === 'not viewed' || localStorage.getItem('key') === null){--}}
{{--            setTimeout(function() {--}}
{{--                $(modalId).css('display' , 'block');--}}
{{--            }, 12000);--}}
{{--        }--}}
{{--    })--}}
{{--    // $( window ).on( "load", function() {--}}
{{--    //     const newsicon = document.querySelector(".news-icon");--}}
{{--    //     if (localStorage.getItem("news") === 'noactive'){--}}
{{--    //         $(newsicon).css('display' , 'none');--}}
{{--    //     } elseabylaykelesov if(localStorage.getItem("news") === 'active' || localStorage.getItem('key') === null){--}}
{{--    //         setTimeout(function() {--}}
{{--    //             $(newsicon).css('display' , 'block');--}}
{{--    //         }, 2000);--}}
{{--    //     }--}}
{{--    // })--}}
{{--</script>--}}
{{--    <div id="pupup">--}}
{{--        <div id="pupup_close"></div>--}}
{{--        <a href="/ceny">--}}
{{--            <img class="pupup_img" src="/img/popup.png" title="" alt="">--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <script>--}}
{{--        $(document).ready(function(){--}}
{{--            function pupup_ef(){--}}
{{--                $("#pupup").animate({bottom:"20px"},2000);--}}
{{--                $("#pupup").show("pupup",{},1000);--}}
{{--            }--}}
{{--            function effect(el) {--}}
{{--                setTimeout(function () {--}}
{{--                    el.animate({bottom: "+=40"}, 200);--}}
{{--                    el.animate({bottom: "-=40"}, 100);--}}
{{--                    el.animate({bottom: "+=30"}, 150);--}}
{{--                    el.animate({bottom: "-=30"}, 80);--}}
{{--                    el.animate({bottom: "+=20"}, 100);--}}
{{--                    el.animate({bottom: "-=20"}, 80);--}}
{{--                }, 8000);--}}
{{--            }--}}

{{--            setTimeout(pupup_ef, 1000);--}}
{{--            effect($("#pupup"));--}}

{{--            //var ml = $("#fb").width() / 2 - 35;--}}
{{--            //$("#bounce_close").css({"margin-left": ml + "px"});--}}
{{--            $("#pupup_close").click(function() {--}}
{{--                $("#pupup").animate({bottom: "-=520"}, 500);--}}
{{--            })--}}
{{--        });--}}
{{--    </script>--}}