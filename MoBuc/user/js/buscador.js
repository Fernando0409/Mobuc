$(document).ready(function() {
    let item, title, author, publisher, bookLink, bookImg;

    let outputList = document.getElementById("list-output");
    let bookUrl = "https://www.googleapis.com/books/v1/volumes?q=";
    let placeHldr = '<img src= "http://via.placeholder.com/150">'
    let searchData;

    $("#search").click(function() {
        outputList.innerHTML = ""
        searchData = $("#search-box").val();
        if (searchData === "" || searchData === null)
            displayError();
        else {
            $.ajax({
                url: bookUrl + searchData,
                dataType: "json",
                success: function(res) {
                    console.log(res)
                    if (Response.totalItem === 0) {
                        alert("No hay resultados")
                    } else {
                        $("title").anitem({ 'margin-top: 10px' });
                        $("")
                    }
                }
            })
        }
    })
})