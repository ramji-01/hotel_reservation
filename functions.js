const first_name = document.getElementById('first_name');
const last_name = document.getElementById('last_name');
const state = document.getElementById('state');
const date = document.getElementById('date');
const phone = document.getElementById('phone');
const guest = document.getElementById('guest');
const email = document.getElementById('email');
const subject = document.getElementById('subject');
const submit = document.getElementById('submit');

const database = firebase.database();

submit.addEventListener('click',(e) => {
	e.preventDefault();
	database.ref('/users/'+ first_name.value).set({
		Last_name: last_name.value,
		State: state.value,
		Date: date.value,
		Phone: phone.value,
		Guest: guest.value,
		Email: email.value,
		Subject: subject.value
	});
});
function submitClick() {
	window.alert("Your reservation is successfully booked!!!");
} 