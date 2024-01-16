<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>
        <style>
         * {
             margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden;
        }
        h1, h2, h3, h4, h5, h6 {
            font-weight: bold;
        }
        a{
            color: #f5f5f5;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .header{
            display: flex;
            justify-content: space-between;
            padding: 0.5rem;
            background-color: #007bff;
            color: #f5f5f5;
            width: 100%;
        }
        .header h1{
            font-size: 1.2rem;
        }
        .nav-link{
            display: flex;
            justify-content: space-between;
            color: #f5f5f5;
        }
        .nav-link li{
            list-style: none;
            margin-right: 0.7rem;
            display: flex;
            flex-direction: row;
        }
        </style>
    </head>
   <body>
    <header class="header">
      <h1>E-HealthChecks</h1>
      <nav class="nav-link" style="display: flex; justify-content: space-around; list-style-type: none;">
        <ul class="nivigator">
          <li><a href="#home">Home</a></li>
          <li><a href="#About">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{ route('admin') }}">Admin</a></li>
        </ul>
      </nav>
    </header>
    <section>
        <div class="container">
            <h1>Log In </h1>
            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                   {{-- @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror --}}
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                    {{-- @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror --}}
                    <button type="submit" class="btn btn-primary">Login</button>
                    {{-- <a href="{{ route('admin.register') }}" class="btn btn-primary">Register</a>
                    <a href="{{ route('admin.forgot-password') }}" class="btn btn-primary">Forgot Password</a>
                    <a href="{{ route('admin.reset-password') }}" class="btn btn-primary">Reset Password</a>
                    <a href="{{ route('admin.logout') }}" class="btn btn-primary">Logout</a>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Dashboard</a> --}}
        </div>

    </section>
   </body>
</html>
