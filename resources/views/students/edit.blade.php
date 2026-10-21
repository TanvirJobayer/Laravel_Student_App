<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Detail</title>
</head>
<body>
    <h1>Edit Student Detail</h1>
    <hr>
    <br>
    <form action="/students/{{$student->id}}" method="post">
        @csrf
        @method('put')
        <fieldset style="width: fit-content;">
            <legend>Edit Student Detail: &nbsp; 👇🏻 &nbsp;</legend>
            <br
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$student->name}}">
            <br><br>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$student->email}}">
            <br><br>
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{$student->phone}}">
            <br><br>
            <label for="department">Department</label>
            <input type="text" name="department" value="{{$student->department}}">
            <br><br>
            <label for="age">Age</label>
            <input type="number" name="age"  value="{{$student->age}}">
            <br><br>
            <button type="submit">Update Student Detail</button>
            <br><br>
        </fieldset>
    </form>
    <p>Back to main Menu 👉🏻 &nbsp;
        <button type="submit" onclick="window.location.href='/students'">Student Lists</button>
    </p>
</body>
</html>