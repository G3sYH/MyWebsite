const btnHitung = document.getElementById("btnHitung");
const sisiInput = document.getElementById("sisi");
const hasil = document.getElementById("hasil");

btnHitung.addEventListener("click", () => {
    const sisi = sisiInput.value;

    if (sisi === "" || sisi <= 0) {
        hasil.textContent = "Masukkan nilai sisi yang valid!";
        hasil.classList.add("error");
        return;
    }

    const luas = sisi * sisi;
    hasil.classList.remove("error");
    hasil.textContent = `Luas: ${luas} cm²`;
});