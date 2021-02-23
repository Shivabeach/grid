//this file is not loaded on any pages

'use strict';
//get all keys in local storage
for (const key in localStorage) {
	console.log(`${key}: ${localStorage.getItem(key)}`);
}
//---------------------------------------------------
//random whole number
const random = Math.floor(Math.random() * 20);
console.log(random);

//random string
const rand = Math.random()
	.toString()
	.substr(2, 8);
// 60502138
// Am making variable colors from this one
const rand1 = Math.random()
	.toString(16)
	.substr(2, 6);
let randi = `#${rand1}`;
// 6de5ccda

// Set ------------------------------------
const user = { name: 'Alex', job: 'Software Engineer' };
localStorage.setItem('user', JSON.stringify(user));
console.log(localStorage.getItem('user'));
// {"name":"Alex","job":"Software Engineer"}

// Retrieve the JSON string
const userStr = localStorage.getItem('user');

// Parse JSON string to object
const userObj = JSON.parse(userStr);

// Print object attributes
console.log(userObj.name); // Alex
console.log(userObj.job); // Software Engineer
//-------------------------------------------
//drinks is a list (ul) with 2 li's
const drinks = document.querySelector('#drinks');

// Create a <li> element
const elem = document.createElement('li');

// Create a new text node
const text = document.createTextNode('Tea');

// Append text node to <li> node
elem.appendChild(text);

// Finally, append <li> to <ul> node
drinks.appendChild(elem);

//------------------------------------------
//https://www.youtube.com/watch?v=v2tJ3nzXh8I
//this adds ??
function calculatePrice(price, taxes, description) {
	taxes = taxes ?? 0.05;
	description = description ?? 'Default Item';
	const total = price * (1 + taxes);
	console.log(`${description} with Tax ${total}`);
}
calculatePrice(100, 0.07, 'Item 1');
calculatePrice(100, 0, 'Item 2');
calculatePrice(100, undefined, '');
