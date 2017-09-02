<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
		    padding: 5px;
		}

		label {
		    font-weight: bold;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(".remove").hide();
		var template = $('#line_1').clone();

		$('#cloneButton').click(function() {
		  var rowId = $('.row').length + 1;
		  var klon = template.clone();
		  klon.attr('id', 'line_' + rowId)
		    .insertAfter($('.row').last())
		    .find('option')
		    .each(function() {
		      $(this).attr('id', $(this).attr('id').replace(/_(\d*)$/, "_" + rowId));
		    })
		    klon.find(".remove").show();
		});

		$(document).on("click", ".remove", function(e) {
		e.stopPropagation();
		  $(this).closest(".row").remove();
		});
	</script>



</head>
<body>
<div class="row" id="line_1">
  <div class="form-group col-md-2">
    <label class="control-label">State</label>
    <select class="form-control">
      <option id="Select_1">Select State</option>
      <option id="Selangor_1">Selangor</option>
    </select>
  </div>
  <input type="button" class="remove" value="remove"  />
</div>

<a id="cloneButton" class="btn btn-primary">Add State</a>

</body>
</html>