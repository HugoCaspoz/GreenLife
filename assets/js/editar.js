editarUsuario()

function editarUsuario() {
    let token = localStorage.getItem('token');
    let id = localStorage.getItem('id');
    let fullname = document.querySelector('#fullname');
    let email = document.querySelector('#email');
    let height = document.querySelector('#height');
    let weight = document.querySelector('#weight');
    let birthday = document.querySelector('#birthday');
    let pass = document.querySelector('#pass');

    let usuario = {
        id: id,
        fullname: `${fullname.value}`,
        email: `${email.value}`,
        pass: `${pass.value}`,
        height: `${height.value}`,
        weight: `${weight.value}`,
        birthday: `${birthday.value}`,
    };

    fetch(`http://localhost:5000/api/user`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': token
        },
        body: JSON.stringify(usuario)
    })
    .then(response => {
        switch (response.status) {
            case 200:
                console.log("Actualizado");
                break;
            case 400:
                console.log("Id no valido");
                break;
            case 401:
                console.log("Token no valido");
        }
        return response.json();
    })
    .then(data => {

        console.log(data);
    })
}

