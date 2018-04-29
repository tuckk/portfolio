<div class="row pt-4">
	<div class="col-12 col-md-4 text-left text-white tk-txt-4 mb-2">
		<div class="text-center">
			<img src="_template/tk_qrcode.jpg" width="200">
			<div class="mt-2"><i class="fas fa-map-marker-alt"></i> Pathum Thani, Thailand&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div><i class="fas fa-envelope"></i> tuckk.thatsaya@gmail.com</div>
		</div>
	</div>
	<div class="col-12 col-md-8">
		<form>
			<div class="form-group">
				<div><input type="text" class="form-control" placeholder="Name" name="txtName" id="txtName" required oninvalid="this.setCustomValidity('Please Enter valid Name')" oninput="setCustomValidity('')"></div>
				<div class="mt-3">
					<input type="email" class="form-control" placeholder="E-mail" name="txtEmail" id="txtEmail" required oninvalid="this.setCustomValidity('Please Enter valid email')" oninput="setCustomValidity('')">
				</div>
				<div class="mt-3">
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message..." name="txtMessage" required oninvalid="this.setCustomValidity('Please Enter valid messages')" oninput="setCustomValidity('')"></textarea>
				</div>
				<div class="mt-3">
					<button type="submit" class="btn btn-danger btn-block" id="ClickSendMail">Send</button>
				</div>
			</div>
		</form>
	</div>
</div>
<br>
<script type="text/javascript">
	$(document).ready(function() {
		$('#ClickSendMail').click(function(){
			var txtName = $('#txtName').val();
			var txtEmail = $('#txtEmail').val();
			var txtMessage = $.trim($('#exampleFormControlTextarea1').val());
			if (txtEmail != "" && txtEmail != "" && txtMessage != "")
			{
				$.post('mailto.php',{txtName:txtName, txtEmail:txtEmail, txtMessage:txtMessage},
				function(data){
					alert(data);
					if($.trim(data) == 'True'){
						alert('ขอบคุณสำหรับการติดต่อเข้ามาค่ะ.');
						location.reload();
					}else{
						alert('เกิดข้อผิดพลาดในการส่งข้อมูล กรุณาลองใหม่.'); return false;
					}
				});
			}
		});
	});
</script>