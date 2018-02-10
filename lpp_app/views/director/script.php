<script src="<?=RES_URL ?>js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="<?=RES_URL ?>js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="<?=RES_URL ?>js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script src="<?=RES_URL ?>js/jquery.js"></script>
<script>
$(document).ready(function(){
	loadTermData();
    function loadTermData(){
		alert("loadData form");
		$.ajax(
		{
			url : "../dashboard/viewTerm",
			type: "POST",
			success:function(data)
			{	data = $.parseJSON(data);
				var html = "";
				for (var i = 0; i < data.length; i++) {
					html= html+"<tr><td>"+data[i].id+"</td><td>"+data[i].school+"</td><td>"+data[i].start_dt+"</td><td>"+data[i].end_dt+"</td><td><button class='btnTermEdit' id= "+data[i].id+"> Edit</button></td><td><button class='btnTermDelete' id= "+data[i].id+"><i class='fa fa-trash'> Delete</i></button></td></tr>";
				}
				$("#termDetails").html(html);
			}
		});
	}
    $("#termSubmit").click(function(e)
		{ var btnValue = $("#termSubmit").val;
			if(btnValue=='Add'){
			var MyForm = $("#termForm").serialize();
			//alert("from termSubmit "+MyForm);
			console.log(MyForm);
			$.ajax(
			{
				url : "../dashboard/addTerm",
				type: "POST",
				data : MyForm,
				success:function(maindta)
				{
					alert(maindta);
					loadTermData();
					$(':input','#termForm')
					.not(':button, :submit, :reset, :hidden')
					.val('')
					.removeAttr('checked')
					.removeAttr('selected');
				}
			});}else{
				var MyForm = $("#termForm").serialize();
			//alert("from termSubmit "+MyForm);
			console.log(MyForm);
			$.ajax(
			{
				url : "../dashboard/updateTerm",
				type: "POST",
				data : MyForm,
				success:function(maindta)
				{
					alert(maindta);
					loadTermData();
					$(':input','#termForm')
					.not(':button, :submit, :reset, :hidden')
					.val('')
					.removeAttr('checked')
					.removeAttr('selected');
				}
			});
			}

			e.preventDefault(); //STOP default action
			
		});
		$(document).on('click',".btnTermEdit",function(){
			var id = $this.attr('id');
			$.ajax(
				{
					data:"id"=id
					type: "POST",
					url : "../dashboard/editTerm,
					success:function(data)
					{	data = $.parseJSON(data);
						var html = "";
						for (var i = 0; i < data.length; i++) {
							$('termID').value(data[i].id);
							$('school').value(data[i].school);
							$('start_dt').value(data[i].start_dt);
							$('end_dt').value(data[i].end_dt);
						}
						$("#templateDetails").html(html);
					}	
				});
			alert('btnEditTerm clicked'+$this.attr('id'));
		});
		$(document).on('click',".btnTermDelete",function(){
			alert("Do you want to delete this term");
		//	alert('btnDeleteTerm clicked'+ $this.attr('id'));
		var id = $this.attr('id');
			$.ajax(
				{
					data:"id"=id
					type: "POST",
					url : "../dashboard/deleteTerm,
					success:function(data)
					{	alert(data);
					}	
				});
		});
		loadTemplateData();
    function loadTemplateData(){
		alert("loadData form");
		$.ajax(
		{
			url : "../dashboard/viewTemplate",
			type: "POST",
			success:function(data)
			{	data = $.parseJSON(data);
				var html = "";
				for (var i = 0; i < data.length; i++) {
					html= html+"<tr><td>"+data[i].template_name+"</td><td>"+data[i].school+"</td><td><button class='btnEdit' id= "+data[i].temp_id+"> Edit</button></td><td><button class='btnDelete' id= "+data[i].temp_id+"><i class='fa fa-trash'> Delete</i></button></td></tr>";
				}
				$("#templateDetails").html(html);
			}	
		});
	}
	$("#templateSubmit").click(function(e){
			
			var MyForm = $("#templateForm").serialize();
			alert("from termSubmit "+MyForm);
			console.log(MyForm);
			$.ajax(
			{
				url : "../dashboard/addTemplate",
				type: "POST",
				data : MyForm,
				success:function(maindta)
				{
					alert(maindta);
					loadTemplateData();
					$(':input','#templateForm')
					.not(':button, :submit, :reset, :hidden')
					.val('')
					.removeAttr('checked')
					.removeAttr('selected');
				}
			});
			e.preventDefault(); //STOP default action
			
	});
});
</script>