
function getJadwalShalat(){
    fetch("https://api.banghasan.com/sholat/format/json/jadwal/kota/703/tanggal/2017-02-07")
    .then((response) => response.json())
    .then((data) => {
        const jadwal = data.jadwal.data;
        console.log(jadwal);
        document.querySelector('.imsak').textContent = jadwal.imsak;
        document.querySelector('.subuh').textContent = jadwal.subuh;
        document.querySelector('.dzuhur').textContent = jadwal.dzuhur;
        document.querySelector('.ashar').textContent = jadwal.ashar;
        document.querySelector('.maghrib').textContent = jadwal.maghrib;
        document.querySelector('.isya').textContent = jadwal.isya;
    }
    );
}

getJadwalShalat();