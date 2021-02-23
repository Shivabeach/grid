'use strict';
const drinks = document.querySelector('#drinks');

// Create a <li> element
const elem = document.createElement('li');
const elem1 = document.createElement('li');
// Create a new text node
const text = document.createTextNode('Tea');
const text1 = document.createTextNode('Tea also');
// Append text node to <li> node
elem.append(text);
elem1.append(text1);
// Finally, append <li> to <ul> node
drinks.append(elem);
drinks.append(elem1);
