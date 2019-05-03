function getFormulir(host,args) {
	if (args=="KP") {
		location.assign(host+"assets/documents/Formulir%20Permohonan%20Kerja%20Praktik.pdf")
	}else if(args=="seminar"){
		location.assign(host+"assets/documents/Formulir%20Pendaftaran%20Seminar%20Kerja%20Praktik.pdf")
	}else if(args=="kartuKP"){
		location.assign(host+"assets/documents/Kartu%20Bimbingan%20Kerja%20Praktik.pdf")
	}else if(args=="kartuSeminarKP"){
		location.assign(host+"assets/documents/Kartu%20Peserta%20Seminar%20Kerja%20Praktik.pdf")
	}

	console.log(location.href)	
}