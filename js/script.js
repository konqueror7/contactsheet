'use strict'
import { Entity } from './Entity.js'

const contactForm = document.forms.contacts_form
const contactList = document.querySelector('.contact-list')

Entity.list(
  {},
  (err, response) => {
    if (response && response.success === true) {
      render(response.result)
    } else {
      contactList.innerHTML = ''
    }
  }
)

contactForm.addEventListener('submit', (event) => {
  event.preventDefault()
  const contactFormData = new FormData(contactForm)
  Entity.createcont(
    contactFormData,
    (err, response) => {
      if (response && response.success === true) {
        Entity.list(
          {},
          (err, response) => {
            if (response && response.success === true) {
              render(response.result)
            } else {
              contactList.innerHTML = ''
            }
          }
        )
      } else {
        return undefined
      }
    }
  )
  contactForm.reset()
})

const closeButtons = document.querySelector('.contact-list')
closeButtons.addEventListener('click', (event) => {
  let target = event.target
  if (target.classList.contains('delete-cont')) {
    const deleteData = new FormData()
    deleteData.append('id', target.dataset.id)
    // console.log(deleteData.get('id'))
    Entity.delete(
      deleteData,
      (err, response) => {
        if (response && response.success === true) {
          Entity.list(
            {},
            (err, response) => {
              if (response && response.success === true) {
                render(response.result)
              } else {
                contactList.innerHTML = ''
              }
            }
          )
        }
      }
    )
  }
})

function render (results) {
  contactList.innerHTML = ''
  for (let key in results) {
    contactList.innerHTML += renderItem(results[key]);
  }
}

function renderItem (item) {
  let {
    id,
    name,
    phone
  } = item
  return `
    <div class="contact-list-item">
      <p class="name-contact">${name}<span class="delete-cont" data-id="${id}">×</span></p>
      <p class="phone-contact">${phone}</p>
    </div>
  `
}
