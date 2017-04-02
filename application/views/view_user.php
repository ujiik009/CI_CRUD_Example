
	<div class="container">
		<table class="table">
			<tr>
				<td>ลำดับ</td>
				<td>ชื่อ-นามสกลุ</td>
				<td>ชื่อผู้ใช้</td>
				<td>รหัสผ่าน</td>
				<td>Email</td>
				<td>เบอร์</td>
				<td></td>
			</tr>
			
			<?php 
				$number = 0;
				foreach ($res as $key => $value) {
					$number++;
					echo "<tr>";
						echo "<td>{$number}</td>";
						echo "<td>{$value['name_surname']}</td>";
						echo "<td>{$value['user']}</td>";
						echo "<td>{$value['password']}</td>";
						echo "<td>{$value['Email']}</td>";
						echo "<td>{$value['phone']}</td>";
						echo "<td><a class='btn btn-danger' href='".base_url()."User_Controller/delete_user/{$value['user_id']}'>delete</a>
						<a class='btn btn-warning' href='".base_url()."User_Controller/edit_user_form/{$value['user_id']}'>edit</a>
						</td>";
					echo "</tr>";
					
				}

			?>
			
		</table>
	</div>
