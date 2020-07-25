
window.onload = init();

function init()
{
    let data = new FormData();
    data.append('a', 5);
    data.append('b', 6);

    fetch('servidor.php')
            .then(function (response) {
                if (response.ok){
                    return response.json();
                }else{
                    throw "error";
                }}).then(function (texto) {
                    // mostramos lo obtenido del servidor
                    // y de aqui en adelante se puede hacer 
                    // un uso de la informacion.
                    console.log(texto);
            })
            .catch(function (error) {
                console.log(error);
            });

}
