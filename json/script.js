// const mahasiswa = {
//   nama: "Darul Annas",
//   nim: "111680",
//   email: "darulannas7@gmail.com",
// };

// console.log(JSON.stringify(mahasiswa));

// vanilla javascript

// const xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if (xhr.readyState == 4 && xhr.status == 200) {
//     const mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//   }
// };
// xhr.open("GET", "coba.json", true);
// xhr.send();

// stringify dari Object ke JSON
// parse dari JSON ke Object

// jquery

$.getJSON("coba.json", function (data) {
  console.log(data);
});
