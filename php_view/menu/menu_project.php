<?php require_once "../../auth/auth.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>G3sYH | Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="/MyWebsite/img/favicon.png">
    <link rel="stylesheet" href="../../stylecss_view/stylecss_menu_project.css">
</head>
<body>

<div class="container">
    <div class="card animate-card">

        <h1 class="title animate-item" >My Projects o_0</h1>
        <p class="subtitle animate-item">Campus & personal projects</p>

        <!-- PROJECT LIST -->
        <div id="projectList" class="project-list animate-list"></div>

        <!-- PAGINATION -->
        <div class="pagination animate-item">
            <button id="prevBtn">Prev</button>
            <span id="pageInfo">1 / 1</span>
            <button id="nextBtn">Next</button>
        </div>

        <a href="menu_home.php" class="btn-back animate-item">
            ← Back to Home
        </a>

    </div>
</div>

<script>
/* ======================
   DATA PROJECT
====================== */
const projects = [
    {
        title: "Calculator",
        icon: "fa-calculator",
        desc: "Kalkulator sederhana menggunakan HTML, CSS, dan JavaScript.",
        link: "../project/project_calculator.php"
    },
    {
        title: "Hitung Luas Persegi",
        icon: "fa-square",
        desc: "Program menghitung luas persegi berbasis web.",
        link: "../project/project_hitung_luas_persegi.php"
    },
    {
        title: "Grade Nilai Siswa",
        icon: "fa-graduation-cap",
        desc: "Menentukan grade dan status nilai siswa.",
        link: "../project/project_grade_nilai_mahasiswa.php"
    },
    {
        title: "Data Mahasiswa",
        icon: "fa-user-graduate",
        desc: "Pencarian data mahasiswa menggunakan data base.",
        link: "../project/project_data_mahasiswa.php"
    },

    /* ====== PROJECT KAMPUS (CONTOH) ====== */
    {
        title: "Input Nilai Mahasiswa",
        icon: "fa-clipboard",
        desc: "Input dan pengolahan nilai mahasiswa.",
        link: "#"
    },
    {
        title: "Login System",
        icon: "fa-lock",
        desc: "Sistem login sederhana berbasis PHP.",
        link: "#"
    },
    {
        title: "CRUD Mahasiswa",
        icon: "fa-database",
        desc: "CRUD data mahasiswa menggunakan PHP & MySQL.",
        link: "#"
    },
    {
        title: "Absensi Online",
        icon: "fa-calendar-check",
        desc: "Aplikasi absensi online untuk mahasiswa.",
        link: "#"
    }
];

/* ======================
   PAGINATION LOGIC
====================== */
const perPage = 4;
let currentPage = 1;
const totalPages = Math.ceil(projects.length / perPage);

const projectList = document.getElementById("projectList");
const pageInfo = document.getElementById("pageInfo");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

function renderProjects() {
    projectList.innerHTML = "";

    const start = (currentPage - 1) * perPage;
    const end = start + perPage;
    const pageProjects = projects.slice(start, end);

    pageProjects.forEach((p, i) => {
    projectList.innerHTML += `
        <a href="${p.link}" 
           class="project-item"
           style="animation-delay: ${i * 0.12}s">
           
            <div class="project-title">
                <i class="fa-solid ${p.icon}"></i>
                ${p.title}
            </div>
            <p class="project-desc">${p.desc}</p>
        </a>
    `;
});

    pageInfo.textContent = `${currentPage} / ${totalPages}`;
    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage === totalPages;
}

prevBtn.onclick = () => {
    if (currentPage > 1) {
        currentPage--;
        renderProjects();
    }
};

nextBtn.onclick = () => {
    if (currentPage < totalPages) {
        currentPage++;
        renderProjects();
    }
};

renderProjects();
</script>

</body>
</html>
