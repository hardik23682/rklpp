<?php $page_name = 'director'; ?>
<div class="container">
<div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Template</div>
                <div class="panel-body">
                    <form class="form-inline"  name="templateForm" id="templateForm" method="POST"> 
						<input type="hidden" name="tempID" id="tempID"/>
                        <div class="form-group" class="col-xs-5">
                            <label for="tempName">Template Name:</label>
                            <input type="text" class="form-control" id="tempName" placeholder="Enter Name" name="tempName">
                        </div>
						<div class="form-group"  class="col-xs-5">
                            <label for="school">School:</label>
                            <select class="form-control" id="school" name="school">
                                <option>SOE</option>
                                <option>SOM</option>
                                <option>SOS</option>
                                <option>SDS</option>
                            </select>
                        </div>
						<div class="form-group"  class="col-xs-2">
                            <input type="button" name="templateSubmit" class="btn btn-primary" id='templateSubmit' value="Add"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="border_box col-xs-12" >
  	        <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Template Name</th>
                        <th>School</th>
                    </tr>
                </thead>
                <tbody id="templateDetails">
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $this->load->view('director/script');  ?>
