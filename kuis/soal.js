$(document).ready(function () {
  function random() {
    const a = Math.floor(Math.random() * 20 + 1);
    const b = Math.floor(Math.random() * 20 + 1);
    const c = Math.floor(Math.random() * 20 + 1);
    const d = Math.floor(Math.random() * 20 + 1);
    const e = Math.floor(Math.random() * 20 + 1);
    const f = Math.floor(Math.random() * 20 + 1);
    const g = Math.floor(Math.random() * 20 + 1);
    const h = Math.floor(Math.random() * 20 + 1);
    const i = Math.floor(Math.random() * 20 + 1);
    const j = Math.floor(Math.random() * 20 + 1);

    $('#num1').text(a);
    $('#num2').text(b);
    $('#num3').text(c);
    $('#num4').text(d);
    $('#num5').text(e);
    $('#num6').text(f);
    $('#num7').text(g);
    $('#num8').text(h);
    $('#num9').text(i);
    $('#num10').text(j);
  }
  random();

  const tombol = document.getElementById('submit');
  tombol.addEventListener('click', function result() {
    const angka1 = $('#num1').text();
    const angka2 = $('#num2').text();
    const angka3 = $('#num3').text();
    const angka4 = $('#num4').text();
    const angka5 = $('#num5').text();
    const angka6 = $('#num6').text();
    const angka7 = $('#num7').text();
    const angka8 = $('#num8').text();
    const angka9 = $('#num9').text();
    const angka10 = $('#num10').text();
    const hasil1 = parseInt(angka1) + parseInt(angka2);
    const hasil2 = parseInt(angka3) + parseInt(angka4);
    const hasil3 = parseInt(angka5) * parseInt(angka6);
    const hasil4 = parseInt(angka7) - parseInt(angka8);
    const hasil5 = parseInt(angka9) / parseInt(angka10);
    const jawaban1 = $('#total1').val();
    const jawaban2 = $('#total2').val();
    const jawaban3 = $('#total3').val();
    const jawaban4 = $('#total4').val();
    const jawaban5 = $('#total5').val();

    let score = 0;
    // No 1
    if (hasil1 == jawaban1) {
      score = score + 20;
      $('#total1').val('');
      random();
    } else {
      $('#total1').val('');
      random();
    }
    // no 2
    if (hasil2 == jawaban2) {
      score = score + 20;
      $('#total2').val('');
      random();
    } else {
      $('#total2').val('');
    }
    //   no 3
    if (hasil3 == jawaban3) {
      score = score + 20;
      $('#total3').val('');
      random();
    } else {
      $('#total3').val('');
    }
    //   no 4
    if (hasil4 == jawaban4) {
      score = score + 20;
      $('#total4').val('');
      random();
    } else {
      $('#total4').val('');
    }
    //   no 5
    if (hasil5 == jawaban5) {
      score = score + 20;
      $('#total5').val('');
      random();
    } else {
      $('#total5').val('');
    }

    $('#nilai').text(score);
  });
});
