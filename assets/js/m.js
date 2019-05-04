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

function profil() {
    active('profil');
}

function seminar() {
    active('seminar');
}

function DataDiri() {
    $.post("mahasiswa/datadiri","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Data Diri');
        active('data');
     }); 
}
function dashboard() {
    active('dash');
}
function logBook() {
    $.post("mahasiswa/logbook","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Log Book');
        active('logbook')
     }); 
}

function tempatKP() {
    $.post("mahasiswa/TPraktik","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Tempat Kerja Praktik');
        active('tempatKP');
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
    $.post("mahasiswa/uploadLaporan","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Upload Laporan');
            active('unggah');
     }); 
}
function unduh() {
    $.post("mahasiswa/unduh","",function(data){
             $('#isi').html(data);
             $('#textKonten').html('Unduh Berkas');
             active('unduh');
     }); 
}

function active(param) {
    var menu = ['dash','profil','unggah','data','logbook','tempatKP','PL','seminar','unduh'];
    for (var i = 0; i < menu.length; i++) {
        if (menu[i]==param){
           $('#'+menu[i]).addClass('active');
        }else{
            $('#'+menu[i]).removeClass('active');    
        }
    }
}