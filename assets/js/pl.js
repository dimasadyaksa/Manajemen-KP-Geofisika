function dashboard() {
    $.post("pembimbing_lapangan/Dashboard","",function(data){
             $('#isi').html(data);
            active('dash');
           
     });
}

function profil() {
    $.post("pembimbing_lapangan/Profil","",function(data){
             $('#isi').html(data);
            active('profil');
           
     });
}

function penilaian() {
	 $.post("pembimbing_lapangan/penilaian","",function(data){
             $('#isi').html(data);
             active('penilaian');
           
     }); 
}

function logbook() {
	 $.post("pembimbing_lapangan/daftar_logbook","",function(data){
             $('#isi').html(data);
             active('logbook');
           
     }); 
}

function daftar() {

	 $.post('pembimbing_lapangan/daftar_mahasiswa',"",function(data){
             $('#isi').html(data);
             listmhs();		     
             active("daftar");
     }); 
}
function active(param) {
	var menu = ['profil','dash','penilaian','logbook','daftar'];
	for (var i = 0; i < menu.length; i++) {
		if (menu[i]==param){
           $('#'+menu[i]).addClass('active');
        }else{
			$('#'+menu[i]).removeClass('active'); 	 
        }
	}
}

function listmhs() {
	$.post("pembimbing_lapangan/listMhs",'',function(data){
             $('#list').html(data);
     });
}

function dataTable(nama,nim,angkatan,judul,tempat,mulai,selesai) {
        $("#detNama").val(nama);
        $("#detNim").val(nim);
        $("#detAngkatan").val(angkatan);
        $("#detJudul").val(judul);
        $("#detTempat").val(tempat);
        $("#detMulai").val(mulai);
        $("#detSelesai").val(selesai);
}