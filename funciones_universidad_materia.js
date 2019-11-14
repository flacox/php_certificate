// BUSCAR MATERIAS
function buscarMaterias(){
                fetch("/universidad_materia.php")
                .then( res => res.json())
                .then( res => {
                    var listaId = document.getElementById('list_Id')
                    var temp = '';
                    res.forEach(m => {

                        temp = temp + '<tr>' + 
                        '<td>' + m.nombre +'</td>' + 
                        '<td>' + m.creditos + '</td>' + 
                        '<td>' + '<button class="btn btn-warning">Actualizar</button>' + '</td>' +
                        '<td>' + '<button class="btn btn-danger">Eliminar</button>' + '</td>' +
                        '</tr>' 
                        listaId.innerHTML = temp;
                        //console.log(temp);
                    });
                   
                })
                .catch( err => {
                    console.log(err);
                });
            }



