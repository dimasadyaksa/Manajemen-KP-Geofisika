function loadTambahUser() {
	 
	 $.post("tambahUser","",function(data){
             $('#isi').html(data);
            /* if (!$('#tambahuser').hasClass('active')){
             	 $('#tambahuser').addClass('active');
             	 $('#tambahkp').removeClass('active');
             }*/
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
	 $.post("tempatKP","",function(data){
             $('#isi').html(data);
             active('tambahkp');
           /*  if (!$('#tambahkp').hasClass('active')){
             	 $('#tambahkp').addClass('active');
             	 $('#tambahuser').removeClass('active');
             }*/
     }); 
}

function daftar(no) {
	var x = {
		'daftar' : no
	};
	var menu;
	if(no==1){
		menu='mhs'
	}else if (no==2){
		menu='dsp';
	}else{
		menu='dspl';
	}
	 $.post("daftar",x,function(data){
             $('#isi').html(data);
             active(menu);
     }); 
}

function active(param) {
	var menu = ['profil','dash','mhs','dsp','dspl','tambahuser','tambahkp'];
	for (var i = 0; i < menu.length; i++) {
		if (menu[i]==param){
           $('#'+menu[i]).addClass('active');
        }else{
			$('#'+menu[i]).removeClass('active'); 	 
        }
	}
}