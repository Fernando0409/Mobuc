<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box
        }
        /* Set height of body and the document to 100% */
        
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial;
        }
        /* Style tab links */
        
        .tablink {
            background-color: #555;
            color: white;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            font-size: 17px;
            width: 25%;
        }
        
        .tablink:hover {
            background-color: #777;
        }
        /* Style the tab content (and add height:100% for full page content) */
        
        .tabcontent {
            color: #000;
            display: none;
            padding: 100px 0px;
            height: 100%;
        }
        
        #tabla {
            width: 100%;
            text-align: center;
        }
        
        #tabla td {
            padding: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>

    <button class="tablink" onclick="openPage('reservaciones', this, '#37C63E')" id="defaultOpen">Reservaciones</button>
    <button class="tablink" onclick="openPage('renovaciones', this, '#39BBE8')">Renovaciones</button>
    <button class="tablink" onclick="openPage('rechazados', this, '#EA4B2B')">Eliminados</button>
    <button class="tablink" onclick="openPage('cuota', this, '#EAC81F')">Cuota</button>

    <div id="reservaciones" class="tabcontent">
        <table id="tabla" class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Datos del Alumno</th>
                    <th scope="col">Datos del Libro</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        <a href="#" class="check"><i class="fas fa-check"></i></a>
                    </td>

                </tr>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        autor
                    </td>

                </tr>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        autor
                    </td>

                </tr>

            </tbody>
        </table>
    </div>

    <div id="renovaciones" class="tabcontent">
        <table id="tabla" class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Datos del Alumno</th>
                    <th scope="col">Datos del Libro</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        autor
                    </td>

                </tr>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        autor
                    </td>

                </tr>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        autor
                    </td>

                </tr>

            </tbody>
        </table>
    </div>

    <div id="rechazados" class="tabcontent">
        <table id="tabla" class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Datos del Alumno</th>
                    <th scope="col">Datos del Libro</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        autor
                    </td>
                </tr>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        autor
                    </td>
                </tr>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        autor
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="cuota" class="tabcontent">
        <table id="tabla" class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Datos del Alumno</th>
                    <th scope="col">Datos del Libro</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Cuota</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        $
                    </td>
                    <td>
                        autor
                    </td>
                </tr>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        $
                    </td>
                    <td>
                        autor
                    </td>
                </tr>
                <tr>
                    <td>
                        Hola
                    </td>
                    <td>
                        xd
                    </td>
                    <td>
                        libro
                    </td>
                    <td>
                        $
                    </td>
                    <td>
                        autor
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>