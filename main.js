const activarFuncion= document.querySelector('#swetalert');


activarFuncion.addEventListener('click', sweerAlert)

    document.addEventListener('DOMContentLoaded', ()=>{

        document.querySelector('#swetalert').click(sweerAlert)
    })

function sweerAlert() {
    Swal.fire({
    icon: 'success',
    title: 'Excelente...Su correa se ha enviado correctamente',
    Text:'Recibira una respuesta lo mas pronto posible, muchas gracias por contactarte con Termotec!',
    confirmButtonText: '<a href="index.html">Regresar al menu</a> ' }
    )
}