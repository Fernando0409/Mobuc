$(document).ready(function(){
        
    var urlImage = '', img = '', title = '', author = '';
    var sintesis = '', year = '', isbn = '', editorial = '';
    var indice = 0, isbn1, identificador, x = 0;
    var exit = false

    var isbn = document.getElementById('isbn').value
    console.log(isbn)
    isbn1 = isbn.replace(/-/gi, "")

    $.get("https://www.googleapis.com/books/v1/volumes?q="+isbn1, (response) => {
        console.log(response);
        /*console.log(response.items[0].volumeInfo.industryIdentifiers[0].identifier)
        console.log(response.items[0].volumeInfo.industryIdentifiers[0].identifier == isbn1)*/
        
        for(i = 0; i < response.items.length; i++){
            while(x < 2){
                if(response.items[i].volumeInfo.industryIdentifiers[x].identifier == isbn1){
                    indice = i
                    identificador = x
                    exit = true
                    break;
                }
                x += 1
            }
            if(exit)
                break;
        }

        title = $('<td>'+response.items[indice].volumeInfo.title+'</td>')
        author = $('<td>'+response.items[indice].volumeInfo.authors+'</td>')
        isbn = $('<td>'+response.items[indice].volumeInfo.industryIdentifiers[identificador].identifier+'</td>')
        editorial = $('<td>'+response.items[indice].volumeInfo.publisher+'</td>')
        img = $('<img> </img>')

        urlImage = response.items[indice].volumeInfo.imageLinks.thumbnail
        img.attr('src', urlImage)

        // Momento de ponerlos en sus respectivos campos
        title.appendTo('#title')
        author.appendTo('#autor')
        isbn.appendTo('#isbn')
        editorial.appendTo('#editorial')
        img.appendTo('#portadaLibro')
        
    })
})