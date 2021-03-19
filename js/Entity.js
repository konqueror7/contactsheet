import { createRequest } from './createRequest.js'

class Entity {
  static search (data = {}, callback = f => f) {
    const xhr = createRequest({
      url: '../search.php',
      data: data,
      callback: callback
    })
    return xhr
  }

  static createcont (data = {}, callback = f => f) {
    const xhr = createRequest({
      url: '../createcont.php',
      data: data,
      callback: callback
    })
    return xhr
  }

  static list (data = {}, callback = f => f) {
    const xhr = createRequest({
      url: '../list.php',
      data: data,
      callback: callback
    })
    return xhr
  }

  static delete (data = {}, callback = f => f) {
    const xhr = createRequest({
      url: '../deletecont.php',
      data: data,
      callback: callback
    })
    return xhr
  }
}

export { Entity }
