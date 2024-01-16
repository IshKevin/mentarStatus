<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin Login</title>
    </head>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden;
        }
        .content{
            display: flex;
            align-items: center;
            width: 100%;
            gap: 10px;
            margin: 5px;
        }
        .profile{
            flex: 1,
        }
        .users{
            flex: 3;
            align-items: center;
        }
    </style>
<body>
    <h1>Dashboard</h1>
    <p>Welcome to the admin page</p>
    <a href="admin/logout">Logout</a>
    <div class="content">
        <div class="profile">View profile</div>
        <div class="users">
            <h1>List of Patients </h1>
            @foreach ($subscribers as $subscriber)
            <p>{{ $subscriber->email }} <button>edit</button> <button>delet</button> <br/></p>
            @endforeach
        </div>
    </div>



</body>
</html>
