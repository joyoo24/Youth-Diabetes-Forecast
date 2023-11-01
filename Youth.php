<?php

//echo shell_exec("python --version");
//echo shell_exec("python -c 'import tensorflow'");

$result = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the data from the form

    $glucose = $_POST['glucose'];
    $bp = $_POST['bp'];
    $skin_thickness = $_POST['skin_thickness'];
    $insulin = $_POST['insulin'];
    $bmi = $_POST['bmi'];
    $dpf = $_POST['dpf'];
    $age = $_POST['age'];

    // Call the Python script with the data
    $command = escapeshellcmd("python predict_youth.py $glucose $bp $skin_thickness $insulin $bmi $dpf $age");
    $result = shell_exec($command);
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Youth Diabetes Forecast</title>
    <!-- CSS references -->
    <link href="Content/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- JS references -->
    <script src="Scripts/jquery-3.5.1.slim.min.js"></script>
    <script src="Scripts/popper.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
		function showPopup(infoType) {
			var popupURL = 'Detailed_info.php?type=' + infoType;
			var popupWindow = window.open(
				popupURL,
				'popUpWindow',
				'height=300, width=500, left=10, top=10, resizable=no, scrollbars=yes, toolbar=no, menubar=no, location=no, directories=no, status=no'
			);
			return false;
		}
    </script>
	
	<script type="text/javascript">
    function showPopup2() {
        
        var popupURL = 'detailed_actions.php';

        var popupWindow = window.open(
            popupURL,
            'popUpWindow', 
            'height=500, width=900, left=10, top=10, resizable=no, scrollbars=yes, toolbar=no, menubar=no, location=no, directories=no, status=no'
        );

        return false;
    }
	</script>
    <script>
        function checkAge(age) {
            if (age > 18) {
                alert("Warning: Age is greater than 18!");
            }
        }
    </script>
	
	<style>
    /* Regular (non-alternating) rows */
    .table tr {
        background-color: #f9f9f9;  /* Light gray */
    }

    /* Alternating rows */
    .table tr:nth-child(even) {
        background-color: #e0e0e0;  /* Darker gray */
    }

    /* Header row */
    .table th {
        background-color: #333;  /* Dark */
        color: white;            /* Text color */
    }
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Diabetes Information Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="youth_master_site.php">Youth Diabetes Portal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="women_master_site.php">Women Diabetes Portal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About</a>
      </li>
    </ul>
  </div>
</nav>
<main>
    <div class="jumbotron">
        <h1>Youth Diabetes Forecast</h1>
        <img src="img/youth_diabetes.PNG" width="1000px" alt="Youth Diabetes">
        <p class="lead">This youth diabetes risk prediction tool estimates the potential risk of youth diabetes using Artificial Neural Network (ANN).
		<br/>
		Disclaimer: Use this youth diabetes prediction tool for information purposes only; it’s not a substitute for professional medical advice, diagnosis, or treatment.

		</p>

    </div>
	<div class="row">

		<section class="col-md-4">
			<div class="card h-100">
				<div class="card-header">
					<h5 class="card-title">Model Inputs</h5>
					
				</div>
				<form action="Youth.php" method="post">
					<table >
						<tr>
							<th>Help</th>
							<th style="padding: 10px;">Variable</th>				
							<th>Value</th>
						</tr>

						<tr>
							<td><img src="img/glucose.PNG" width="40" onclick="showPopup('glucose');" alt="Reference"></td></td>
							<!--<td>Glucose is the main type of sugar in the blood and is the major source of energy for the body's cells. Glucose comes from the foods we eat or the body can make it from other substances.</td>-->
							<td style="padding: 10px;">Glucose</td>
							<td><input type="text" name="glucose" placeholder="mg/dL"></td>
							<!--<td><img src="img/reference.PNG" width="30" onclick="showPopup();" alt="Reference"></td>-->
						</tr>
						<tr>
							<td><img src="img/bp.PNG" width="40" onclick="showPopup('bp');" alt="Reference"></td></td>
						
							<td style="padding: 10px;">Blood Pressure</td>
							<!--<td>Blood pressure is the pressure, measured in millimeters of mercury, within the major arterial system of the body. It is conventionally separated into systolic and diastolic determinations.</td>-->
							
							<td><input type="text" name="bp" placeholder="mmHg"></td>
							<!--<td><img src="img/reference.PNG" width="30" onclick="showPopup();" alt="Reference"></td>-->
						</tr>
						<tr>
							<td><img src="img/skin.PNG" width="40" onclick="showPopup('skin');" alt="Reference"></td></td>
						
							<td style="padding: 10px;">Skin Thickness</td>
							<!--<td>The thickness of each layer of the skin varies depending on body region and categorized based on the thickness of the epidermal and dermal layers.</td>-->
							<td><input type="text" name="skin_thickness" placeholder="μm"></td>
							<!--<td><img src="img/reference.PNG" width="30" onclick="showPopup();" alt="Reference"></td>-->
						</tr>
						<tr>
							<td><img src="img/insulin.PNG" width="40" onclick="showPopup('insulin');" alt="Reference"></td></td>
						
							<td style="padding: 10px;">Insulin</td>
							<!--<td>Insulin helps blood sugar enter the body's cells so it can be used for energy. Insulin also signals the liver to store blood sugar for later use. Blood sugar enters cells, and levels in the bloodstream decrease, signaling insulin to decrease too.</td>-->
							<td><input type="text" name="insulin" placeholder="units"></td>
							<!--<td><img src="img/reference.PNG" width="30" onclick="showPopup();" alt="Reference"></td>-->
						</tr>
						<tr>
							<td><img src="img/bmi.PNG" width="40" onclick="showPopup('bmi');" alt="Reference"></td></td>
						
							<td style="padding: 10px;">Body Mass Index (BMI)</td>
							<!--<td>Body Mass Index (BMI) is a person's weight in kilograms (or pounds) divided by the square of height in meters (or feet). A high BMI can indicate high body fatness. </td>-->
							<td><input type="text" name="bmi" placeholder="kg/m^2"></td>
							<!--<td><img src="img/reference.PNG" width="30" onclick="showPopup();" alt="Reference"></td>-->
						</tr>
						<tr>
							<td><img src="img/dpf.PNG" width="40" onclick="showPopup('dpf');" alt="Reference"></td></td>
						
							<td style="padding: 10px;">Diabetes Pedigree Function</td>
							<!--<td>Diabetes pedigree function (DPF) calculates diabetes likelihood depending on the subject's age and his/her diabetic family history.</td>-->
							<td><input type="text" name="dpf"></td>
							
						</tr>
						<tr>
							<td><img src="img/age.PNG" width="40" onclick="showPopup('age');" alt="Reference"></td></td>
						
							<td style="padding: 10px;">Age</td>
							<!--<td></td>-->
							<td><input type="text" name="age" onchange="checkAge(this.value)"></td>
							<!--<td><img src="img/reference.PNG" width="30" onclick="showPopup();" alt="Reference"></td>-->
							
						</tr>
						<br/>

					</table>
					<br/>
					<div class="card-footer">
					<table>
							<tr>
								<td colspan="2" align="right"><input type="submit" value="Predict Diabetes Risk"></td>
								<td></td>
							</tr>
					</table>
					
					</div>

				</form>

			</div>
			
		</section>


		<section class="col-md-4">
			<div class="card h-100">
				<div class="card-header">
					<h5 class="card-title">Model Output</h5>
				</div>    
				<table >
					<tr>
						<td>Your Predicted Diabetes Risk Is:</td>
						<td >
							<?php
								if ($result) {
									// Extract the desired output
									preg_match("/Predicted Diabetes Risk: ([\d\.]+%)/", $result, $matches);
									$output = $matches[1] ?? "Unknown";  
									echo $output;
									$percentage = floatval(rtrim($output, '%')); 
							?>
						</td>
					</tr>
					<tr>
						<td colspan="2">
						<?php
										
										if ($percentage >= 0 && $percentage <= 20) {
											echo "<br><br><strong>Action:</strong> Routine check-ups.";
											echo "<br><strong>Advice:</strong> Continue maintaining a healthy lifestyle, which includes a balanced diet, regular exercise, and avoiding excessive sugar or junk food.";
										} elseif ($percentage >= 21 && $percentage <= 50) {
											echo "<br><br><strong>Action:</strong> Frequent monitoring.";
											echo "<br><strong>Advice:</strong> Start or intensify lifestyle modifications. This can include reducing sugar and carbohydrate intake, increasing physical activity, regularly monitoring blood sugar levels, and considering seeing an endocrinologist or a dietician for personalized advice.";
										} elseif ($percentage >= 51 && $percentage <= 80) {
											echo "<br><br><strong>Action:</strong> Consultation with a specialist.";
											echo "<br><strong>Advice:</strong> It's crucial to see a healthcare provider for a comprehensive evaluation. Regular blood sugar tests, including Hemoglobin A1c tests, might be recommended. Medications might be prescribed to help manage or reduce the risk. Further tests to assess organ function, such as kidney and eye tests, might be considered.";
										} elseif ($percentage >= 81 && $percentage <= 100) {
											echo "<br><br><strong>Action:</strong> Immediate medical attention.";
											echo "<br><strong>Advice:</strong> Seek advice from a healthcare professional immediately. Strong consideration for starting or adjusting medications. Regular and frequent monitoring of blood sugar levels and other vital parameters. Intensive lifestyle interventions. Continuous monitoring for complications of diabetes and early intervention as needed.";
										}
									}
								?>
						</td>
						
					</tr>
				</table>
				<br/>
			
				<button  type="button" class="btn btn-primary" onclick="showPopup2();">More Details for Action</button>


			</div>
		</section>
		<section class="col-md-4">
			<div class="card h-100">
				<div class="card-header">
					<h5 class="card-title">Model Description</h5>
				</div>
				This diabetes risk prediction tool was crafted using machine learning, encompassing stages from literature review to model construction and validation.
				<img src="img/modeling_data.png" style="max-height: 200px; margin: 0 auto;" alt="Training Data">
				<img src="img/ann.jpg" style="max-height: 200px; margin: 0 auto;" alt="Training Data">
				<div class="card-footer">
					<a href="model_description.php" target="_blank" class="btn btn-primary">More details</a>
				</div>
			</div>
		</section>
	</div>

		<!-- Progress bar section -->
		<div id="progressBarContainer" style="display: none;">
			<h4>Processing...</h4>
			<div class="progress">
				<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%"></div>
			</div>
		</div>

		<script type="text/javascript">
			document.querySelector('form').addEventListener('submit', function() {
				
				document.getElementById('progressBarContainer').style.display = 'block';
			});
		</script>
    </div>

	<br/>
	<br/>
	
</main>
</body>
</html>
