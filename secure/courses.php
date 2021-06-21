<?php include 'top.php';?>
				<tr>
					<th>Course Name</th>
					<th>Course Description</th>
				</tr>
				<?php
					include 'connection.php';
					$sql="select * from courses";
					$res=mysqli_query($con,$sql);
					$count=mysqli_num_rows($res);
					if($count>0)
					{
						while($row=mysqli_fetch_assoc($res))
						{
				?>	
				<tr>
					<td><?php echo htmlspecialchars($row['course_name'], ENT_QUOTES);?></td> //it will script converted into string &now code is excute rather than script
					<td><?php echo htmlspecialchars($row['course_des'], ENT_QUOTES);?></td>  //it will script converted into string &now code is excute rather than script
				</tr>
				<?php
						}
					}
				?>
<?php include 'bottom.php';?>