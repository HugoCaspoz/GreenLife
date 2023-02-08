let submit = document.querySelector('#submit');
let url = 'localhost:5000/api/register';

document.querySelector('#formulario').addEventListener('submit',editarCuenta);
let id = document.getElementById('id').value;
function editarCuenta(event){
    event.preventDefault();
    let datosusu = new FormData(event.target);

    let usuario= {
        id : id,
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

    fetch(`http://localhost:5000/api/user`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': token,
        },
        body: JSON.stringify(usuario)
    })

        .then(response => {
            switch (response.status) {
                
                case 400:
                    console.log("El id no corresponde a ningún usuario o no se ha indicado");
                    break;
                case 409:
                    console.log("El token no es válido");
                    break;
                case 200:
                    console.log("El usuario se ha actualizado correctamente");
                break;
            }
            return response.json();
        })

        .then(data => {
        })

}

