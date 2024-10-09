<?php
header("Content-Type: application/javascript");

    function _(e) {
        return document.getElementById(e);
    }

    const displayForm = _("displayForm");
    const forLogin = _("forLogin");
    const forRegister = _("forRegister");
    const formLogin = _("formLogin");
    const formRegister = _("formRegister");
    const formContainer = _("formContainer");

    forRegister.addEventListener("click", () => {
        forLogin.classList.remove("active");
        forRegister.classList.add("active");
        if (formRegister.classList.contains("toggleForm")) {
            formContainer.style.transform = "translate(-100%)";
            formContainer.style.transition = "transform 0.5s";
            formRegister.classList.remove("toggleForm");
            formLogin.classList.add("toggleForm");
        }
    });

    forLogin.addEventListener("click", () => {
        forRegister.classList.remove("active");
        forLogin.classList.add("active");
        if (formLogin.classList.contains("toggleForm")) {
            formContainer.style.transform = "translate(0%)";
            formContainer.style.transition = "transform 0.5s";
            formLogin.classList.remove("toggleForm");
            formRegister.classList.add("toggleForm");
        }
    });
?>