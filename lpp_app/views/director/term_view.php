<?php $page_name = 'director'; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="card animated">
                <div class="card-title">Term </div>
                <div class="card-block">
                    <form method="post" action="" class="form-inline" id="termForm">
                        <div class="form-group" class="col-xs-4">
                            <label for="school">School</label>
                            <!-- <input type="text" class="form-control" name="school" placeholder="Enter School" value=""> -->
                            <select class="form-control" id="school" name="school">
                                <option>SOE</option>
                                <option>SOM</option>
                                <option>SOS</option>
                                <option>SDS</option>
                            </select> 
                        </div>
						<div class="form-group"  class="col-xs-4">
                            <label for="start_dt">Start Date</label>
                            <input type="date" class="form-control" name="start_dt" placeholder="Enter Start date" id='start_dt' value="">
                            <?php //echo form_error('start_dt','<p class="help-block text-danger">','</p>'); ?>
                        </div>
						<div class="form-group"  class="col-xs-4">
                            <label for="end_dt">End Date</label>
                            <input type="date" class="form-control" name="end_dt" placeholder="Enter End date" id='end_dt' value="">
                            <?php //echo form_error('end_dt','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                         
                        <input type="button" name="termSubmit" class="btn btn-primary" id='termSubmit' value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default ">
                <div class="panel-heading">Terms </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">id</th>
                            <th width="30%">School</th>
                            <th width="25%">Start Date</th>
                            <th width="25%">End Date</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="termDetails">
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('director/script');  ?>
