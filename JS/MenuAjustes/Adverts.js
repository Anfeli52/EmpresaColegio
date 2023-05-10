    function SaveName() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success',
        title: 'Guardado con éxito'
    })
}

function borrarcuenta() {
    document.getElementById('mensaje_borrar').style.display = 'block';
    document.getElementById('body').style.visibility = 'visible';
}

function closedialog() {
    document.getElementById('mensaje_borrar').style.display = 'none';
    document.getElementById('body').style.visibility = 'hidden';
}

// FIN CUENTA // INICIO NOTIFICACIONES---------------------------------------------------------------------------------------------------------------------------------

function selectemail() {
    document.getElementById("focusin").classList.toggle("show");
}

window.onclick = function (event) {
    if (!event.target.matches('.selectcorreo')) {
        var dropdowns = document.getElementsByClassName("focusbtn");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

window.onclick = function (event2) {
    if (!event2.target.matches('.btncorreo')) {
        var dropdowns2 = document.getElementsByClassName("focusbtn");
        var i2;
        for (i2 = 0; i2 < dropdowns.length; i2++) {
            var openDropdown = dropdowns2[i2];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

// FIN NOTIFICACIONES // INICIO EMAIL---------------------------------------------------------------------------------------------------------------------------------

const el = document.getElementById('question');
const hiddenDiv = document.getElementById('mensaje');
const triangle = document.getElementById('triangle');

const el2 = document.getElementById('question2');
const hiddenDiv2 = document.getElementById('mensaje2');
const triangle2 = document.getElementById('triangle2');

const el3 = document.getElementById('trash');
const hiddenDiv3 = document.getElementById('delete');
const triangle3 = document.getElementById('triangledelete');

el.addEventListener('mouseover', function handleMouseOver() {
    hiddenDiv.style.visibility = 'visible';
    triangle.style.visibility = 'visible';
});

el.addEventListener('mouseout', function handleMouseOut() {
    hiddenDiv.style.visibility = 'hidden';
    triangle.style.visibility = 'hidden';
});

el2.addEventListener('mouseover', function handleMouseOver() {
    hiddenDiv2.style.visibility = 'visible';
    triangle2.style.visibility = 'visible';
});

el2.addEventListener('mouseout', function handleMouseOut() {
    hiddenDiv2.style.visibility = 'hidden';
    triangle2.style.visibility = 'hidden';
});

el3.addEventListener('mouseover', function handleMouseOver() {
    hiddenDiv3.style.visibility = 'visible';
    triangle3.style.visibility = 'visible';
});

el3.addEventListener('mouseout', function handleMouseOut() {
    hiddenDiv3.style.visibility = 'hidden';
    triangle3.style.visibility = 'hidden';
});

function DeleteEmail() {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Eliminarás este correo electrónico, puedes volver a agregarlo cuando desees.",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#238636',
        cancelButtonColor: 'red',
        confirmButtonText: 'Si, elimínalo'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                '¡Eliminado!',
                'Este correo electrónico ha sido borrado exitosamente',
                'success'
            )
        }
    });
}

function AddEmail() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success',
        title: 'Successfully updated'
    })
}

// FIN EMAIL // INICIO CONTRASEÑA---------------------------------------------------------------------------------------------------------------------------------

function ActualizaContrasena() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success',
        title: 'Actualizada con éxito'
    })
}

// FIN CONTRASEÑA // INICIO ACTUALIZA PAGO---------------------------------------------------------------------------------------------------------------------------------

function añadir_infobilletera() {
    document.getElementById('add_infobilletera').style.display = 'block';
    document.getElementById('resumen').style.display = 'none';
    document.getElementById('edit-billing').style.display = 'none';
    document.getElementById('add-billing').style.display = 'none';
}

function cancelinfo() {
    document.getElementById('add_infobilletera').style.display = 'none';
    document.getElementById('resumen').style.display = 'block';
    document.getElementById('edit-billing').style.display = 'block';
    document.getElementById('add-billing').style.display = 'block';
}

function editar_infobilletera() {
    document.getElementById('editar_infobilletera').style.display = 'block';
    document.getElementById('resumen').style.display = 'none';
    document.getElementById('edit-billing').style.display = 'none';
    document.getElementById('add-billing').style.display = 'none';
}

function cancelinfo2() {
    document.getElementById('editar_infobilletera').style.display = 'none';
    document.getElementById('resumen').style.display = 'block';
    document.getElementById('edit-billing').style.display = 'block';
    document.getElementById('add-billing').style.display = 'block';
}

function addPayMethod(){
    document.getElementById('add-card').style.visibility = 'visible';
    document.getElementById('body').style.visibility = 'visible';
}

function cerrarPaymentMethod(){
    document.getElementById('add-card').style.visibility = 'hidden';
    document.getElementById('body').style.visibility = 'hidden';
}

function editPayMethod(){
    document.getElementById('edit-card').style.visibility = 'visible';
    document.getElementById('body').style.visibility = 'visible';
}

function cerrarPaymentMethod2(){
    document.getElementById('edit-card').style.visibility = 'hidden';
    document.getElementById('body').style.visibility = 'hidden';
}

/*------------------------------------------------------------------*/

/*

function AddInfo() {
    document.getElementById('Advert_add_info').style.display = 'block';
    document.getElementById('selectMethods').style.display = 'block';
    document.getElementById('insert_credit').style.display = 'block';
    document.getElementById('box_add_payment').style.display = 'block';
    document.getElementById('insert_paypal').style.display = 'none';
    document.getElementById('estado_de_pago').style.display = 'none';

    document.getElementById('label_select_payment_credit').style.backgroundColor = 'rgb(60, 60, 60)';
    document.getElementById('label_select_payment_credit').style.color = '#fff';
    document.getElementById('label_select_payment_credit').style.border = '1px solid #fff';

    document.getElementById('label_select_payment_paypal').style.backgroundColor = 'rgb(185, 182, 182)';
    document.getElementById('label_select_payment_paypal').style.color = '#141414';
    document.getElementById('label_select_payment_paypal').style.border = '1px solid #444';
}

function CloseAdvert() {
    document.getElementById('Advert_add_info').style.display = 'none';
}

function select_payment_credit() {
    document.getElementById('insert_credit').style.display = 'block';
    document.getElementById('insert_paypal').style.display = 'none';

    document.getElementById('label_select_payment_credit').style.backgroundColor = 'rgb(60, 60, 60)';
    document.getElementById('label_select_payment_credit').style.color = '#fff';
    document.getElementById('label_select_payment_credit').style.border = '1px solid #fff';

    document.getElementById('label_select_payment_paypal').style.backgroundColor = 'rgb(185, 182, 182)';
    document.getElementById('label_select_payment_paypal').style.color = '#141414';
    document.getElementById('label_select_payment_paypal').style.border = '1px solid #444';
}

function select_payment_paypal() {
    document.getElementById('insert_credit').style.display = 'none';
    document.getElementById('insert_paypal').style.display = 'block';

    document.getElementById('label_select_payment_paypal').style.backgroundColor = 'rgb(60, 60, 60)';
    document.getElementById('label_select_payment_paypal').style.color = '#fff';
    document.getElementById('label_select_payment_paypal').style.border = '1px solid #fff';

    document.getElementById('label_select_payment_credit').style.backgroundColor = 'rgb(185, 182, 182)';
    document.getElementById('label_select_payment_credit').style.color = '#141414';
    document.getElementById('label_select_payment_credit').style.border = '1px solid #444';
}

function CloseAddPayment() {
    document.getElementById('selectMethods').style.display = 'none';
    document.getElementById('box_add_payment').style.display = 'none';
    document.getElementById('estado_de_pago').style.display = 'block';
}

function Save_Payment_Method() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success',
        title: 'Guardado con éxito'
    })
    document.getElementById('add_infobilletera').style.display = 'none';
    document.getElementById('resumen').style.display = 'block';
}

// FIN ACTUALIZA PAGO // INICIO HISTORIAL DE PAGO---------------------------------------------------------------------------------------------------------------------------------

// FIN HISTORIAL DE PAGO // INICIO LIMITE DE GASTO---------------------------------------------------------------------------------------------------------------------------------

function Update_limit() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success',
        title: 'Actualizado con éxito'
    })
}*/