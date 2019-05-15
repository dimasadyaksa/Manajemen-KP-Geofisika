function Dashboard() {
	$.post("Pembimbing_Dosen/dash",'',function(data){
             $('#Konten').html(data);
             active("dash");
     });
}
function Profil() {
	$.post("Pembimbing_Dosen/dash",'',function(data){
             $('#Konten').html(data);
             active("profil");
     });
}
function Penilaian() {
	$.post("Pembimbing_Dosen/penilaian",'',function(data){
             $('#Konten').html(data);
             active("penilaian");
     });
}
function Pengajuan() {
	$.post("Pembimbing_Dosen/Pengajuan",'',function(data){
             $('#Konten').html(data);
             active("Pengajuan");
     });
}
function Logbook() {
	$.post("Pembimbing_Dosen/daftar_logbook",'',function(data){
             $('#Konten').html(data);
             active("logbook");
     });
}
function DaftarMhs() {
	$.post("Pembimbing_Dosen/daftar_mahasiswa",'',function(data){
             $('#Konten').html(data);
             active("daftar");
     });
}
function addNilai() {
	var Nama = document.getElementById('nama').value;
	var materi = document.getElementById('materi').value;
	var pemahamanmateri = document.getElementById('pemahamanmateri').value;
	var bahasa = document.getElementById("bahasa").value;
	var catatan = document.getElementById("catatan").value;
	var data = {
		'nama' : Nama,
		'materi': materi,
		'penugasanmateri': pemahamanmateri,
		'bahasatatatulis': bahasa,
		'catatan': catatan
	}
	$.post("Pembimbing_Dosen/tambah_aksi",data,function(data){
             $('#Konten').html(data);
     });
}
function active(param) {
	var menu = ['profil','dash','penilaian','Pengajuan','logbook','daftar'];
	for (var i = 0; i < menu.length; i++) {
		if (menu[i]==param){
           $('#'+menu[i]).addClass('active');
        }else{
			$('#'+menu[i]).removeClass('active'); 	 
        }
	}
}

function viewLog(nim) {
	$.post("Pembimbing_Dosen/logbook/"+nim,'',function(data){
             $('#Konten').html(data);
     });
}

function hapus(id){
	$.post("Pembimbing_Dosen/hapus/"+id,'',function(data){
             $('#Konten').html(data);
             Penilaian();
     });
}

function aksiPengajuan(nim,argument) {
	var data = {
		'nim':nim,
		'aksi':argument
	}
	console.log(data);
	$.post("Pembimbing_Dosen/aksiPengajuan",data,function(data){
             $('#Konten').html(data);
             Pengajuan();
     });
	
}

function getDataPerusahaan(nim) {
	$.post("Pembimbing_Dosen/aksiPengajuan",data,function(data){
             $('#Konten').html(data);
     });
}