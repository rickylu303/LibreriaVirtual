var request;
var listAllBooks;

$( document ).ready(function() {
    init();
});

function init(){
    getAllBooks();
    orderEvents();
}

function getAllBooks(){
    request = $.ajax({
        url: "../controller/libroController.php",
        type: "post",
        data: {
            'action' : 'listLibros'
        }
    });

    request.done(function (response, textStatus, jqXHR){
        console.log(response);

        try{
            var responseData = JSON.parse(response);
            var listBooks;

            if(responseData['success']){
                console.log('Success');
                console.log(responseData);

                if(responseData['listBooks']){
                    listBooks = JSON.parse(responseData['listBooks']);
                    listAllBooks = listBooks;
                    escribirLibros(listAllBooks);
                }
            }else if(responseData['error']){
                console.log('Se ha enviado un error');
                console.log(responseData['error']);
            }else{
                console.log('Error indefinido');
            }
        }catch(error){
            return null;
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    request.always(function () {
        // Allways return
    });
}

function escribirLibros(books){
    if(books != null){
        limpiarLibros();

        books.forEach(book => {
            let tittle = book.Titulo.length > 15 ? book.Titulo.substring(0, 15) + "..." : book.Titulo;
            let calificationCount = Math.round(book.PromedioPuntuacion);
            var bookCard = $('<div>').addClass('bookCard').attr('bookId', book.ID_libro);
            var img = $('<img>').attr('src', '../resources/images/' + book.image_url).attr('alt', 'Book image');
            var bookCardDetail = $('<div>').addClass('bookCardDetail');
            var h3 = $('<h3>').addClass('cardBookTitle').text(tittle);
            var pAutor = $('<p>').addClass('cardBookAutor').text('By ' + book.NombreAutor);
            var bookCardCalification = $('<div>').addClass('bookCardCalification');
            var calification = $('<div>').addClass('calification');

            for (var i = 1; i <= calificationCount; i++) {
                var starSolid = $('<i>').addClass('fa-solid fa-star').css('color', '#e5d738');
                calification.append(starSolid);
            }

            for (var i = calificationCount + 1; i <= 5; i++) {
                var starRegular = $('<i>').addClass('fa-regular fa-star').css('color', '#e5d738');
                calification.append(starRegular);
            }

            var bookCardPrice = $('<div>').addClass('bookCardPrice');
            var spanPrice = $('<span>').text('$ ' + book.Precio);
            var pSinopsis = $('<p>').addClass('cardBookSinopsis').text(book.Sinopsis);
            var cardBookButtons = $('<div>').addClass('cardBookButtons');
            var aDetails = $('<a>').addClass('btnDetails').attr('href', '#').text('Details');
            var aAddToCart = $('<a>').addClass('btnAddToCart').attr('href', '#').text('Add to Cart');

            bookCard.append(img);
            bookCard.append(bookCardDetail);
            bookCardDetail.append(h3);
            bookCardDetail.append(pAutor);
            bookCardDetail.append(bookCardCalification);
            bookCardCalification.append(calification);
            bookCardCalification.append(bookCardPrice);
            bookCardPrice.append(spanPrice);
            bookCardDetail.append(pSinopsis);
            bookCardDetail.append(cardBookButtons);
            cardBookButtons.append(aDetails);
            cardBookButtons.append(aAddToCart);

            $('#bookCardsContainer').append(bookCard);
        });

    }else{
        return;
    }
}

function limpiarLibros(){
    $("#bookCardsContainer").empty();
}

function orderEvents(){
    $('.orderbyFilters a').click((event) => {
        let elementClick = event.target;
        cleanOrder();
        $('#' + elementClick.id).addClass('selectedOrder');
        orderResults(elementClick.id);
    });
}

function cleanOrder(){
    $('.selectedOrder').removeClass('selectedOrder');
}

function orderResults(filter){
    if(filter == 'orderByDate'){orderByDate();}
    else if(filter == 'orderByRate'){orderByCalification();}
}

function orderByDate(){
    if(listAllBooks == null){return;}

    listAllBooks.sort(function (a, b) {
        const fechaA = new Date(a.Fecha_de_publicacion);
        const fechaB = new Date(b.Fecha_de_publicacion);
    
        return fechaB - fechaA;
    });

    escribirLibros(listAllBooks);
}

function orderByCalification(){
    console.log('Esta llegando');
    if(listAllBooks == null){return;}

    listAllBooks.sort(function (a, b) {
        return b.PromedioPuntuacion - a.PromedioPuntuacion;
    });

    escribirLibros(listAllBooks);
}