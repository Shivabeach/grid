/**
 * Used for page 4 main
 *
 * @format
 * js file for page 4
 */

import { properCase, log } from './utils.js';

// using a dataset attribute
// div id="theDiv" data-name="Brad" data-car="Mustang"
const email = document.getElementById('email');
let backg = document.getElementById('content3');
const colors = document.querySelector('.colors');
const sets = document.getElementById('theDiv');
//console.log(sets.dataset);
const name1 = sets.dataset.name;
const car = sets.dataset.car;
const list = document.createElement('p');
//create content
const listing = `${name1} drives a ${car}`;
//create the element "P" and add the sentence with datasets to it
list.append(listing);
sets.appendChild(list);

//------------------------------------------
const space = document.getElementById('space');
const break1 = document.querySelector('.break1-1');
const shifty = document.getElementById('shift');
const inserts = document.getElementById('inserts');
const submit = document.getElementById('submit');
const showLength = document.querySelector('.showLength');
//page is the storage & practice is the array
let practice = [];
const retrieve = localStorage.getItem('page');

function getStore() {
	let choco = 'Ceramics';
	if (retrieve === null) {
		practice.push(choco);

		localStorage.setItem('page', JSON.stringify(practice));
	}
}

const alphaSort = (array) => {
	if (!array.length) return;
	return array.sort();
};
/**
 * @description get stored array from page storage
 * @author Brad
 * @date 2021-10-03
 * @returns
 */
function getStorage() {
	if (localStorage.getItem('page') === null) {
		getStore();
	} else {
		practice = JSON.parse(localStorage.getItem('page'));
		showLength.innerHTML = `The Array length is ${practice.length} items`;
		log(practice);
	}
	return practice;
}
/**
 * @description adds item to the array, then stores it in local storage
 * @author Brad
 * @date 2021-10-03
 * @param {string} added
 */
function pusher(added) {
	practice.push(added);
	localStorage.setItem('page', JSON.stringify(practice));
}

/**
 * @description displays the array on page 4
 * @author Brad
 * @date 2021-10-03
 * @param {array} mov
 */
function displayArr(mov) {
	alphaSort(practice).reverse();
	practice.forEach(function (mov, i) {
		const html = `<li>${mov}</li>`;
		break1.insertAdjacentHTML('afterbegin', html);
	});
}
function empty() {
	inserts.value = '';
}
//shift the array
shifty.addEventListener('click', (e) => {
	e.preventDefault();
	practice.shift();
	localStorage.setItem('page', JSON.stringify(practice));
});


addEventListener('DOMContentLoaded', () => {
	getStorage();
	displayArr();
});


submit.addEventListener('click', (e) => {
	e.preventDefault();
	let theValue = inserts.value;
	pusher(theValue);
	empty();
});

//this displays the words or letters I type
inserts.addEventListener('keyup', () => {
	let letters = inserts.value;
	space.innerHTML = letters;
});

/**
 * @description creates a random HEX code for a random color
 * @author Brad
 * @date 2021-10-03
 */
function createColor() {
	const randl = Math.random().toString(16).substr(2, 6);
	let randall = `#${randl}`;
	colors.innerHTML = randall;
	backg.style.backgroundColor = randall;
}
createColor();
//console.log(randi);

// if (email === document.activeElement) {
// 	email.style.backgroundColor = randi;
// }
