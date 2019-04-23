var nip=true;
var email=true;


function loadTambahUser() { 
	 $.post("koordinator/tambahUser","",function(data){
             $('#isi').html(data);
            
             active('tambahuser');
          });
    updateList(); 
}

function dashboard() {
	active('dash');
}

function profil() {
	active('profil');
}

function loadTambahKP() {
	 $.post("koordinator/tempatKP","",function(data){
             $('#isi').html(data);
             active('tambahkp');
           
     }); 
}

function daftar(no) {
	var x = {
		'daftar' : no
	};
	var menu;
	if(no==1){
		menu='daftarMhs'
	}else if (no==2){
		menu='daftarDp';
	}else{
		menu='daftarDpl';
	}
	 $.post('koordinator/'+menu,x,function(data){
             $('#isi').html(data);
		     if(no==1){
		     	listmhs();
		     }else if(no==2){
		     	listdp();
		     }
             active(menu);
     }); 
}

function addUser(){
	var Nim = document.getElementById('nim').value;
	var Nama = document.getElementById('Nama').value;
	var email = document.getElementById('Email').value;
	var password = document.getElementById('Password').value;
	var option = document.getElementById("status");
	var i = option.selectedIndex;
	var status = option.options[i].text; 
	var data = {
		'Nim' : Nim,
		'Nama': Nama,
		'Email': email,
		'Password': password,
		'status': status
	}
	 $.post("koordinator/createUser",data,function(data){
    	 updateList();
     });
     updateList(); 
}

function updateList() {
	$.post("koordinator/listUser",'',function(data){
             $('#list').html(data);
     });
}
function listmhs() {
	$.post("koordinator/listMhs",'',function(data){
             $('#dftr').html(data);
     });
}
function listdp() {
	$.post("koordinator/listDp",'',function(data){
             $('#dftr').html(data);
     });
}

function sendEmail(argument) {
	var email = document.getElementById('Email').value;
	$.post("koordinator/Get4Edit",'',function(data){
             $('#dftr').html(data);
     });
}

function active(param) {
	var menu = ['profil','dash','daftarMhs','daftarDp','daftarDpl','tambahuser','tambahkp'];
	for (var i = 0; i < menu.length; i++) {
		if (menu[i]==param){
           $('#'+menu[i]).addClass('active');
        }else{
			$('#'+menu[i]).removeClass('active'); 	 
        }
	}
}

function dataTable(email,password,status) {
        $("#emailUpdt").val(email);
        $("#passwordUpdt").val(password);
        if (status=="Mahasiswa") {
        	document.getElementById("selUpdt").selectedIndex = "1"; 
        }else if(status=="Pembimbing Dosen"){
        	document.getElementById("selUpdt").selectedIndex = "2"; 
        }else if(status=="Pembimbing Lapangan"){
        	document.getElementById("selUpdt").selectedIndex = "3"; 
        }
}


function detectNIP() {
	var nim = {
		'nim':document.getElementById('nim').value
	}
	$.post("koordinator/detectNIP",nim,function(data){
		if(data=='duplikat'){
			$('#nipAlert').css('display','block');
			nip = true;
		}else{
			$('#nipAlert').css('display','none');
			nip = false;
		}
        isDisabled();
     });
}

function detectEmail() {
	var nim = {
		'email':document.getElementById('Email').value
	}
	$.post("koordinator/detectEmail",nim,function(data){
		if(data=='duplikat'){
			$('#emailAlert').css('display','block');
			email = true;
		}else{
			$('#emailAlert').css('display','none');
			email = false;
		}
        isDisabled();
     });
}

function isDisabled() {
	if(nip||email){
		document.getElementById("tambah").disabled = true; 
	}else{
		document.getElementById("tambah").disabled = false; 
	}
}