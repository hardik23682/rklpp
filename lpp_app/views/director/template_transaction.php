<?php $page_name = 'director'; ?>
<div class="container">
  <div class="template_detail_heading">Template Transaction</div>
  
  <div class="tranction_name">
  		<center>
    	<p><span>Template Name : </span><?php $temp_name; ?></p>
        <p><span>School : </span> R.K. University</p>
        </center>
  </div>
  
  <div class="tranction_components">
    	<p>Template Components</p>
      	<form class="form-horizontal" action="#">
    		<div class="col-sm-5">
            	<div class="form-group">
              <label class="control-label col-sm-3" for="email">Field Type:</label>
              <div class="col-sm-9">
                <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
              </div>
            </div>
            </div>
            
            <div class="col-sm-5">
            	<div class="form-group">
              <label class="control-label col-sm-3" for="email">Field Name:</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="email" placeholder="Enter School" name="email">
              </div>
            </div>
            </div>
    
            <div class="form-group">
                <div class="col-sm-2">
                    <center><button type="submit" class="detail-add-btn">ADD</button></center>
                </div>
            </div>
      </form>
	</div>
  
  <div class="border_box">
  	<table class="table table-striped">
    	<thead>
      <tr>
        <th>No.</th>
        <th>Field Name</th>
        <th>Field Type</th>
        <th>Action</th>
      </tr>
    </thead>
    	<tbody>
      <tr>
        <td>1</td>
        <td>Basic 1</td>
        <td>SOE</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Basic 2</td>
        <td>Physio</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Basic 3</td>
        <td>SDS</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
<?php $this->load->view('script');  ?>
