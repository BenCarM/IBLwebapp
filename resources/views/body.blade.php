<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Inline+One:ital@1&family=Itim&family=Josefin+Sans:ital,wght@1,300&family=Lato:wght@300;400;700&family=Playfair+Display:wght@500&family=Roboto:ital,wght@0,500;0,700;1,400&family=Tilt+Prism&display=swap" rel="stylesheet"><link href="./body1.css" rel="stylesheet" />

<style>
    .body1-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
    background-color: rgba(173, 233, 152, 1);
  }
  .body1-body1 {
    gap: 91px;
    width: 100%;
    height: auto;
    display: flex;
    overflow: hidden;
    align-items: center;
    flex-direction: column;
  }
  .body1-header1 {
    width: 1440px;
    height: 186px;
    display: flex;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: rgba(255, 255, 255, 0);
  }
  .body1-text {
    top: 20px;
    margin-left: 35%;
    margin-right: 35%;
    color: rgba(0, 0, 0, 1);
    width: 707px;
    height: 200px;
    position: absolute;
    font-size: 68px;
    font-family: 'Itim';
    font-weight: 600;
    
  }
  .body1-text01 {
    color: rgba(0, 0, 0, 1);
  }
  .body1-header2 {
    width: 98%;
    height: 102px;
    z-index: 1;
    overflow: hidden;
    position: relative;
    flex-shrink: 0;
    background-color: rgba(255, 255, 255, 0);
    margin-bottom: 50px;
  }
  .body1-contacts { 
    left: 996px;
    background-color: rgb(133,160,255); 
  }
  .body1-aboutus, .body1-contacts, .body1-home, .body1-products{
    transition: 0.4s;
    top: -1px;
    width: 332px;
    height: 103px;
    position: absolute;
  }
  .p_header2:hover{
    color: black;
    cursor: pointer;
    
  }
  .p_header2 { 
    color: rgba(255, 255, 255, 1);
    width: 232px;
    height: auto;
    margin: 9% 20%;
    font-size: 40px;
    font-weight: 400;
    line-height: normal;
    font-family: 'Itim';
  }
  .body1-aboutus {
    left: 664px;
    background-color: rgb(88,110,191);
  }
  .body1-products {
    left: 332px;
    background-color: rgb(249,162,162);
  }
  .body1-home{
    left: 0px;
    background-color: rgb(138,63,63);
  }
  
  .body1-pics {
    width: 1200px;
    height: 386px;
    display: flex;
    z-index: 2;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: rgba(173, 233, 152, 1);
  }
  
  .column {
    float: left;
    width: 390px;
    height: 386px;
    padding: 5px;
  }
  .pic3, .pic1{
    height: 386px;
  }
  
  /* Clear floats after image containers */
  .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .body1-maintext {
    color: rgb(22, 41, 22);
    width: 1200px;
    height: auto;
    z-index: 3;
    margin-top: 70px;
    font-size: 50px;
    text-align: left;
    font-family: 'Lato';
    margin-right: 60px;
    line-height: 30px;
    font-stretch: normal;
    text-decoration: none;
  }
  .body1-maintexttop{
    font-size: 35px;
    line-height: 100px;
    color: black;
    font-weight: 400px;
  }
  .des{
    font-size: 40px;
    margin-left: 15%;
    color: blue;
    
  }
  
  .body1-button1 {
    border: none;
    width: 265px;
    height: 100px;
    display: flex;
    z-index: 4;
    overflow: hidden;
    position: relative;
    margin-top: 50px;
    margin-right: 900px;
    border-radius: 30px;
    background-color: rgba(109, 174, 108, 1);
    transition: 0.7s;
    opacity: 0.7;
    margin-bottom: 20px;
  }
  .body1-button1:hover{
    cursor: pointer;
    box-shadow: rgba(22, 41, 22, 0.685) 7px 5px 11px;
    background-color:rgb(72, 117, 72) ;

  }
  .body1-button1text {
    top: 32px;
    left: 20px;
    color: rgb(252, 248, 248);
    position: absolute;
    font-size: 29px;
    text-align: left;
    font-family: Roboto;
    font-weight: 400;
    
  }
  
</style>
</head>
<body>
    <div>
        
        <div class="body1-container">
          <div class="body1-body1">
            <div class="body1-header1">
              <span class="body1-text">
                <span class="body1-text01"></span>
                <span>{{ $title }} <br>
                <h1></h1>
              </span>
                
    
              </span>
            </div>
            <div class="body1-header2">
              <div class="body1-contacts">
                <p class="p_header2"><span>CONTACTS</span></p>
              </div>
              
                <div class="body1-aboutus">
                    <p class="p_header2"><span>ABOUT US</span></p>
                </div>
        
            <div class="body1-products">
                <p class="p_header2"><span>PRODUCTS</span></p>
            </div>
            
                <div class="body1-home">
                    <p class="p_header2"><span>HOME</span></p>
                </div>
              </div>
              
            </div>
            <div class="body1-pics">
              <div class="row">
                <div class="column">
                <img src="{{ asset('images/clearskin1.png') }}" alt="Logo" style="width:100%">
                  <img class="pic1" src="images/clearskin1.png"  style="width:100%">
                </div>
                <div class="column">
                  <img src="images/The Elixir Facial Oil by Omayma Skin.jpeg"  style="width:100%">
                </div>
                <div class="column">
                  <img class="pic3" src="images/clearskin3.jpg" style="width:100%">
                </div>
              </div>
               </div>


            <p class="body1-maintext">
               <span class="body1-maintexttop">
              <div class="des"> <b>{{ $description }}</b></div> 
              
                <br></span>

                Skin, being the largest organ in the body is often ignored
                health-wise.  All skin types being represented here and most of
                skin conditions, how to live with them and manage them.<br> A lot of
                research being available in this day and age, we type your skin
                based on its special characteristics and are able to guide your
                journey to Amazing skin.
                
                <br>
                  Take our specialized quiz and be able to get skin care tips and
                  tricks<b>just for you<b> and your skin.
                <br><br>
            </p>
            <a href="{{ url('/register') }}"><button class="body1-button1">
              <span class="body1-button1text">Find my skin type</span>
              </button>
              <a href="{{ url('/login') }}"><button class="body1-button1">
              <span class="body1-button1text">login</span>
              </button>
            
          </div>
        </div>
      </div>
    
</body>
</html>