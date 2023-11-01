<!DOCTYPE html>
<html>
<head>
    <title>Youth Diabetes Portal</title>
    <!-- Other necessary meta tags, styles, and scripts go here -->
    
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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Youth Diabetes Portal</a>
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
	<br/>
    <section class="row text-center" aria-labelledby="aspnetTitle">
        <h1 id="aspnetTitle">Youth Diabetes Portal</h1>
    
    </section>

    <div class="row">
        <section class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Forum</h5>
                    <p class="card-text">A theme-based forum dedicated to youth diabetes where patients, parents, and healthcare experts come together to share experiences, offer insights, and inspire with stories of overcoming challenges.</p>
                </div>
                <img src="img/forum.jpg"  style="max-height: 200px; margin: 0 auto;">
                <div class="card-footer">
                    <a href="Bulletin.php" class="btn btn-primary">Go to Forum</a>
                </div>
            </div>
        </section>
        <section class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Information</h5>
                    <p class="card-text">On this information site, both current and prospective patients can access essential details ranging from definitions and background to prevention techniques and treatment options.</p>
                </div>
                <img src="img/data-vs-informaton.jpg"  style="max-height: 200px; margin: 0 auto;">
                <div class="card-footer">
                    <a href="Information.php" class="btn btn-primary">Go to Information</a>
                </div>
            </div>
        </section>
        <section class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Youth Diabetes Forecast</h5>
                    <p class="card-text">Get real-time youth diabetes risk forecast using machine learning.</p>
                </div>
                <img src="img/modeling.jpg"  style="max-height: 200px; margin: 0 auto;">
                <div class="card-footer">
                    <a href="Youth.php" class="btn btn-primary">Go to Forecast</a>
                </div>
            </div>
        </section>
    </div>
</main>

</body>
</html>
