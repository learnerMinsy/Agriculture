<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('header.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroPredict - Smart Crop Recommendation System</title>
    <style>
        /* Base Styles */
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #8BC34A;
            --accent-color: #FFC107;
            --dark-green: #2E7D32;
            --light-green: #C8E6C9;
            --text-dark: #333;
            --text-light: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
            background-color: #f8f9fa;
            line-height: 1.6;
        }
        
        /* Navigation */
        #navbar-main {
            z-index: 1030;
            position: sticky;
            top: 0;
            background: rgba(255,255,255,0.95);
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        
        /* Hero Section */
        .hero-section {
            background:  url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            height: 500px ;
            padding: 120px 0 80px;
            margin-bottom: 50px;
        }
        
        /* Card Styling */
        .card-gradient {
            background: white;
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }
        
        .card-gradient:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }
        
        .card-header-custom {
            background: linear-gradient(135deg, var(--dark-green) 0%, var(--primary-color) 100%);
            border-radius: 10px 10px 0 0 !important;
            padding: 1.5rem;
            color: white;
        }
        
        /* Badges */
        .badge-pill-custom {
            font-size: 0.9rem;
            padding: 0.5rem 1.25rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            text-transform: uppercase;
        }
        
        /* Form Elements */
        .form-control-custom {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            transition: all 0.3s;
            background-color: white;
        }
        
        .form-control-custom:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
        }
        
        /* Buttons */
        .btn-submit-custom {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            border-radius: 8px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            color: white;
            text-transform: uppercase;
        }
        
        .btn-submit-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4);
            color: white;
        }
        
        /* Results Section - ENHANCED FOR BETTER VISIBILITY */
        .result-container {
            background: white;
            border-radius: 12px;
            padding: 3rem;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }
        
        .result-highlight {
            background: var(--light-green);
            padding: 25px;
            border-radius: 12px;
            border-left: 6px solid var(--primary-color);
            margin-top: 20px;
            font-size: 1.3rem;
            line-height: 1.8;
        }
        
        .result-highlight p {
            margin-bottom: 0;
            font-size: 1.2rem;
        }
        
        .result-title {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--dark-green);
        }
        
        .result-details {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }
        
        /* Table Styling */
        .table-custom {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        
        .table-custom thead th {
            background: linear-gradient(135deg, var(--dark-green) 0%, var(--primary-color) 100%);
            color: white;
            font-weight: 600;
            border: none;
            text-align: center;
        }
        
        .table-custom tbody tr {
            transition: all 0.2s;
        }
        
        .table-custom tbody tr:hover {
            background-color: rgba(139, 195, 74, 0.05);
        }
        
        /* Features Section */
        .feature-box {
            padding: 30px;
            background: hotpink;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s;
            height: 100%;
        }
        
        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        /* Testimonials */
        .testimonial-card {
            background: hotpink;
            border-radius: 10px;
            padding: 30px;
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary-color);
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--dark-green) 0%, var(--primary-color) 100%);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-links a {
            color: rgba(255,255,255,0.8);
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
            text-decoration: none;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0 50px;
            }
            
            .display-4 {
                font-size: 2.5rem;
            }
            
            .result-highlight {
                padding: 15px;
                font-size: 1.1rem;
            }
            
            .result-title {
                font-size: 1.5rem;
            }
        }

        .prediction-container {
            position: relative;
            width: 100%;
            max-width: 100vw;
            
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .prediction-banner {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        .prediction-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.95);
            transition: transform 0.5s ease;
        }
        
        .prediction-banner:hover img {
            transform: scale(1.05);
        }
        
        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 90%;
        }
        
        .banner-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: white;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
        }
        
        .banner-text p {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

    </style>
</head>
<body id="top">
  
<?php include ('nav.php'); ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="display-4 font-weight-bold mb-4">Smart Crop Prediction for Modern Farmers</h1>
                <p class="lead mb-4 font-weight-bold">Harness the power of AI to determine the best crops for your land based on location, season, and environmental factors.</p>
                <a href="crop_recommendation.php" class="btn btn-submit-custom btn-lg">Get Recommendations</a>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <span class="badge badge-pill-custom mb-3">Why Choose Us</span>
                <h2 class="mb-4">Revolutionizing Agriculture with Technology</h2>
                <p class="lead">Our advanced algorithms analyze multiple factors to provide you with the most suitable crop recommendations.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Data-Driven Insights</h4>
                    <p>Our system analyzes historical data, weather patterns, and soil conditions to provide accurate predictions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-box">
                    <div class="feature-icon">
                    <i class="fas fa-map-marker-alt"></i>  
                    </div>
                    <h4>Location-Specific</h4>
                    <p>Get recommendations tailored specifically to your district and local growing conditions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h4>Seasonal Planning</h4>
                    <p>Optimize your planting schedule with recommendations for each growing season.</p>
                </div>
            </div>
        </div>
    </div>
</section>
 <div class="prediction-container">
        <div class="prediction-banner">
            <img src="images\crops.jpg" alt="Farm field with crops">
            <div class="banner-text">
                <h2> Crop Predictions To Empower Farmers</h2>
                <p>"Leverage AI-driven insights to predict optimal growing conditions and boost your harvest potential
Transform weather patterns into planting strategies with smart agricultural forecasting Data-powered cultivation - anticipate weather changes and make smarter farming decisions 
Predict, Plan, Prosper – Smart farming starts with accurate weather insights From forecast to harvest – AI that grows with your crops"</p>
            </div>
        </div>

<!-- Prediction Section -->
<section id="prediction-section" class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <span class="badge badge-pill-custom mb-3">Crop Prediction</span>
                <h2 class="mb-4">Find the Best Crops for Your Region</h2>
                <p class="lead">Select your location and season to get personalized crop predictions based on our advanced analysis.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card card-gradient">
                    <div class="card-header card-header-custom">
                        <h3 class="mb-0 text-white"><i class="fas fa-seedling mr-2"></i>Crop Prediction Form</h3>					
                    </div>

                    <div class="card-body">
                        <form role="form" action="#prediction-section" method="post">     
                            <table class="table table-custom table-hover display" id="myTable">
                                <thead>
                                    <tr class="font-weight-bold">
                                        <th><center>State</center></th>
                                        <th><center>District</center></th>
                                        <th><center>Season</center></th>
                                        <th><center>Prediction</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            <div class="form-group">
                                                <select onchange="print_city('state', this.selectedIndex);" id="sts" name="stt" class="form-control form-control-custom" required>
                                                    <option value="">Select State</option>
                                                </select>
                                                <script language="javascript">print_state("sts");</script>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <select id="state" name="district" class="form-control form-control-custom" required>
                                                    <option value="">Select District</option>
                                                </select>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="form-group">
                                                <select name="Season" class="form-control form-control-custom">
                                                    <option value="">Select Season</option>
                                                    <option name="Kharif" value="Kharif">Kharif</option>
                                                    <option name="Whole Year" value="Whole Year">Whole Year</option>
                                                    <option name="Autumn" value="Autumn">Autumn</option>
                                                    <option name="Rabi" value="Rabi">Rabi</option>
                                                    <option name="Summer" value="Summer">Summer</option>
                                                    <option name="Winter" value="Winter">Winter</option>
                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <button type="submit" name="Crop_Predict" class="btn btn-submit-custom">
                                                    <i class="fas fa-chart-line mr-2"></i>Predict
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Results Section - ENHANCED -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="result-container">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="result-title"><i class="fas fa-clipboard-list text-primary mr-2"></i>Prediction Results</h3>
                        <span class="badge badge-primary badge-pill-custom">Analysis</span>
                    </div>
                    
                    <?php if(isset($_POST['Crop_Predict'])): ?>
                        <?php
                        $state = trim($_POST['stt']);
                        $district = trim($_POST['district']);
                        $season = trim($_POST['Season']);

                        echo "<div class='alert alert-success' role='alert'>";
                        echo "<h4 class='alert-heading' style='font-size: 1.5rem;'>Recommended Crops</h4>";
                        echo "<p class='result-details'>Crops grown in <strong>".htmlspecialchars($district)."</strong> during the <strong>".htmlspecialchars($season)."</strong> season:</p>";
                        echo "<hr>";

                        $JsonState = json_encode($state);
                        $JsonDistrict = json_encode($district);
                        $JsonSeason = json_encode($season);
                        
                        $command = escapeshellcmd("python ML/crop_prediction/ZDecision_Tree_Model_Call.py $JsonState $JsonDistrict $JsonSeason");
                        $output = shell_exec($command);
                        
                        echo "<div class='result-highlight'>";
                        echo "<p style='font-size: 1.3rem; font-weight: 600;'>".htmlspecialchars($output)."</p>";
                        echo "</div>";
                        echo "</div>";
                        ?>
                    <?php else: ?>
                        <div class="alert alert-info" role="alert">
                            <h4 class="alert-heading" style="font-size: 1.5rem;">Get Started</h4>
                            <p class="result-details">Please select your location and season above to get personalized crop recommendations.</p>
                            <hr>
                            <p class="mb-0">Our system will analyze the best crops for your specific region and growing season.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <span class="badge badge-pill-custom mb-3">Our Process</span>
                <h2 class="mb-4">How Our Prediction System Works</h2>
                <p class="lead">We combine multiple data sources to provide you with the most accurate recommendations.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Data Analysis" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <div class="pl-lg-4">
                    <div class="d-flex mb-4">
                        <div class="mr-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="h4 mb-0">1</span>
                            </div>
                        </div>
                        <div>
                            <h4>Data Collection</h4>
                            <p>We gather historical crop data, soil information, and weather patterns from reliable sources across India.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="mr-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="h4 mb-0">2</span>
                            </div>
                        </div>
                        <div>
                            <h4>Machine Learning Analysis</h4>
                            <p>Our advanced algorithms process this data to identify patterns and optimal crop choices.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="mr-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="h4 mb-0">3</span>
                            </div>
                        </div>
                        <div>
                            <h4>Personalized Recommendations</h4>
                            <p>Based on your specific location and season, we provide tailored crop suggestions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <span class="badge badge-pill-custom mb-3">Success Stories</span>
                <h2 class="mb-4">What Farmers Say About Us</h2>
                <p class="lead">Hear from farmers who have successfully used our crop prediction system.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <div class="text-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Testimonial" class="testimonial-img">
                    </div>
                    <p class="mb-4">"The crop predictions helped me increase my yield by 30% last season. I'm never planting without consulting this system again!"</p>
                    <h5 class="mb-1">Rajesh Kumar</h5>
                    <p class="text-muted font-weight-bold">kerala</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <div class="text-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Testimonial" class="testimonial-img">
                    </div>
                    <p class="mb-4">"As a small-scale farmer, I was skeptical at first, but the recommendations matched perfectly with our local conditions."</p>
                    <h5 class="mb-1">Anuradha</h5>
                    <p class="text-muted font-weight-bold">karnataka</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <div class="text-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Testimonial" class="testimonial-img">
                    </div>
                    <p class="mb-4">"The seasonal predictions helped me wisely plan my crops better and avoid heavy losses during unexpected weather changes"</p>
                    <h5 class="mb-1">surya</h5>
                    <p class="text-muted font-weight-bold">Tamil Nadu</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="mb-3">Ready to Optimize Your Farming?</h2>
                <p class="lead mb-0">Get started with our crop prediction system today and make data-driven decisions for your farm.</p>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a href="crop_recommendation.php" class="btn btn-light btn-lg">Get Recommendations</a>
            </div>
        </div>
    </div>
</section>

<?php require("footer.php");?>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Smooth scrolling for anchor links
    $(document).ready(function(){
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 70
                }, 1000);
            }
        });
        
        // Add animation to the prediction button
        $('button[name="Crop_Predict"]').hover(
            function() {
                $(this).css('transform', 'translateY(-2px)');
            },
            function() {
                $(this).css('transform', 'translateY(0)');
            }
        );
    });
</script>

</body>
</html>