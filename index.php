<?php

if (isset($_POST['submit'])) {

    print_r($_POST);
    exit;
}?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Cruscotto di Controllo Questionnaire</title>

	<!-- Favicons-->
	<!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="img/apple-touch-icon-144x144-precomposed.png"> -->

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->


	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="index.html" id="logo"><img src="img/logoCloud.png" alt="" width="49" height="35"></a>
					<div>
						<figure><img src="img/logoC.png" alt="" class="img-fluid"></figure>
						<h2>Cruscotto di Controllo</h2>
						<p></p>
					</div>
					<div class="copy">© <?php echo date("Y"); ?> Cruscotto di Controllo</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
						<div id="progressbar"></div>
					</div>
					<!-- /top-wizard -->
					<form id="wrapped" method="POST" enctype="multipart/form-data">
						<input id="website" name="website" type="text" value="">
						<!-- Leave for security protection, read docs for details -->
						<div id="middle-wizard">
							<div class="step">
								<h3 class="main_question">Sei soddisfatto di tutto il pacchetto di
									servizi cioè:</h3>
								<ul>
									<li>Cruscotto di controllo</li>
									<li>Network</li>
									<li>Training camp</li>
									<li>Aggiornamenti</li>
									<li>Assistenza</li>
									<li>Consulenza</li>
								</ul>
								<div class="form-group">
									<label class="container_check version_2">Tantissimo
										<input type="radio" name="question1" value="Tantissimo" class="required">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="form-group">
									<label class="container_check version_2">Molto
										<input type="radio" name="question1" value="Molto" class="required">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="form-group">
									<label class="container_check version_2">Abbastanza
										<input type="radio" name="question1" value="Abbastanza" class="required">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="form-group">
									<label class="container_check version_2">Nè si nè no
										<input type="radio" name="question1" value="Nè si nè no" class="required">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="form-group">
									<label class="container_check version_2">Poco
										<input type="radio" name="question1" value="Poco" class="required">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="form-group">
									<label class="container_check version_2">Affatto
										<input type="radio" name="question1" value="Affatto" class="required">
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
							<!-- /step -->
							<div class="step" id="stepTwo">

							</div>


							<div class="step" id="stepThree">

							</div>

							<div class="step" id="stepFour"></div>



							<!-- /step-->
							<div class="submit step" id="finalStep">
								<h3 class="main_question">Il Riepilogo</h3>
								<div class="form-group">
									<input type="text" name="first_name" class="form-control required"
										placeholder="Nome">
								</div>
								<div class="form-group">
									<input type="text" name="last_name" class="form-control required"
										placeholder="Cognome" >
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control required"
										placeholder="Email">
								</div>
							</div>
							<!-- /step-->
						</div>
						<!-- /middle-wizard -->
						<div id="bottom-wizard">
							<button type="button" name="backward" class="backward">Precedente</button>
							<button type="button" name="forward" class="forward">Prossimo</button>
							<button type="submit" name="submit" class="submit">Invia</button>
						</div>
						<!-- /bottom-wizard -->
					</form>
				</div>
				<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->


	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/functions.js"></script>

	<!-- Wizard script -->
	<script src="js/quotation_func.js"></script>
	<script>
		$(document).ready(function () {

			let questionTwo = `	<h3 class="main_question">Saresti disposto a segnalarci qualche tuo
									collega a cui proporre lo stesso servizio?</h3>
								<div class="form-group">
									<label class="container_check version_2">Si
										<input type="radio" name="question2" value="Si" class="required">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="form-group">
									<label class="container_check version_2">No
										<input type="radio" name="question2" value="No" class="required">
										<span class="checkmark"></span>
									</label>
								</div>`;

			let questionThree = `
			<h3 class="main_question">In particolare quale servizio non ti ha
									soddisfatto?</h3>
								<div class="form-group">
									<label class="container_check version_3">Cruscotto di controllo
										<input type="checkbox" name="question3[]" value="Cruscotto di controllo"
											class="required">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="form-group">
									<label class="container_check version_3">Network
										<input type="checkbox" name="question3[]" value="Network" class="required">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="form-group">
									<label class="container_check version_3">Training camp
										<input type="checkbox" name="question3[]" value="Training camp"
											class="required">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="form-group">
									<label class="container_check version_3">Aggiornamenti
										<input type="checkbox" name="question3[]" value="Aggiornamenti"
											class="required">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="form-group">
									<label class="container_check version_3">Consulenza
										<input type="checkbox" name="question3[]" value="Consulenza" class="required">
										<span class="checkmark"></span>
									</label>
								</div>`;

			$('input[name="question1"]').on('change', function () {
				let answerQuestion1 = $(this).val();
				if (answerQuestion1 == 'Tantissimo' || answerQuestion1 == 'Molto') {
					$('#stepTwo').html(questionTwo);
				} else if (answerQuestion1 == 'Abbastanza' || answerQuestion1 == 'Nè si nè no' ||
					answerQuestion1 == 'Poco' | answerQuestion1 == 'Affatto') {
					$('#stepTwo').html(questionThree);
				}
			});

			let questionTwo_one = `	<h3 class="main_question">Saresti disposto a fare una telefonata di presentazione prima di un nostro contatto?</h3>
									<div class="form-group">
										<label class="container_check version_2">Si
											<input type="radio" class="answerTwo_one" name="answerTwo_one" value="Si" required class="required">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_check version_2">No
											<input type="radio"  class="answerTwo_one" name="answerTwo_one" value="No" required class="required">
											<span class="checkmark"></span>
										</label>
									</div>`;

			$(document).on('click', 'input[name="question2"]', function () {
				let answerQuestion2 = $(this).val();
				if (answerQuestion2 == 'Si') {
					$('#stepThree').removeAttr('class', 'exclude').attr('class', 'current step wizard-step');
					$('#stepFour').removeAttr('class', 'exclude').attr('class', 'current step wizard-step');
					$('#stepThree').html(questionTwo_one);

				} else {
					$('#stepThree').removeAttr('class', 'current').attr('class', 'exclude');
					$('#stepFour').attr('class', 'exclude');
				}
			});

			let questionThree_one = `<h3 class="main_question">In particolare cosa non ti è piacuto?</h3>
									<div class="form-group">
									<textarea name="additional_message" class="form-control required" style="height:150px;" placeholder="Digita qui ulteriori informazioni ..."></textarea>
									</div>`;

			$(document).on('change', 'input[name="question3[]"]', function () {
				let answerQuestion3 = $(this).val();
				$('#stepThree').html(questionThree_one);
				$('#stepFour').remove();
			});


			let questionTwo_two = `<h3 class="main_question">Quali colleghi potresti segnalarci?</h3>
									<div class="form-group">
										<input type="text" name="colleague[]" class="form-control required" placeholder="">
									</div>
									<div class="form-group">
										<input type="text" name="colleague[]" class="form-control" placeholder="">
									</div>
									<div class="form-group">
										<input type="text" name="colleague[]" class="form-control" placeholder="">
									</div>
									<div class="form-group">
										<input type="text" name="colleague[]" class="form-control" placeholder="">
									</div>
									<div class="form-group">
										<input type="text" name="colleague[]" class="form-control" placeholder="">
									</div>
									<span class="text-muted">*Posibilità di scrivere 5 nomi</span>`;

			$(document).on('click', 'input[name="answerTwo_one"]', function () {

				let answerTwo_one = $(this).val();
				if (answerTwo_one == 'Si') {
					$('#stepCounter').html('5/5');
					$('#stepFour').removeAttr('class', 'exclude').attr('class', 'current step wizard-step');
					$('#stepFour').html(questionTwo_two);
				} else {
					$('#stepFour').attr('class', 'exclude');
				}
			});


		})
	</script>


</body>

</html>
