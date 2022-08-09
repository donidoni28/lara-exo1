


export default function Perso() {
    if(document.querySelector('#box-size')){
        let boxSize = document.querySelector('#box-size')
        boxSize.innerText = `${boxSize.clientWidth}X${boxSize.clientHeight}`
    }
    if(document.querySelector('#about-size')){
        let aboutSize = document.querySelector('#about-size')
        aboutSize.style.height = `${aboutSize.parentNode.clientHeight}px`
        aboutSize.innerText = `${aboutSize.parentNode.clientWidth}X${aboutSize.parentNode.clientHeight}`
    }
    console.log('Liridon Cerimi');

}
