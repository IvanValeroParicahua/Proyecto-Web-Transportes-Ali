
<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>

	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
        <?= __('Transportes Ali') ?>
    </title>
<!--===============================================================================================-->	
	<?= $this->Html->image('img/icons/favicon.ico')?>
<!--===============================================================================================-->
	<?= $this->Html->css('vendor/bootstrap/css/bootstrap.min.css')?>
<!--===============================================================================================-->
	<?= $this->Html->css('fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>
<!--===============================================================================================-->
	<?= $this->Html->css('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>
<!--===============================================================================================-->
	<?= $this->Html->css('vendor/animate/animate.css')?>
<!--===============================================================================================-->	
	<?= $this->Html->css('vendor/css-hamburgers/hamburgers.min.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('vendor/animsition/css/animsition.min.css') ?>
<!--===============================================================================================-->
	<?= $this->Html->css('vendor/select2/select2.min.css')?>
<!--===============================================================================================-->	
	<?=	$this->Html->css('vendor/daterangepicker/daterangepicker.css')?>
<!--===============================================================================================-->
	<?= $this->Html->css('css/util.css')?>
	<?= $this->Html->css('css/main.css')?>
<?= $this->Html->css(captcha_layout_stylesheet_url(),['inline' => false]) ?> 
<?= $this->Html->script('jquery-3.1.1.min.js') ?>

<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?= $this->Form->create(null,['class'=>'login100-form validate-form']) ?>
				

					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<p>Email</p>
						<?=$this->Form->email('email',['class'=>'input100']); ?>
						
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<p>Password</p>
						<?=$this->Form->password('password',['class'=>'input100']); ?>
						
						<span class="focus-input100"></span>
					</div>
					<?= captcha_image_html() ?>
						<?= $this->Form->input('CaptchaCode', [
							'label' => __('Retype the characters from the picture').'*',
							'maxlength' => '10',
							'id' => 'CaptchaCode',
							'style' => 'color: black'
    					]) ?>
					
					<div class="container-login100-form-btn">
						<?= $this->Form->button('Login',['class'=>'login100-form-btn']) ?>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>

			<?= $this->Form->end() ?>

				<div class="login100-more" style="background-image: url('../img/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
 	