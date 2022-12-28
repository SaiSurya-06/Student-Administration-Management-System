var objPeople = [
	{ // Object @ 0 index
		emailaddress: "svit"
		password: "svit"
	},
	
    

]

function getInfo() {
	var emailaddress = document.getElementById('username').value
	var password = document.getElementById('password').value

	for(var i = 0; i < objPeople.length; i++) {
		// check is user input matches username and password of a current index of the objPeople array
		if(emailaddress == objPeople[i].username && password == objPeople[i].password) {
			console.log(username + " is logged in!!!")
			// stop the function if this is found to be true
			return
		}
	}
	console.log("incorrect email or password")
}