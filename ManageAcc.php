<?php
require_once('../../mysql_connect.php');
		if(isset($_GET['rowID'])){
			$Status="";
			$rowID=$_GET['rowID'];
			$query="SELECT status FROM mydb.dumacc where idDumAcc='$rowID';";
			$result=mysqli_query($dbc,$query);
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$Status=$row["status"];
			}
			if($Status=='Activated'){
				$query="UPDATE dumacc 
						SET Status='Deactivated'
						where idDumacc='$rowID';";
				$result=mysqli_query($dbc,$query);
			}
			else
			{
				$query="UPDATE dumacc 
						SET Status='Activated'
						where idDumacc='$rowID';";
				$result=mysqli_query($dbc,$query);
			}
		}
?>
 <html>
	<head>
		<title>Manage Accounts</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
		
	</head>
	
	<body>
		<h1>Manage Account</h1>
		<table id = "accountsTable">
		  <tr>
			<th>ID Number</th>
			<th>Name</th> 
			<th>Status</th>
			<th>Change Account Status</th>
		<?php
		    $query="SELECT * FROM dumacc;";
			$result=mysqli_query($dbc,$query);
			$rowID=1;
				foreach($result AS $dumacc){
					echo '<tr>';
					echo '<td>';
					echo $dumacc['idNum'];
					echo '</td>';
					echo '<td>';
					echo $dumacc['Name'];
					echo '</td>';
					echo '<td>';
					echo $dumacc['Status'];
					echo '</td>';
					echo '<td>';
					echo "<a href='ManageAcc.php?rowID=".$rowID."'><button value = ".$rowID." name='activate'
					".(($dumacc['Status']=='Activated')? "disabled":"").">
						Activate</button></a>";
					echo "<a href='ManageAcc.php?rowID=".$rowID."'><button value = ".$rowID." name='deactivate'
					".(($dumacc['Status']=='Deactivated')? "disabled":"").">
						Deactivate</button></a>";
					echo '</td>';
					echo '</tr>';
					echo $rowID;
					$rowID++;
				}
			
		
		?>
		</table>
		
	</body>
</html>