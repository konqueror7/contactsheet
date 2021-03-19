'use strict'

import { ContactForm } from './ContactForm.js'

class Admin {
  static init () {
    this.element = document.querySelector('.container')
    this.initForms()
  }

  static initForms () {
    this.forms = {
      add_contact: new ContactForm (document.querySelector('.form-contacts'))
    }
  }
}

export { Admin }
