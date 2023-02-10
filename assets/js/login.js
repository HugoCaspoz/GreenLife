let submit = document.querySelector('#submit');
let url = 'localhost:5000/api/login';

document.querySelector('#formulario').addEventListener('submit',loginCuenta);

function loginCuenta(event){
    event.preventDefault();
    
    let usuario= {
    
        username : document.querySelector('#user').value,
        pass : document.querySelector('#pass').value,

    }
    console.log(usuario);
    localStorage.setItem ('token', token)
    localStorage.setItem ('id', id)
    fetch(`http://localhost:5000/api/login`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            // 'Authorization': token,
        },
        body: JSON.stringify(usuario)
    })

        .then(response => {
            switch (response.status) {
                
                case 401:
                    console.log("Las credenciales no son válidas");
                    break;
                case 200:
                    console.log("Las credenciales son válidas");
                break;
            }
            return response.json();
            
        })

        .then(data => {
        })
        
}

