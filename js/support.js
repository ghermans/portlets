			var byColumns = "";
			$(function() {
				$(".column").sortable({
					connectWith : ".column"
				});
				$(".portlet-header .ui-icon").click(function() {
					$(this).toggleClass("ui-icon-minusthick").toggleClass("ui-icon-plusthick");
					$(this).parents(".portlet:first").find(".portlet-content").toggle();
					var sign = $(this).hasClass("ui-icon-plusthick") ? "plus" : "minus";
					var portlet_id = $(this).parent().parent().attr('id');
					$('#colholder').addClass('opacityinact');
					$('#balert').show();
					$.get("ajax.php"+'?sendSigns=yes&portlet_id='+portlet_id+'&sign='+sign, function(data){
					     $('#so').html(data);
					     $('#colholder').removeClass('opacityinact');
					     $('#balert').hide();
					} );
				});
				$(".column").disableSelection();
				$(".column").on("sortstop", function(event, ui) {
					var i = 0;
					$("#left > div").each(function() {
						byColumns += '&left[' + i + ']=' + $(this).attr('id');
						i++;
					});
					i = 0;
					$("#middle > div").each(function() {
						byColumns += '&middle[' + i + ']=' + $(this).attr('id');
						i++;
					});
					i = 0;
					$("#right > div").each(function() {
						byColumns += '&right[' + i + ']=' + $(this).attr('id');
						i++;
					});
					byColumns = '?sendColumns=yes' + byColumns;
					$('#colholder').addClass('opacityinact');
					$('#balert').show();
					$.get("ajax.php"+byColumns, function(data){
							$('#so').text(data);
							$('#colholder').removeClass('opacityinact');
							$('#balert').hide();
						} );
					byColumns = "";
				});
			});