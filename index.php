
<html>
    <head>

            <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    </head>

    <body id="body" style="background:white ; color=#191A19;">
       
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <img src="img/pizza.svg "class="navbar-brand" href="#" style="width: 2%;height: 2%; margin-left: 1%;"></img>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>

          <button onclick="darkFunction()" class="btn btn-secondary" id="light-button" style="margin-left:85%;" >dark mode</button>
        </div>
            
      </nav>
    
</div>
                fsdfd
        <script>
            function darkFunction() {
                var body = document.body;
                
                if(body.style.background=="white"){
                    body.style.background="#191A19";
                    body.style.color="white";
                    document.getElementById("light-button").textContent="light mode";
                }else{
                    body.style.background="white";
                    body.style.color="#191A19";
                    document.getElementById("light-button").textContent="dark mode";
                }
            }
        </script>

    </body>
                fsdfd
        <script>
            function darkFunction() {
                var body = document.body;
                
                if(body.style.background=="white"){
                    body.style.background="#191A19";
                    body.style.color="white";
                    document.getElementById("light-button").textContent="light mode";
                }else{
                    body.style.background="white";
                    body.style.color="#191A19";
                    document.getElementById("light-button").textContent="dark mode";
                }
            }
        </script>

    </body>

</html>
