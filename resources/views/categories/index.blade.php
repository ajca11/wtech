@extends('template.main')

@section('title', 'Categories List')

@section('content')

    <title>Inventory</title>

    <div class="container-xxl rounded-3 mt-2" style="background-color: white; height: 35vh;  ">

        <div class="col-4 text-left ms-5" style="height: 200px; width: 28;>
        <div class = "card-header fs-3
            custom-margin-top">
            <br><br><br><br><br><br>

            <p> home / inventory
            <p>
            <h1> INVENTORY LIST </h1>
                    <div class = "btn btn-dark"> Add Inventory </div>


        </div>
    </div>

    <div class="container-xxl  ps-5 rounded-3 mt-2" style="width: 50; background-color: white; height: 85vh;  ">
        <table class="table">
            <br><br>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->itemname }}</td>
                        <td>{{ $category->price }}</td>
                        <td>{{ $category->quantity }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-light">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark" onclick="return confirm('ArE u sUrE?')">Delete</button>
                            </form>
                        </td>                        
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
