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
			$('#display').html(response).delay(8000).fadeOut(4000);
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

$(function() {
	"use strict";
	$('form#ajax22').on('submit', function() {
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
            location.reload();
          }
	  });
	return false;
  });
});

for (var i = 0; i < document.links.length; i++) { /*this highlights the current active link*/
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'current';
    }
}

//from shivabeach. initialize dialog, loggy is the clicker
 $(function () {
    $('#dialog').dialog({
        autoOpen: false,
        modal: true,
        width: 600,
        height: 600,
        show: { effect: "blind", duration: 800 }
    });
});
$(function () {
    "use strict";
    $('#open').on('click', function () {
        $("#dialog").dialog('open');
    });
});

$(function() {
    $("#date").datepicker({ dateFormat: 'yy-mm-dd' });
});
$(function() {
    $("#last_date").datepicker({ dateFormat: 'yy-mm-dd' });
});

