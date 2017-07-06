jQuery(document).ready(function($) {
  console.log("I am ready");
  $('.next').click(function() {
    // var data = {
    //   'action': 'mpbs_verschenkt',
    //   'wunsch-nr': $(this).attr("data-id")
    //};
    jQuery.ajax({
      type:'POST',
      url: ajaxurl,
      data: {
        action: 'ajaxConversion',
        amount: $(this).attr('data-id')
      },
      success:function(data){
        console.log(data);
      },
      error: function(errorThrown){
        alert(errorThrown);
      }

    });

    // jQuery.post(ajaxurl, data, function(response) {
    //   if (response['status']) {
    //     $(location).attr('href', response['zielurl']);
    //   }
    // }, 'json');
  });
});
