/**
 *  Used for page 4 main
 */

'use strict';
// using a dataset attribute
const sets = document.getElementById('theDiv');
const name = sets.dataset.name;
const car = sets.dataset.car;
const list = document.createElement('p');
const listing = `${name} drives a ${car}`;
//create the element "P" and add the sentence with datasets to it
list.append(listing);
sets.appendChild(list);

//------------------------------------------

const showLive = document.getElementById('active');
const inserts = document.getElementById('inserts');
const submit = document.getElementById('submit');
const showLength = document.querySelector('.showLength');
//page is the storage & practice is the array
let practice = [];
const retrieve = localStorage.getItem('page');

function getStorage() {
	if (localStorage.getItem('page') === null) {
		getStore();
	} else {
		practice = JSON.parse(localStorage.getItem('page'));
	}
	return practice;
}

function getStore() {
	let choco = 'Ceramics';
	if (retrieve === null) {
		practice.push(choco);

		localStorage.setItem('page', JSON.stringify(practice));
	}
}

function pusher(added) {
	practice.push(added);
	localStorage.setItem('page', JSON.stringify(practice));
	console.log(practice.toString());
	showLength.innerHTML = practice.length;
}

function showArray() {
	const arr = JSON.parse(localStorage.getItem('page'));
	active.innerHTML = arr.toString();
}

addEventListener('DOMContentLoaded', () => {
	getStorage();
	showArray();
});

submit.addEventListener('click', (e) => {
	e.preventDefault();
	let theValue = inserts.value;
	pusher(theValue);
});
