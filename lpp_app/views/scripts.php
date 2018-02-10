<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?=RES_URL ?>js/jquery-3.2.1.slim.min.js"></script>
		<script src="<?=RES_URL ?>js/popper.min.js"></script>
		<script src="<?=RES_URL ?>js/bootstrap.min.js"></script>
		<script src="<?=RES_URL ?>js/jquery.js"></script>
<script>
	let count = 1;

	let form1 = "Planbook name";
	let form2 = "Class name";
	let form3 = "Select Week Day";
	let form4 = "Select template";
	$(document).ready(function(){
		$('.card').addClass('lightSpeedIn');
		$('#form2').hide();
		$('#form3').hide();
		$('#form4').hide();
		$('#planbookname').focus();
		$('#next').click(function(event) {
			/* Act on the event */
			
			$('#form'+count).hide();
			$('#form'+(++count)).fadeIn();
			if(count == 4)
			{
				$(this).hide();
			}
			if(count == 1 )
			{
				$('.card-title').html(form1);
				$('#planbookname').focus();
			}
			if(count == 2 )
			{
				$('.card-title').html(form2);
				$('#classname').focus();
			}
			if(count == 3 )
			{
				$('.card-title').html(form3);
			}
			if(count == 4 )
			{
				$('.card-title').html(form4);
			}
		});

		$('#chkday').click(function(event) {
			if($(this).is(':checked'))
			{
				$(this).parent().parent().css({
					opacity: '1',
					
					
				});
			}
			else{
				$(this).parent().parent().css({
					opacity: '0.4'
					
				});
			}
		});
	});
</script>