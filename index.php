<?php 
//default user id
$user_id = 0;

//Name mappings to map shortened names to Full Names
$namemappings= array(
	"appicon"=> "App Icon",
	"va_logo"=> "App Logo",
	"titleselect" => "Welcome Text",
	"userinformationinput" => "User Information",
	"continuebtn" => "Continue Button",
	"searchbar" => "Search Bar",
	"navigationbar" => "Navigation Bar",
	"mainpage" => "Main Page",
	"categoriesnavigationbar"=>"Catgeories Navigation Bar",
	"categorieslist" => "Categories List",
	"profilesetuparea" => "Profile Edit Area",
	"savebtn" =>"Save Button",
	"settingstitlebar" =>"Settings Title Bar",
	"historytitlebar" => "History Title Bar",
	"historylist" => "History List",
	"clearbtn" => "Clear Button",
	"defaultpagetitle" => "Default Page Title",
	"defaultlist" => "Default Page List",
	"defaultdonebtn" => "Default Done Button",
    "defaultpagearticlestitle"=> "Default Page Article Title Bar",
    "defaultpagearticleslist" => "Default Page Articles List",
	"favoritestitlebar" => "Favorites Title Bar",
	"favoriteslist" => "Favorites List",
	"clearfavoritesbtn" => "Clear Favorites Button",
	"addatiptitle" => "Add a tip title bar",
	"addatiparea" => "Add a tip area",
	"sendtipbtn" => "Send a tip button",
	"favoritesdialog" => "Favorites Dialog",
	"sharedialog" => "Share Dialog",
	"favoritesedit" => "Favorites Edit Dialog"
);


$con=mysqli_connect("localhost","root","","va-acceptance");
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//mysqli_query($con,"INSERT INTO users (username, password)
//VALUES ('Peter', 'Griffin')");
//mysqli_close($con);
?>
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
		for(var i=2;i<=10;i++)
		{
			
				var tableid = "#table"+i.toString();
				$(tableid).hide();
				$("#header"+i.toString()).hide();
			 
		}
		var screen_count=1;
		//styling the button
		$("#next").button();
	    // call the tablesorter plugin 
		$("#table1").tablesorter(); 
		$("#table2").tablesorter(); 
		$("#table3").tablesorter(); 
		$("#table4").tablesorter(); 
		$("#table5").tablesorter(); 
		$("#table6").tablesorter(); 
		$("#table7").tablesorter(); 
		$("#table8").tablesorter(); 
		$("#table9").tablesorter(); 
		$("#table10").tablesorter(); 

		$(".image").click(function(eventData)
		{
			var eventid = $(this).attr('id');
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
						var imgsrc = 'images/'+eventid+'.png';
						//img.attr('src','images/userinformationinputzoom.png');
						img.attr('src',imgsrc);
						$(this).html(img);
					
						//$(textarea).setCode('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');
					}
				});
		});

		$("#next").click(function(eventData)
				{
					if( $("#continuebtnselect").val() =="none"||$("#appiconselect").val() =="none"||$("#valogoselect").val() =="none"||$("#titleselect").val() =="none"||$("#inputfieldselect").val() =="none")
						alert("Please select an option for ACCEPTED for all items");
					else
					{
						$("#table"+screen_count.toString()).hide();
						$("#header"+screen_count.toString()).hide();
						screen_count++;
						
						var tableid_first = "#table"+screen_count.toString();
						$(tableid_first).show();
						$("#header"+screen_count.toString()).show();
					}
					
			
				});
	});

	
	</script>
</head>

<body>
<div style="top-margin:10px">
<img width="100%" src="http://i.imgur.com/CesevhY.png" alt='Create your own banner at mybannermaker.com!' border=0 /></a><br>
</div>
 <button id="next" style="float:right;margin-top:80px;background:#3185CD;color:#fff">Next</button> 
<div id="dialog-modal" title="Wireframe" style="display: none;text-align:center"></div>
<?php 
	$result = mysqli_query($con,"SELECT * FROM screens");
	$tablecount=0;
	while($row = mysqli_fetch_array($result))
  {
  	$tablecount=$tablecount+1;
  	$tableid = "table".$tablecount;
  	$headerid = "header".$tablecount;
  	$itemquery = "select * from items where screen_id=".$row['screen_id'];
  	$itemresult = mysqli_query($con,$itemquery);
  	echo "<h1 id=\"".$headerid."\" style=\"font-family: georgia; color: #8F8F8F; font-size:28px;text-align:center;top:50px\">".$row['screen_name']."</h2>";
  	echo "<table id=\"".$tableid."\" cellspacing=\"1\" class=\"tablesorter\">";
  	echo "<thead><tr><th >ITEM</th><th >NAME</th><th >SCREEN</th><th >ACCEPTED</th><th >COMMENTS</th></tr></thead>";
  	echo "<tbody>";
  
  		while($itemrow = mysqli_fetch_assoc($itemresult))
  		{
  			
  			echo "<tr><td class=\"image\" id=\"".$itemrow['item_name']." \" align=\"center\"> <img src=\"images/".$itemrow['item_name'].".png\"> </img></td>";
  			echo "<td>".$namemappings[$itemrow['item_name']]."</td>";
  			echo "<td>".$row['screen_name']."</td>";
  			$savedresultsquery = "select accepted,comments from acceptanceresults where user_id=".$user_id." and item_id =".$itemrow['item_id'];
  			$savedresults = mysqli_query($con, $savedresultsquery);
  			$savedrow = mysqli_fetch_row($savedresults);
  			
  			if($savedrow['0']=='None')
  			{
  				echo "<td><select id=\"appiconselect\">
					<option selected =\"selected\" value=\"none\">  </option>
					<option value=\"Yes\">Yes</option>
					<option value=\"No\">No</option>
					</select>
					</td>";
  			}
  			else if($savedrow['0']=='Yes'){

				echo "<td><select id=\"appiconselect\">
					<option  value=\"none\">  </option>
					<option selected =\"selected\" value=\"Yes\">Yes</option>
					<option value=\"No\">No</option>
					</select>
					</td>";
			}  			
			else{
			
				echo "<td><select id=\"appiconselect\">
					<option  value=\"none\">  </option>
					<option value=\"Yes\">Yes</option>
					<option selected =\"selected\" value=\"No\">No</option>
					</select>
					</td>";
			}
			if($savedrow['1']=='None')
			{
				echo "<td><textarea rows=\"5\" cols=\"50\"></textarea></td>";
			}
			else {
				echo "<td><textarea rows=\"5\" cols=\"50\">".$savedrow['1']."</textarea></td>";
			}
			
  			echo"</tr>";
  		}
  	echo "</tbody></table>";
  	
  }
 
  mysqli_close($con);
	?>
	 <h4 style="font-family: timesnewroman;font-style:italic; font-size:18px;text-align:center">Note: Please continue with acceptance procedure by setting the Accepted option to yes/no and kindly add in your comments in the comments field.You can enlarge the images by clicking on them. </h1>
<!-- <table id="maintable" cellspacing="1" class="tablesorter" >
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
	
	<tr>
		<td class="image" id="appicon" align="center"><img alt="" src="images/appicon.png"></img></td>
		<td>IMAGE</td>
		<td>Profile Setup Screen</td>
		<td><select id="appiconselect">
				<option value="none">  </option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
		</td>
		<td><textarea rows="5" cols="50"></textarea></td>
	</tr>
	<tr>
		<td class="image" id="va_logo" ><img alt="" src="images/va_logo.png" ></img></td>
		<td>IMAGE</td>
		<td>Profile Setup Screen</td>
		<td><select id="valogoselect">
				<option value="none">  </option>
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
		<td><select id="titleselect">
				<option value="none">  </option>		
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
		</td>
		<td><textarea rows="5" cols="50"></textarea></td>
	</tr>
	<tr>
		<td class="image" id="userinformationinputzoom"><img  height="63" width="66" alt="" src="images/userinformationinputzoom.png" ></img></td>
		<td>Input Fields</td>
		<td>Profile Setup Screen</td>
		<td><select id="inputfieldselect">
				<option value="none">  </option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
		</td>
		<td><textarea rows="5" cols="50"></textarea></td>
	</tr>
	<tr>
		<td class ="image" id="continuebtn" ><img height="63" width="66" alt="" src="images/userinformationinputzoom.png" ></img></td>
		<td>Continue Button</td>
		<td>Profile Setup Screen</td>
		<td><select id="continuebtnselect">
				<option value="none">  </option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
		</td>
		<td><textarea rows="5" cols="50"></textarea></td>
	</tr>
	</tbody>
</table>-->
</body>
</html>