<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find my AmazingSkin Type</title>
    <link href="quiz.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Inline+One:ital@1&family=Itim&family=Josefin+Sans:ital,wght@1,300&family=Lato:wght@300;400;700&family=Playfair+Display:wght@500&family=Roboto:ital,wght@0,500;0,700;1,400&family=Tilt+Prism&display=swap" rel="stylesheet"><link href="./body1.css" rel="stylesheet" />
    
<style>
body {
    background-color: rgb(249,162,162);
    font-size: 23px;
    font-family: 'Roboto';
    color: black;
    padding-bottom: 100px;
}

.choices {
    margin: 10px 30px;
}

.checkbox-cont {
    display: block;
    width: 900px; /* Match the width of the former divs */
    padding: 56px 90px; /* Adjust padding if needed */
    background-color: rgb(250, 230, 230);
    box-shadow: rgb(0, 0, 0) 7px 7px 20px;
    transition: 0.6s;
    cursor: pointer;
    position: relative;
    font-size: 23px;
    font-family: 'Roboto';
    margin-top: 15px;
}

.checkbox-cont:hover {
    background-color: rgb(247, 200, 157);
    padding: 66px 105px;
}

.checkbox-cont.pink-background {
    background-color: rgb(249,162,162) !important; /* Pink color */
    box-shadow: none !important; /* Remove box shadow */
}

.checkbox {
    position: absolute;
    opacity: 0; /* Hide the checkbox but keep it functional */
    width: 100%;
    height: 100%;
    cursor: pointer;
}

.question {
    font-size: 40px;
    font-family: 'Itim';
    color: rgb(0, 0, 0);
    text-align: center;
    margin: 50px;

}



.next-button {
    text-decoration: none;
    display: inline-block;
    padding: 30px 70px;
    border-radius: 37px;
    background-color: black;
    color: whitesmoke;
    font-family: 'Itim';
    font-size: 37px;
    transition: 0.6s;
    margin-top: 70px;
}

.next-button:hover {
    background-color: rgb(75, 75, 75);
    padding: 30px 100px;
    cursor: pointer;
}


.previous {
    margin-right: 650px;
    margin-bottom: 100px;
}

button:hover {
    cursor: pointer;
    padding: 30px 100px;
    background-color: rgb(75, 75, 75);
}

.row1 {
    margin-top: 70px;
    width: max-content;
    height: 100px;
}
</style>  
</head>
<body>
    <div class="main">
        <form id="skinQuiz">
            <div class="question">
                Reaction to Products (Pick one)
            </div>
            <div class="choices">
                <label class="checkbox-cont">
                    <input class="checkbox" type="checkbox" name="q1" value="dry">
                    Skin feels dry and in need of more moisture after applying lightweight products
                </label>
                <label class="checkbox-cont">
                    <input class="checkbox" type="checkbox" name="q1" value="oily">
                    Rich creams or oils make the skin feel greasy or cause breakouts
                </label>
                <label class="checkbox-cont">
                    <input class="checkbox" type="checkbox" name="q1" value="combination">
                    Skin reacts differently to products in different areas (some areas need more moisture, others less)
                </label>
                
                
            </div>
            <div class="row1">
                <a href="{{ url('/quiz5') }}" class="next-button">NEXT</a>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
