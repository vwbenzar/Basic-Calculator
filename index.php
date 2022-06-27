<!DOCTYPE html>
<head>
    <title> Basic Calculator
    </title>
</head>

<body>
<?php

$CalculatorResult = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$FirstNumber = $_POST['FirstNumber'];
	$SecondNumber = $_POST['SecondNumber'];
	$operator = $_POST['operator'];

	if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
		switch ($operator) {
			case "Sum":
				$CalculatorResult = $FirstNumber + $SecondNumber;
				break;
			case "Subtraction":
				$CalculatorResult = $FirstNumber - $SecondNumber;
				break;
			case "Multiplication":
				$CalculatorResult = $FirstNumber * $SecondNumber;
				break;
			case "Division":

				if(!(is_null($FirstNumber)) && $SecondNumber == 0){
					$CalculatorResult = "Can't divide by 0 !";
				}
				else{
					$CalculatorResult = $FirstNumber / $SecondNumber;
				}
				break;
			return $CalculatorResult;
		}
	}
}

?>

<div id="page-wrap">
    <h1>PHP - Simple Calculator Program</h1>
    <form action="" method="post" id="quiz-form">
        <p>
            <input type="number" step="any" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber; ?>" /> <b>First Number</b>
        </p>
        <p>
            <input type="number" step="any" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" /> <b>Second Number</b>
        </p>
        <p>
            <input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> <b>CalculatorResult</b>
        </p>
        <input type="submit" name="operator" value="Sum" />
        <input type="submit" name="operator" value="Subtraction" />
        <input type="submit" name="operator" value="Multiplication" />
        <input type="submit" name="operator" value="Division" />
    </form>
</div>

</body>
</html>