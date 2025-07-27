<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body id="top">
  
<?php include ('nav.php');  ?>
<style>
    /* [All your existing CSS styles remain exactly the same] */
     /* Navigation fixes */
     #navbar-main {
      z-index: 1030;
      position: sticky;
      top: 0;
    }
    
    /* Pink background styling */
    body {
      background: linear-gradient(135deg,rgb(143, 248, 143) 0%,rgb(146, 241, 137) 100%);      
      min-height: 100vh;
    }
    /* Gradient background for cards */
    .card-gradient {
      background: linear-gradient(135deg, #ffffff 0%, #f9f9f9 100%);
      border: none;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card-gradient:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.12);
    }
    
    /* Header styling */
    .card-header-custom {
      background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);
      border-radius: 10px 10px 0 0 !important;
      padding: 1.5rem;
    }
    
    /* Badge styling */
    .badge-pill-custom {
      font-size: 0.9rem;
      padding: 0.5rem 1.25rem;
      font-weight: 500;
      letter-spacing: 0.5px;
      background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);
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
      border-color: #4b6cb7;
      box-shadow: 0 0 0 0.2rem rgba(75, 108, 183, 0.25);
    }
    
    /* Button styling */
    .btn-submit-custom {
      background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);
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
      box-shadow: 0 4px 15px rgba(75, 108, 183, 0.4);
      color: white;
    }
    
    /* Result section styling */
    .result-container {
      background: rgba(220, 213, 247, 0.9);
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
    
    /* Section background */
    .section-shaped {
      position: relative;
      overflow: hidden;
    }
    
    .shape-style-1.shape-primary {
      position: absolute;
      height: 100%;
      width: 100%;
      background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
      opacity: 0.8;
    }
    
    /* Table styling */
    .table-custom {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    
    .table-custom thead th {
      background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);
      color: white;
      font-weight: 600;
      border: none;
    }
    
    .table-custom tbody tr {
      transition: all 0.2s;
    }
    
    .table-custom tbody tr:hover {
      background-color: rgba(75, 108, 183, 0.05);
    }
    
    /* Custom message styling */
    .location-message {
      color: #333;
      background-color: white;
      padding: 15px 20px;
      border-radius: 10px;
      position: relative;
      overflow: hidden;
      border-left: 4px solid #4b6cb7;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    /* Page heading styling */
    .page-heading {
      color: #333;
      text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    /* Decorative elements */
    .blue-blob {
      position: fixed;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(185, 210, 255, 0.3) 0%, rgba(207, 222, 243, 0) 70%);
      border-radius: 50%;
      z-index: -1;
      pointer-events: none;
    }
    /* Add this new style for the results display */
    .result-display {
        
        padding: 20px;
        border-radius: 8px;
        margin-top: 15px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        border-left: 4px solid #4b6cb7;
    }
</style>

<!-- Decorative blue blobs -->
<div class="blue-blob" style="top: -100px; right: -100px;"></div>
<div class="blue-blob" style="bottom: -50px; left: -100px; width: 400px; height: 400px;"></div>

<section class="section section-shaped section-lg">
    <div class="shape shape-style-1 "></div>

<div class="container pt-5" style="position: relative; z-index: 1;">
    
    <div class="row">
        <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-pill-custom mb-3">Rainfall Prediction</span>
            <h2 class="display-4 mb-4 page-heading">Predict Rainfall for Your Region</h2>
            <p class="lead text-muted">Select your region and month to get accurate rainfall predictions</p>
        </div>
    </div>
    
    <div class="row row-content mt-4">
        <div class="col-md-12 mb-4">
            <div class="card card-gradient">
                <form role="form" action="" method="post">
                    <div class="card-header card-header-custom">
                        <h3 class="mb-0 text-white"><i class="fas fa-cloud-rain mr-2"></i>Rainfall Prediction Parameters</h3>					
                    </div>

                    <div class="card-body text-dark">
                        <table class="table table-custom table-hover display" id="myTable">
                            <thead>
                                <tr class="font-weight-bold">
                                    <th><center>Region</center></th>
                                    <th><center>Month</center></th>
                                    <th><center>Predict</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>
                                        <div class="form-group">
                                            <select id="region-select" name="region" class="form-control form-control-custom" required>
                                                <option value="">Select Region</option>
                                            </select>
                                            <script language="javascript">print_region("region-select");</script>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-group">
                                            <select id="month-select" name="month" class="form-control form-control-custom" required>
                                                <option value="">Select Month</option>
                                            </select>
                                            <script language="javascript">print_months("month-select");</script>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="form-group">
                                            <button type="submit" name="Rainfall_Predict" class="btn btn-submit-custom">
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
                    <h3 class="text-dark mb-0"><i class="fas fa-clipboard-list text-primary mr-2"></i>Prediction Results</h3>
                    <span class="badge badge-primary badge-pill-custom">Analysis</span>
                </div>
                
                <?php if(isset($_POST['Rainfall_Predict'])): ?>
                    <div class="result-display">
                        <?php
                        $region = trim($_POST['region']);
                        $month = trim($_POST['month']);

                        echo "<p class='lead mb-3'>Predicted rainfall for <span class='font-weight-bold text-primary'>".htmlspecialchars($region)."</span> in <span class='font-weight-bold text-primary'>".htmlspecialchars($month)."</span>:</p>";

                        $Jregion = json_encode($region);
                        $Jmonth = json_encode($month);
                        $command = escapeshellcmd("python ML/rainfall_prediction/rainfall_prediction.py $Jregion $Jmonth");
                        $output = shell_exec($command);
                        
                        echo "<div class='p-3 bg-white rounded'>";
                        echo "<p class='display-4 font-weight-bold text-primary'>".htmlspecialchars($output)." mm</p>";
                        echo "</div>";
                        ?>
                    </div>
                <?php else: ?>
                    <div class="location-message">
                        <p class="mb-0"><i class="fas fa-info-circle mr-2 text-primary"></i>Please select your region and month to get rainfall prediction</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</section>

<?php require("footer.php");?>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Add animation to the prediction button
    $(document).ready(function() {
        $('button[name="Rainfall_Predict"]').hover(
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