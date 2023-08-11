<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/773033d9a4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
    <script src="{{ asset('js/editEmployee.js') }}"></script>
    <title>@yield('pageTitle')</title>
</head>

<body>
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container">
        @yield('content')
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <div id="editEmployee" class="overlay">
        <div class="popupDiv">
            <h2 id="updateEmployeeH2"></h2>
            <h5 id="updateEmployeeh5">In case you don't want edit a field, you can just let it empty.</h5>
            <a id="popUpExitButton" class="close" href="#">&times;</a>
            <div class="content" id="contentPopUp">
                <form method="POST" id="updateEmployeeForm">
                    @csrf
                    @method('PUT')
                    <label for="first_name_edit">First Name</label>
                    <input name="first_name" id="first_name_edit" type="text">
                    <label for="last_name_edit">Last Name</label>
                    <input name="last_name" id="last_name_edit" type="lastNametext">
                    <label for="birth_edit">Birth</label>
                    <input name="birth" id="birth_edit" type="date">
                    <a class="btn btn-primary" onclick="checkFormEmployee()"><i class="fa-solid fa-check"></i></a>
                    <button id="updateEmployeeButton" style="display: none;"></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
