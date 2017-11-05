<?php
	include("validate.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Environmental Club Member Registration Form</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		for(let err = 0; err < $('.err').length; err++){
			if($('.err').eq(err).children('small').text() != ""){
				$('.err').eq(err).css({"display":"initial"});
			}
		};

		let deg = $('input[name="Degree"]').val();
		for(let x = 0; x < $('input[name="degree"]').length; x++){
			if($('input[name="degree"]').eq(x).val() == deg){
				$('input[name="degree"]').eq(x).prop('checked',true);
			}
		}
	});
	
</script>


</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Environmental Club Member Registration Form</a></h1>
		<form id="form_56308" class="appnitro"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<div class="form_description">
			<h2>Environmental Club Member Registration Form</h2>
			<p>Please fill out all applicable information to register for membership. Students MUST be enrolled in a Degree Program at the University of Technology, Jamaica within the School of Computing and Information Technology.</p>
		</div>						
			<ul >
			
					<li class="section_break">
			<h3>DEMOGRAPHICS</h3>
			<p></p>
		</li>		<li id="li_8" >
		<label class="description" for="element_8">ID Number </label>
		<div>
			<input id="idnum" name="idnum" class="element text medium" type="text" maxlength="255" 
			value="<?php echo $idnum;?>" required/> 
		</div>	<p class="guidelines" id="guide_8"><small>Correct Format: 7 digits</small></p> 
				<p class="err" id="err_1"><small><?php echo $idErr; ?></small></p> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Name </label>
		<span>
			<input id="fname" name= "fname" class="element text" maxlength="255" size="8" 
			value="<?php echo $fname;?>" required/>
			<label>First</label>
		</span>
		<span>
			<input id="lname" name= "lname" class="element text" maxlength="255" size="14" 
			value="<?php echo $lname;?>"/>
			<label>Last</label>
		</span><p class="guidelines" id="guide_1"><small>Please begin both names with Capital Letters</small></p>
		<p class="err" id="err_2"><small><?php echo $fnErr; ?></small></p>  
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Gender </label>
		<div>
		<select class="element select medium" id="gender" name="gender"> 
			<option value="<?php echo $gen;?>" selected="selected"><?php echo $gen;?></option>
<option value="Male" >Male</option>
<option value="Female" >Female</option>

		</select>
		</div> <p class="err" id="err_3"><small><?php echo $genErr; ?></small></p> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Academic Year </label>
		<div>
			<input id="ay" name="ay" class="element text medium" type="text" maxlength="255" 
			value="<?php echo $ay;?>"/> 
		</div><p class="guidelines" id="guide_7"><small>Correct Format: Example (2017/18)</small></p> 
		<p class="err" id="err_4" style="top: 83%"><small><?php echo $ayErr; ?></small></p> 
		</li>
		<li class="section_break">
			<h3>CONTACT INFO</h3>
			<p></p>
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Cell Phone </label>
		<div>
			<input id="cphone" name="cphone" class="element text medium" type="text" maxlength="255" 
			value="<?php echo $cell;?>"/> 
		</div><p class="guidelines" id="guide_5"><small>Correct format should be: ###-###-####</small></p> 
		<p class="err" id="err_5"><small><?php echo $cellErr; ?></small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Email </label>
		<div>
			<input id="email" name="email" class="element text medium" type="text" maxlength="255" 
			value="<?php echo $em;?>"/> 
		</div><p class="guidelines" id="guide_9"><small>Correct format should be: exam@ple.com</small></p> 
		<p class="err" id="err_6" style="top: 83%"><small><?php echo $emErr; ?></small></p> 
		</li>		<li class="section_break">
			<h3>COURSE OF STUDY</h3>
			<p></p>
		</li>		<li id="li_10" >
		<label class="description" for="element_10">Degree of Pursuit </label>
		<span>
			<input type="hidden" name="Degree" value="<?php echo $deg;?>">
			<input id="degree" name="degree" class="element radio" type="radio" value="Associate Degree in Computer Studies" />
<label class="choice" for="element_10_1">Associate Degree in Computer Studies</label>
<input id="degree" name="degree" class="element radio" type="radio" value="BSc in Computing and Information Technology" />
<label class="choice" for="element_10_2">BSc in Computing and Information Technology</label>
<input id="degree" name="degree" class="element radio" type="radio" value="BSc in Animation Production and Development" />
<label class="choice" for="element_10_3">BSc in Animation Production and Development</label>


		</span> <p class="err" id="err_7"><small><?php echo $degErr; ?></small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="56308" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.github.com/MickStick">Mikhail Rene Shaw</a>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>