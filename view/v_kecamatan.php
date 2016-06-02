<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>kecamatan Per Kota xxx</title>
	<script src="../js/jquery-1.8.3.min.js"></script>
	<script src="../controller/c_kecamatan.js"></script>
</head>

<body>
 	<h2>Data Kecamatan (filter by Kota) </h2>
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
			<!-- anunya muncul disini -->
		</tbody>
	</table>
</body>
</html>