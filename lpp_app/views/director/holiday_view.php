<?php $page_name = 'director'; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-hearder">Holiday</div>
                <div class="card-block">
                    <form method="post" action="" class="form-inline" id="termForm">
                        <div class="form-group" class="col-xs-2">
                            <label for="school">School</label>
                            <!-- <input type="text" class="form-control" name="school" placeholder="Enter School" value=""> -->
                            <select class="form-control" id="school" name="school">
                                <option>SOE</option>
                                <option>SOM</option>
                                <option>SOS</option>
                                <option>SDS</option>
                            </select> 
                        </div>
						<div class="form-group"  class="col-xs-3">
                            <label for="h_name">Name</label>
                            <input type="text" class="form-control" name="h_name" placeholder="Enter Holiday Name" value="" required>
                            
                        </div>
						<div class="form-group"  class="col-xs-3">
                            <label for="h_date">Date</label>
                            <input type="date" class="form-control" name="h_date" placeholder="Enter Holiday date" value="" required>
                            <?php //echo form_error('end_dt','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group" class="col-xs-2">
                            <label for="acc_year">Acedmic Year</label>
                            <!-- <input type="text" class="form-control" name="school" placeholder="Enter School" value=""> -->
                            <select class="form-control" id="acc_year" name="acc_year">
                                <option>2017-2018</option>
                                <option>2018-2019</option>
                                <option>2019-2020</option
                            </select> 
                        </div>
                        <input type="button" name="holidaySubmit" class="btn btn-primary" id='holidaySubmit' value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default ">
                <div class="panel-heading">Holiday Details </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>School</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
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
