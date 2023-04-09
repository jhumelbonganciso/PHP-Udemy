<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  
		function add() {
			$num1 = 2;
			$num2 = 3;
			return $num1 + $num2;
		}

		$sum = add();
		echo $sum . "<br />";

		function greetings($greet) {
			return $greet;
		}

		echo greetings("Yoooo");
/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>