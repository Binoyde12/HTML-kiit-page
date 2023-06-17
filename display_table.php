<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Student's Details</title>

    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        div{
            text-align: center;

        }
 
        span.center {
            text-align: center;
            display: inline-block; 
     padding: 1px; 
     border: 2px solid #000000; 
        
            
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th
         {
            font-weight: bold;
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
            font-weight: bold;
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
.hell{
 color : red;
}
.logo {
        display: block;
        margin: 0 auto;
        max-width: 200px;
        margin-bottom: 20px;
      }
    </style>
</head>
 
<body  style="background: radial-gradient(circle,white,green)">
    <section>
    <img class="logo" src="https://cdn.kiit.ac.in/wp-content/uploads/2022/12/KIIT-Logo-Silver-Jubilee-25-Years.png" alt="KIIT University Logo">
        <div>
        <span class="center">

      
        <h1>Student's Details</h1></span>
        
    </div>
    
        <table>
            <tr>
                <th>Student Name</th>
                <th>ROll number</th>
                <th>Branch</th>
                <th>Semester</th>
            </tr>

		<tr>
<?php
		if($_SERVER['REQUEST_METHOD'] == "GET") {
			$con = mysqli_connect("localhost", "username", "password");
			if(!$con) die('Connection failed : '.mysqli_error());
			mysqli_select_db($con, "form_db");
			$sql = "SELECT * FROM `student`";
			$data = mysqli_query($con, $sql);
			$count = 0;
				while($std = mysqli_fetch_array($data)) {
					if($std['Roll'] == $_GET['name'] && $std['Roll']%1000 == $_GET['rollno']%1000) {
						echo "<td>".$std['Name']."</td>";
						echo "<td>".$std['Roll']."</td>";
						echo "<td>".$std['Branch']."</td>";
						echo "<td>".$std['Semester']."</td>";
						$count++;
					}
				}
                if($count == 0) header('location:invalid.html');
			// if($count == 0) echo "</tr></table> <center><h1 class='hell'>Invalid Roll Number or Password</h1></center>";
		}
?>
		</tr>
	</table>
    </body>       

</html>