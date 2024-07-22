class PopupPower
{
  constructor() {
    this.hooks = this.getHooks();
    this.popup = document.querySelector('#popupPower');
    this.settings = JSON.parse(this.popup.getAttribute('data-settings'));
    this.initCloseButton();
    this.controlPopupAppearance();

    window.popupPower = this;
    let popupPowerInitEvent = new Event("popuppower-init");
    document.dispatchEvent(popupPowerInitEvent);
  }

  initCloseButton() {
    let closeBtn = document.querySelector('.popuppower-btn-close');

    if (closeBtn) {
      closeBtn.addEventListener("click", (event) => {
        event.stopImmediatePropagation();
        event.preventDefault();
        this.closePopup();
      });
    }

    // close modal also, when click outsite of it
    if (typeof this.settings.layout == "undefined" || this.settings.layout != 'confirm') {
      this.popup.addEventListener("click", (event) => {
        if (event.target == this.popup) {
          this.closePopup();
        }
      });
    }
  }

  controlPopupAppearance() {
    if (typeof this.hooks.controlPopupAppearance != 'undefined') {
      this.hooks.controlPopupAppearance(this);
      return;
    }

    let cookie = this.getCookie();

    if (!cookie || this.settings.behaviourAppearance == 'always' || (this.settings.behaviourAppearance == 'once' && cookie.showCount == 0)) {
      setTimeout(() => {
        this.showPopup();
      }, this.settings.delay);
    }

    if (this.settings.behaviourAppearance == 'always') {
      this.deleteCookie();
    }
  }

  showPopup() {
    this.popup.classList.add("popuppower-show");
  }

  closePopup() {
    if (typeof this.hooks.closePopup != 'undefined') {
      this.hooks.closePopup(this);
      return;
    }

    if (this.settings.behaviourAppearance == 'once') {
      this.saveCookie({
        behaviourAppearance: this.settings.behaviourAppearance,
        showCount: 1
      });
    }else if(this.settings.behaviourAppearance == 'always') {
      // remove cookie, if always
      this.deleteCookie();
    }

    this.popup.remove();
  }

  saveCookie(settings) {
    document.cookie = 'popupPower' +  this.settings.identifier + ' = ' + JSON.stringify(settings);
  }

  getCookie() {
    let allCookies = document.cookie.split(';');

    for(let i = 0; i < allCookies.length; i++) {
      let name = allCookies[i].split('=')[0].trim();

      if (name == 'popupPower' + this.settings.identifier) {
        return JSON.parse(allCookies[i].split('=')[1].trim());
      }
    }

    return null;
  }

  deleteCookie() {
    document.cookie = 'popupPower' +  this.settings.identifier + '=; Max-Age=-99999999;';
  }

  getHooks() {
    if (typeof document.slavleePopupPowerHooks != 'undefined') {
      return document.slavleePopupPowerHooks;
    }

    return {};
  }
}

export default new PopupPower();
