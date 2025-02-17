﻿'use strict';

/* Add here all your JS customizations */
function openUploaderModal(field) {
    var rand = Math.random().toString(36).substring(7);
    $(field).attr('id',rand);
    $('#uploader-modal iframe').attr('src','/laravel-filemanager');
    $('#uploader-modal').modal('show');


}

/*$(document).ready(function () {
    $('.click-for-upload').click(function () {
        var target = $(this).prev();
        openUploaderModal(target);
    })
});*/


$('#ImageModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var recipient = button.data('whatever');
    var inputUrl = $('input[name='+recipient+']').val();
    $(this).find('img').attr('src',inputUrl);
})

$('#VideoModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var recipient = button.data('whatever');
    var inputUrl = $('input[name='+recipient+']').val();
    $(this).find('video source').attr('src',inputUrl);
    $($(this).find('video')).load();
})

$(function(){
    var hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');

    $('.nav-tabs a').click(function (e) {
        $(this).tab('show');
        var scrollmem = $('body').scrollTop() || $('html').scrollTop();
        window.location.hash = this.hash;
        $('html,body').scrollTop(scrollmem);
    });
});


$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

$('#confirm-withdraw').on('show.bs.modal', function(e) {
    $(this).find('#withdraw-form').attr('action', $(e.relatedTarget).data('href'));
});

$(document).ready(function() {
    CKEDITOR.config.language = 'fa';
    CKEDITOR.config.filebrowserBrowseUrl = '/laravel-filemanager?type=Files',
    CKEDITOR.config.filebrowserUploadUrl = '/laravel-filemanager/upload?type=Images&_token=',
    CKEDITOR.config.filebrowserImageBrowseUrl = '/laravel-filemanager?type=Images',
    CKEDITOR.config.filebrowserUploadUrl = '/laravel-filemanager/upload?type=Files&_token='
    CKEDITOR.replaceClass = 'ckeditor';
});

jQuery(function($) {
    if(typeof autoNumeric == 'function') {
        $('.currency').autoNumeric('init', {pSign: ' تومان '});
    }
});

jQuery(function($) {
    $('.numtostr').keyup(function () {
        $(this).next('span').text(convertNumberToString($(this).val().split(",").join("")) + ' $ ');
        console.log($(this).val().split(",").join(""));
    })
});




