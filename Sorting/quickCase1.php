 <html>

 <head>
 	<title>Sorting</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Sorts+Mill+Goudy" rel="stylesheet">
 	<link rel="stylesheet" href="assets/css/style.css">
 </head>

 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col col-lg-2">
 				<a class="btn btn-primary mt-3" href="index.php" role="button">Kembali</a>
 			</div>
 		</div>
 		<div class="row">
 			<div class="d-flex justify-content-center">
 				<h1 class="mt-4">Quicksort</h1>
 			</div>
 		</div>

 		<div class="row-lg">
 			<div>
 				<label id="label">Masukkan Angka : </label><br>
 				<input class="inputs" type="text" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="num1" />
 				<input class="inputs" type="text" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="num2" />
 				<input class="inputs" type="text" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="num3" />
 				<input class="inputs" type="text" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="num4" />
 				<input class="inputs" type="text" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="num5" />
 				<input class="inputs" type="text" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="num6" />
 				<input class="inputs" type="text" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="num7" />
 				<input class="inputs" type="text" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="num8" />
 				<input class="inputs" type="text" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="num9" />
 				<input class="inputs" type="text" maxlength="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="num10" /><br>
 			</div>
 		</div>
 		<div class="row-lg">
 			<div class="row justify-content-center">
 				<div class="col align-self-center col-lg-4">
 					<button class="btn btn-primary btn-lg rounded-pill" type="button" onclick="sort2()">Sort</button>
 				</div>
 			</div>
 		</div>
 		<div id="visual">
 			<p id="sort"></p>
 			<p class="array" id="0"></p>
 			<p class="array" id="1"></p>
 			<p class="array" id="2"></p>
 			<p class="array" id="3"></p>
 			<p class="array" id="4"></p>
 			<p class="array" id="5"></p>
 			<p class="array" id="6"></p>
 			<p class="array" id="7"></p>
 			<p class="array" id="8"></p>
 			<p class="array" id="9"></p>
 		</div>
 	</div>




 	<script src="assets/js/script.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>

 </html>