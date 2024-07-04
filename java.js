function Selesai() {
    var nama = document.fform.nama.value;
    var email= document.fform.email.value;
    var jumlah = document.fform.jumlah.value;
    

    if (nama && email && jumlah) {
        message = `PENYIMPANAN DATA${nama} TANGGAL ${tanggal} HARI ${hari} WAKTU ${waktu}`;
        alert(message);
        document.fform.submit();
    } else {
        alert("Semua kolom harus diisi.");
    }
}