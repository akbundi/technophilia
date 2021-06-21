<?php
include 'top.php';
$id=$_GET['id'];
?>
				<tr>
					<th>Course Name</th>
					<th>Course Description</th>
				</tr>
				<?php
					include 'connection.php';
					$sql="select * from courses where id='$id'";
					$res=mysqli_query($con,$sql);
					$count=mysqli_num_rows($res);
					if($count>0)
					{
						while($row=mysqli_fetch_assoc($res))
						{
				?>
				<form action="editcr.php" method="post">
				<tr>
					<td><input type="text" name="cname" class="form-control" value="<?php echo $row['course_name'];?>" required></td>
					<td><textarea name="cdesc" class="form-control" required><?php echo $row['course_des'];?></textarea></td>
				</tr>
				<input type="hidden" name="cid" value="<?php echo $id;?>">
				<tr>
					<td colspan="2" style="text-align:center;">
						<input type="submit" value="Save Editing" class="btn btn-info">
					</td>
				</tr>
				</form>
				
				<?php
						}
					}
					else{
						header("location:error1.php");
					}
				?>
<?php include 'bottom.php';?>