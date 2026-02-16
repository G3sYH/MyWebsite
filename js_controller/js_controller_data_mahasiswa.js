document.addEventListener("DOMContentLoaded", () => {
    const nimInput = document.querySelector('input[name="nim"]');
    const fakultas = document.getElementById("fakultas");
    const prodi = document.getElementById("prodi");

    // === BLOK HURUF & SIMBOL DI NIM ===
    nimInput.addEventListener("input", () => {
        nimInput.value = nimInput.value.replace(/[^0-9]/g, "");
    });

    // === DROPDOWN PRODI ===
    fakultas.addEventListener("change", () => {
        const fakultasId = fakultas.value;
        prodi.innerHTML = "<option value=''>Pilih Prodi</option>";

        if (!fakultasId) return;

        fetch("../../php_controller/controller_get_prodi.php?fakultas_id=" + fakultasId)
            .then(res => res.json())
            .then(data => {
                data.forEach(item => {
                    const opt = document.createElement("option");
                    opt.value = item.id;
                    opt.textContent = item.nama;
                    prodi.appendChild(opt);
                });
            });
    });
});

document.addEventListener("DOMContentLoaded", () => {

    const items = document.querySelectorAll(".animate-item");
    let delayIndex = 0;

    items.forEach(el => {

        // 🔥 kalau ada class no-delay → langsung muncul
        if (el.classList.contains("no-delay")) {
            el.style.animation = "itemEnter 0.5s ease-out forwards";
            el.style.animationDelay = "0s";
            return;
        }

        // normal stagger
        el.style.animation = "itemEnter 0.6s ease-out forwards";
        el.style.animationDelay = `${delayIndex * 0.12}s`;
        delayIndex++;
    });

    /* ===== TABLE ROW STAGGER ===== */
    const rows = document.querySelectorAll("tbody tr");

    rows.forEach((row, i) => {
        row.style.opacity = "0";
        row.style.transform = "translateY(10px)";
        row.style.animation = "itemEnter 0.45s ease forwards";
        row.style.animationDelay = `${delayIndex * 0.12 + i * 0.08}s`;
    });

});


