function loadTambahUser() {
	 
	 $.post("koordinator/tambahUser","",function(data){
             $('#isi').html(data);
            
             active('tambahuser');
          }); 
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
	 $.post("koordinator/"+menu,x,function(data){
             $('#isi').html(data);
             active(menu);
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
