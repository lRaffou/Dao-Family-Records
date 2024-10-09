


    document.addEventListener("DOMContentLoaded", function () {
        // Sélectionner toutes les sections artisteCard
        const artisteCards = document.querySelectorAll(".artisteCard");

        artisteCards.forEach((card) => {
            const beforeClick = card.querySelector(".artisteBeforeClick");
            const afterClick = card.querySelector(".artistAfterClick");

            if (beforeClick && afterClick) {
                // Initialiser l'état de l'élément afterClick
                afterClick.style.display = "none";
                afterClick.style.maxHeight = "0";
                afterClick.style.overflow = "hidden";
                afterClick.style.transition = "max-height 0.5s ease-in-out";

                beforeClick.addEventListener("click", function () {
                    if (afterClick.style.display === "none") {
                        // Afficher et développer
                        afterClick.style.display = "block";
                        requestAnimationFrame(() => {
                            afterClick.style.maxHeight =
                                afterClick.scrollHeight + "px";
                        });
                    } else {
                        // Réduire et cacher
                        afterClick.style.maxHeight = "0";
                        afterClick.addEventListener(
                            "transitionend",
                            function hideAfterTransition() {
                                afterClick.style.display = "none";
                                afterClick.removeEventListener(
                                    "transitionend",
                                    hideAfterTransition
                                );
                            }
                        );
                    }
                });
            }
        });
    });
