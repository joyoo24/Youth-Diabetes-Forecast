<!DOCTYPE html>
<html>
<head>
    <title>Input Explanation</title>
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
    <style>
        /* You can adjust these dimensions as needed */
        .infoImage {
            width: 100px; /* or any desired width */
            
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

<?php
$type = $_GET['type'];

$infoArray = array(
    'pregnancies' => array(
	    'image' => 'img/pregnancies.png',
        'text' => 'Number of times pregnant.'

    ),
    'glucose' => array(
	    'image' => 'img/glucose.png',
        'text' => 'Glucose is the main type of sugar in the blood and is the major source of energy for the body\'s cells. Glucose comes from the foods we eat or the body can make it from other substances. In this model, the glucose input is Plasma glucose concentration a 2 hours in an oral glucose tolerance test. If you don\'t have your own data, the national average is 100 mg/dL.'

    ),
    'bp' => array(
        'text' => 'Diastolic blood pressure is the pressure, measured in millimeters of mercury, within the major arterial system of the body. ',
        'image' => 'img/bp.png'
    ),
    'skin' => array(
        'text' => 'The thickness of each layer of the skin varies depending on body region and categorized based on the thickness of the epidermal and dermal layers. In case you do not have your own data, use 20 mm which is an average value of the training dataset.',
        'image' => 'img/skin.png'
    ),
    'insulin' => array(
        'text' => 'Insulin helps blood sugar enter the body\'s cells so it can be used for energy. Insulin also signals the liver to store blood sugar for later use. Blood sugar enters cells, and levels in the bloodstream decrease, signaling insulin to decrease too. In this modeling, the input is 2-Hour serum insulin (mu U/ml). If you need to enter an insulin value other than zero but you do not know your own value, then use 79.8 which is the average value of the training dataset.',
        'image' => 'img/insulin.png'
    ),
    'bmi' => array(
        'text' => 'Body Mass Index (BMI) is a person\'s weight in kilograms divided by the square of height in meters. A high BMI can indicate high body fatness. If you do not know your own BMI value, use 32 kg/m2 which is average value of the training dataset.',
        'image' => 'img/bmi.png'
    ),
    'dpf' => array(
        'text' => 'Diabetes pedigree function (DPF) calculates diabetes likelihood depending on the subject\'s age and his/her diabetic family history. \n

Low Predisposition: DPF values close to 0. This suggests a lower genetic predisposition based on family history. \n

Moderate Predisposition: DPF values in the intermediate range, such as around 0.4 to 0.8. This might suggest a moderate genetic predisposition based on family history.\n

High Predisposition: DPF values closer to 1 (or sometimes even exceeding 1 in certain formulas). This indicates a higher genetic predisposition based on family history. \n


		When you do not have your own value, use 0.472 which is the average value of the training dataset.',
        'image' => 'img/dpf.png'
    ),
    'age' => array(
        'text' => 'Age is a measure of the number of years a person has lived. It is often used as a risk factor in various health-related studies and predictions.',
        'image' => 'img/age.png'
    ),
);


$infoText = isset($infoArray[$type]['text']) ? $infoArray[$type]['text'] : 'Information not available.';
$imagePath = isset($infoArray[$type]['image']) ? $infoArray[$type]['image'] : '';


if ($imagePath) {
    echo '<img src="' . $imagePath . '" alt="' . $type . '" class="infoImage">';
}


echo "<p>" . $infoText . "</p>";

?>

</main>

</body>
</html>
