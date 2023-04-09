<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

$num1 = 1;
$num2 = 2;

if ($num1 < $num2) {
	echo "I love PHP";
}



for($counter = 0; $counter < 10; $counter++) {
	echo $counter . "<br />";
}

$day = 1;

switch($day) {
	case 1: 
		echo "Sunday";
		break;
	case 2:
		echo "Monday";
		break;
	case 3:
		echo "tuesday";
		break;
	case 4:
		echo "Wednesday";
		break;
	case 5:
		echo "Thurs";
		break;
}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>