!function($){"use strict";$.fn.close_message=function(opt){return $(this).slideUp(opt.close_duration,function(){if($(this).remove(),opt.close_callback){var callback=$(this).data("close-callback");callback&&eval(callback)}}),$(this)},$.fn.auto_close_message=function(e,s){var a=parseFloat($(this).data("auto-hide"));return a>0&&($(this).attr("auto-hide-id",s),setTimeout(function(){$("[auto-hide-id="+s+"]").close_message(e)},a)),$(this)},$.message_boxes=function(e){(e=$.extend({},{auto_close:!0,close_callback:!0,close_duration:300},e)).auto_close&&$(".message[data-auto-hide]").length&&(setInterval(function(){},300),$(".message[data-auto-hide]").each(function(s){$(this).auto_close_message(e,s)})),$("body, html").on("click",".message-closer",function(){return $(this).parents(".message").close_message(e),!1})};var message_success_closed=function(){alert("Success message box is closed!")},message_error_closed=function(){alert("Error message box is closed!")},message_info_closed=function(){alert("Info message box is closed!")},message_warning_closed=function(){alert("Warning message box is closed!")},message_success_autoclosed=function(){alert("Success message box is closed automatically!")},message_error_autoclosed=function(){alert("Error message box is closed automatically!")},message_info_autoclosed=function(){alert("Info message box is closed automatically!")},message_warning_autoclosed=function(){alert("Warning message box is closed automatically!")}}(jQuery);