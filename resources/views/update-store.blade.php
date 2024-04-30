<!-- resources/views/update-store.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Store Data</title>
</head>
<body>
    <h1>Update Store Data</h1>

    <form action="{{ url('/stores/{user}') }}" method="POST">
        @csrf
        @method('PUT')

        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname" required>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" required>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" name="date_of_birth" id="date_of_birth" required>

        <label for="cnic">CNIC:</label>
        <input type="text" name="cnic" id="cnic" required pattern="[0-9]{11}">

        <button type="submit">Update</button>
    </form>
</body>
</html>
