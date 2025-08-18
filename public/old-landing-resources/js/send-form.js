function addEventListenerForm(form) {
    form.on("submit", function (e) {
        var $form = $(this);
        var serializedData = $form.serialize();

        $form.find("[type='submit']").attr("disabled", true);

        request = $.ajax({
            url: '/landing-rest/v1/api/mainPage' + $form.attr('action'),
            headers: {'Content-type': 'application/x-www-form-urlencoded'},
            type: "post",
            data: serializedData
        });

        request.done(function (response, textStatus, jqXHR){
            console.log(response);
            $form[0].reset();
            $form.find(".message-error").hide();
            $form.find(".message-info").show();
        });

        request.fail(function (jqXHR, textStatus, errorThrown){
            $form.find(".message-error").show();
            $form.find(".message-info").hide();
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
            );
        });

        request.always(function () {
            $form.find("[type='submit']").removeAttr("disabled");
        });

        return false;
    });
}