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
					<td><?php echo $row['course_name'];?></td>
					<td><?php echo $row['course_des'];?></td>
				</tr>
				<?php
						}
					}
				?>
<?php include 'bottom.php';?>