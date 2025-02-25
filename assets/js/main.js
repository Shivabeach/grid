/**
 *  Main js file, appends script.js
 *  Author: Brad
 *  @format
 *  1 m = (1/0.3048)
 */
/** @format */
'use strict';
const responce = document.querySelector('.responce');
const high = document.querySelector('.highlight');
let stringer = document.getElementById('timeless');
let timi = document.getElementById('timeless');
const prime = document.querySelector('.prime');
const blog = document.querySelector('.blog');
const page3 = document.querySelector('.page3');
const page4 = document.querySelector('.page4');

const copyr = document.querySelector('.copy');

/////////////////////////////////////////////////////

let yer = new Date();
copyr.innerHTML = `\u00A92019 - ${yer.getFullYear()}`; //copywright

for (let i = 0; i < document.links.length; i++) {
    //this highlights the current active link
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'current';
    }
}

// highlights a p on the generated page
if (high) {
    high.addEventListener('mouseover', function () {
        high.classList.add('hover');
    });
    high.addEventListener('mouseout', function () {
        high.classList.remove('hover');
    });
}

function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);
}
//console.log(getRandomIntInclusive(1, 75));
let mini = getRandomIntInclusive(1, 45);
let maxie = getRandomIntInclusive(1, 75);

function randi() {
    if (stringer != null) {
        stringer.textContent = `${mini}:${maxie}`;
    }
}
randi();

// Validates 24 hour military time
function validTime() {
    if (stringer != null) {
        stringer = stringer.textContent;
        const parts = stringer.split(':');
        const hours = Number(parts[0]);
        const minutes = Number(parts[1]);
        const ho = hours > 23 || hours < 0 ? 'Fake hours' : 'Valid hours';
        const minnie =
            minutes > 59 || minutes < 0 ? 'Fake minutes' : 'Valid minutes';
        responce.innerHTML = `
		The hours are <b>${ho}</b> and the minutes are <b>${minnie}</b>`;

        if (hours <= 24 && minutes <= 59) {
            timi.style.background = '#0af820';
            timi.style.textShadow = '1px 1px 1px #fff';
        } else {
            timi.style.background = '#ff0000';
            timi.style.color = '#fff';
        }
    }
}
validTime();
//split push and join
(function () {
    let spar = '192.168.3';
    const sparing = spar.split('.');
    // creates an array
    //console.log(sparing);
    sparing.push('213');
    // adds 213 to the array
    //console.log(sparing);
    let energy = sparing.join('.');
    //Joins the array with a period
    //console.log(energy);
})();
//map takes an array and performs an operation in afunction on each part of the array
const multiplier = 2.5;
const arr = [1, 2, 5, 7, 15];
const maple = arr.map((x) => x * multiplier + 2);
//console.log(maple);
const dar = arr.toString();
//console.log(dar);
const silly = arr.concat(maple);
//console.log(silly);
//

if (prime != null) prime.innerHTML = 'This is Prime';
else if (blog != null) blog.innerHTML = 'This is the Blog';
else if (page3 != null) page3.innerHTML = 'This is page 3';
else if (page4 != null) page4.innerHTML = 'This is page 4';

//@prepros-append script.js
