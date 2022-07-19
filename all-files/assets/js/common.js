
jQuery(document).ready(function ($) {
    
    $('#delete_user_ns_id').click(function(e){
        
        e.preventDefault();
        var user_id = $(this).attr('user-id');
        
        $.ajax({
                type: "post",
                dataType: "html",
                url: tmwni_common_js.ajax_url,
                data: {action: 'tm_clear_customer_ns_id', user_id : user_id,nonce : tmwni_common_js.nonce,},
                success: function (response) {
                    location.reload();
                }    
                

            });
    });   

	
	var tab = getUrlParameter('tab');
    if(undefined == tab){
        $('.dashboard_tab').addClass('nav-tab-active');
    }else{
     $('.'+tab+'_tab').addClass('nav-tab-active');
     if(tab == 'general_settings' || tab == 'inventory_settings' || tab == 'customer_settings' || tab == 'logs' || tab == 'order_settings' || tab == 'import_export_settings' || tab == 'customer_settings' || tab == 'product_settings'){
        $('.setting_tab').addClass('nav-tab-active');
    } 
}




function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

});