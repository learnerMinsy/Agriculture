<!DOCTYPE html>
<html>
<?php include ('header.php'); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body id="top">
  
<?php include ('nav.php'); ?>

<!-- Background Image -->
<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
    <img src="images\yeild.png" 
         style="width: 100%; height: 100%; object-fit: cover;opacity:1.8;" 
         alt="Agricultural background">
</div>

<style>
    /* [All your existing CSS styles remain exactly the same except the body background] */
    /* Navigation fixes */
    #navbar-main {
      z-index: 1030;
      position: sticky;
      top: 0;
    }
    
    /* Body styling without background */
    body {
      min-height: 100vh;
      
    }
    
    /* Gradient background for cards */
    .card-gradient {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(249, 249, 249, 0.95) 100%);
      border: none;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      backdrop-filter: blur(5px);
    }
    
    .card-gradient:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.12);
    }
    
    /* Header styling */
    .card-header-custom {
      background: linear-gradient(135deg, rgb(4, 129, 42) 0%, rgb(71, 255, 102) 100%);
      border-radius: 10px 10px 0 0 !important;
      padding: 1.5rem;
    }
    
    /* Badge styling */
    .badge-pill-custom {
      font-size: 0.9rem;
      padding: 0.5rem 1.25rem;
      font-weight: 500;
      letter-spacing: 0.5px;
      background: linear-gradient(135deg, rgb(52, 236, 52) 0%, rgb(49, 243, 31) 100%);
      color: white;
    }
    
    /* Text styling - changed grey to white */
    .text-muted {
      color: white !important;
      text-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    
    /* Form control styling */
    .form-control-custom {
      border: 1px solid #ffd6e7;
      border-radius: 8px;
      padding: 0.75rem 1rem;
      transition: all 0.3s;
      background-color: rgba(255,255,255,0.9);
    }
    
    .form-control-custom:focus {
      border-color: #ff6b9a;
      box-shadow: 0 0 0 0.2rem rgba(255, 107, 154, 0.25);
    }
    
    /* Button styling */
    .btn-submit-custom {
      background: linear-gradient(135deg, rgb(238, 65, 132) 0%, rgb(221, 59, 127) 100%);
      border: none;
      border-radius: 8px;
      padding: 0.75rem 2rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: all 0.3s;
      color: white;
    }
    
    .btn-submit-custom:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(241, 30, 111, 0.4);
      color: white;
    }
    
    /* Result section styling */
    .result-container {
      background: rgba(255,255,255,0.95);
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      backdrop-filter: blur(5px);
    }
    
    /* Section background */
    .section-shaped {
      position: relative;
      overflow: hidden;
    }
    
    /* .shape-style-1.shape-primary {
      position: absolute;
      height: 100%;
      width: 100%;
      background: linear-gradient(135deg, rgba(255, 214, 231, 0.8) 0%, rgba(255, 184, 217, 0.8) 100%);
      opacity: 0.8;
    } */
    
    /* Table styling */
    .table-custom {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    
    .table-custom thead th {
      background: linear-gradient(135deg, #ff85a2 0%, #ff6b9a 100%);
      color: white;
      font-weight: 600;
      border: none;
    }
    
    .table-custom tbody tr {
      transition: all 0.2s;
    }
    
    .table-custom tbody tr:hover {
      background-color: rgba(255, 107, 154, 0.05);
    }
    
    /* Custom message styling */
    .location-message {
      color: #333;
      background-color: white;
      padding: 15px 20px;
      border-radius: 10px;
      position: relative;
      font-weight: 500%;
      overflow: hidden;
      border-left: 4px solid #ff6b9a;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    /* Page heading styling */
    .page-heading {
      color:hotpink;
      text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    /* Decorative elements */
    .pink-blob {
      position: fixed;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(185, 255, 182, 0.3) 0%, rgba(255,182,193,0) 70%);
      border-radius: 50%;
      z-index: -1;
      pointer-events: none;
    }
    
    /* Add this new style for the results display */
    .prediction-result {
        margin-top: 15px;
        padding: 15px;
        background-color:rgba(231, 234, 235, 0.86);
        border-radius: 8px;
        border-left: 4px solid #ff6b9a;
    }
    .full-width-section {
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        padding: 2%;
        margin-left: -50vw;
        margin-right: -50vw;
    }
    
    .agri-info-section {
        background: rgba(255,255,255,0.95);
        border-radius: 15px; /* Remove border radius for full width */
        padding: 2rem;
        font-weight:bold;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
    
    /* Optional: If you want the content inside to still have max-width */
    .section-content {
        max-width: 1200px;
        margin: 0 auto;
    }
    
    /* New styles for agricultural info section */
    
    .agri-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .agri-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .agri-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    
    .agri-card-body {
        padding: 1.5rem;
    }
    
    .agri-card-title {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 0.75rem;
    }
    
    .agri-card-text {
        color: #7f8c8d;
        font-size: 0.9rem;
    }
    
    .section-title {
        position: relative;
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
    }
    
    .section-title:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(to right, #4CAF50, #8BC34A);
    }
    
    .feature-icon {
        font-size: 2.5rem;
        color: #4CAF50;
        margin-bottom: 1rem;
    }
    
    .stats-item {
        background: rgba(228, 247, 250, 0.9);
        border-radius: 50%;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-bottom: 1.5rem;
    }
    
    .stats-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #4CAF50;
        margin-bottom: 0.5rem;
    }
    
    .stats-label {
        font-size: 1rem;
        color: #7f8c8d;
        
    }
</style>

<section class="section section-shaped section-lg">
    

<div class="container pt-5" style="position: relative; z-index: 1;">
    
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
           <h1 class="display-4 font-weight-bold mb-4" style="color:white;">Maximize Your Agricultural Yield</h1>
<p class="font-weight-bold lead mb-4" style="color:white;">Our advanced prediction system helps farmers estimate crop yields with precision, enabling better planning and resource allocation for your agricultural operations.</p>
<div>
                <a href="#predict-section" class="btn btn-submit-custom btn-lg mr-3">Predict Your Yield</a>
                <a href="#learn-more" class="btn btn-outline-success btn-lg">Learn More</a>
            </div>
        </div>
        <div class="col-lg-6">
    <img src="images\yield bg.webp" 
         alt="Farmers harvesting crops" 
         class="img-fluid rounded-circle shadow-lg"
         style="border: 5px solid white; width: 500px; height: 500px; object-fit: cover;">
</div>
    </div>
    
    <!-- Quick Stats -->
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="stats-item">
                <div class="stats-number">15%</div>
                <div class="stats-label font-weight-bold">Average Yield Increase</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-item">
                <div class="stats-number">5000+</div>
                <div class="stats-label font-weight-bold">Using Farmers</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-item">
                <div class="stats-number">95%</div>
                <div class="stats-label font-weight-bold">Prediction Accuracy</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-item">
                <div class="stats-number">24/7</div>
                <div class="stats-label font-weight-bold">Support Available</div>
            </div>
        </div>
    </div>
    
    <!-- Prediction Section -->
    <div class="row" id="predict-section">
        <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-pill-custom mb-3 font-weight-bold">Yield Prediction</span>
            <h2 class="display-4 mb-4 page-heading font-weight-bold">Predict Crop Yield for Your Farm</h2>
            <p class="lead text-muted font-weight-bold">Enter your farm details to get accurate yield predictions</p>
        </div>
    </div>
    
    <div class="row row-content mt-4">
        <div class="col-md-12 mb-4">
            <div class="card card-gradient">
                <form role="form" action="" method="post">
                    <div class="card-header card-header-custom">
                        <h3 class="mb-0 text-white"><i class="fas fa-chart-bar mr-2"></i>Yield Prediction Parameters</h3>					
                    </div>

                    <div class="card-body text-dark">
                        <table class="table table-custom table-hover display" id="myTable">
                            <thead>
                                <tr class="font-weight-bold">
                                    <th><center>State</center></th>
                                    <th><center>District</center></th>
                                    <th><center>Season</center></th>
                                    <th><center>Crop</center></th>
                                    <th><center>Area (Hectares)</center></th>
                                    <th><center>Predict</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>
                                        <div class="form-group">
                                            <select name="state" class="form-control form-control-custom" required>
                                                <option value="Karnataka">Karnataka</option>
                                            </select>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-group">
                                            <select id="district" name="district" class="form-control form-control-custom" required>
                                                <option value="">Select District</option>
                                                <option value="BAGALKOT">Bagalkot</option>
                                                
<option value="BALLARI">Ballari</option>
<option value="BELAGAVI">Belagavi</option>
<option value="BENGALURU RURAL">Bengaluru Rural</option>
<option value="BENGALURU URBAN">Bengaluru Urban</option>
<option value="BIDAR">Bidar</option>
<option value="CHAMARAJANAGAR">Chamarajanagar</option>
<option value="CHIKBALLAPUR">Chikballapur</option>
<option value="CHIKKAMAGALURU">Chikkamagaluru</option>
<option value="CHITRADURGA">Chitradurga</option>
<option value="DAKSHINA KANNADA">Dakshina Kannada</option>
<option value="DAVANGERE">Davangere</option>
<option value="DHARWAD">Dharwad</option>
<option value="GADAG">Gadag</option>
<option value="HASSAN">Hassan</option>
<option value="HAVERI">Haveri</option>
<option value="KALABURAGI">Kalaburagi</option>
<option value="KODAGU">Kodagu</option>
<option value="KOLAR">Kolar</option>
<option value="KOPPAL">Koppal</option>
<option value="MANDYA">Mandya</option>
<option value="MYSURU">Mysuru</option>
<option value="RAICHUR">Raichur</option>
<option value="RAMANAGARA">Ramanagara</option>
<option value="SHIVAMOGGA">Shivamogga</option>
<option value="TUMAKURU">Tumakuru</option>
<option value="UDUPI">Udupi</option>
<option value="UTTARA KANNADA">Uttara Kannada</option>
<option value="VIJAYAPURA">Vijayapura</option>
<option value="YADGIR">Yadgir</option>
                                                <!-- [Other district options remain the same] -->
                                            </select>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="form-group">
                                            <select name="Season" class="form-control form-control-custom" id="season" required>
                                                <option value="">Select Season</option>
                                                <option value="Kharif">Kharif</option>
                                                <option value="Rabi">Rabi</option>
                                                <option value="Summer">Summer</option>
                                                <option value="WholeYear">Whole Year</option>
                                            </select>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="form-group">
                                            <select id="crop" class="form-control form-control-custom" name="crops" required>
                                                <option value="">Select crop</option>
                                                    <option value="Maize">Maize</option>
                                                    <option value="Sugarcane">Sugarcane</option>
                                                    <option value="Cotton">Cotton</option>
                                                    <option value="Tobacco">Tobacco</option>
                                                    <option value="Paddy">Paddy</option>	
                                                    <option value="Barley">Barley</option>	
                                                    <option value="Wheat">Wheat</option>	
                                                    <option value="Millets">Millets</option>	
                                                    <option value="Oil seeds">Oil seeds</option>	
                                                    <option value="Pulses">Pulses</option>	
                                                    <option value="Ground Nuts">Ground Nuts</option>													
                                                </select>
                                    
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="form-group">
                                            <input type="number" step="0.01" name="area" placeholder="Area in Hectares" required class="form-control form-control-custom">
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="form-group">
                                            <button type="submit" name="Yield_Predict" class="btn btn-submit-custom">
                                                <i class="fas fa-calculator mr-2"></i>Predict
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-4">
    <div class="col-md-12">
        <div class="result-container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="text-dark mb-0"><i class="fas fa-clipboard-list text-primary mr-2 font-weight-bold"></i>Prediction Results</h3>
                <span class="badge badge-primary badge-pill-custom font-weight-bold">Analysis</span>
            </div>
            
            <div class="alert alert-light border-left border-primary border-3">
                <?php if(isset($_POST['Yield_Predict'])): ?>
                    <div class="prediction-result">
                        <?php
                        $state = trim($_POST['state']);
                        $district = trim($_POST['district']);
                        $season = trim($_POST['Season']);
                        $crops = trim($_POST['crops']);
                        $area = trim($_POST['area']);

                        echo "<p class='lead mb-3'>Predicted yield for <span class='font-weight-bold text-primary'>".htmlspecialchars($crops)."</span> in <span class='font-weight-bold text-primary'>".htmlspecialchars($district)."</span> during <span class='font-weight-bold text-primary'>".htmlspecialchars($season)."</span> season:</p>";
                        
                        $Jstate = json_encode($state);
                        $Jdistrict = json_encode($district);
                        $Jseason = json_encode($season);
                        $Jcrops = json_encode($crops);
                        $Jarea = json_encode($area);
                        
                        $command = escapeshellcmd("python ML/yield_prediction/yield_prediction.py $Jstate $Jdistrict $Jseason $Jcrops $Jarea");
                        $output = shell_exec($command);
                        
                        echo "<p class='display-4 font-weight-bold text-success'>".htmlspecialchars($output)." Quintals</p>";
                        echo "<p class='mb-0'>for an area of ".htmlspecialchars($area)." hectares</p>";
                        ?>
                    </div>
                <?php else: ?>
                    <div class="location-message">
                        <p class="mb-0"><i class="fas fa-info-circle mr-2 text-pink font-weight-bold"></i>Please enter your farm details and click "Predict" to see yield estimation</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Agricultural Information Section -->
 
    <div class="full-width-section">
<div class="row mt-5" id="learn-more">
    <div class="col-md-12">
        <div class="agri-info-section">
            <h2 class="section-title font-weight-bold">Understanding Crop Yield Prediction</h2>
            <p class="lead mb-4 font-weight-bold">Yield prediction is a crucial aspect of modern agriculture that helps farmers make informed decisions about their crops. Our system uses advanced algorithms and historical data to provide accurate yield estimates.</p>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="agri-card">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Crop Monitoring">
                        <div class="agri-card-body">
                            <h3 class="agri-card-title">Why Predict Yields?</h3>
                            <p class="agri-card-text font-weight-bold">Accurate yield predictions help farmers plan resources, optimize harvest schedules, and make better marketing decisions for their produce.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="agri-card">
                        <img src="images\methodology.jpg" alt="Data Analysis">
                        <div class="agri-card-body">
                            <h3 class="agri-card-title">Our Methodology</h3>
                            <p class="agri-card-text font-weight-bold">We analyze historical yield data, weather patterns, soil conditions, and crop characteristics to generate reliable predictions.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="agri-card">
                        <img src="https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Precision Agriculture">
                        <div class="agri-card-body">
                            <h3 class="agri-card-title font-weight-bold">Benefits for Farmers</h3>
                            <p class="agri-card-text font-weight-bold">Reduce waste, improve profitability, and make data-driven decisions to enhance your agricultural productivity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="row mt-3">
    <div class="col-md-12">
        <div class="agri-info-section">
            <h2 class="section-title">Key Features</h2>
            
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Data-Driven Predictions</h4>
                    <p>Our algorithms analyze thousands of data points to provide the most accurate yield estimates.</p>
                </div>
                
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h4>Location-Specific</h4>
                    <p>Get predictions tailored to your specific district and local growing conditions.</p>
                </div>
                
                <div class="col-md-4 text-center mb-4 ">
                    <div class="feature-icon">
                        <i class="fas fa-cloud-sun-rain"></i>
                    </div>
                    <h4>Seasonal Analysis</h4>
                    <p>Understand how different seasons affect your crop yields with our seasonal prediction models.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
document.getElementById("season").addEventListener("change", function() {  
    const districtDropdown = document.getElementById('district');
    const seasonDropdown = document.getElementById('season');
    const cropDropdown = document.getElementById('crop');
    
    const selectedDistrict = districtDropdown.value;
    const selectedSeason = seasonDropdown.value;

    // Clear the current crop options
    cropDropdown.innerHTML = '<option value="">Select crop</option>';
    
    // If both district and season are selected, add the corresponding crop options to the dropdown
    if (selectedDistrict && selectedSeason) {
        const options = cropOptions[selectedDistrict][selectedSeason];
        for (const option of options) {
            const optionElement = document.createElement('option');
            optionElement.value = option;
            optionElement.text = option;
            cropDropdown.appendChild(optionElement);
        }
    }
}); 
</script>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php require("footer.php");?>
</body>
</html>