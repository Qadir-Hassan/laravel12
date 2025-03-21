<!DOCTYPE html>
<html>
<head>
    <title>Form Result</title>
</head>
<body>
    <h1>Form Result</h1>

    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Password: {{ $password }}</p>
    <p>Description: {{ $description }}</p>
    <p>Active: {{ $isActive ? 'Yes' : 'No' }}</p>
    <p>Gender: {{ $gender }}</p>
    @if($profilePicturePath)
    <p>Profile Picture: <img src="{{ asset('storage/' . $profilePicturePath) }}" alt="Profile Picture" style="max-width:200px;"></p>
    @endif
    <p>Age: {{ $age }}</p>
    <p>Birthdate: {{ $birthdate }}</p>
    <p>Country: {{ $country }}</p>
 
</body>
</html>