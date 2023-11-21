
document.querySelector("#submit").addEventListener("click", e => {
    e.preventDefault();

//INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
let telefono = "51913069000";


let name = document.querySelector("#name").value;
let lastname = document.querySelector("#lastname").value;
let dni = document.querySelector("#dni").value;
let phone = document.querySelector("#phone").value;
let email = document.querySelector("#email").value;
let depart = document.querySelector("#depart").value;
let provin = document.querySelector("#provin").value;
let distric = document.querySelector("#distric").value;
let cont = document.querySelector("#content").value;
let resp = document.querySelector("#respuesta");

resp.classList.remove("fail");
resp.classList.remove("send");

let url = `https://api.whatsapp.com/send?phone=${telefono}&text=
		*QUIERO TENER INFORMACIÓN*%0A%0A
		
		*Nombre Completo:*%0A
		${name}%0A
		*Correo Electronico:*%0A
		${email}%0A
		*Telefono:*%0A
		${phone}%0A
		*Asunto:*%0A
		${subject}%0A
		*Mensaje*%0A
		${cont}`;

if (email === "" || phone === "" || subject === "" || cont === "") {
    resp.classList.add("fail");
    resp.innerHTML = `Faltan algunos datos,${name}`;
    return false;
}
resp.classList.remove("fail");
resp.classList.add("send");
resp.innerHTML = `Se ha enviado tus datos,${name}`;

window.open(url);
});
