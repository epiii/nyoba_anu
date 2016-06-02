<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nyoba anu</title>
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="controller/c_kecamatan.js"></script>
</head>

<body>
	<div>
		kota
		<select onchange="view(this.value);" name="kotaCB" id="kotaCB"></select>
	</div>
	<table width="30%" bgcolor="black">
		<thead >
			<tr bgcolor="white">
				<th>NO</th>
				<th>Kecamatan</th>
			</tr>
		</thead>
		<tbody id="tbody">
			anunya muncul
		</tbody>
	</table>
</body>
</html>