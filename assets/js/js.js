/**
 * @description
 * From https://www.youtube.com/watch?v=wdvruTuWvW8&list=PLlwbAGSVMKHogwp7Ht-x7ym5GpLnjT9aZ&index=3
 * @format 
 */
let feed = document.getElementById('feed');

function showCountries() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://restcountries.eu/rest/v2/all', true);
    xhr.onload = function () {
        if (xhr.status == 200) {
            let countries = JSON.parse(this.response);
            countries.forEach((country) => {
                const countryCard = document.createElement('div');
                const countryCardImage = document.createElement('img');
                countryCard.innerHTML = country.name;
                countryCardImage.src = country.flag;
                countryCard.appendChild(countryCardImage);
                countryCardImage.height = 50;
                countryCardImage.width = 50;
                feed.appendChild(countryCard);
            });
        }
    };
    xhr.send();
}

document.addEventListener('DOMContentLoaded', () => {
    const timeLeftDisplay = document.querySelector('#time-left');
    const startBtn = document.querySelector('#start-button');
    let hours = 60 * 60;
    let timeLeft = hours;

    function countDown() {
        setInterval(function () {
            if (timeLeft <= 0) {
                clearInterval((timeLeft = 0));
            }
            timeLeftDisplay.innerHTML = timeLeft;
            timeLeft -= 1;
        }, 1000);
    }

    startBtn.addEventListener('click', countDown);
});
