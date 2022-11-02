(function(){
    console.log('carrousel');
    let elBtn = document.querySelector(".bouton");
    console.log(elBtn);
    let elCarrousel = document.querySelector(".carrousel");
    let elCarrousel__x = document.querySelector(".carrousel__x");
    let elGalerie = document.querySelector(".galerie");
    let elGalerieImgs = document.querySelectorAll(".galerie img");
    let elCarrousel__figure = document.querySelector(".carrousel__figure");
    let elCarrousel__form = document.querySelector(".carrousel__form");
    let index = 0;
    let dernierIndex = -1;
    elBtn.addEventListener('mousedown', function(){
        console.log("evenement");
        elCarrousel.classList.add("carrousel--ouvrir");
        for (const elImg of elGalerieImgs){
            ajout_img_dans_carrousel(elImg);
            ajout_radio_dans_carrousel();
        }
    })

    function ajout_img_dans_carrousel(elImg){
        console.log(elImg.getAttribute('src'));
        let elCarrouselImg = document.createElement('img');
        elCarrouselImg.setAttribute('src', elImg.getAttribute('src'));
        elCarrouselImg.classList.add('carrousel__figure__img');
        elCarrousel__figure.appendChild(elCarrouselImg);
    }

    function ajout_radio_dans_carrousel(){
        let elCarrousel__form__radio = document.createElement('input');
        elCarrousel__form__radio.setAttribute('type', 'radio');
        elCarrousel__form__radio.classList.add('carrousel__form__rad');
        elCarrousel__form__radio.setAttribute('name', 'carrousel__form__rad');
        elCarrousel__form__radio.dataset.index = index;
        index++;
        elCarrousel__form.appendChild(elCarrousel__form__radio);

        elCarrousel__form__radio.addEventListener('mousedown', function(){
            if(dernierIndex != -1){
                elCarrousel__figure.children[dernierIndex].classList.remove('carrousel__figure__img--activer');
            }
            elCarrousel__figure.children[this.dataset.index].classList.add('carrousel__figure__img--activer');
            dernierIndex = this.dataset.index;
        })
    }

    elCarrousel__x.addEventListener('mousedown', function(){
        elCarrousel.classList.remove("carrousel--ouvrir");

    })
})();