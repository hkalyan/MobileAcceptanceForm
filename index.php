<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html >
<head>
<link rel="stylesheet" type="text/css" href="jquery/themes/blue/style.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
	<script type="text/javascript" src="jquery/jquery-latest.js"></script> 
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	<script type="text/javascript" src="jquery/jquery.tablesorter.js"></script> 
	<script type="text/javascript">
	$(document).ready(function() { 
	    // call the tablesorter plugin 
		$("#maintable").tablesorter(); 

		$(".image").click(function()
		{
			console.log("Clicked");
			$( "#dialog-modal" ).dialog({
				modal: true,
				resizable: false,
				draggable: false,
				width: 'auto',
					width: 600,
					height: 400,
					open: function(event, ui)
					{
						var img = $('<img ></img>');
						img.attr('src','images/userinformationinputzoom.png');
						$(this).html(img);
					
						//$(textarea).setCode('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');
					}
				});
		});
	});

	
	</script>
</head>

<body>
<div id="dialog-modal" title="Wireframe" style="display: none;text-align:center"></div>
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
		<td class="image" align="center"><img alt="" src="images/appicon.png"></img></td>
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
		<td class="image"><img alt="" src="images/va_logo.png" ></img></td>
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
		<td class="image"><img id="userinput" height="63" width="66" alt="" src="images/userinformationinputzoom.png" ></img></td>
		<td>Input Fields</td>
		<td>First Time User Screen</td>
		<td><select>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
		</td>
		<td><textarea rows="5" cols="50"></textarea></td>
	</tr>
	<tr>
		<td class ="image"><img id="continuebtn" height="63" width="66" alt="" src="images/userinformationinputzoom.png" ></img></td>
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