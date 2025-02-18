<!DOCTYPE html>
<html lang="en">


<head>


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <title>Form</title>


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    <style>
        .center {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }


        .center label {
            width: 30%;
        }




        .center.form-control {
            width: 100%;
        }


        .categories {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
    </style>


</head>


<body style="font-family: 'Poppins', sans-serif; background-color: rgba(238, 240, 240, 0.99);">


    <br><br><br><br><br><br>

    <div class="justify-content-start">
        <div class="container card" style="width: 25rem">
            <div class="container">
                <br />
                <button class="btn btn-md btn-dark mb-3">Back</button>




                <div class="mb-3 categories">
                    <label for="exampleFormControlInput1" class="form-label">Categories:
                    </label>
                    <button class="btn btn-light dropdown-toggle categories ms-4" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Select Category
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> Powders </a></li>
                    </ul>
                </div>




                <div class="mb-3 center">
                    <div class="col-auto">Item Name:</div>
                    <div class="col-auto">
                        <input type="text" class="form-control" />
                    </div>
                </div>




                <div class="mb-3 center">
                    <div class="col-auto">Price:</div>
                    <div class="col-auto">
                        <input type="text" class="form-control" />
                    </div>
                </div>




                <div class="mb-3 center">
                    <div class="col-auto">Quantity:</div>
                    <div class="col-auto">
                        <input type="text" class="form-control" />
                    </div>
                </div>
            </div>




            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-md btn-dark">Submit</button>
            </div>
        </div>
    </div>
</body>


</html>
