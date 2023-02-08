let submit = document.querySelector('#submit');
let url = 'localhost:5000/api/register';

document.querySelector('#formulario').addEventListener('submit',registrarCuenta);

function registrarCuenta(event){
    event.preventDefault();
    let datosusu = new FormData(event.target);

    let usuario= {
    
        fullname : document.querySelector('#fullname').value,
        username : document.querySelector('#user').value,
        email : document.querySelector('#email').value,
        pass : document.querySelector('#pass').value,
        weight : document.querySelector('#weight').value,
        birthday : document.querySelector('#birthday').value,
        height : document.querySelector('#height').value,
        activities : document.querySelector('#activities').value,
    }
    console.log(usuario);

    fetch(`http://localhost:5000/api/register`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            // 'Authorization': token,
        },
        body: JSON.stringify(usuario)
    })

        .then(response => {
            switch (response.status) {
                
                case 400:
                    console.log("Has introducido mal o no has introducido algún dato");
                    break;
                case 409:
                    console.log("El usuario ya existe");
                    break;
                case 200:
                    console.log("Usario Agregado");
                break;
            }
            return response.json();
        })

        .then(data => {
        })

}

