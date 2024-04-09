class PopupPower
{
  constructor() {
    this.settings = JSON.parse(document.querySelector('#popupPower').getAttribute('data-settings'));
    this.initCloseButton();
    this.controlPopupAppearance();
  }

  initCloseButton() {
    document.querySelector('.popuppower-btn-close').addEventListener("click", (event) => {
      event.stopImmediatePropagation();
      event.preventDefault();
      this.closePopup();
    });
  }

  controlPopupAppearance() {
    let cookie = this.getCookie();

    if (!cookie || cookie.behaviourAppearance == 'once' && cookie.showCount == 0) {
      this.showPopup();
    }
  }

  showPopup() {
    document.querySelector('#popupPower').classList.add("popuppower-show");
  }

  closePopup() {
    if (this.settings.behaviourAppearance == 'once') {
      this.saveCookie({
        behaviourAppearance: 'once',
        showCount: 1
      });
      document.querySelector('#popupPower').remove();
    }
  }

  saveCookie(settings) {
    document.cookie = "popupPower = " + JSON.stringify(settings);
  }

  getCookie() {
    let allCookies = document.cookie.split(';');

    for(let i = 0; i < allCookies.length; i++) {
      let name = allCookies[i].split('=')[0].trim();

      if (name == 'popupPower') {
        return JSON.parse(allCookies[i].split('=')[1].trim());
      }
    }

    return null;
  }
}

export default new PopupPower();
