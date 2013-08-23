<?php require_once('auth.php');?>
<?php include 'header.php'; ?>
<style type="text/css">
    .form-horizontal .control-label {
	width: 100px;
	}
    .form-horizontal .controls {
	margin-left: 120px;
	}
    legend {
	text-align : center;
	}
 </style>

<div class="container">
<div class="row clearfix">
<div class="span5">
<form class="form-horizontal" action="register_member.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Registration Form</legend>
<td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				//echo $msg; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="memberno">Member No. :</label>
  <div class="controls">
    <input id="memberno" name="memberno" type="text" placeholder="Unique number of member" class="input-large" required="">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="firstName">First Name :</label>
  <div class="controls">
    <input id="firstname" name="firstname" type="text" placeholder="first name" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="lastname">Last Name :</label>
  <div class="controls">
    <input id="lastname" name="lastname" type="text" placeholder="last name" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="middlename">Middle Name : </label>
  <div class="controls">
    <input id="middlename" name="middlename" type="text" placeholder="middle name" class="input-large">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="dob">Date of Birth :</label>
  <div class="controls">
    <input id="dob" name="dob" type="text" placeholder="dd/mm/yyyy" class="input-large" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="gender">Gender :</label>
  <div class="controls">
    <select id="gender" name="gender" class="input-medium">
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="idnumber">ID. Number :</label>
  <div class="controls">
    <input id="idnumber" name="idnumber" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="cellgroup">Cell Group :</label>
  <div class="controls">
    <select id="cellgroup" name="cellgroup" class="input-medium">
      <option>Select Group</option>
      <option>Gikuni A</option>
      <option>Gikuni B</option>
      <option>Marugu</option>
      <option>Others</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="status">Status :</label>
  <div class="controls">
    <select id="status" name="status" class="input-medium">
      <option>Select Status</option>
      <option>Single</option>
      <option>Married</option>
      <option>Divorced</option>
      <option>Widowed</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="savebuttone"></label>
  <div class="controls">
    <button id="savebuttone" name="savebuttone" class="btn btn-primary">Save</button>
  </div>
</div>

</fieldset>
</form>
</div>
<div class="span5" style="margin-left: 50px; margin-top: 20px; width: 450px">
<fieldset>
<div class="custom-space" style="margin: 20px 0 border: 0"></div>
<!-- Form Name -->
<legend>Registered Users</legend>
<table class="tablesorter table table-striped table-condensed" id="registered">
 <thead>
      <tr>
	  <th>No.</th>
          <!--<th class="header" sytle="color: #ffc40d;">Name</th>-->
	  <th class="header" style="color: #ffc40d;">Name</th>
          <th class="header" style="color: #049cdb;">Date of Birth</th>
          <th class="header" style="color: #46a546;">Marital Status</th>
          <th class="header" style="color: #FF00FF;">Cell Group</th>                                          
      </tr>
  </thead>   
  <tbody>
  <tr>
	<th>1.</th>
        <td>Donna R. Folse</td>
        <td>2012/05/06</td>
        <td>Single</td>
        <td><span class="label label-success">Gikuni A</span>
        </td>                                       
    </tr>
    <tr>
	<th>2.</th>
        <td>Emily F. Burns</td>
        <td>2011/12/01</td>
        <td>Married</td>
        <td><span class="label label-important">Gikuni B</span></td>                                       
    </tr>
    <tr>
	<th>3.</th>
        <td>Andrew A. Stout</td>
        <td>2010/08/21</td>
        <td>Widowed</td>
        <td><span class="label">Marugu</span></td>                                        
    </tr>
    <tr>
	<th>4.</th>
        <td>Mary M. Bryan</td>
        <td>2009/04/11</td>
        <td>Married</td>
        <td><span class="label label-warning">Others</span></td>                                       
    </tr>
    <tr>
	<th>5.</th>
        <td>Mary A. Lewis</td>
        <td>2007/02/01</td>
        <td>Single</td>
        <td><span class="label label-success">Gikuni A</span></td>                                        
    </tr>                             
  </tbody>
</table>
</fieldset>
</div>
</div>
</div>
<?php include 'footer.php'; ?>
