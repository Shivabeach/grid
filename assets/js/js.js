/** @format */
let feed = document.getElementById('feed');
function showCountries() {
	let xhr = new XMLHttpRequest();
	xhr.open('GET', 'https://restcountries.eu/rest/v2/all', true);
	xhr.onload = function () {
		if (xhr.status == 200) {
			let countries = JSON.parse(this.response);
			countries.forEach((country) => {
				const countryCard = document.createElement('div');
				const countryCardImage = document.createElement('img');
				countryCard.innerHTML = country.name;
				countryCardImage.src = country.flag;
				countryCard.appendChild(countryCardImage);
				countryCardImage.height = 50;
				countryCardImage.width = 50;
				feed.appendChild(countryCard);
			});
		}
	};
	xhr.send();
}
