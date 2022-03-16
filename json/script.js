// let mahasiswa = {
//     nama  : "Dede Nurhadi Putra",
//     nim   : "101151186",
//     email : "denurhadi4@gmail.com"
// }
// console.log(JSON.stringify(mahasiswa));


// Ajax Vanilla Js
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if(xhr.readyState == 4 && xhr.status == 200){
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();



// Ajax JQuery
$.getJSON('coba.json', function (data) {
    console.log(data);
})