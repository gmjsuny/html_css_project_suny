<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM facility";
	$result=$conn->query($sql);
	
?>
	<div class="announce">
		<div>
		<h2> New Allotment for the Course</h2>
		<p>EDGE newly announcement Project is offering the various skills development 
		courses that will be conducted by University of Barishal CSE-BU.</p>
		<h2>Arrangement:</h2>
		<ul>
		
		
		
		<?php
			while($row=$result->fetch_assoc()){
				echo "<li>".$row["description"]."</li>";
			}
		?>
		</ul>
		</div>
		
		<div style="float:right">
		<img src="announcement.jpg" width="600" height="400"  >
		</div>
		
	</div>
		
<?php
	include "footer.php";
?>

