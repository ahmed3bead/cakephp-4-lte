$(document).ready(function() {
    "use strict";
    ////////////////////// Selectboxs  //////////////////////
    var type;
    if ($('#flashMessage').length) {


        if ($('#flashMessage').hasClass('success')) {
            type = "success";
        } else if ($('#flashMessage').hasClass('error')) {
            type = "error";
        } else if ($('#flashMessage').hasClass('info')) {
            type = "info";
        }

        notification(type, $('#flashMessage').html());
        $('#flashMessage').remove();


    }


    
});

function notification(type, text) {
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.options.closeHtml = '<button><i class="icon-off"></i></button>';
    $icon = '';
    if (type == 'success') {
        $icon = '<i class="fa fa-check"></i> ';
        toastr.success(text)
    } else if (type == 'error') {
        $icon = '<i class="fa fa-close"></i> ';
        toastr.error(text)
    } else if (type == 'info') {
        toastr.info(text)
    } else {
        toastr.warning(text)
    }
}

function isEmpty(str) {
        return (!str || 0 === str.length);
    }



