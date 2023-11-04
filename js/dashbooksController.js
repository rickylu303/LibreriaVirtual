var request;

$( document ).ready(function() {
    init();
});

function init(){
    $('#saveBookButton').click((event) => {sendNuevoLibro(event);});
}

function sendNuevoLibro(event){
    event.preventDefault();

    let titulo = $('#title')[0].value;
    let autorId = $('#autorValue').eq(0).attr("idValue");
    let editorialId = $('#editorialValue').eq(0).attr("idValue");
    let price = $('#price')[0].value;
    let sinopsis = $('#sinopsis')[0].value;
    let descripcion = $('#descripcion')[0].value;
    let pdffile = $('#file-input')[0];
    let bookimage = $('#file-input1')[0];

    if(titulo != null && autorId != null && editorialId != null && price != null && sinopsis != null && descripcion != null && pdffile.files.length > 0 && bookimage.files.length > 0){
        if (request) {
            request.abort();
        }

        var $form = $('#registrarLibro');
        var $inputs = $form.find("input, select, button, textarea");
        $inputs.prop("disabled", true);

        var formData = new FormData();
        formData.append('pdfFile', pdffile.files[0]);
        formData.append('imgFile', bookimage.files[0]);

        // Agrega otros datos a enviar
        formData.append('titulo', titulo);
        formData.append('autorId', autorId);
        formData.append('editorialId', editorialId);
        formData.append('price', price);
        formData.append('sinopsis', sinopsis);
        formData.append('descripcion', descripcion);
        formData.append('action', 'saveBook');

        request = $.ajax({
            url: "../controller/libroController.php",
            type: "post",
            cache: false,
            processData: false,
            contentType : false,
            data: formData
        });

        request.done(function (response, textStatus, jqXHR){
            console.log(response);
            var responseData = JSON.parse(response);
    
            if(responseData['success']){
                window.location.href = "../view/dashbooks.php";
            }else{
                console.log('Unusual error, please contact support.');
            }
        });
    
        request.fail(function (jqXHR, textStatus, errorThrown){
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
            );
        });
    
        request.always(function () {
            $inputs.prop("disabled", false);
        });
    }else{
        alert('Some fields require revision.');
    }
}