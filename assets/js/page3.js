/**
 *  For the Prime page only
 *  \u0024 dollar sign
 */
'use strict';
const name = document.querySelector('.name');
const age = document.querySelector('.age');
const balance = document.querySelector('.balance');
let inputName = document.querySelector('.inputName');
const login = document.getElementById('login');
const welcome = document.querySelector('.welcome');
const deposit = document.querySelector('.deposit');
const withdraw = document.querySelector('.withdraw');
const left = document.getElementById('left');
const moveIn = document.querySelector('.movements-in');

const limit1 = {
	name: 'Brad',
	age: 21,
	inputs: [225, -50, 150, -55, 260, 14, -80, 100],
};
const limit2 = {
	name: 'Bill',
	age: 56,
	inputs: [125, -50, 100, -86, 160, -14, -60],
};
const limit3 = {
	name: 'Kathy',
	age: 45,
	inputs: [25, 150, -60, 114, -60, 25, -40, 55, 200],
};
const limit4 = {
	name: 'Glenn',
	age: 34,
	inputs: [-25, 150, 160, -114, 68, 89, -159],
};
const accounts = [limit1, limit2, limit3, limit4];
//console.log(accounts);
const displayMovements = function(inputs) {
	moveIn.innerHTML = '';
	inputs.forEach(function(mov, i) {
		const type = mov > 0 ? 'deposit' : 'withdrawal';
		const html = `
<div class="movements-in">
	<div class="movements__type movements__type--${type}">${i + 1} ${type}
		<div class="movements__value">\u0024${mov}</div>
	</div></div>`;
		moveIn.insertAdjacentHTML('afterbegin', html);
	});
};
const displayBalance = function(inputs) {
	let totals = inputs.reduce((arr, cur) => arr + cur, 0);
	balance.innerText = `\u0024${totals}`;
};
const showDeposits = function(acc) {
	let deposits = acc.inputs
		.filter((mov) => mov > 0)
		.reduce((arr, cur) => arr + cur, 0);
	deposit.innerText = `\u0024${deposits}`;
	let withdraws = acc.inputs
		.filter((mov) => mov < 0)
		.reduce((arr, cur) => arr + cur, 0);
	withdraw.textContent = `\u0024${withdraws}`;
};
let currentAccount;
login.addEventListener('click', function(e) {
	e.preventDefault();
	currentAccount = accounts.find((acc) => acc.name === inputName.value);
	if (currentAccount.name === inputName.value) {
		name.textContent = `Name: ${currentAccount.name}`;
		age.textContent = `Age: ${currentAccount.age}`;
		inputName.value = '';
		left.style.opacity = 1;
		displayBalance(currentAccount.inputs);
		showDeposits(currentAccount);
		displayMovements(currentAccount.inputs);
	}
});
