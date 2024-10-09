<?php
header("Content-Type: application/javascript");

    function send() {
        window.open("mailto:r.lourenco@outlook.fr");
    }

    document.getElementById("year").innerText = new Date().getFullYear();

    // ____________________________________Carousel____________________________________

    document.addEventListener("DOMContentLoaded", function () {
        const carousel = document.querySelector(".carousel");
        if (!carousel) return; // Sortir si le carrousel n'existe pas

        const firstImg = carousel.firstElementChild;
        const arrowIcons = document.querySelectorAll(".wrapper i");

        let isDragStart = false,
            isDragging = false,
            prevPageX,
            prevScrollLeft,
            positionDiff;

        const showHideIcons = () => {
            const scrollWidth = carousel.scrollWidth - carousel.clientWidth;
            arrowIcons[0].style.display =
                carousel.scrollLeft === 0 ? "none" : "block";
            arrowIcons[1].style.display =
                carousel.scrollLeft === scrollWidth ? "none" : "block";
        };

        arrowIcons.forEach((icon) => {
            icon.addEventListener("click", () => {
                const firstImgWidth = firstImg.clientWidth + 14;
                carousel.scrollLeft +=
                    icon.id === "left" ? -firstImgWidth : firstImgWidth;
                setTimeout(showHideIcons, 60);
            });
        });

        const autoSlide = () => {
            if (carousel.scrollLeft === carousel.scrollWidth - carousel.clientWidth)
                return;

            const firstImgWidth = firstImg.clientWidth + 14;
            const scrollAmount =
                positionDiff > firstImgWidth / 3 ? firstImgWidth : positionDiff;

            carousel.scrollTo({
                left:
                    carousel.scrollLeft +
                    (carousel.scrollLeft > prevScrollLeft
                        ? scrollAmount
                        : -scrollAmount),
                behavior: "smooth",
            });
        };

        const dragStart = (e) => {
            isDragStart = true;
            prevPageX = e.pageX || e.touches[0].pageX;
            prevScrollLeft = carousel.scrollLeft;
        };

        const dragging = (e) => {
            if (!isDragStart) return;
            e.preventDefault();
            isDragging = true;
            carousel.classList.add("dragging");
            positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
            carousel.scrollLeft = prevScrollLeft - positionDiff;
            showHideIcons();
        };

        const dragStop = () => {
            isDragStart = false;
            carousel.classList.remove("dragging");
            if (!isDragging) return;
            isDragging = false;
            autoSlide();
        };

        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("mousemove", dragging);
        carousel.addEventListener("mouseup", dragStop);
        carousel.addEventListener("mouseleave", dragStop);

        carousel.addEventListener("touchstart", dragStart);
        carousel.addEventListener("touchmove", dragging);
        carousel.addEventListener("touchend", dragStop);
    });

    // ___________________________________End_Carousel____________________________________
?>