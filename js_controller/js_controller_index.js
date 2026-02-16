const checkbox = document.getElementById("agree");
const button = document.getElementById("homeBtn");
const warning = document.getElementById("warning");

warning.style.display = "none";

checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
        button.classList.remove("disabled");
        button.classList.add("enabled");
        warning.style.display = "none";
    } else {
        button.classList.add("disabled");
        button.classList.remove("enabled");
    }
});

button.addEventListener("click", () => {
    if (!checkbox.checked) {
        warning.style.display = "block";
        warning.classList.add("shake");
        setTimeout(() => warning.classList.remove("shake"), 300);
    } else {
        window.location.href = "php_view/menu/menu_home.php";
    }
});