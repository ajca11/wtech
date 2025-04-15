@extends('template.main')

@section('title', 'Categories List')

@section('content')

    <style>
        .picture {
            margin-left: 400px;
            background-image: url("https://wwd.com/wp-content/uploads/2022/03/0511_RapidCh2_Look01_FN.jpg?crop=0px%2C489px%2C4368px%2C2446px&resize=1000%2C563");
            background-size: cover;
            background-position: center;
            height: 800px;
            width: 1000px;
            border-radius: 20px;
        }

        .border {
            height: 400px;
            width: 800px;
            margin-top: 20;
        }
    </style>


    <body style="font-family: 'Poppins', sans-serif; background-color: rgba(238, 240, 240, 0.99);">

        <form method = "POST" action ="/login">
            @csrf()

            <div class = "container fluid">
                <div class="container  ps-5 rounded-3 mt-2"
                    style = "background-color: white; height: 85vh;  ">

                    <div class="container border fluid justify-content-start ps-5">
                        <div class="col-4 text-left ms-5" style="height: 200px; width: 28%;>
                         <div class = "card-header fs-3 custom-margin-top">

                            <div class="Customer-formTitle fs-2"> LOGIN </div>

                            <div class="mt-2">
                                <input type="text" placeholder="  username" class="form-control rounded-5"
                                    style="font-size: small; height: 40px;" />
                            </div>

                            <div class="mt-2">
                                <input type="password" placeholder="  password" class="form-control rounded-5"
                                    style="font-size: small; height: 40px;" />
                            </div>

                            <div class="mt-3 text-end">
                                <p> <a style="text-decoration: underline;"> FORGOT PASSWORD? </a></p>
                            </div>

                            <div class="container text-center mt-3">
                                <button class="btn btn-md btn-dark button rounded-5"
                                    style="font-weight: bold; height: 50px; width: 100%;"> SIGN IN </button>
                            </div>

                            <div class="mt-3">
                                <p style="color: gray; font-size: medium;">
                                    Don't have an account? <a style=" text-decoration: underline; color: black;">CREATE
                                        ACCOUNT</a>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class = container fluid justify-content-end>
                        <div class="picture"></div> 
                    </div>
                    
                </div>
            </div>
        </form>
    @endsection
