$(document).ready(function () {
  function random() {
    const a = Math.floor(Math.random() * 10 + 1);
    const b = Math.floor(Math.random() * 10 + 1);

    $('#number1').text(a);
    $('#number2').text(b);
  }
  random();
  const tombol = document.getElementById('tombol');
  tombol.addEventListener('click', function result() {
    const nilai1 = $('#number1').text();
    const nilai2 = $('#number2').text();
    const hasil = parseInt(nilai1) + parseInt(nilai2);
    const jawaban = $('#total').val();

    if (hasil == jawaban) {
      alert('Kamu Benar, Kamu Hebat!');
      $('#total').val('');
      random();
    } else {
      alert('Tetap semangat!, jawaban kamu masih salah');
      $('#total').val('');
      random();
    }
  });
});
