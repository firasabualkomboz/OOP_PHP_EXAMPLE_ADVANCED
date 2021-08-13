<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
	<style>
		body {
			margin-top: 100px;
			text-align: center;
			background: url('./mapp.jpg');
			background-size: cover;
			color: #fff;
		}

		* {
			box-sizing: border-box;
		}

		.heading {
			text-shadow: 5px 2px 2px #000
		}

		:focus {
			outline: none;
		}

		.paragraph {
			font-size: 30px;
			margin: 0 0 30px;
			font-weight: bold;
		}

		.city {
			display: block;
			width: 420px;
			padding: 7px 10px;
			font-size: 17px;
			border-radius: 10px;
			margin: auto;
			margin-bottom: 20px;
		}

		.go {
			width: 100px;
			padding: 8px;
			border-radius: 4px;
			border: 1px solid #000;
			color: #fff;
			font-weight: bold;
			font-size: 20px;
			background-color: #00f700;
			margin-bottom: 40px;
		}

		.result {
			font-size: 30px;
			margin: 0;
			border: 7px dashed yellow;
			display: inline-block;
			padding: 20px;
			font-weight: bold;
		}

		.result span {
			color: #000;
			text-shadow: 2px 0 0px #00f700;
		}
	</style>
</head>
<body>
  <?php
		$selected = 'Tokyo';
		$places=array('Japan'=>'Tokyo','Mexico'=>'Mexico City','USA'=>'New York City','India'=>'Mumbai',
		'South Korea'=>'Seoul','China'=>'Shanghai','Nigeria'=>'Lagos','Argentina'=>'Buenos Aires',
		'Egypt'=>'Cairo','England'=>'London');

		echo"<br/><h1 class='heading'>In which country a city is located?</h1><p class='paragraph'>Please choose a city:</p>";
		echo"<form action='' method='post'>";
			echo"<select id='menu' onchange='this.form.submit()' name='selectedPlace[]' class='city'>";
				foreach($places as $country => $city){
					echo"<option value= '$city'  class='currentOption'>$city</option>";
				}
			echo"</select>";
			echo"<br/><input type='submit' value='Go' class='go'/>";
		echo "</form>";

    if (!empty($_POST["selectedPlace"])) {
			foreach($_POST["selectedPlace"] as $selectedCity){
				foreach($places as $country => $city)
					if($city==$selectedCity) {
            echo "<p class='result'>$city is in <span>$country</span>.</p>";
			}
        }
		}
	?>
       <script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>

       <script>
        $(document).ready(function() {
            
    $('#menu').change(function() {
        //remove the select attr from the option that currently has a value of selected
        $("option[selected='true']").removeAttr('selected');
        //add the selected attr with value of true to the option that was clicked on
        $(this).attr('selected', 'true');
        //submit the form
        this.form.submit();
    });
});

    </script>

</body>
</html>