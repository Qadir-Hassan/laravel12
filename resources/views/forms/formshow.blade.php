<!DOCTYPE html>
<html>
<head>
    <title>Laravel Form</title>
</head>
<body>
    <h1>Form</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('form.process') }}" enctype="multipart/form-data">
        @csrf

        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" ><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>

        <label for="description">Description:</label><br>
        <textarea name="description" id="description"></textarea><br><br>

        <label for="is_active">Active:</label>
        <input type="checkbox" name="is_active" id="is_active" ><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="male" id="male" >
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Female</label>
       <br>
       <br><br>
        <label for="profile_picture">Profile Picture:</label><br>
        <input type="file" name="profile_picture" id="profile_picture"><br><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age" id="age" ><br><br>

        <label for="birthdate">Birthdate:</label><br>
        <input type="date" name="birthdate" id="birthdate"><br><br>

        <label for="country">Country:</label><br>
        <select name="country" id="country">
            <option value="">Select Country</option>
            <option value="CA">Canada</option>
            <option value="US">United States</option>
            <option value="UK">United Kingdom</option>
            <option value="AU">Australia</option>
        </select><br><br>

    

        <button type="submit">Submit</button>
    </form>
</body>
</html>