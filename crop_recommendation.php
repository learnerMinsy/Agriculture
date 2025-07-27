<!DOCTYPE html>
<html>
<?php include ('header.php'); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body class="bg-light" id="top">
  
<?php include ('nav.php'); ?>

<style>
    /* Navigation fixes */
    #navbar-main {
      z-index: 1030;
      position: sticky;
      top: 0;
    }
    
    /* Improved color scheme */
    .shape-primary {
      background: linear-gradient(135deg, #1e5799 0%, #207cca 51%, #2989d8 100%) !important;
    }
    
    .card-header {
        background: linear-gradient(135deg,rgb(9, 148, 50) 0%,rgb(71, 255, 102) 100%);
        color: white !important;
        border-radius: 0.5rem 0.5rem 0 0 !important;
    }
    
    .badge-danger {
      background: linear-gradient(to right, #ff6b9a 100%);
      font-size: 1rem;
      padding: 10px 20px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      border: none;
    }
    
    .btn-submit {
        background: linear-gradient(135deg, #ff85a2 0%, #ff6b9a 100%);
        border: none;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        color: white;
    }
    
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 8px rgba(0,0,0,0.15);
        background: linear-gradient(135deg, #ff85a2 0%, #ff6b9a 100%);
    }
    
    .table {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(252, 250, 250, 0.1);
        background: white;
    }
    
    .table thead {
        background: linear-gradient(135deg, #ff85a2 0%, #ff6b9a 100%);
        color: white;
    }
    
    .table th {
        border: none !important;
        font-weight: 600;
    }
    
    .form-control {
        border-radius: 20px;
        border: 1px solid #e0e0e0;
        transition: all 0.3s;
        padding: 12px 15px;
    }
    
    .form-control:focus {
        border-color: #4facfe;
        box-shadow: 0 0 8px rgba(79, 172, 254, 0.4);
    }
    
    .result-card {
        background: linear-gradient(to right, #ff6b9a 100%) 100%,rgb(9, 148, 50);
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        margin-top: 20px;
    }
    
    .result-content {
        color: white;
        padding: 20px;
        font-size: 1.5rem;
        font-weight: 500;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    }
    
    .card-body {
        background-color:rgb(255,255,255);
        border-radius: 0 0 0.5rem 0.5rem;
    }
    
    .display-4 {
        font-size: 2rem;
        font-weight: 600;
    }

    /* 4 Card Section Styles */
    .product-section {
        padding: 40px 0;
        background-color: #f9f9f9;
    }

    .product-title {
        text-align: center;
        margin-bottom: 40px;
        color: #333;
        font-size: 32px;
        font-weight: 700;
    }

    .product-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .product-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 270px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .product-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .product-content {
        padding: 20px;
        text-align: center;
    }

    .product-name {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #2a7f62;
    }

    .product-desc {
        color: #666;
        font-size: 15px;
        line-height: 1.5;
    }

    @media (max-width: 1200px) {
        .product-cards {
            max-width: 900px;
        }
    }

    @media (max-width: 900px) {
        .product-cards {
            max-width: 600px;
        }
    }

    @media (max-width: 600px) {
        .product-cards {
            flex-direction: column;
            align-items: center;
        }
        
        .product-card {
            width: 90%;
            max-width: 350px;
        }
    }
</style>

<section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <span class="badge badge-danger badge-pill mb-3">Recommendation</span>
            </div>
        </div>
        
        <div class="row row-content">
            <div class="col-md-12 mb-3">
                <div class="card shadow">
                    <form role="form" action="" method="post">  
                        <div class="card-header">
                            <span class="text-white display-4">Crop Recommendation</span>	
                            <span class="float-right">
                                <button type="submit" value="Recommend" name="Crop_Recommend" class="btn btn-submit">SUBMIT</button>
                            </span>		
                        </div>

                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered text-center display" id="myTable">
                                <thead>
                                    <tr class="font-weight-bold text-default">
                                        <th><center>Nitrogen</center></th>
                                        <th><center>Phosporous</center></th>
                                        <th><center>Potassium</center></th>
                                        <th><center>Temparature</center></th>
                                        <th><center>Humidity</center></th>
                                        <th><center>PH</center></th>
                                        <th><center>Rainfall</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='n' placeholder="Nitrogen Eg:90" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='p' placeholder="Phosphorus Eg:42" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='k' placeholder="Pottasium Eg:43" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='t' step="0.01" placeholder="Temperature Eg:21" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='h' step="0.01" placeholder="Humidity Eg:82" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='ph' step="0.01" placeholder="PH Eg:6.5" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='r' step="0.01" placeholder="Rainfall Eg:203" required class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

                <?php 
                if(isset($_POST['Crop_Recommend'])){
                    $n = trim($_POST['n']);
                    $p = trim($_POST['p']);
                    $k = trim($_POST['k']);
                    $t = trim($_POST['t']);
                    $h = trim($_POST['h']);
                    $ph = trim($_POST['ph']);
                    $r = trim($_POST['r']);

                    echo '<div class="card result-card mt-4">';
                    echo '<div class="card-header">';
                    echo '<span class="text-white display-4">Result</span>';
                    echo '</div>';
                    echo '<div class="result-content">';
                    
                    echo "Recommended Crop is: ";
                    
                    // Verify Python is installed and accessible
                    $pythonPath = 'python'; // or '/usr/bin/python3' if needed
                    
                    // Verify the script path is correct
                    $scriptPath = 'ML/crop_recommendation/recommend.py';
                    if (!file_exists($scriptPath)) {
                        echo '<div class="alert alert-danger">Error: Python script not found at '.$scriptPath.'</div>';
                    } else {
                        // Build the command with proper escaping
                        $command = escapeshellcmd("$pythonPath $scriptPath $n $p $k $t $h $ph $r");
                        
                        // Execute the command
                        $output = shell_exec($command);
                        
                        if($output === null) {
                            echo '<div class="alert alert-danger">Error: Python script did not return any output. Command: '.$command.'</div>';
                        } else {
                            echo '<strong>' . htmlspecialchars(trim($output)) . '</strong>';
                        }
                    }
                    
                    echo '</div>';
                    echo '</div>';
                }
                ?>

                <!-- Crop Information Cards - Moved outside the PHP block -->
                <div class="product-section">
                    <h2 class="product-title">Crop Information</h2>
                    
                    <div class="product-cards">
                        <div class="product-card">
                            <img src="images/rice.jpg" alt="Rice" class="product-image">
                            <div class="product-content">
                                <h3 class="product-name">RICE</h3>
                                <p class="product-desc">Grows in 3-6 months needing 1,200-2,000mm water, thrives at 20-35°C in clay-loam soils with pH 5.5-6.5.</p>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img src="images/wheat.jpg" alt="Wheat" class="product-image">
                            <div class="product-content">
                                <h3 class="product-name">WHEAT</h3>
                                <p class="product-desc">Matures in 110-130 days with 450-650mm water, prefers 15-22°C in loamy soils (pH 6.0-7.5).</p>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img src="images/maize.jpg" alt="Maize" class="product-image">
                            <div class="product-content">
                                <h3 class="product-name">MAIZE</h3>
                                <p class="product-desc">Takes 90-120 days, requires 500-800mm water, grows best at 21-30°C in fertile soils (pH 5.8-7.0).</p>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img src="images/ragi.jpg" alt="Ragi" class="product-image">
                            <div class="product-content">
                                <h3 class="product-name">RAGI</h3>
                                <p class="product-desc">Matures in 100-120 days with 500-600mm rain, thrives at 20-30°C in well-drained soils (pH 5.5-7.5).</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    
                    <div class="product-cards">
                        <div class="product-card">
                            <img src="images\Tomato.jpg" alt="Rice" class="product-image">
                            <div class="product-content">
                                <h3 class="product-name">TOMATO</h3>
                                <p class="product-desc">Native to South America, domesticated by Aztecs/Incas; 
                                    grows in 3–6 months, needs 1,200–2,000mm water, thrives at 20–35°C in clay-loam soils (pH 5.5–6.5).</p>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img src="images\onion.webp" alt="Wheat" class="product-image">
                            <div class="product-content">
                                <h3 class="product-name">ONION</h3>
                                <p class="product-desc">A bulb-forming perennial grown as an annual, essential to global cuisines for its pungent flavor. 
                                    Adapts to varied climates but yields best in well-drained soils (pH 6.0-7.0) with full sun exposure.</p>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img src="images\carrot.jpg" alt="Maize" class="product-image">
                            <div class="product-content">
                                <h3 class="product-name">CARROT</h3>
                                <p class="product-desc">Originated in Persia over 1,100 years ago, now grown worldwide; 
                                    thrives in 60-80 days, prefers cool climates (15-20°C) and deep, sandy-loam soils (pH 6.0-6.8).</p>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img src="images\bottle gourd.webp" alt="Ragi" class="product-image">
                            <div class="product-content">
                                <h3 class="product-name">BOTTLE GOURD</h3>
                                <p class="product-desc">One of the earliest cultivated plants, grown for over 10,000 years; thrives in warm climates (25-35°C), 
                                    matures in 60-120 days, and prefers well-drained sandy-loam soils (pH 6.0-7.0).</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>  
    </div>
</section>

<?php require("footer.php");?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// This script ensures the page scrolls to the result after form submission
$(document).ready(function() {
    <?php if(isset($_POST['Crop_Recommend'])): ?>
        // Scroll to the result card if form was submitted
        $('html, body').animate({
            scrollTop: $(".result-card").offset().top - 100
        }, 1000);
    <?php endif; ?>
});
</script>

</body>
</html>