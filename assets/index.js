'use strict'

;(function () {


  $('.add').on('click', addProducto)


  function addProducto (event) {
    console.log(event.currentTarget.dataset)
  }

})()
