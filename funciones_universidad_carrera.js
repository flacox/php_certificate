
            // BUSCAR CARRERAS
function buscarCarreras(){
                fetch("/universidad_carrera.php")
                .then( res => res.json())
                .then( res => {
                    var listaId = document.getElementById('list_carrera')
                    var temp = '';
                    res.forEach(m => {

                        temp = temp + '<tr id="row-materia-{{ID}}">' + 
                        // '<td>' + m.id + '</td>' +
                        '<td>' + m.nombre +'</td>' + 
                        '<td>' + '<button class="btn btn-warning">Actualizar</button>' + '</td>' +
                        '<td>' + '<button onclick="eliminar({{ID}})" class="btn btn-danger">Eliminar</button>' + '</td>' +
                        '</tr>' 
                        listaId.innerHTML = temp;
                        //console.log(temp);
                    });
                   
                })
                .catch( err => {
                    console.log(err);
                });
            }

// Delete Carrera

function eliminar(id){
    fetch(`/universidad_carrera.php?id=${id}`, {
        method: 'DELETE'
    })
    .then( res => res.json())
    .then( res => {
        var row = document.getElementById("row-carrera-"+id).rowIndex;

        document.getElementById('list_carrera').deleteRow(row);
        console.log(res);
    })
    .catch( err => {
        console.log(err);
    });
    

}

