/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = init();

function init()
{
    let data = new FormData();
    data.append('a', 5);
    data.append('b', 6);

    fetch('servidor.php'
//    ,
//            {
//                method: 'POST',
//                body: data
//            }
            )
            .then(function (response) {
                if (response.ok)
                {
          return response.json();
                } else
                {
                    throw "error";
                }
            }).then(function (texto) {
        console.log(texto);
    })
            .catch(function (error) {
                console.log(error);
            });

}