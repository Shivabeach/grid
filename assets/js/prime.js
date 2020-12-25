/**
 *  For the Prime page only
 *
 */
'use strict';

const limit1 = {
	balance: 500,
	withdrawls: [10, 25, 30],
	inputs: [25, 50, 60, 14],
};
document.documentURI;
const displayArray = document.querySelector('.displayArray');
const displayNumberAdded = document.querySelector('.displayNumberAdded');
const reduced = document.querySelector('.reduced');
const submit = document.querySelector('.submit');
let clipped = document.querySelector('.clipped');
const max = document.querySelector('.max');
const docurl = document.getElementById('fblock1');
let theArray = [21, 20, -30, -10, 20, 45, 4];

const here = document.documentURI;
docurl.innerText = here;

// utilities at startup
addEventListener('DOMContentLoaded', () => {
	displayArray.innerText = theArray;
	added.value = '';
	addItUp();
});
//push to array
function addToArray(added) {
	if (added != '') {
		theArray.push(Number(added));
		displayNumberAdded.innerHTML = added;
	}
}
//display the array
function showArray() {
	displayArray.innerText = theArray;
}
//reduce the array
function addItUp() {
	let totals = theArray.reduce((arr, cur) => arr + cur, 0);
	reduced.innerHTML = totals;
}

function mapping() {
	let newArray = theArray
		.filter((arr) => arr > 10)
		.map((arr) => arr * 3)
		.reduce((arr, cur) => arr + cur, 0);
	clipped.innerHTML = newArray;
}
// const maxNumber = theArray.reduce((mov, acc) => {
// 	if (acc > mov) return acc;
// 	else return mov;
// }, 5);
// get max or min number in array
function maxNum() {
	const maxx = theArray.reduce(
		(acc, cur, i, arr) => (acc > cur ? acc : cur),
		10,
	);
	max.innerHTML = maxx;
}
function clear() {
	added.value = '';
}

submit.addEventListener('click', (e) => {
	e.preventDefault();
	let added = document.getElementById('added').value;
	addToArray(added);
	showArray();
	addItUp();
	mapping();
	maxNum();
	clear();
});
