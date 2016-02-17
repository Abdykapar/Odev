<html>
<head>
	<title>MySql-php</title>
</head>
<body>
<h1>List of users</h1>
<?
	$conn = mysql_connect("localhost", "teacher", "123456");
	$db = mysql_select_db("bil360");
	
	if ((isset($_POST["state"])) && ($_POST["state"]!="")) 
	{
		$query1 = "SELECT * FROM `users` WHERE `state` = '".$_POST["state"]."'";
		
		$query = "INSERT INTO `users` (`userid`, `fname`, `lname`, `addr`, `addr2`, `city`, `state`, `zip`, `lastchanged`) VALUES ('', '".$_POST["first_name"]."', 'Narmatov', 'Jal', '', 'Bishkek', '".$_POST["state"]."', '720044', CURRENT_TIMESTAMP); ";
		
		echo "<p>The query was:".$query."</p>";
		
		$result = mysql_query($query);
		
		echo "<p>The added rows count = ".mysql_affected_rows()."</p>";
		/*
		if (mysql_num_rows($result) > 0)
		{
			echo "<table border=1>";
			
			$i=0;
			while($row=mysql_fetch_array($result, MYSQL_ASSOC))
			{
				if ($i==0)
				{
					$i++;
					echo "<tr>";
						
						//echo "<td>".$row["userid"]."</td><td>".$row["fname"]."</td><td>".$row["addr"]."</td>";
						while (list($key, $value) = each ($row))
						{
							echo "<th>".$key."</th>";
						}
					echo "</tr>";
				}
				
				echo "<tr>";
					
					//echo "<td>".$row["userid"]."</td><td>".$row["fname"]."</td><td>".$row["addr"]."</td>";
					foreach ($row as $key=>$value)
					{
						echo "<td>".$value."</td>";
					}
				echo "</tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "<p>No data found!!! :(</p>";
		}
		*/
	}
	else
	{
		echo "<p>Enter the right value!!!</p>";
	}
	
?>
</body>
</html>