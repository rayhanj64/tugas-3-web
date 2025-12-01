const form = document.getElementById('form');
const reset = document.getElementById('reset');
const submit = document.getElementById('submit');

//deklarasi harga
const harga_paket = {
  "Reguler": 750000,
  "Intensif": 500000,
  "Supercamp": 1000000
};

const harga_fasilitas = {
  "Modul Cetak Lengkap": 50000,
  "Modul PDF": 25000,
  "Video Rekaman Kelas": 75000,
  "Grup Diskusi Telegram": 40000
};

const harga_cabang = {
  "Jakarta Pusat": 100000,
  "Yogyakarta": 80000,
  "Aceh": 120000,
  "Surabaya": 150000,
  "Makassar": 115000
};

const biaya_pembayaran = {
  "Transfer": 3000,
  "E-Wallet": 2000,
  "Tunai": 0
};


reset.addEventListener('click', function (event) {
  const yakin = confirm('Apakah Anda yakin ingin mengosongkan form ini?');
  if (yakin == false) {
    event.preventDefault();
  }
});

form.addEventListener('submit', function (event) {
  const yakin = confirm("Apakah anda yakin ingin submit form?");
  if (!yakin) {
    event.preventDefault();
//     //sembunyiin form
//     document.getElementById("halaman_form").style.display = "none"; 

//     //tampilih rekap
//     document.getElementById("halaman_rekap").style.display = "block";

//     //pake 2 metode buat ngambil data, berdasarkan name & id
//     const nama = form.nama.value;
//     const email = form.email.value;
//     const gender = form.gender.value
//     const cabang = document.getElementById("cabang").value;
//     const paket = form.paket.value;
//     const pembayaran = document.getElementById("metode_bayar").value;
//     const catatan = document.getElementById("catatan").value;

//     const fasilitas = Array.from(document.querySelectorAll('input[name="fasilitas"]:checked')).map(cb => cb.value);
// //                   | array    |   ambil semua yg dicentang                                 | buat array dari list                     
  
//     //itung total
//     let harga = 0;
//     harga += harga_paket[paket];
//     harga += harga_cabang[cabang];
//     harga += biaya_pembayaran[pembayaran];
//     fasilitas.forEach(fasilitas => {
//       harga += harga_fasilitas[fasilitas];
//     });


//     document.getElementById("rekap_nama").innerText = nama; //innerText & textContent sama ajh
//     document.getElementById("rekap_email").textContent = email;
//     document.getElementById("rekap_gender").textContent = gender;
//     document.getElementById("rekap_cabang").textContent = cabang;
//     document.getElementById("rekap_paket").textContent = paket == "" ? "undefined" : paket;
//     document.getElementById("rekap_metode_bayar").textContent = pembayaran;
//     document.getElementById("rekap_catatan").textContent = catatan == "" ? "-" : catatan;
//     document.getElementById("rekap_fasilitas").textContent = fasilitas.length == 0 ? "-" : fasilitas.join(", ");
    
//     if(paket){
//     document.getElementById("total_harga").textContent = harga;
//     } else {
//       document.getElementById("total_harga").textContent = "";
//     }
  }
});

