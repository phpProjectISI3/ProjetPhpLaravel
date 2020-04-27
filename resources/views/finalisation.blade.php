<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Finalisation</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="vendor\mdi-font\css\material-design-iconic-font.min.css">
<!--	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">-->
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/styleFinalisation.css" />
	<link rel="stylesheet" href="css/detailrecherche.css" />
	 <script src="https://kit.fontawesome.com/4f2d779e50.js" crossorigin="anonymous"></script>
	 
     <link rel="stylesheet" href="css/confirmation.css">


	<style>
	body{
			overflow: hidden;
	}
		#rightside {
					position: fixed;
    width: 25%;
    height: 18em;
    background-color: #f5f5f5;
    box-shadow: 0 0 7px rgb(207, 207, 207);
    border-radius: 31px;
    z-index: 50;
    padding: 2em;
    top: 19em;
    right: -7%;
    transform: translate(-50%,0);
		}

		.wizard-v4-content {
			background: #fff;
			width: 780px;
			box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
			-o-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
			-ms-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
			-moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
			-webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
			border-radius: 10px;
			-o-border-radius: 10px;
			-ms-border-radius: 10px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 31px;
			margin-bottom: 20px;
			font-family: 'Open Sans', sans-serif;
			position: relative;
			margin-left: -44%;
			margin-top: 20px;
			display: flex;
			display: -webkit-flex;
		}

		#Phone{
			width: 15em;
			margin-top: -1.5em;
			margin-left: 178px;
			padding: .4em;
			border: 2.2px solid orangered;
			margin-bottom: 24px;
			font-weight: bold;
			/*text-decoration: underline;*/
			color: black;
			font-size:15px;
			border-radius: 12px;
		}
		#Question{
		margin: 0px;
		width: 587px;
		height: 152px;
		padding: .4em;
		border: 2.2px solid orangered;
		font-weight: bold;
		text-decoration: underline;
		color: black;
		border-radius: 20px;
		}
		#MonSpanVerified{
		font-weight:bold;
		text-decoration:underline;
		color:forestgreen;
		}
		#MonSpanNonVerified{
		font-weight:bold;
		text-decoration:underline;
		color:red;
		}
		#cards{
		margin-top: -10%;
		margin-left: 36%;
		}
		#MonLink{
		font-weight:bold;
		text-decoration:underline;
		color:orangered;
		}
		#BtnIntegre{
			background: transparent;
			width: 140px;
			z-index: 1200;
			border: 0px;
			height: 45px;
			color: white;
			font-size: 18px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="page-content" style="background-image: url('https://media.giphy.com/media/iERs6e151eJ0c/giphy.gif')">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<h3 class="heading">Ra7a w istijmam !</h3>
					<p>Veuillez complétez les données nécessaires.</p>
				</div>
				<form class="form-register" action="#" method="post">
					<div id="form-total">
						<!-- SECTION 1 -->
						<h2>
							<span class="step-icon">
								<i class="zmdi zmdi-account"></i>
							</span>
							<span class="step-text">Phone</span>
						</h2>
						<section>
							<h3 style="margin: 7px 0px 5px 182px;"> &nbsp;Numéro de téléphone </h3>
							<input type="tel" name="tel" id="Phone" placeholder="+212 06 98 42 17 20" required />

							<h3 style="margin: 7px 0px 5px 178px;">Avez-vous des questions ?</h3>
							<div id="division">
								<textarea name="direqlqchose" id="Question" cols="70" rows="4" style="margin-bottom: 1em;" placeholder="Facultatif ..."></textarea>
							</div>
						</section>
						<!-- SECTION 2 -->
						<h2>
							<span class="step-icon">
								<i class="zmdi zmdi-lock"></i>
							</span>
							<span class="step-text">Sécurité</span>
						</h2>
						<section>
							<div class="inner">
								<h4>
									&nbsp;
									<i class="fab fa-telegram-plane"></i> Nous prenons toujours soin de votre sécurité ainsi que toutes vos demandes, n'hésitez pas à nous contactez, nous vous répondront dés que possible.
								</h4>
								<br />
								<h4>
									&nbsp;
									<i class="fas fa-shield-alt"></i> Aidez nous maintenant à vérifier votre numéro de téléphone..
								</h4>
								<div id="#CodeConfirmation" style="margin-top: 7%;">
									<h3 style="margin: 7px 0px -9px 150px;font-size:15px;"> &nbsp;Saisissez le code que vous avez reçue. </h3>
									<input type="text" name="" style="margin-bottom: 55px;" id="Phone" placeholder="                Co-222-444" required />
								</div>
								<small style="margin-left:35%;">
									status :
									<span id="MonSpanNonVerified">Non verifié</span>
								</small>
							</div>
						</section>
						<!-- SECTION 3 -->
						<h2>
							<span class="step-icon">
								<i class="zmdi zmdi-money"></i>
							</span>
							<span class="step-text">Payement</span>
						</h2>
						<section>
							<div class="inner">
								<div id="acceptedcards">
									<h3>Les cartes acceptées :</h3>
									<div id="cards">
										<img src="images/visa.png" alt="" /> &nbsp; &nbsp; &nbsp;
										<img src="images/MasterCard_Logosvg.png" alt="" />
									</div>
								</div>
								<hr />
								<div id="CardInfo">
									<h3>Informations de la carte</h3>
									<input type="text" name="cardnumber" placeholder="                                           Numéro de la carte" id="Phone" style="margin-left: 14px;width: 82%;" />
									<div>
										<input type="text" name="expiration" placeholder="   Date d'expiration" id="Phone" style="margin-left: 14px;width: 22%;" />
										<input type="text" name="CVV" placeholder="        Code CVV" id="Phone" style="margin-left: 14px;width: 22%;" />
										<input type="text" name="zipCode" placeholder="       Zip Code" id="Phone" style="margin-left: 14px;width: 22%;" />
									</div>
									<hr />
									<h5>
										Il est préférable de jeter un coup d'oeil sur
										<a href="#" id="MonLink">notre politique d'annulation.</a>
									</h5>
									<br />
								</div>
							</div>
						</section>
						<!-- SECTION 4 -->
						<h2>
							<span class="step-icon">
								<i class="fas fa-user-check"></i>
							</span>
							<span class="step-text">Confirmé !</span>
						</h2>
						<section>
							<div class="inner">
								<h3 style="margin-left:180px;font-size: 26px;">Bonnes Vacances !</h3>
								<p>
									<h4>
										<img src="images/checkmark.png" style="width:25px;" alt="" /> &nbsp; identité vérifiée : Mr Hicham O-Sfh
									</h4>
									<h4>
										<img src="images/checkmark.png" style="width:25px;" alt="" /> &nbsp; Numéro de téléphone vérifié : +212-0666201740
									</h4>
									<h4>
										<img src="images/checkmark.png" style="width:25px;" alt="" /> &nbsp; Payement par : Carte Bankaire Visa
									</h4>
									<br />
									<br />
									<h4 style="padding-bottom: 5%;">
										&nbsp; &nbsp; &nbsp;
										<i class="fas fa-umbrella-beach"></i> Nous vous souhaitons un joyeux séjour et de bonnes vacances ! Vous pouvez nous contactez &aacute; n'importe quel moment depuis
										<a href="#" id="MonLink">la messagerie</a> , notre service vous y répondra aussit&ocirc;t !!
									</h4>
								</p>
							</div>
						</section>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="rightside">
		<h2>
			@if((int)Carbon\Carbon::now()->format('m')< 6)
			{{$logement->tarif_par_nuit_bs}}
			@else
			{{$logement->tarif_par_nuit_hs}}
			@endif
			<span> Dhs/nuit</span>
		</h2>
		<hr size="30" />
		<div>
			<div class="dates">
				<span>Dates</span>
				<div id="showdates">
					<label id="DateEntree">{{$datedebut}}</label>
					<span>
						<i class="fas fa-angle-double-right"></i>
					</span>
					<label id="DateSortie">{{$datefin}}</label>
				</div>
			</div>
			<div class="dates">
				<div class="dates">
					<span>
						Séjour :
					</span>
					<span id="totalnuit">5 nuits</span>
				</div>
				<hr class="scndhr" />
				<div class="dates">
					<span>
						Tarif :
					</span>
					<span id="totalnuit">
						@if((int)Carbon\Carbon::now()->format('m')< 6)
						{{$logement->tarif_par_nuit_bs}}
						@else
						{{$logement->tarif_par_nuit_hs}}
						@endif
						Dhs (TTC)
					</span>
				</div>
				<hr class="scndhr" />
				<div class="dates">
					<span id="total" class="black">Total  </span>
					<span id="totalnuit" class="black">MAD 2.916</span>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/mainFinalisation.js"></script>
	<script src="../js/notification/notify.min.js"></script>

	<script>
		$(document).ready(
			function myfunction() {

				var divParent = document.getElementsByClassName('actions clearfix');
				var ulNode = $(divParent).children('ul')[0];
				var liNode = $(ulNode).children('li')[2];
				//  $(liNode).empty();
				liNode.innerHTML = '<a href="#finish" role="menuitem"><button id="BtnIntegre">Valider !</button></a>';
				$("#BtnIntegre").click(
					function notification() {
						$.notify(" Payement effectué avec succés !", {
							className: "success",
							showDuration: 800,
							hideDuration: 800,
							autoHideDelay: 8000,
							position: "top right",
							arrowShow: false,
						});
                        setTimeout(function () {
                            window.location.href = "/";
                        }, 3000);
                    
					})
			}
		);
	</script>
</body>
</html>