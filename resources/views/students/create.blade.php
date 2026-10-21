<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>
    <hr>
    <br>
    <form action="/students" method="post">
        @csrf
        <fieldset style="width: fit-content;">
            <legend>Add a Student : &nbsp; 👇🏻 &nbsp;</legend>
            <br>
            <label for="name">Name</label>
            <input type="text" name="name">
            <br><br>
            <label for="email">Email</label>
            <input type="text" name="email">
            <br><br>
            <label for="phone">Phone</label>
            <input type="text" name="phone">
            <br><br>
            <label for="department">Department</label>
            <input type="text" name="department">
            <br><br>
            <label for="age">Age</label>
            <input type="number" name="age">
            <br><br>
            <button type="submit">Save</button>
            <br><br>
        </fieldset>
    </form>
    <p>Back to main Menu 👉🏻 &nbsp;
        <button type="submit" onclick="window.location.href='/students'">Student Lists</button>
    </p>
</body>
</html>