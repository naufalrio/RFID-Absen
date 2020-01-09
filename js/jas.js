function tamu()
{
    var nama, warga, keperluan;
    nama = document.getElementById("nama").value;
    warga = document.getElementById("warga").value;
    keperluan = document.getElementById("keperluan").value;
    if(nama == ""|| warga == "" || keperluan == "")
    {
        alert("Ada yang belum diisi tuh");
        return false;
    };
}