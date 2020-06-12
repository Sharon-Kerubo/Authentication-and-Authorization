<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="/css/registration.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="signup-form">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h1>Register</h1>
        <input type="text" placeholder="First Name" name="first_name" class="txtb"><br>
        <input type="text" placeholder="Last Name" name="last_name" class="txtb"><br>
        <input type="number" placeholder="Phone Number" name="phone_number" class="txtb"><br>
        <input type="text" placeholder="Email" name="email" class="txtb"><br>
        <input type="password" placeholder="Password" name="password" class="txtb"><br>
        <input type="text" placeholder="Next of Kin First Name" name="next_of_kin_first_name" class="txtb"><br>
        <input type="text" placeholder="Next of Kin Last Name" name="next_of_kin_last_name" class="txtb"><br>
        <input type="text" placeholder="Next of Kin Email" name="next_of_kin_email" class="txtb"><br>
        <input type="number" placeholder="Next of Kin Phone" name="next_of_kin_phone" class="txtb"><br>
        <label for="roles">Roles</label>
        <select name="role_id">
            @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
            {{-- <option value="1">User</option>
            <option value="2">Doctor</option>
            <option value="3">Admin</option> --}}
        </select><br>
        {{-- <input type="number" placeholder="ID Number" name="id_number" class="txtb"><br>
        <div class="form-group">
          <label for=license_document style="color:black;">License Document</label>
          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted"><p style="color:white;">Kindly upload your Doctor's License</p></small>
        </div>
        <input type="text" placeholder="License Number" name="license_no" class="txtb"><br>
        <input type="number" placeholder="Hospital ID" name="hospital_id" class="txtb"><br>
        <input type="text" placeholder="Specialization" name="specialization" class="txtb"><br> --}}
        <a href="#">Already Have one?</a>
        <input type="submit" value="Register" class="signup-btn">
    </form>
</div>

<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
