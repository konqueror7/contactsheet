'use strict'

import { Entity } from './Entity.js'

class ContactForm {

  constructor (element) {
    if (!element) {
      throw new Error('Элемент не существует')
    }
    this.element = element;
    this.registerEvents();
  }

  registerEvents () {
    console.log('Hello');
  }
}

export { ContactForm }
