<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./body2.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Inline+One:ital@1&family=Itim&family=Josefin+Sans:ital,wght@1,300&family=Lato:wght@300;400;700&family=Playfair+Display:wght@500&family=Roboto:ital,wght@0,500;0,700;1,400&family=Tilt+Prism&display=swap" rel="stylesheet">

<style>
    .body2-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
  }
  .body2-body2 {
    width: 100%;
    height: 1066px;
    display: flex;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: rgba(0, 0, 0, 1);
  }
  .body2-frame10 {
    top: 64px;
    left: 387px;
    width: 665px;
    height: 744px;
    display: flex;
    overflow: hidden;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: rgba(109, 174, 108, 0);
  }
  .body2-coolestwallpapertoomuchhardworkmustrateitthanku1 {
    top: 0px;
    left: 19px;
    width: 637px;
    height: 826px;
    position: absolute;
    
  }
  ::placeholder{
    opacity: 0.5;
    color: antiquewhite;
    font-size: 20px;
    

  }
  .body2-logindetailsdiv{
    margin-top: 20%;
    margin-left: 13%;
  }
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
  
  button{
    padding: 12px 40px;
    display: flex;
    overflow: hidden;
    position: absolute;
    align-items: flex-start;
    border-radius: 15px;
    transition: 0.7s;
    color: antiquewhite;
    font-size: 23px;
    font-family: 'Itim';
    border: none;
  }
  .body2-login {
    top: 83%;
    left: 60%;
    background-color: rgba(76, 79, 87, 1); 
  }
  .body2-login:hover{
    background-color: rgb(65, 33, 151);
    cursor: pointer;
    box-shadow: rgb(62, 63, 68)5px 10px 12px;
    padding: 16px 60px;
  }
  
  .body2-signin {
    top: 541px;
    left: 92px;
    background-color: rgba(138, 62, 62, 0.8700000047683716);
  }
  .body2-signin:hover{
    background-color: rgb(33, 151, 59);
    cursor: pointer;
    box-shadow: rgb(62, 63, 68)5px 10px 12px;
    padding: 16px 60px;
  }
  
  .body2-logintext {
    top: 76%;
    left: 47%;
    color: rgba(0, 0, 0, 1);
    width: 251px;
    position: absolute;
    font-size: 28px;
    font-family: Itim;
    font-weight: 400;
  }
  .body2-headtext {
    top: 5%;
    left: 15%;
    color: rgba(0, 0, 0, 1);
    position: absolute;
    font-size: 54px;
    font-family: Itim;
    font-weight: 400;
  }
  
</style>
</head>

<body>
    <div>
        
        <div class="body2-container">
          <div class="body2-body2">
            <div class="body2-frame10">
              <img
                src="images/Coolest wallpaper, too much hard work, must rate it, thank u.jpeg"
                alt="Coolestwallpapertoomuchhardworkmustrateitthanku1786"
                class="body2-coolestwallpapertoomuchhardworkmustrateitthanku1"
              />
              <div class="body2-logindetailsdiv">
              <h1>Create Skin Type</h1>

       
    
    <h1>Sign Up</h1>

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

    <button type="submit">Sign Up</button>
</form>


             
              <button class="body2-login">
                Log in
              </button>
              <a href="{{ url('/quiz') }}"><button class="body2-signin">
                Sign in
              </button></a>
              <span class="body2-logintext"><span>Already a member?</span></span>
              <span class="body2-headtext"><span>Sign up here</span></span>
            </div>
          </div>
        </div>
      </div>
      
</body>
</html>