<!DOCTYPE html>
<html lang="en">

<head style = "font-family: 'Poppins', sans-serif;">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Inventory</title>

    <style>
        .outer-container {
            padding: 100px;
            background-color: lightgray;
        }

        .inner-container {
            display: flex;
            gap: 20px;
        }

        .box {
            width: 45%;
            padding: 20px;
            background-color: lightblue;
            border: 1px solid #ccc;
        }
    </style>

    <h5 class = "mt-2"
        style = "text-align: center; font-family: 'Courier New', Courier, monospace; font-size: small; text-decoration: dotted;">
        free international shipping on orders $150+ USD. free returns always. </h5>

    <div class = "d-flex justify-content-center mt-2" style = "width: 100  %; font-size: 8;">
        <div class = "container rounded-3"
            style = "background-color: rgb(255, 254, 254); width: 90%; height: 40px; color: black;">


            <ul class = "nav nav-tabs card-header-tabs justify-content-center">

                <li class = "nav-item">
                    <a class = "nav-link disabled" aria-current="true" href = "#"> R.E.M BEAUTY </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link disabled" aria-current="true" href = "#"> NEW COLLECTION </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link disabled" href = "#"> LOG IN </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link disabled" aria-current="true" href = "#"> CATALOG </a>
                </li>

                <li class= "nav-item">
                    <a class = "nav-link disabled" aria-disabled = "true"> BEST SELLERS </a>
                </li>

            </ul>
        </div>
    </div>
    </div>

</head>

<body style="font-family: 'Poppins', sans-serif; background-color: rgba(238, 240, 240, 0.99);">

    <div class="container-xxl rounded-3 mt-2" style="background-color: white; height: 35vh;  ">

        <div class="col-4 text-left ms-5" style="height: 200px; width: 28;>
        <div class = "card-header fs-3
            custom-margin-top">
            <br><br><br><br>

            <p> home / inventory
            <p>
            <h1> INVENTORY LIST <h1>
                    <div class = "btn btn-dark"> Add Inventory </div>


        </div>
    </div>

    <div class="container-xxl  ps-5 rounded-3 mt-2" style="width: 50; background-color: white; height: 85vh;  ">
        <table class="table">
            <br><br>
            <thead>
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Wty</th>
                    <th scope="col"> Price </th>
                    <th scope="col"> Action </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Perfume</td>
                    <td>Cloud by AG</td>
                    <td>20</td>
                    <td>80000</td>
                    <td>
                        <div class = "btn btn-light"> Edit </div>
                        <div class = "btn btn-dark"> Delete </div>
                    </td>

                </tr>
                <tr>
                    <td>Serum</td>
                    <td>Dreamglow Highlight</td>
                    <td>15</td>
                    <td>16500</td>
                    <td>
                        <div class = "btn btn-light"> Edit </div>
                        <div class = "btn btn-dark"> Delete </div>
                    </td>

                </tr>

            </tbody>
        </table>

    </div>
    </div>
    </div>

    </div>
</body>

</html>
