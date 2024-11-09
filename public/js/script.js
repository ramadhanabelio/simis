$(document).ready(function () {
    $("#misTable").DataTable();
});

// document.addEventListener("DOMContentLoaded", function () {
//     const hargaInput = document.getElementById("harga");

//     function formatRupiah(event) {
//         let value = hargaInput.value.replace(/[^\d]/g, "");
//         if (value.length > 0) {
//             value = "Rp. " + value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
//         }
//         hargaInput.value = value;
//     }

//     if (hargaInput) {
//         hargaInput.addEventListener("input", formatRupiah);
//     }
// });
