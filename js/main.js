// JavaScript Document
jQuery(document).ready(function(){
        // dropdown
        jQuery('.nav').addClass('navbar-nav dropdown');
        jQuery('.parent > a').addClass('dropdown-toggle').attr('data-toggle', 'dropdown').append('<span class="caret"></span>');
        jQuery('.parent > ul').addClass('dropdown-menu');
    });
