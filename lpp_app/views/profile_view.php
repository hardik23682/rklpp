<style>
		.faculty-name{
			font-size: 30px;
		}
		.faculty-desi{
			margin-top:10px;
			margin-left: 5px;
			font-size: 18px;
			color: gray
		}
	</style>
<div class="container mt-5">
	<div class="date mb-3">
		<span class="flaticon-notebook icon"></span> &nbsp; <?echo date("d/m/Y");?>
	</div>
	<div class="card">
		<div class="card-header">
			<h2>Profile</h2>
		</div>
		<div class="card-block p-5">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<img src="<?= RES_URL ?>images/profile.png" class="img img-responsive" />		
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="faculty-name">
						Sweta Patel
					</div>
					<div class="faculty-desi">
						School of Engineering
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>