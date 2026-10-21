<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <hr>
    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th colspan="2">Detail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>ID</td>
                    <td>{{$student->id}}</td>
                    <td rowspan="6" align="center" valign="middle">
                        <button type="button" onclick="window.location.href='/students/{{$student->id}}/edit'">Edit</button>
                        <br><br>
                        <form action="/students/{{$student->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this data ?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{$student->name}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$student->email}}</td>
                </tr>
                <tr>
                    <td>phone</td>
                    <td>{{$student->phone}}</td>
                </tr>
                <tr>
                    <td>department</td>
                    <td>{{$student->department}}</td>
                </tr>
                <tr>
                    <td>age</td>
                    <td>{{$student->age}}</td>
                </tr>
        </tbody>
    </table>
    <p>Back to main Menu 👉🏻 &nbsp;
        <button type="submit" onclick="window.location.href='/students'">Student Lists</button>
    </p>
</body>
</html>