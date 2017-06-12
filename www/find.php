<html>
		<head>
	<title>Find a Student</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/custom.css" />
<link rel="stylesheet" href="css/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="javascript/storage.js"></script>
</head>
	<body>
		<div id="page" data-role="page" data-theme="b" >
	<div data-role="header" data-theme="b">
<h1>
	Search
		</h1>	</div>
				<div data-role="content">

					<?php
					include 'config.php';
					include 'opendb.php';

					
					$sql= "SELECT student_info.student_ID, student_info.fname, student_info.lname, course.courseid, course.course_description  from student_info
						   JOIN course on student_info.student_ID = course.student_ID
						   where student_info.fname='Kaye' and student_info.lname='Kim'
						   ORDER BY student_info.lname ASC";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
									echo "StudentID: " . $row["Student_ID"]. "<br>";
					        echo "First Name: " . $row["fname"]. "<br>";
					        echo "Last Name: " . $row["lname"]. "<br><hr>";
							echo "CourseID: " . $row["courseid"]. "<br><hr>";
							echo "Course Description: " . $row["course_description"]. "<br><hr>";
					    }
					} else {
					    echo "0 results";
					}

					mysqli_close($conn);

					?>

				<div data-role="footer" data-theme="b">
	  <h4>Darice Corey-Gilbert &copy; 2016</h4>
	</div>
	</body>
</html>
