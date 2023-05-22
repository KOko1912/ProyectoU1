
<!DOCTYPE html>
<html>
<head>
	<title>Verificación</title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="icon"  href="https://thinkingmachinecenter.com/Official/wp-content/uploads/2020/07/logo.png-1--150x150.png">
</head>
<body>

<br>
	<center>
		<div class="container">
			<header style="background: url(https://us.123rf.com/450wm/asamask92/asamask921607/asamask92160700016/59566001-negro-azul-degradado-falta-de-definici%C3%B3n-espacio-vac%C3%ADo-.jpg?ver=6); background-size: 100%; border-radius: 50px;">


				<p>
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmEhIJNifq-KLT6XdSrmqAidideeOCHxvyPw&usqp=CAU" width="150px">
				</p>


			</header><!DOCTYPE html>
<html>

<head>
    <title>Verificación</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="icon"
        href="https://thinkingmachinecenter.com/Official/wp-content/uploads/2020/07/logo.png-1--150x150.png">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <br>
    <center>
        <div class="container">
            <header
                style="background: url(https://us.123rf.com/450wm/asamask92/asamask921607/asamask92160700016/59566001-negro-azul-degradado-falta-de-definici%C3%B3n-espacio-vac%C3%ADo-.jpg?ver=6); background-size: 100%; border-radius: 50px;">

                <h1 style="color: white;">Sistema Web Control Escolar</h1>

            </header>

        </div>
    </center>

    <br>





    <br><br><br>
    <center>
        <div class="row container">


            <div class="col-12">

                <h1 class="text-dark"><i class="fas fa-robot"> No soy un robot </i></h1>
                <hr>


                <!-- Formulario para completar el captcha  -->

                <form onsubmit="return recaptcha(campo1.value);" action="recuperar.php" method="post">

                    <span id="recaptcha" class="text-white"
                        style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8eMr8_k5a8Q_hBT4RRHxxb6CtYQYWs4jvxb9ZS4DydLAlvoBfTVXMAMpjpsjxXkCuLFQ&usqp=CAU); font-size: 25px; font-family: sans-serif;"><?php echo rand() ?></span>
                    <br>

                    <input name="campo1" type="number" placeholder="Igresa el captcha" id="reco" class="input">
                    <br><br>

                    <div id="secs" class="text-dark" style="font-size: 80px; font-family: impact;"></div>

                </form>
            </div>


        </div>
    </center>












    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>


</body>

</html>

<script>
function recaptcha(cadena) {

    var numero_mostrado = $('#recaptcha').text();
    var numero_escrito = cadena;

    if (numero_mostrado == numero_escrito) {
        return true;
    } else {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Captcha incorrecto',
            showConfirmButton: false,
            timer: 1200
        })
        setTimeout(function() {
            window.location = 'index.php';
        }, 1200);
        return false;
    }
}






$(document).ready(function() {
    //Disable full page
    $('body').bind('cut copy paste', function(e) {
        e.preventDefault();
    });

    //Disable part of page
    $('#id').bind('cut copy paste', function(e) {
        e.preventDefault();
    });
});

window.addEventListener("keypress", function(event) {
    if (event.keyCode == 13) {
        event.preventDefault();
    }
}, false);






var secondsRemaining = 20;

function updateTime() {
    $("#secs").text(secondsRemaining);
}

updateTime();

var i = setInterval(function() {
    secondsRemaining -= 1;
    if (secondsRemaining > 0) {
        updateTime();
    } else {
        clearInterval(i);
        $("#secs").html(
            "<div style='font-size: 20px; font-family: arial narrow;'><button style='border-radius: 20px;' type='submit' class='btn blue-gradient' id='btn'><i class='fas fa-check'>Soy humano</i></button></div>"
        )
    }
}, 1000);

$("#secs").on("click", "#myButton", function() {});
</script>

		</div>
	</center>

	<br>





	<br><br><br>
	<center>
		<div class="row container">


			<div class="col-12">

				<h1 class="text-white"><i class="fas fa-robot">  No soy un robot </i></h1><hr>


				<!-- Formulario para completar el captcha  -->

				<form onsubmit="return recaptcha(campo1.value);" action="viewpdf.php" method="post">

					<span id="recaptcha" class="text-white" style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8eMr8_k5a8Q_hBT4RRHxxb6CtYQYWs4jvxb9ZS4DydLAlvoBfTVXMAMpjpsjxXkCuLFQ&usqp=CAU); font-size: 25px; font-family: sans-serif;"><?php echo rand() ?></span>
					<br>

					<input name="campo1" type="number" placeholder="Igresa el captcha" id="reco" class="input">
					<br><br>

					<div id="secs" class="text-white" style="font-size: 80px; font-family: impact;"></div>

				</form>
			</div>


		</div>
	</center>

</body>
</html>

<script>
	

function recaptcha(cadena){

var numero_mostrado=$('#recaptcha').text();
var numero_escrito=cadena;

if (numero_mostrado==numero_escrito){
	return true;
}
else {
	Swal.fire({
		position: 'top-end',
		icon: 'error',
		title: 'Captcha incorrecto',
		showConfirmButton: false,
		timer: 1200
	})
	setTimeout(function() {
		window.location = 'index.php';
	}, 1200);
	return false;
}
}






$(document).ready(function () {
    //Disable full page
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
    
    //Disable part of page
    $('#id').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
});

window.addEventListener("keypress", function(event){
    if (event.keyCode == 13){
        event.preventDefault();
    }
}, false);






var secondsRemaining = 20;

function updateTime() {
	$("#secs").text(secondsRemaining);
}

updateTime();

var i = setInterval(function() {
	secondsRemaining -= 1;
	if (secondsRemaining > 0){
		updateTime();
	} else {
		clearInterval(i);
		$("#secs").html("<div style='font-size: 20px; font-family: arial narrow;'><button style='border-radius: 20px;' type='submit' class='btn blue-gradient' id='btn'><i class='fas fa-check'>Descargar</i></button></div>")
	}
}, 1000);

$("#secs").on("click", "#myButton", function(){
});  


</script>
