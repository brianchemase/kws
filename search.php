<?php
	require 'conn.php';
	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered">
		<caption>List of Applicants</caption>
		<thead class="thead-dark">
			<tr>
				<th scope="col">RowID</th>
				<th scope="col">Applicant Names</th>
				<th scope="col">Applicant ID</th>
				<th scope="col">County</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['keyword'];
				$query = $conn->prepare("SELECT * FROM `recruits` WHERE `Applicant_Names` = '$keyword' or `Applicant_IDNO` = '$keyword' or `County` = '$keyword'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['RowId']?></td>
				<td><?php echo $row['Applicant_Names']?></td>
				<td><?php echo $row['Applicant_IDNO']?></td>
				<td><?php echo $row['County']?></td>
			</tr>
			
			
			<?php
				}
			?>
		</tbody>
	</table>
<?php		
	}else{
?>
	<table class="table table-bordered">
		<caption>List of Applicants</caption>
		<thead class="thead-dark">
			<tr>
				<th>RowID</th>
				<th>Applicant Names</th>
				<th>Applicant ID</th>
				<th>County</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="4"> Search using Names, National ID number of the County Name, all the best</td>

			</tr>
		</tbody>
	</table>
<?php
	}
?>