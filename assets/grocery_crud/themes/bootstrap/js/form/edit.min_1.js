$(function(){var a=!1;$("#save-and-go-back-button").click(function(){a=!0,$("#crudForm").trigger("submit")}),$("#crudForm").submit(function(){var b=$(this);return $(this).ajaxSubmit({url:validation_url,dataType:"json",cache:"false",beforeSend:function(){$("#FormLoading").show()},success:function(c){$("#FormLoading").hide(),c.success?$("#crudForm").ajaxSubmit({dataType:"text",cache:"false",beforeSend:function(){$("#FormLoading").show()},success:function(d){if($("#FormLoading").fadeOut("slow"),c=$.parseJSON(d),c.success){var e=b.closest(".flexigrid").attr("data-unique-hash");if($(".flexigrid[data-unique-hash="+e+"]").find(".ajax_refresh_and_loading").trigger("click"),a)return 0===$("#save-and-go-back-button").closest(".ui-dialog").length?window.location=c.success_list_url:($(".ui-dialog-content").dialog("close"),success_message(c.success_message)),!0;form_success_message(c.success_message)}else form_error_message(message_update_error)},error:function(){form_error_message(message_update_error)}}):($(".has-error").removeClass("has-error"),$("#report-error").slideUp("fast"),$("#report-error").html(c.error_message),$.each(c.error_fields,function(a){$("input[name="+a+"]").closest(".form-group").addClass("has-error")}),$("#report-error").slideDown("normal"),$("#report-success").slideUp("fast").html(""))},error:function(){alert(message_update_error),$("#FormLoading").hide()}}),!1}),0===$("#cancel-button").closest(".ui-dialog").length&&$("#cancel-button").click(function(){return window.location=list_url,!1})});