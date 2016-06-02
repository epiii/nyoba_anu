$(document).ready(function(){
	kotaCB();	// tampilkan combobox KOTA
	// view();	// setelah kota otomatis --> tampilkan table KECAMATAN
});

function kotaCB () {
	ajax('../model/m_kota.php','action=view').done(function(ret){
		var tr='';
		if(ret.rCount==0) tr+='<tr><td colspan="2">kosong</td></tr>';
		else{
			no=1;
			$.each(ret.rows, function  (id,item) {
				tr+='<option value="'+item.kota_id+'">'+item.kota+'</option>';
				no++;
			});
			view(ret.rows[0].kota_id); // panggil list "kecamatan" 
			// default kota_id = 1 (id kota teratas : ascending mode)
		}$('#kotaCB').html(tr);
	});
}

function view (kotaId) {
	$('#tbody').html('<tr bgcolor="white"><td align="center" colspan="2"><img width="50px" src="../img/sharingan_loader.gif"/></td></tr>');
	// .fadeOut(8000);
	ajax('../model/m_kecamatan.php','action=view&kota_id='+kotaId).done(function(ret){
		var tr='';
		if(ret.rCount==0) tr+='<tr><td colspan="2">kosong</td></tr>';
		else{
			no=1;
			$.each(ret.rows, function  (id,item) {
				tr+='<tr align="center" bgcolor="white">'
					+'<td>'+no+'</td>'
					+'<td>'+item.kecamatan+'</td>'
				+'</tr>';
				no++;
			});
		}$('#tbody').html(tr);//.fadeIn('slow');
	});
}
function ajax (u,d) {
	return $.ajax({
			url:u,
			data:d,
			type:'post',
			dataType:'json',
		});
}