<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b> Users list:</b>
    <table border='1px'>
    <tr>
        <th> ID </th>
        <th> Username </th>
        <th> Password </th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td> {{$user->ID}} </td>
        <td> {{$user->Name}} </td>
        <td> {{$user->Password}} </td>
    </tr>
    @endforeach
    </table>
</body>
</html>