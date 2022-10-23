const logo = document.querySelectorAll('.logo');
const cuerpoLogo = document.querySelectorAll('.cuerpoLogo');

window.addEventListener('scroll', (e) => {
    const activadorAbajo = window.innerHeight / 5 * 4
    logo.forEach(caja => {
        const cajaParteSuperior = caja.getBoundingClientRect().top
        if(cajaParteSuperior < activadorAbajo){
            caja.classList.add('show');
        }else{
            caja.classList.remove('show');
        }
    })
})
window.addEventListener('scroll', (e) => {
    const activadorAbajo2 = window.innerHeight / 5 * 3
    cuerpoLogo.forEach(caja2 => {
        const cajaParteSuperior2 = caja2.getBoundingClientRect().top
        if(cajaParteSuperior2 < activadorAbajo2){
            caja2.classList.add('show2');
        }else{
            caja2.classList.remove('show2');
        }
    })
})