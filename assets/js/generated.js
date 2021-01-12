'use strict';
const first1 = document.getElementById('first');
const names = document.getElementById('names');
const all = document.getElementById('all');
const height = document.getElementById('height');
const mass1 = document.getElementById('mass');
const m1 = document.getElementById('m1');
const m2 = document.getElementById('m2');
const m3 = document.getElementById('m3');
const m4 = document.getElementById('m4');
const r1 = document.getElementById('r1');
const r2 = document.getElementById('r2');
const r3 = document.getElementById('r3');
const r4 = document.getElementById('r4');
const f1 = document.getElementById('f1');
const f2 = document.getElementById('f2');
const f3 = document.getElementById('f3');
const f4 = document.getElementById('f4');
const e1 = document.getElementById('e1');
const e2 = document.getElementById('e2');
const e3 = document.getElementById('e3');
const e4 = document.getElementById('e4');
const s1 = document.getElementById('s1');
const s2 = document.getElementById('s2');
const s3 = document.getElementById('s3');
const s4 = document.getElementById('s4');
const sort1 = document.getElementById('sort1');
const sort2 = document.getElementById('sort2');
const sort3 = document.getElementById('sort3');
const sort4 = document.getElementById('sort4');

const characters = [
	{
		name: 'Luke Skywalker',
		height: 172,
		mass: 77,
		eye_color: 'blue',
		gender: 'male',
	},
	{
		name: 'Darth Vader',
		height: 202,
		mass: 136,
		eye_color: 'yellow',
		gender: 'male',
	},
	{
		name: 'Leia Organa',
		height: 150,
		mass: 49,
		eye_color: 'brown',
		gender: 'female',
	},
	{
		name: 'Anakin Skywalker',
		height: 188,
		mass: 84,
		eye_color: 'blue',
		gender: 'male',
	},
];

//***MAP***
//1. Get array of all names
const name = characters.map((character) => character.name);
m1.innerHTML = JSON.stringify(name);
//2. Get array of all heights
const high = characters.map((character) => character.height);
m2.innerHTML = JSON.stringify(high);
//3. Get array of objects with just name and height properties//
const minified = characters.map((character) => ({
	name: character.name,
	height: character.height,
}));
m3.innerText = JSON.stringify(minified);
//4. Get array of all first names
const firstName = characters.map((character) => character.name.split(' ')[0]);
m4.innerText = JSON.stringify(firstName);

//***REDUCE***
//1. Get total mass of all characters
const totalMass = characters.reduce((acc, cur) => acc + cur.mass, 0);
r1.innerHTML = `The total mass is ${totalMass}`;
//2. Get total height of all characters
const totalHeight = characters.reduce((acc, cur) => acc + cur.height, 0);
r2.innerHTML = `The total height is ${totalHeight}`;
//3. Get total number of characters by eye color
const charactersByEyeColor = characters.reduce((acc, cur) => {
	const color = cur.eye_color;
	if (acc[color]) {
		acc[color]++;
	} else {
		acc[color] = 1;
	}
	return acc;
}, {});
r3.innerText = JSON.stringify(charactersByEyeColor);
//4. Get total number of characters in all the character names

//***FILTER***
//1. Get characters with mass greater than 100
const charactersByMass = characters.filter((character) => character.mass > 100);
f1.innerHTML = JSON.stringify(charactersByMass);
//2. Get characters with height less than 200
const charactersLessMass = characters.filter(
	(character) => character.mass < 200,
);
f2.innerHTML = JSON.stringify(charactersLessMass);
//3. Get all male characters
const males = characters.filter((character) => character.gender === 'male');
f3.innerHTML = JSON.stringify(males);
//4. Get all female characters
const females = characters.filter((character) => character.gender === 'female');
f4.innerHTML = JSON.stringify(females);

//***SORT***
//1. Sort by mass
const sortByMass = characters.sort((a, b) => a.mass - b.mass);
sort1.innerText = JSON.stringify(sortByMass);
//2. Sort by weight
const sortByHeight = characters.sort((a, b) => a.height - b.height);
sort2.innerText = JSON.stringify(sortByHeight);
//3. Sort by name
const byName = characters.sort((a, b) => {
	if (a.name < b.name) return -1;
	return 1;
});
sort3.innerText = JSON.stringify(byName);

//4. Sort by gender
const byGender = characters.sort((a, b) => {
	if (a.gender === 'female') return -1;
	return 1;
});
sort4.innerText = JSON.stringify(byGender);

//***EVERY***
//1. Does every character have blue eyes?
//2. Does every character have mass more than 40?
//3. Is every character shorter than 200?
//4. Is every character male?

//***SOME***
//1. Is there at least one male character?
const isThereOneMale = characters.some(
	(character) => character.gender === 'male',
);
s1.innerText = isThereOneMale;
//2. Is there at least one character with blue eyes?
const oneMale = characters.some((character) => character.eye_color === 'blue');
s2.innerText = oneMale;

//3. Is there at least one character taller than 210?
const taller200 = characters.some((character) => character.height > 210);
s3.innerText = taller200;
//4. Is there at least one character that has mass less than 50?
const mass50 = characters.some((character) => character.mass < 50);
s4.innerText = mass50;

// const mini2 = Object.values(characters);
// all.innerHTML = JSON.stringify(mini2);

// const names1 = characters.map((character) => character.height);
// console.log(names1);
// height.innerHTML = names1;

// const first = characters.map((character) => character.name.split(' ')[0]);
// first1.innerHTML = JSON.stringify(first);

//some
//
// true or false
