$(function() {
	"use strict";
	$('form#ajax').on('submit', function() {
		var that = $(this),
			url  = that.attr('action'),
			type = that.attr('method'),
			data = {};
		that.find('[name]').each(function(index, value) {
			var that   = $(this),
				name   = that.attr('name'),
				value  = that.val();
			data[name] = value;
		});
	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response) {
			$('#display').html(response).delay(8000).fadeOut(1000);
		}
	  });
	return false;
  });
});

$(function() {
     "use strict";
     $('A[rel="external"]')
         .click(function() {
             window.open($(this).attr('href'),
                 rel = "noopener noreferrer");
             return false;
             var newWnd = window.open();
             newWnd.opener = null;
        });
 	});
