@extends('layouts.app')
@section('content')
<link rel=stylesheet href="lib/codemirror.css">
<script src="lib/codemirror.js"></script>
<script src="mode/xml/xml.js"></script>
<script src="mode/javascript/javascript.js"></script>
<script src="mode/css/css.js"></script>
<script src="mode/htmlmixed/htmlmixed.js"></script>
<script src="addon/edit/matchbrackets.js"></script>
<script src="addon/display/fullscreen.js"></script>
<script src="lib/emmet.js"></script>
<link rel="stylesheet" href="addon/display/fullscreen.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Саҳифаи илова кардани мол</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form id="addItem" action="">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Номи мол</label>
                            <input value="" name="eq_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Номи молро ворид кунед">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Нарх</label>
                            <input value="" name="eq_price" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Нархро ворид кунед">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">Тахфиф агар бошад</label>
                            <input value="" name="eq_sale" type="text`" class="form-control" id="exampleFormControlInput3" placeholder="Номи молро ворид кунед">
                            <small id="emailHelp" class="form-text text-muted">Агар тахфиф надорад, ин майдонро холӣ гузоред</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput4">url-и моли оянда</label>
                            <input value="" name="eq_url" type="text" class="form-control" id="exampleFormControlInput4" placeholder="url-ро ворид кунед">
                            <small id="emailHelp" class="form-text text-muted">Барои моли худ url фикр кунед</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput5">Шарҳи видео</label>
                            <input value="" name="eq_video" type="text" class="form-control" id="exampleFormControlInput5" placeholder="id-и видеоро ворид кунед">
                            <small id="emailHelp" class="form-text text-muted">ID-и видео дар youtube</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput6">Префикси тасвир</label>
                            <input value="" name="eq_image" type="text" class="form-control" id="exampleFormControlInput6" placeholder="Номи тасвир">
                            <small id="emailHelp" class="form-text text-muted">ID-и видео дар youtube</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea2">Тавсифи мол</label>
                            <textarea value="" name="eq_descript" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Категорияи молро интихоб кунед</label>
                                <select name="eq_category" class="form-control" id="exampleFormControlSelect1">
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->type}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Ҳарфҳои русиро нигоҳ доред</label>
                            <select name="eq_rgx" class="form-control" id="exampleFormControlSelect2">
                                <option value="no">Бале</option>
                                <option value="">Не</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Хусусиятҳои техникӣ</label>
                            <textarea value="" id="html" name="eq_html" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Илова кардан</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("html"), {
      lineNumbers: true,
      mode: "text/html",
      matchBrackets: true,
      extraKeys: {
        "F11": function(cm) {
          cm.setOption("fullScreen", !cm.getOption("fullScreen"));
        },
        "Esc": function(cm) {
          if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
        }
      }
    });
    $('#exampleFormControlInput2, #exampleFormControlInput3').keyup(function(){
        var lol = $(this).val().replace(/\s/g, "");
        $(this).val(  numberWithSpaces(lol)  );
    });
    function numberWithSpaces(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        return parts.join(".");
    }
    emmetCodeMirror(editor);
        $("#addItem").on("submit", function(e){
            e.preventDefault();
            let $form = $(this);
            let serializedData = $form.serialize();
            let request = $.ajax({
                url: '/ckjmopcpokqckxskpxskpxzksaxmsaplkkxsaskaopxaspokxpaslkxplsakxaskxalxksaxkosajxko',
                type: "post",
                data: serializedData
            });

            request.done(function (response, textStatus, jqXHR){
                console.log(response);
            });

            request.fail(function (jqXHR, textStatus, errorThrown){
                $form.find("[data-error-message]").show();
                console.error(
                    "The following error occurred: "+
                    textStatus, errorThrown
                );
            });
        });
</script>
@endsection
