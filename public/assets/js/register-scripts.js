$(document).ready(function(){

    /*
    *
    *   Set General variables
    *
    * */


    var providerRegisterLogo = "";
    var baseUrl = $('meta[name="base-url"]').attr('content');

    /*
     *
     *   Chose provider logo image
     *
     *
     */

    $("#restaurant-logo").on('change', function(event){
        providerRegisterLogo = event.target.files;
        readURL(this, function (e) {
            displayProviderLogo(e);
        });
    });




    // upload image function
    function  readURL(input, handler) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var data = e.target.result;
                var check = data.substr(0, data.indexOf(';')).slice(5).split("/");
                if(check[0] != "image") return false;
                handler(e);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    // Display Provider logo function after upload from device
    function displayProviderLogo(e){

        $(".provider-uploaded-logo").attr('src', e.target.result);
        $("#provider-logo-content").addClass("d-none");
        $(".provider-uploaded-logo").removeClass("d-none");
    }

    function getFormData($form){
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};

        $.map(unindexed_array, function(n, i){
            indexed_array[n['name']] = n['value'];
        });

        return indexed_array;
    }


    /*
    *
    *
    * *********************
    * *******************
    *   Profile page
    * *******************
    * *********************
    * */
    var editLogo = "";
    $(".edit-logo-file").on("change", function (event) {
        editLogo = event.target.files;
        readURL(this, function (e) {
            $("#edit-logo-image").attr('src', e.target.result);
            $("#edit-logo-btn").removeClass("hidden-element");
        });
    });

    $("#edit-logo-btn").on("click", function () {
        var url = $(this).attr("data-action");

        var imageData = new FormData();
        $.each(editLogo, function(k,v){
            imageData.append("image", v);
        });

        request(url, "POST", imageData, function(){}, function (data) {
            // success
            if(data.status == true){
                $("#edit-logo-btn").addClass("hidden-element");
                notif({
                    msg: "تم تعديل الصورة بنجاح",
                    type: "success"
                });
            }

        }, function (error) {
            // error
        })
    });


    // Request Function
    function request(url,type,data,beforeSend,success,error){
        $.ajax({
            url: url,
            type:type,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:data,
            processData: false,
            contentType: false,
            beforeSend: beforeSend,
            success: success,
            error:error
        });
    }


    /*
   *
   *   Submit provider register form
   *
   * */

    $("#provider-register-form").on("submit", function(e){

        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'http://localhost:8080/providers/register',
        });

        if(providerRegisterLogo.length == 0){
            $(".logo-error").removeClass("d-none");
            scroll("provider-logo-error");
            return false;
        }else{
            $(".logo-error").addClass("d-none");
        }



        var data = getFormData($(this));

        var formData = new FormData();

        var unindexed_array = $(this).serializeArray();
        var indexed_array = {};


        function getFormData($form){
            var unindexed_array = $form.serializeArray();
            var indexed_array = {};

            $.map(unindexed_array, function(n, i){
                indexed_array[n['name']] = n['value'];
            });

            return indexed_array;
        }

        var url = $(this).attr("data-action");

        $.each(providerRegisterLogo, function(k,v){
            formData.append("image", v);
        });

        request(url,
            "POST",
            formData,
            function () {
            },
            function (data) {
                if (data.status == false) {


                } else {
                    // return redirect the provider to phone activate
                    window.location.href = baseUrl + "/providers/activate-phone";

                }
                console.log(data);
            },
            function (reject) {
                var errors = $.parseJSON(reject.responseText);
                $.each(errors, function (key, val) {
                    $("#" + key + "_error").text(val[0]);
                });

            });

    });

});
