// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
});

$('.popup').live('click', function(){
    
    if($("div").is("#login_ajax_form")){
     
        $( ".navbar-fixed-top" ).animate({ height: "110px" }, 500, function() {
           
           $( "#login_ajax_form" ).remove();
          });
    }else{
         var request = $.ajax({
          url: '/index.php/Portfolio/Login',
          type: "POST",
          dataType: "html",
          cache: false
        });
        request.done(function( msg ) {
          $( ".navbar-fixed-top" ).animate({ height: "100%" }, 500, function() {
          $( ".navbar-fixed-top" ).append(msg);
          console.log(msg);
          });
        });
        request.fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
    }
    
       
});

    $('#login-form').live("submit", function(e) { 
       
        var str = $("#login-form").serialize() + "&ajax=login-form";
 
                    $.ajax({
                        type: "POST",
                        url: "/index.php/site/Login",
                        data: str,
                        dataType: "json",
                        beforeSend : function() {
                            $("#login").attr("disabled",true);
                        },
                        success: function(data, status) {

                            if(data.authenticated) {   
                                window.location = data.redirectUrl;
                            }else{
                                $.each(data, function(key, value) {
                                    var div = "#"+key+"_em_";
                                    $(div).text(value);
                                    $(div).show();
                                });
                                $("#login").attr("disabled",false);
                            }
                        },
                    });
                    e.preventDefault();
    
    });
    
    
    $('.show-ajax').live("click", function() { 
        
       id = $(this).attr('id');
      
       $.ajax({
                        type: "POST",
                        url: "/index.php/Portfolio/GetField",
                        data: {param:id},
                        dataType: "json",
                       
                        success: function(data) {

                        $('#'+id).attr('href','mailto:'+data.result).html(data.result);
                        
                        },
                    });
                             
    });
   