<div class="mb-5">
	<span class="tkFolio" name="TK01"><button type="button" class="btn btn-light mt-3 mr-2 tk-txt-4">All</button></span>
	<span class="tkFolio" name="TK02"><button type="button" class="btn btn-light mt-3 mr-2 tk-txt-4">Print</button></span>
	<span class="tkFolio" name="TK03"><button type="button" class="btn btn-light mt-3 mr-2 tk-txt-4">E-Commerce</button></span>
	<span class="tkFolio" name="TK04"><button type="button" class="btn btn-light mt-3 mr-2 tk-txt-4">Art</button></span>
</div>
<div id="tkFolio-show" style="border:1px solid #000;">coming soon</div>
	

<br>
<script type="text/javascript">
	$(".tkFolio").click(function () {
		var folioName = $(this).attr("name");
		$.post('portfolio_show.php', {folioName:folioName},
		function(data) {	
			$('#tkFolio-show').html(data);
		});
	});
</script>

