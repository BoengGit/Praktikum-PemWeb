document.getElementById("btnCek").addEventListener("click", function () {
  const nim = document.getElementById("nim").value;
  const nilaiInput = document.getElementById("nilai").value;
  const hasilDiv = document.getElementById("hasil");
  const nilai = parseFloat(nilaiInput);
  hasilDiv.innerHTML = "";
  hasilDiv.className = "result-area";

  if (nim === "" || nilaiInput === "") {
    hasilDiv.innerText = "Harap isi NIM dan Nilai!";
    hasilDiv.classList.add("error");
    return;
  }

  if (nilai < 0 || nilai > 100 || isNaN(nilai)) {
    hasilDiv.innerText = "Nilai tidak valid!";
    hasilDiv.classList.add("error");
  } else {
    let hurufMutu = "";

    if (nilai >= 80) {
      hurufMutu = "A";
    } else if (nilai >= 70) {
      hurufMutu = "B";
    } else if (nilai >= 60) {
      hurufMutu = "C";
    } else if (nilai >= 50) {
      hurufMutu = "D";
    } else {
      hurufMutu = "E";
    }

    hasilDiv.innerHTML = `NIM: ${nim} <br> Huruf Mutu: ${hurufMutu}`;
    hasilDiv.classList.add("success");
  }
});
