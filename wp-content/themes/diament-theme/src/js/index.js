import "normalize.css";
import "swiper/swiper-bundle.css";
import "../sass/style.scss";
import gsap from "gsap";

(() => {
    const popupSendCv = document.querySelector(`.popup-send-cv`);

    if (typeof popupSendCv !== `undefined` && popupSendCv !== null) {
        /**
         * Open / Close actions
         */
        const openPopupBtn = document.querySelectorAll(
            ".js-open-popup-send-cv"
        );
        const closePopupBtn = document.querySelector(".js-close-popup-send-cv");

        function openPopup() {
            const openPopupTimeline = gsap.timeline();

            openPopupTimeline
                .set(popupSendCv, { display: "flex" })
                .to(popupSendCv, { opacity: 1 });
        }

        function closePopup() {
            const closePopupTimeline = gsap.timeline();

            closePopupTimeline
                .to(popupSendCv, { opacity: 0 })
                .set(popupSendCv, { display: "none" });
        }

        openPopupBtn.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                e.preventDefault();
                openPopup();
            });
        });

        closePopupBtn.addEventListener("click", (e) => {
            e.preventDefault();
            closePopup();
        });

        /**
         * Form Validation
         */

        const popupForm = document.querySelector(".popup-send-cv__form");
        const privacyAcceptanceInput = document.querySelector(
            "#cv_privacy-agreement"
        );

        // Check if Privacy Policy link is checked
        const submitButton = document.querySelector("#cv_submit");

        submitButton.disabled = true;

        privacyAcceptanceInput.addEventListener("change", () => {
            if (privacyAcceptanceInput.checked) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        });
    }
})();

(() => {
    const mainNav = document.querySelector(".main-nav");
    const mainNavLogoImage = document.querySelector(".main-nav-logo img");

    const initMainNavLogoImageHeight = mainNavLogoImage.offsetHeight;
    const smallerMainNavLogoImageHeight = 60;

    window.addEventListener("scroll", () => {
        if (window.pageYOffset > 100) {
            mainNavLogoImage.style.height = `${smallerMainNavLogoImageHeight}px`;
        } else {
            mainNavLogoImage.style.height = `${initMainNavLogoImageHeight}px`;
        }
    });
})();

console.log("Silence is gold");