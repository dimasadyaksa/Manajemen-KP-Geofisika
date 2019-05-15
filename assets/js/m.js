$(function(){
        $(".form-edit").validationEngine();
        $(".form-add").validationEngine();
        $(".date").datepicker({format: "yyyy-mm-dd"});
        $("#dataTable1").DataTable();
        
        var config = {
            '.chosen-select'           : {max_selected_options: 12},
            '.chosen-select-deselect'  : {allow_single_deselect:true},
            '.chosen-select-no-single' : {disable_search_threshold:10},
            '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
            '.chosen-select-width'     : {width:"95%"}
            }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    });   


var isLaporan = false;

function profil() {
    $.post("mahasiswa/Profil","",function(data){
             $('#isi').html(data);
    active('profil');
     }); 
}

function seminar() {
        $.post("mahasiswa/daftarseminar","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Daftar Seminar');
        active('seminar');
     }); 
}

function saveSeminar() {
    var nim = document.getElementById('nim').value;
    var ruang =  document.getElementById('ruang').value;
    var gedung = document.getElementById('gedung').value;
    var waktu = document.getElementById('waktu').value;

    var data = {
        'NIM':nim,
        'Ruang':ruang,
        'Gedung':gedung,
        'waktu':waktu
    }
    $.post("mahasiswa/saveSeminar",data,function(data){
         seminar();
     });
}

function DataDiri() {
    $.post("mahasiswa/datadiri","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Data Diri');
        active('data');
     }); 
}
function dashboard() {
     $.post("mahasiswa/logbook","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Log Book');
    active('dash');
     }); 
}
function logBook() {
    $.post("mahasiswa/logbook","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Log Book');
        active('logbook')
     }); 
}
function PembimbingDosen() {
    $.post("mahasiswa/PembimbingDosen","",function(data){
             $('#isi').html(data);
        active('pd')
     }); 
}

function TPraktik() {
    $.post("mahasiswa/TPraktik","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Tempat Kerja Praktik');
        active('TPraktik');
     }); 
}

function PLapangan() {
    $.post("mahasiswa/PLapangan","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Pembimbing Lapangan');
            active('PL');
     }); 
}
function uploadLaporan() {
    if(isLaporan){
        console.log("true");
        location.assign('mahasiswa');
        $.post("mahasiswa/uploadLaporan","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Upload Laporan');
            active('unggah');
     }); 
    }else{
        console.log("false");
         $.post("mahasiswa/uploadLaporan","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Upload Laporan');
            active('unggah');
     }); 
    }
   
}

function setLaporan(args) {
    if (args) {
        isLaporan=true;
    }else{
        isLaporan=false;
    }
}

function unduh() {
    $.post("mahasiswa/unduh","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Unduh Berkas');
             active('unduh');
     }); 
}

function active(param) {
    var menu = ['dash','profil','unggah','data','logbook','TPraktik','PL','seminar','unduh','pd'];
    for (var i = 0; i < menu.length; i++) {
        if (menu[i]==param){
           $('#'+menu[i]).addClass('active');
        }else{
            $('#'+menu[i]).removeClass('active');    
        }
    }
}

function submitLogbook() {
    var nim = document.getElementById('nim').value;
    var tanggal=  document.getElementById('tanggal').value;
    var jammulai = document.getElementById('jammulai').value;
    var jamselesai = document.getElementById('jamselesai').value;
    var kegiatan = document.getElementById('tugas').value;

    var data = {
        'nim':nim,
        'tanggal':tanggal,
        'jammulai':jammulai,
        'jamselesai':jamselesai,
        'kegiatan':kegiatan
    }

    $.post("mahasiswa/submitLogbook",data,function(data){
            logBook();
     }); 
}

function hapusLogbook($arg) {
    var tanggal = document.getElementById('tanggal').value;
    data = {
        'tanggal' : $arg
    }
    $.post("mahasiswa/hapusLogbook",data,function(data){
            logBook();
     }); 
}

function updatedatadiri() {
    var nim = document.getElementById('nim').value;
    var tanggal=  document.getElementById('tanggal').value;
    var jammulai = document.getElementById('jammulai').value;
    var jamselesai = document.getElementById('jamselesai').value;
    var kegiatan = document.getElementById('tugas').value;

    var data = {
        'nim':nim,
        'tanggal':tanggal,
        'jammulai':jammulai,
        'jamselesai':jamselesai,
        'kegiatan':kegiatan
    }

    $.post("mahasiswa/submitLogbook",data,function(data){
            logBook();
     }); 
}

function permohonanKP() {
    var nama = document.getElementById('nama').value;
    var nim = document.getElementById('nim').value;
    var ip = document.getElementById('ip').value;
    var sks = document.getElementById('sks').value;
    var angkatan = document.getElementById('angkatan').value;
    var hp = document.getElementById('hp').value;
    
    var data = {
        'nama':nama,
        'nim':nim,
        'ip':ip,
        'sks':sks,
        'angkatan':angkatan,
        'hp':hp
    }

    $.post("mahasiswa/update_datadiri",data,function (data) {
        DataDiri();
    })
}

function tambahPerusahaan() {
    var nama = document.getElementById('namaperusahaan').value;
    var bidang = document.getElementById('bidang').value;
    var alamat = document.getElementById('alamat').value;
    var kontak = document.getElementById('kontak').value;

    var data = {
        'namaperusahaan':nama,
        'bidang':bidang,
        'alamat':alamat,
        'kontak':kontak
    }

    $.post("mahasiswa/tambahPerusahaan",data,function (data) {
        TPraktik();
    })
}

function tambahPembimbing() {
    var nama = document.getElementById('nama').value;
    var pass = document.getElementById('password').value;
    var email = document.getElementById('email').value;
    var jabatan = document.getElementById('posisi').value
    var kontak = document.getElementById('kontak').value;

    var data = {
        'nama':nama,
        'pass':pass,
        'email':email,
        'jabatan':jabatan,
        'kontak':kontak
    }

    $.post("mahasiswa/tambahPL",data,function (data) {
        PLapangan();
    })
}