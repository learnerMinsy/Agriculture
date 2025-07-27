<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroCare - Fertilizer Recommendation</title>
    <?php include ('header.php'); ?>
    <style>
        /* Navigation fixes */
        #navbar-main {
            z-index: 1030;
            position: sticky;
            top: 0;
        }
        
        /* Main theme colors */
        :root {
            --primary-green: #4CAF50;
        }
        
        body {
            font-family: 'Open Sans', sans-serif;
            color: #333;
            line-height: 1.6;
            background-color:rgb(255, 224, 196);
        }
        
        /* Recommendation card styling - EXACTLY YOUR ORIGINAL STYLE */
        .recommendation-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            top:30px;
        }
        
        .result-card {
            background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        
        .recommendation-badge {
            background: linear-gradient(#4CAF50);
            color: white;
            font-size: 1rem;
            padding: 8px 16px;
            border-radius: 50px;
        }
        
        .table th {
            border: none !important;
            font-weight: 600;
            background-color: #4CAF50;
            color: white;
        }
        
        .submit-btn {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .card-header {
            background: rgba(255,255,255,0.2);
            border-bottom: 1px solid rgba(255,255,255,0.3);
        }
        
        .form-control {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        
        .form-control:focus {
            border-color: #4e54c8;
            box-shadow: 0 0 0 0.2rem rgba(78, 84, 200, 0.25);
        }
        
        /* Fix footer width */
        footer {
            width: 100%;
            margin: 0;
            padding: 0;
        }
        
        /* Simple fertilizer cards */
        .fertilizer-item {
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .fertilizer-img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php include ('nav.php'); ?>
    
    <!-- Main Content - Keeping your exact layout -->
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <span class="recommendation-badge mb-3">Fertilizer Recommendation</span>
            </div>
        </div>
        
        <div class="row row-content">
            <div class="col-md-12 mb-3">
                <div class="card recommendation-card mb-4">
                    <form role="form" action="#" method="post">  
                        <div class="card-header">
                            <span class="text-primary display-4">Fertilizer Recommendation</span>	
                            <span class="float-right">
                                <button type="submit" value="Recommend" name="Fert_Recommend" class="submit-btn">GET RECOMMENDATION</button>
                            </span>		
                        </div>
                        

                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered bg-white text-center display" id="myTable">
                                <thead>
                                    <tr class="font-weight-bold text-default">
                                        <th><center>Nitrogen</center></th>
                                        <th><center>Phosphorous</center></th>
                                        <th><center>Potassium</center></th>
                                        <th><center>Temperature</center></th>
                                        <th><center>Humidity</center></th>
                                        <th><center>Soil Moisture</center></th>
                                        <th><center>Soil Type</center></th>
                                        <th><center>Crop</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='n' placeholder="Nitrogen Eg:37" required class="form-control">
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='p' placeholder="Phosphorus Eg:0" required class="form-control">
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='k' placeholder="Pottasium Eg:0" required class="form-control">
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='t' placeholder="Temperature Eg:26" required class="form-control">
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='h' placeholder="Humidity Eg:52" required class="form-control">
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='soilMoisture' placeholder="Soil Moisture Eg:38" required class="form-control">
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="form-group">
                                                <select name="soil" class="form-control">
                                                    <option value="">Select Soil Type</option>
                                                    <option value="Sandy">Sandy</option>
                                                    <option value="Loamy">Loamy</option>
                                                    <option value="Black">Black</option>
                                                    <option value="Red">Red</option>
                                                    <option value="Clayey">Clayey</option>											
                                                </select>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="form-group">
                                                <select name="crop" class="form-control">
                                                    <option value="">Select Crop</option>
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
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

                <div class="card result-card mb-3">
                    <div class="card-header">
                        <span class="text-success display-4">Recommendation Result</span>					
                    </div>
                    <div class="card-body">
                        <h4 class="text-dark">
                        <?php 
                        if(isset($_POST['Fert_Recommend'])){
                            $n=trim($_POST['n']);
                            $p=trim($_POST['p']);
                            $k=trim($_POST['k']);
                            $t=trim($_POST['t']);
                            $h=trim($_POST['h']);
                            $sm=trim($_POST['soilMoisture']);
                            $soil=trim($_POST['soil']);
                            $crop=trim($_POST['crop']);

                            echo "<strong>Recommended Fertilizer is:</strong> ";

                            $Jsonn=json_encode($n);
                            $Jsonp=json_encode($p);
                            $Jsonk=json_encode($k);
                            $Jsont=json_encode($t);
                            $Jsonh=json_encode($h);
                            $Jsonsm=json_encode($sm);
                            $Jsonsoil=json_encode($soil);
                            $Jsoncrop=json_encode($crop);

                            $command = escapeshellcmd("python ML/fertilizer_recommendation/fertilizer_recommendation.py $Jsonn $Jsonp $Jsonk $Jsont $Jsonh $Jsonsm $Jsonsoil $Jsoncrop ");
                            $output = passthru($command);
                            echo "<span class='text-primary'>".$output."</span>";					
                        }
                        ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Simple Fertilizer Information -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="fertilizer-item">
                    <img src="images\urea.jpg" alt="Urea" class="fertilizer-img">
                    <h4 class="mt-2">Urea (46-0-0)</h4>
                    <p>High nitrogen fertilizer for vegetative growth</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fertilizer-item">
                    <img src="images\DAP.png" alt="DAP" class="fertilizer-img">
                    <h4 class="mt-2">DAP (18-46-0)</h4>
                    <p>Provides nitrogen and phosphorus for root development</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fertilizer-item">
                    <img src="images\NPK.jpg" alt="NPK" class="fertilizer-img">
                    <h4 class="mt-2">NPK (20-20-20)</h4>
                    <p>Balanced fertilizer for overall plant growth</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fertilizer-item">
                    <img src="images\potash.jpg" alt="Potash" class="fertilizer-img">
                    <h4 class="mt-2">Potash (0-0-60)</h4>
                    <p>High potassium for fruit development</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fertilizer-item">
                    <img src="images\ssp.jpg" alt="SSP" class="fertilizer-img">
                    <h4 class="mt-2">SSP (0-16-0)</h4>
                    <p>Provides phosphorus and calcium</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fertilizer-item">
                    <img src="images\organic.jpg" alt="Organic" class="fertilizer-img">
                    <h4 class="mt-2">Organic Compost</h4>
                    <p>Natural fertilizer for soil health</p>
                </div>
            </div>
        </div>
    </div>

    <?php require("footer.php");?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>