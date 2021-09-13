/** @format */

//Dave Gray https://www.youtube.com/watch?v=LDgPTw6tePk
//
// import{properCase, log} from "utils.js" on other JS file
export const properCase = (string) => {
	return `${string[0].toUpperCase()}${string.slice[1].toLowerCase()}`;
};

export const log = (content) => {
	console.log(content);
};
//log(properCase('rESEarCh'));

export const select = (selector, scope) => {
	return (scope || document).querySelector(selector);
};
//const body = select('p'); element or a class
//

export const listen = (target, event, callback, capture = false) => {
	target.addEventListener(event, callback, !!capture);
};

//const eventLog = (e) => console.log(e.target); What the eventlistener will do
//listen(body, 'click', eventLog);

export const createElement = (tag, className) => {
	const el = document.createElement(tag);
	if (className) el.classList.add(className);
	return el;
};
// const root = createElement('main', 'root');
// body.appendChild(root); main element with class of root appended to body

export const addClass = (selector, className, scope) => {
	(scope || document).querySelector(selector).classList.add(className);
};
//addClass('body', 'purple');
//
export const sanitizeInput = (inputValue) => {
	const div = document.createElement('div');
	doiv.textContent = inputValue;
	return div.innerHTML;
};
// const cleanInput = sanitizeInput(stringtoclean);
// console.log(cleanInput);

export const addUp = (array) => {
	array.reduce((accumulator, current) => {
		return current + accumulator;
	}, 0);
};
