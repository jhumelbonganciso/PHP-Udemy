<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

	<aside class="col-xs-4">
		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php


		/*  Step1: Use a pre-built math function here and echo it
	

	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

		echo abs(-1);

		echo strtolower("UPPER TO LOWER");

		$a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
		print_r(array_values($a));
		?>





	</article><!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>