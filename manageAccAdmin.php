<!--
Things to do
-UI Pls put :)
-->
<?php
require_once('connection2.php');

		if(isset($_GET['rowID'])){
				$Status="";
				$rowID=$_GET['rowID'];
				$query="SELECT u_status FROM work.user where u_id='$rowID';";
				$result=mysqli_query($dbc,$query);
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$Status=$row["u_status"];
			}
			if($Status=='Activated'){
				$query="UPDATE user 
						SET u_status='Deactivated'
						where u_id='$rowID';";
				$result=mysqli_query($dbc,$query);
			}
			else
			{
				$query="UPDATE user 
						SET u_status='Activated'
						where u_id='$rowID';";
				$result=mysqli_query($dbc,$query);
			}
		}
?>
<p id="confirm"></p>

<script>
function confChange() {
    var txt;
	Boolean(txt)
    if (confirm("Change Account Status?")) {
        txt=true;
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
 <html>
	<head>
		<title>Manage Accounts</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	
	<body>
		<h1>Manage Account</h1>
		<table id = "accountsTable">
		  <tr>
			<th>Row ID</th>
			<th>Name</th> 
			<th>Status</th>
			<th>Change Account Status</th>
		<?php
		    $query="SELECT u_id,u_firstname,u_lastname,u_status,user.u_type,usertype.ut_id, usertype.ut_name
			FROM user
			INNER JOIN usertype
			ON  user.u_type=usertype.ut_id
			Where  user.u_type=2 
			Order by usertype.ut_id;";
			$result=mysqli_query($dbc,$query);
			$rowID=2;
				foreach($result AS $user){
					echo '<tr>';
					echo '<td>';
					echo  $rowID;
					echo '</td>';
					echo '<td>';
					echo $user['u_lastname'].','.$user['u_firstname'];
					echo '</td>';
					echo '<td>';
					echo $user['ut_name'];
					echo '</td>';
					echo '<td>';
					echo $user['u_status'];
					echo '</td>';
					echo '<td>';
					echo "<a href='ManageAccAdmin.php?rowID=".$rowID."'><button value = ".$rowID." onclick="confChange()" name='activate'".(($user['u_status']=='Activated')? "disabled":"").">Activate</button></a>";
					echo "<a href='ManageAccAdmin.php?rowID=".$rowID."'><button value = ".$rowID." onclick="confChange()" name='deactivate'"
						.(($user['u_status']=='Deactivated')? "disabled":"").">
						Deactivate</button></a>";
					echo '</td>';
					echo '</tr>';
					$rowID++;
				}
		?>
		</table>
		
	</body>
</html>