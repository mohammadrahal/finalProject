const button = document.getElementById('burger')
let itemsList = document.querySelector('.items-list')

button.addEventListener('click', ()=>{
    // console.log("hello")
    itemsList.classList.toggle('show')
})