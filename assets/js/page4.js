/**
 *  Used for page 4 main
 */

'use strict';
// using a dataset attribute
// div id="theDiv" data-name="Brad" data-car="Mustang"

const sets = document.getElementById('theDiv');
const name = sets.dataset.name;
const car = sets.dataset.car;
const list = document.createElement('p');
const listing = `${name} drives a ${car}`;
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

function getStorage() {
	if (localStorage.getItem('page') === null) {
		getStore();
	} else {
		practice = JSON.parse(localStorage.getItem('page'));
	}
	return practice;
}

function pusher(added) {
	practice.push(added);
	localStorage.setItem('page', JSON.stringify(practice));
	console.log(practice.toString());
	showLength.innerHTML = practice.length;
	//displayArr();
}

function displayArr(mov) {
	practice.forEach(function(mov, i) {
		const html = `<li>${mov}</li>`;
		break1.insertAdjacentHTML('afterbegin', html);
	});
}
function empty() {
	inserts.value = '';
}

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

inserts.addEventListener('keyup', () => {
	let letters = inserts.value;
	// console.log(letters);
	space.innerHTML = letters;
});
