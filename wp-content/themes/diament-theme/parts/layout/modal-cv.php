<div class="popup-send-cv">
  <div class="popup-send-cv-container">
    <div class="popup-send-cv-heading">
      <h5>Wyślij nam swoje CV w formularzu poniżej</h5>
      <h6>My znajdziemy dla Ciebie idealną pracę!</h6>
    </div>
    <form class="popup-send-cv__form" action="#">
      <div>
        <label for="cv_name">
            <p>Twoje imię i nazwisko</p>
            <input
                type="text"
                name="cv_name"
                id="cv_name"
                placeholder="Twoje imię i nazwisko"
            />
        </label>
      </div>
      <div>
        <label for="cv_email">
            <p>Twój e-mail</p>
            <input
                type="email"
                name="cv_email"
                id="cv_email"
                placeholder="Twój e-mail"
            />
        </label>
      </div>
      <div>
        <label for="cv_tel">
            <p>Twój numer telefonu</p>
            <input
                type="tel"
                name="cv_tel"
                id="cv_tel"
                placeholder="Twój numer telefonu"
            />
        </label>
      </div>
      <div class="popup-send-cv-file">
        <label for="cv_file">
            <p class="is_visible">Wgraj swóje CV</p>
            <input type="file" name="cv_file" id="cv_file" />
        </label>
      </div>
      <div>
        <label
            class="cv_privacy-agreement-container"
            for="cv_privacy-agreement"
        >
            <input
                type="checkbox"
                name="cv_privacy-agreement"
                id="cv_privacy-agreement"
            />
            Wyrażam zgodę na przetwarzanie moich danych
            osobowych zgodnie z obowiązującymi przepisami RODO
        </label>
      </div>
      <div>
        <button
            class="btn popup-send-cv-submit"
            name="cv_submit"
            id="cv_submit"
            type="submit"
        >
            Wyślij
        </button>
      </div>
    </form>
    <div class="popup-send-cv-close-btn js-close-popup-send-cv">
        <i class="fas fa-times"></i>
    </div>
  </div>
</div>