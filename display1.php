<?php

$_rank = $_GET["rank"];
$_exam = $_GET["exam"];
$_branch = $_GET["branch"];
$_category = $_GET["category"];

?>
<!DOCTYPE html>
<html>
<head>
<title>Result</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>NIRF Rank</th>
<th>College Name</th>
<TH>Closing Rank</TH>
<th>State</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "almamater");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if($_exam =='no')
{
	if($_branch=='cse')
	{
		if($_category=="gen")
		{
           $sql = "SELECT rank, college_name, cse_gen, state FROM colleges where $_rank <= cse_gen && exam='ADV' " ;
           $result = $conn->query($sql);

          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["cse_gen"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="obc")
		{
			$sql = "SELECT rank, college_name, cse_obc, state FROM colleges where $_rank <= cse_obc && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["cse_obc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="st")
		{
			$sql = "SELECT rank, college_name, cse_st, state FROM colleges where $_rank <= cse_st && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["cse_st"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="sc")
		{
			$sql = "SELECT rank, college_name, cse_sc, state FROM colleges where $_rank <= cse_sc && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["cse_sc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
	}
	
	
	if($_branch=='mech')
	{
        if($_category=="gen")
		{
           $sql = "SELECT rank, college_name, mech_gen, state FROM colleges where $_rank <= mech_gen && exam='ADV' " ;
           $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["mech_gen"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="obc")
		{
			$sql = "SELECT rank, college_name, mech_obc, state FROM colleges where $_rank <= mech_obc && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["mech_obc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="st")
		{
			$sql = "SELECT rank, college_name, mech_st, state FROM colleges where $_rank <= mech_st && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["mech_st"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="sc")
		{
			$sql = "SELECT rank, college_name, mech_sc, state FROM colleges where $_rank <=meche_sc && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["mech_sc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
	}
	

	if($_branch=='elec')
	{
       if($_category=="gen")
		{
           $sql = "SELECT rank, college_name, elec_gen, state FROM colleges where $_rank <= elec_gen && exam='ADV' " ;
           $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["elec_gen"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="obc")
		{
			$sql = "SELECT rank, college_name, elec_obc, state FROM colleges where $_rank <= elec_obc && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["elec_obc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="st")
		{
			$sql = "SELECT rank, college_name, elec_st, state FROM colleges where $_rank <= elec_st && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["elec_st"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="sc")
		{
			$sql = "SELECT rank, college_name, elec_sc, state FROM colleges where $_rank <= elec_sc && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["elec_sc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
	}
	

	if ($_branch=='civil') 
	{
	   if($_category=="gen")
		{
           $sql = "SELECT rank, college_name, civil_gen, state FROM colleges where $_rank <= civil_gen && exam='ADV' " ;
           $result = $conn->query($sql);
             while($row = $result->fetch_assoc()) {
             echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["civil_gen"] . "</td><td>" . $row["state"] . "</td></tr>";
            }              
		}
		if($_category=="obc")
		{
			$sql = "SELECT rank, college_name, civil_obc , state FROM colleges where $_rank <= civil_obc && exam='ADV' " ; 
			$result = $conn->query($sql);
             while($row = $result->fetch_assoc()) {
             echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["civil_obc"] . "</td><td>" . $row["state"] . "</td></tr>";
             }             
		}
		if($_category=="st")
		{
			$sql = "SELECT rank, college_name, civil_st, state FROM colleges where $_rank <= cse_st && exam='ADV' " ; 
			$result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["civil_st"] . "</td><td>" . $row["state"] . "</td></tr>";
            } 
 		}
		if($_category=="sc")
		{
			$sql = "SELECT rank, college_name, civil_sc, state FROM colleges where $_rank <= civil_sc && exam='ADV' " ;
			$result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["civil_sc"] . "</td><td>" . $row["state"] . "</td></tr>";
            }              
		}
	}
	if($_branch=='chem')
	{
        if($_category=="gen")
		{
           $sql = "SELECT rank, college_name, chem_gen, state FROM colleges where $_rank <= chem_gen && exam='ADV' " ;
           $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["chem_gen"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="obc")
		{
			$sql = "SELECT rank, college_name, chem_obc , state FROM colleges where $_rank <= chem_obc  && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["chem_obc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="st")
		{
			$sql = "SELECT rank, college_name, chem_st, state FROM colleges where $_rank <= chem_st && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["chem_st"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="sc")
		{
			$sql = "SELECT rank, college_name, chem_sc, state FROM colleges where $_rank <= chem_sc && exam='ADV' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["chem_sc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
	} 
}

else{
	if($_branch=='cse')
	{
		if($_category=="gen")
		{
           $sql = "SELECT rank, college_name, cse_gen, state FROM colleges where $_rank <= cse_gen && exam='MAINS' " ;
           $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["cse_gen"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="obc")
		{
			$sql = "SELECT rank, college_name, cse_obc, state FROM colleges where $_rank <= cse_obc && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["cse_obc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="st")
		{
			$sql = "SELECT rank, college_name, cse_st, state FROM colleges where $_rank <= cse_st && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["cse_st"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="sc")
		{
			$sql = "SELECT rank, college_name, cse_sc, state FROM colleges where $_rank <= cse_sc && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["cse_sc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}

	}
	if($_branch=='mech')
	{
        if($_category=="gen")
		{
           $sql = "SELECT rank, college_name, mech_gen, state FROM colleges where $_rank <= mech_gen && exam='MAINS' " ;
           $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["mech_gen"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="obc")
		{
			$sql = "SELECT rank, college_name, mech_obc, state FROM colleges where $_rank <= mech_obc && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["mech_obc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="st")
		{
			$sql = "SELECT rank, college_name, mech_st, state FROM colleges where $_rank <= mech_st && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["mech_st"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="sc")
		{
			$sql = "SELECT rank, college_name, mech_sc, state FROM colleges where $_rank <=meche_sc && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["mech_sc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
	}
	if($_branch=='elec')
	{
       if($_category=="gen")
		{
           $sql = "SELECT rank, college_name, elec_gen, state FROM colleges where $_rank <= elec_gen && exam='MAINS' " ;
           $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["elec_gen"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="obc")
		{
			$sql = "SELECT rank, college_name, elec_obc, state FROM colleges where $_rank <= elec_obc && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["elec_obc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="st")
		{
			$sql = "SELECT rank, college_name, elec_st, state FROM colleges where $_rank <= elec_st && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["elec_st"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="sc")
		{
			$sql = "SELECT rank, college_name, elec_sc, state FROM colleges where $_rank <= elec_sc && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["elec_sc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
	}
	if ($_branch=='civil') 
	{
	   if($_category=="gen")
		{
           $sql = "SELECT rank, college_name, civil_gen, state FROM colleges where $_rank <= civil_gen && exam='MAINS' " ;
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) {
           echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["civil_gen"] . "</td><td>" . $row["state"] . "</td></tr>";
}              
		}
		if($_category=="obc")
		{
			$sql = "SELECT rank, college_name, civil_obc , state FROM colleges where $_rank <= civil_obc && exam='MAINS' " ; 
			$result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["civil_obc"] . "</td><td>" . $row["state"] . "</td></tr>";
             }             
		}
		if($_category=="st")
		{
			$sql = "SELECT rank, college_name, civil_st, state FROM colleges where $_rank <= cse_st && exam='MAINS' " ;
			$result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["civil_st"] . "</td><td>" . $row["state"] . "</td></tr>";
             }              
		}
		if($_category=="sc")
		{
			$sql = "SELECT rank, college_name, civil_sc, state FROM colleges where $_rank <= civil_sc && exam='MAINS' " ; 
			$result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["civil_sc"] . "</td><td>" . $row["state"] . "</td></tr>";
             }             
		}
	}
	if($_branch='chem')
	{
        if($_category=="gen")
		{
           $sql = "SELECT rank, college_name, chem_gen, state FROM colleges where $_rank <= chem_gen && exam='MAINS' " ;
           $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["chem_gen"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="obc")
		{
			$sql = "SELECT rank, college_name, chem_obc , state FROM colleges where $_rank <= chem_obc  && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["chem_obc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="st")
		{
			$sql = "SELECT rank, college_name, chem_st, state FROM colleges where $_rank <= chem_st && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["chem_st"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
		if($_category=="sc")
		{
			$sql = "SELECT rank, college_name, chem_sc, state FROM colleges where $_rank <= chem_sc && exam='MAINS' " ;
			$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["rank"]. "</td><td>" . $row["college_name"] . "</td><td>". $row["chem_sc"] . "</td><td>" . $row["state"] . "</td></tr>";
          }
		}
	}
}

echo "</table>";

$conn->close();
?>
</table>
</body>
