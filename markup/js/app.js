const buttons = document.querySelectorAll('.products-list .product .btn-cart')

buttons.forEach((button) => {
    button.addEventListener('click', function (event) {
        console.log(this)
        console.log(event)
    })
})
