const starWrapper = document.querySelector('.starWrapper');
let singleStar = 0;
let starList =  getStars(singleStar);

//funzione che inserisce stelle nel DOM

function getDomStars(list) {

    for(let i = 0; i <= list.length - 1; i++) {

        starWrapper.innerHTML += `${list[i]}`;

    }
}
getDomStars(starList)

//ciclo che aggiunge a ogni stella un ascoltatore di eventi

const star = document.querySelectorAll('.fa-star');
console.log(star)

for (let i = 0; i <= star.length - 1; i++) {

    star[i].addEventListener('click', function() { 

        singleStar = parseInt([i + 1]);
        starList = getStars(singleStar);
        removeDomStars()
        getDomStars(starList);

    })
}

//funzione di rimozione elementi dal DOM

function removeDomStars() {

    for(let i = 1; i <= star.length; i++) {

        const eraseStar = document.querySelector("i:first-child")
        eraseStar.parentElement.removeChild(eraseStar)
        
    }

}

// funzione che pusha la stella nell'array
function getStars(number) {

    let newStar = [];

    for(let i = 0; i < number ; i++) {
        
        let singleStar = `<i class="fa-solid fa-star big full" id="star${i}"></i>`
        newStar.push(singleStar)

    }
    for(let i = number; i <= (10 - 1) ; i++) {
        
        let singleStar = `<i class="fa-solid fa-star big" id="star${i}"></i>`
        newStar.push(singleStar)

    }

    return newStar;
}







