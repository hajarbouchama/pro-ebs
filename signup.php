<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\signup.css">
    <!-- Latest compiled and minified CSS -->


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




	<style type="text/css">
		html {
      cursor: none;
    }
		.bgcolor
		{
			background: rgba(0,0,0,0.1);


		}

		body
		{
				background: #FC354C;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0ABFBC, #FC354C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		color: white;
	
		}
    .cursor {
  width: 20px;
  height: 20px;
  border: 1px solid white;
  border-radius: 50%;
  position: absolute;
  transition-duration: 200ms;
  transition-timing-function: ease-out;
  animation: cursorAnim 0.5s infinite alternate;
  pointer-events: none;
}

.cursor::after {
  content: "";
  width: 20px;
  height: 20px;
  position: absolute;
  border: 8px solid gray;
  border-radius: 50%;
  opacity: 0.5;
  top: -8px;
  left: -8px;
  animation: cursorAnim2 0.5s infinite alternate;
}

@keyframes cursorAnim {
  from {
    transform: scale(1);
  }
  to {
    transform: scale(0.7);
  }
}

@keyframes cursorAnim2 {
  from {
    transform: scale(1);
  }
  to {
    transform: scale(0.4);
  }
}

@keyframes cursorAnim3 {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(3);
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}

.expand {
  animation: cursorAnim3 0.5s forwards;
  border: 1px solid red;
}
        </style>
    <title>sign up</title>
</head>
<body>  <div class="cursor"></div>
  <script>const cursor = document.querySelector(".cursor");

    document.addEventListener("mousemove", (e) => {
      cursor.setAttribute(
        "style",
        "top: " + (e.pageY - 10) + "px; left: " + (e.pageX - 10) + "px;"
      );
    });
    
    document.addEventListener("click", () => {
      cursor.classList.add("expand");
    
      setTimeout(() => {
        cursor.classList.remove("expand");
      }, 500);
    });
    </script>
    <h1 style=" color: white;margin-top: 10px;margin-left: 20px; font-family: 'Lobster', cursive;" id="myhead" ;><u style="color: #900C3F">E</u>asy <u style="color: #900C3F">B</u>ts <u style="color: #900C3F">S</u>tudies</h1>
    <div class="login-box">
        <h2><b>SIGN UP</b></h2>
        <form>
          <div class="user-box">
            <input type="text" name="" required="">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="text" name="" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="" required="">
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="password" name="" required="">
            <label>Confirmer password</label>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit
          </a>
        </form>
      </div>
</body>
</html>