<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .form-container{
    display: block; 
    padding-top: 12px ;
    padding-bottom: 12px;
    padding-left: 30px;
    padding-right: 190px;
    display: flex;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: rgba(76, 79, 87, 1);
    text-decoration: none;
    margin-bottom: 25px;
    color: antiquewhite;
    font-size: 20px;
  }
  .body2-signin {
    top: 541px;
    margin-top: 20px;
    left: 92px;
    background-color: rgba(138, 62, 62, 0.8700000047683716);
  }
  .body2-signin:hover{
    background-color: rgb(33, 151, 59);
    cursor: pointer;
    box-shadow: rgb(62, 63, 68)5px 10px 12px;
    padding: 16px 60px;
    transition: 0.2s;
  }
    </style>
</head>
<body>
    <h1>Signup</h1>
    <form action="{{ route('register') }}" method="POST">
    @csrf
    
    <div class="form-container">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div class="form-container">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-container">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div class="form-container">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>
    <button type="submit" ><a href="{{ url('/quiz') }}"></a>
                Sign in
              </button>

    
    
</form>
<a href="{{ url('/quiz') }}"><button class="body2-signin">
                Next
              </button>
</body>
</html>