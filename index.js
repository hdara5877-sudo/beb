document.addEventListener('DOMContentLoaded', () => {

    const btn1 = document.querySelector('#auth')
    const btn2 = document.querySelectorAll('#change')
    const reg = document.querySelector(".reg-modal")
    const log = document.querySelector(".log-modal")

    btn1.addEventListener('click', () => {
        if(log.classList.contains('active')) {
            log.classList.remove('active')
        }
        reg.classList.toggle('active')
    })

    btn2.forEach(btn => {
        btn.addEventListener('click', () => {
            reg.classList.toggle('active')
            log.classList.toggle('active')
        })
    });

})
