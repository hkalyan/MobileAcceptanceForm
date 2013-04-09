<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html >
<head>
<link rel="stylesheet" type="text/css" href="jquery/themes/blue/style.css">
	<script type="text/javascript" src="jquery/jquery-latest.js"></script> 
	<script type="text/javascript" src="jquery/jquery.tablesorter.js"></script> 
	<script type="text/javascript">
	$(document).ready(function() { 
	    // call the tablesorter plugin 
		$("#maintable").tablesorter(); 
	});

	</script>
</head>

<body>
<table id="maintable" cellspacing="1" class="tablesorter" >
<thead>
<tr>
	<th >
	ITEM
	</th>
	<th >
	TYPE
	</th>
	<th >
	SCREEN
	</th>
	<th >
	ACCEPTED
	</th>
	<th >
	COMMENTS
	</th>
	</tr>
	</thead>
	<tbody>
	<tr id="odd">
		<td align="center"><img alt="" src="images/appicon.png"></img></td>
		<td>IMAGE</td>
		<td>First Time User Screen</td>
		<td><select>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
		</td>
		<td><textarea rows="5" cols="50"></textarea></td>
	</tr>
	<tr>
		<td><img alt="" src="images/va_logo.png" ></img></td>
		<td>IMAGE</td>
		<td>First Time User Screen</td>
		<td><select>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
		</td>
		<td><textarea rows="5" cols="50"></textarea></td>
	</tr>
	<tr>
		<td>Welcome to the Radiology Wiki.<br>
		Please setup your profile below.</td>
		<td>Welcome Text</td>
		<td>First Time User Screen</td>
		<td><select>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
		</td>
		<td><textarea rows="5" cols="50"></textarea></td>
	</tr>
	<tr>
		<td><img id="userinput" height="63" width="66" alt="" src="images/userinformationinputzoom.png" ></img></td>
		<td>Input Fields</td>
		<td>First Time User Screen</td>
		<td><select>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
		</td>
		<td><textarea rows="5" cols="50"></textarea></td>
	</tr>
	</tbody>
</table>
</body>
</html>