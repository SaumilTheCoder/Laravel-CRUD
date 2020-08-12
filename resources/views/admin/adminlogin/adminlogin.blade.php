@include('admin/header/header')
{{-- @include('sidebar') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registerd</title>
</head>
<body>
    <form action="" method="post">
        <table border="2" align="center">
            <tr>
                <td>First Name</td>
                    <td><input type="text" name="fname"></td>
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                    <td><input type="text" name="lname"></td>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                    <td><input type="text" name="email"></td>
                </td>
            </tr>
            <tr>
                <td>Mobile  No</td>
                    <td><input type="text" name="mobile"></td>
                </td>
            </tr>
            <td colspan="2" align="center">
            <button type="submit">Submit</button>
            </td>
        </table>
    </form>
</body>
</html>
