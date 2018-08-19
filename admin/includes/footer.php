	<div style="height: 200px;" class="content"></div>
 	<script src="../js/stickynav.js"></script>
 	<script src="../js/bs.js"></script> 
 	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123213678-1"></script>
	<script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>
	<script src="../js/analysis.js"></script>
	<script src="../js/medium-editor.js"></script>

	<script>var editor = new MediumEditor('.editable');</script>

	<script>
		var elements = document.querySelectorAll('.editable'),
    	editor = new MediumEditor(elements);
	</script>

		<script>
	$(document).ready(function(){
	  $("#myInput").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#myDIV *").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});
	</script>
</div>
</body>
</html>