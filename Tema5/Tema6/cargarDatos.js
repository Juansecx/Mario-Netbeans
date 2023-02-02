//Funciones de productos


const anadirProductos = (formulario) => {


    let cod_prod = formulario.cod_producto.value;

    let unidades_prod = formulario.unidades.value;

    var xhttp = new XMLHttpRequest();

    let params = "codigo = " + cod_prod + "&unidades = " + unidades_prod + "&enviar = true";

    xhttp.onreadystatechange = function () {

        //La funcion no se ejecuta hasta que la peticion se realice

        if (this.readyState === 4 && this.status === 200) {

            cargarCesta();

        }

    };

    //Funcion asyncrona con el booleano true


    xhttp.open("POST", "../Controlador/anadir_json.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(params);


};





const cargarProductos = () => {



};

const crearTablaProductos = () => {



};


const cargarCesta = () => {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {

        let tabla_cesta = document.querySelector('.tabla_cesta');

        if (this.readyState === 4 && this.status === 200) {


            let recogeCesta = JSON.parse(this.responseText);

            tabla_cesta.innerHTML = '';

            


        }

    };


    xhttp.open("GET", "../../Tema6/cesta_json.php", true);
    xhttp.send();
};

