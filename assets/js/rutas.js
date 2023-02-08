document.querySelector('#distanciaMinimaboton.btn.btn-outline-success').addEventListener('click',distanciaMinima);
document.querySelector('#distanciaMaximaboton').addEventListener('click',distanciaMaxima);
// document.querySelector('#buscarNombreboton').addEventListener('click',buscarNombre);

let url = `http://localhost:5000/api/routes`;


verRutas();
//VER TODAS LAS RUTAS
function verRutas() {
    fetch(url)
        .then(response => response.json())
        .then(data => monstrarRutas(data))
        .catch(error => console.log(error))
    const monstrarRutas = (data) => {
        let body = ''
        for (let i = 0; i < data.length; i++) {
            body += `
            <div class="container">
                <div class="row">
                    <div class="col">
                        <b>Nombre:</b>
                    </div>
                    <div class="col">
                    <b>Distancia:</b>
                    </div>
                    <div class="col">
                        <b>Fecha:</b>
                    </div>      
                </div>

                <div class="row">
                    <div class="col">
                    ${data[i].route_name}
                    </div>
                    <div class="col">
                    ${data[i].distance}
                    </div>
                    <div class="col">
                    ${data[i].date}
                    </div>
                </div>
            </div>
            </br>`
        }
        document.getElementById('rutas').innerHTML = body
    }
};
//RUTAS DISTANCIA MINIMA
function distanciaMinima(event) {
    let distancia = document.getElementById('#distanciaMinima.form-control').value;
    event.preventDefault();
    url = `http://localhost:5000/api/route?min_dist=${{distancia}}`
    fetch(url, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            // 'Authorization': token,
        },
        body: JSON.stringify(usuario)
    })
        .then(response => response.json())
        .then(data => monstrarRutas(data))
        .catch(error => console.log(error))
    const monstrarRutas = (data) => {
        let body = ''
        for (let i = 0; i < data.length; i++) {
            body += `
            <div class="container">
                <div class="row">
                    <div class="col">
                        <b>Nombre:</b>
                    </div>
                    <div class="col">
                    <b>Distancia:</b>
                    </div>
                    <div class="col">
                        <b>Fecha:</b>
                    </div>      
                </div>

                <div class="row">
                    <div class="col">
                    ${data[i].route_name}
                    </div>
                    <div class="col">
                    ${data[i].distance}
                    </div>
                    <div class="col">
                    ${data[i].date}
                    </div>
                </div>
            </div>
            </br>`
        }
        document.getElementById('rutas').innerHTML = body
    }
};

//RUTAS DISTANCIA MAXIMA
function distanciaMaxima(event) {
    let distancia = document.getElementById('#distanciaMaxima.form-control').value;
    event.preventDefault();
    url = `http://localhost:5000/api/route?max_dist=${{distancia}}`
    fetch(url, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            // 'Authorization': token,
        },
        body: JSON.stringify(usuario)
    })
        .then(response => response.json())
        .then(data => monstrarRutas(data))
        .catch(error => console.log(error))
    const monstrarRutas = (data) => {
        let body = ''
        for (let i = 0; i < data.length; i++) {
            body += `
            <div class="container">
                <div class="row">
                    <div class="col">
                        <b>Nombre:</b>
                    </div>
                    <div class="col">
                    <b>Distancia:</b>
                    </div>
                    <div class="col">
                        <b>Fecha:</b>
                    </div>      
                </div>

                <div class="row">
                    <div class="col">
                    ${data[i].route_name}
                    </div>
                    <div class="col">
                    ${data[i].distance}
                    </div>
                    <div class="col">
                    ${data[i].date}
                    </div>
                </div>
            </div>
            </br>`
        }
        document.getElementById('rutas').innerHTML = body
    }
};

//Buscar por nombre

function buscarNombre(event) {
    let nombre = document.getElementById('#buscarNombreboton.form-control.rounded').value;
    event.preventDefault();
    url = `http://localhost:5000/api/route?name=${{nombre}}`
    fetch(url, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            // 'Authorization': token,
        },
        body: JSON.stringify(usuario)
    })
        .then(response => response.json())
        .then(data => monstrarRutas(data))
        .catch(error => console.log(error))
    const monstrarRutas = (data) => {
        let body = ''
        for (let i = 0; i < data.length; i++) {
            body += `
            <div class="container">
                <div class="row">
                    <div class="col">
                        <b>Nombre:</b>
                    </div>
                    <div class="col">
                    <b>Distancia:</b>
                    </div>
                    <div class="col">
                        <b>Fecha:</b>
                    </div>      
                </div>

                <div class="row">
                    <div class="col">
                    ${data[i].route_name}
                    </div>
                    <div class="col">
                    ${data[i].distance}
                    </div>
                    <div class="col">
                    ${data[i].date}
                    </div>
                </div>
            </div>
            </br>`
        }
        document.getElementById('rutas').innerHTML = body
    }
};