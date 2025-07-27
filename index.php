<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('header.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agriculture Management System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Navigation fixes */
    #navbar-main {
      z-index: 1030;
      position: sticky;
      top: 0;
    }
    
    /* Content spacing */
    body {
    
      background-color:whitesmoke;
    }
    .chatbot-container {
      position: fixed;
      bottom: 30px;
      right: 30px;
      z-index: 9999;
      width: 70px;
      height: 70px;
    }
    
    .chatbot-btn {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
      color: white;
      border: 3px solid white;
      box-shadow: 0 5px 25px rgba(0,0,0,0.3);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s ease;
      animation: pulse 2s infinite;
      text-decoration: none;
    }
    
    .chatbot-btn:hover {
      transform: scale(1.1) translateY(-5px);
      box-shadow: 0 8px 30px rgba(0,0,0,0.4);
      animation: none;
    }
    
    .chatbot-btn i {
      font-size: 28px;
      margin-bottom: 2px;
    }
    
    .chatbot-btn span {
      font-size: 10px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    
    /* Chatbot Window */
    .chatbot-window {
      position: fixed;
      bottom: 120px;
      right: 30px;
      width: 350px;
      height: 500px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      z-index: 9998;
      display: none;
      flex-direction: column;
      overflow: hidden;
      transform: translateY(20px);
      opacity: 0;
      transition: all 0.3s ease;
    }
    
    .chatbot-window.active {
      display: flex;
      transform: translateY(0);
      opacity: 1;
    }
    
    .chatbot-header {
      background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
      color: white;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .chatbot-header h5 {
      margin: 0;
      font-weight: bold;
    }
    
    .chatbot-close {
      background: none;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
      padding: 0;
      line-height: 1;
    }
    
    .chatbot-body {
      flex: 1;
      padding: 15px;
      overflow-y: auto;
      background: #f8f9fa;
    }
    
    .chatbot-footer {
      padding: 15px;
      border-top: 1px solid #eee;
      background: white;
    }
    
    /* Pulse animation */
    @keyframes pulse {
      0% {
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.7);
      }
      70% {
        box-shadow: 0 0 0 12px rgba(40, 167, 69, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(40, 167, 69, 0);
      }
    }
    
    /* Mobile responsiveness */
    @media (max-width: 768px) {
      .chatbot-container {
        width: 60px;
        height: 60px;
        right: 20px;
        bottom: 20px;
      }
      
      .chatbot-window {
        width: calc(100% - 40px);
        right: 20px;
        bottom: 100px;
        height: 60vh;
      }
      
      .chatbot-btn i {
        font-size: 24px;
      }
      
      .chatbot-btn span {
        font-size: 8px;
      }
    }

    
    
    /* Jumbotron styling */
    /* Shining Blue Hero Jumbotron (unchanged) */
.hero-jumbotron {
  background: linear-gradient(135deg, #00c6ff 0%, #0072ff 100%);
  color: white;
  margin-bottom: 0;
  position: relative;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 114, 255, 0.3);
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.hero-jumbotron::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(
    to bottom right,
    rgba(255, 255, 255, 0) 0%,
    rgba(255, 255, 255, 0.1) 30%,
    rgba(255, 255, 255, 0) 60%
  );
  transform: rotate(30deg);
  animation: shine 8s infinite linear;
}

/* Shining Golden Yellow Quote Card */
.quote-card {
  background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
  border: none;
  border-radius: 12px;
  color: #333; /* Darker text for better contrast on yellow */
  box-shadow: 0 8px 25px rgba(255, 215, 0, 0.4);
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
  z-index: 1;
}

/* Golden Shine Effect */
.quote-card::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(
    to bottom right,
    rgba(255, 255, 255, 0) 45%,
    rgba(255, 255, 255, 0.4) 50%,
    rgba(255, 255, 255, 0) 55%
  );
  transform: rotate(30deg);
  animation: cardShine 3s infinite;
  z-index: -1;
}

.quote-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 35px rgba(255, 165, 0, 0.6);
  color: #000; /* Slightly darker text on hover */
}

/* Text styling for better readability on yellow */
.quote-card blockquote {
  font-weight: 500;
}

.quote-card .blockquote-footer {
  color: #555; /* Slightly darker footer text */
}
    
    /* Feature cards */
    .feature-card {
      background-color: whitesmoke;
      padding: 30px;
      border-radius: 25px;
      transition: all 0.3s ease;
    }
    
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    /* Tech cards */
    .tech-card {
      transition: all 0.3s ease;
    }
    
    .tech-card:hover {
      transform: scale(1.05);
    }
  </style>
</head>

<body id="top">
  <!-- Navigation -->
  <?php include('nav.php'); ?>
  
  <div class="chatbot-container">
    <div class="chatbot-btn" id="chatbotToggle">
      <i class="ni ni-chat-round"></i>
      <span>Chat</span>
    </div>
    
    <div class="chatbot-window" id="chatbotWindow">
      <div class="chatbot-header">
        <h5>Agri Assistant</h5>
        <button class="chatbot-close" id="chatbotClose">&times;</button>
      </div>
      <div class="chatbot-body" id="chatbotBody">
        <!-- Chat messages will appear here -->
        <div class="chat-message bot-message">
          <p>Hello! I'm your agricultural assistant. How can I help you today?</p>
        </div>
      </div>
      <div class="chatbot-footer">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Type your message..." id="chatbotInput">
          <div class="input-group-append">
            <button class="btn btn-success" type="button" id="chatbotSend">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <div class="wrapper">
    <header class="jumbotron hero-jumbotron">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Section: Title and Description -->
          <div class="col-12 col-md-7">
            <h1 class="text-white">AGRICULTURE MANAGEMENT SYSTEM</h1>
            <p class="text-white font-weight-bold">
              "Efficient farming meets sustainability—nurturing the earth while maximizing productivity for a greener future."
            </p>
            
            <!-- Blockquote Card -->
            <div class="quote-card card card-body mt-4">
              <blockquote class="blockquote mb-0">
                <h6 class="mb-0">
                <em><b>"To be a successful farmer, one must first know the nature of the soil and the heart of the people."</b></em>
                </h6>
                <footer class="blockquote-footer text-white mt-3">Xenophon</footer>
              </blockquote>
            </div>
          </div>

          <!-- Right Section: Image -->
          <div class="col-12 col-md-5 mt-4 mt-md-0 text-center">
           <img src="assets\img\agro logo.webp" class="img-fluid rounded-circle shadow-lg" alt="Agriculture Innovation" style="width: 180px; height: 180px; object-fit: cover; border: 3px solid white;">
            </div>
        </div>
      </div>
    </header>
<div class="tool-card" style="
    border-radius: 10px; 
    padding: 40px; 
    box-shadow: 0 4px 12px rgba(0,0,0,0.2); 
    margin: 20px auto;
    max-width: 1400px;
    text-align: center;
    position: relative;
    overflow: hidden;
">
    <!-- Background image using img tag -->
    <img src="images\irri cal.jpg"     alt="Irrigation background"
         style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
         ">
   
    
    <!-- Text content with contrasting colors -->
    <div style="position: relative; z-index: 2;">
        <h3 style="
            color:white; 
            margin-bottom: 20px;
            font-size: 32px;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        ">
            <i class="fas fa-tint" style="margin-right: 10px;color:white; "></i> Smart Irrigation Calculator
        </h3>
        
        <p style="
            color: rgba(255,255,255,0.9); 
            margin-bottom: 25px; 
            font-size: 18px; 
            line-height: 1.6;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
            max-width: 800px;
            height:200px;
            font-weight:bold;
            margin-left: auto;
            margin-right: auto;
        ">
            Optimize water usage for your crops with our precision calculator. 
            Get tailored recommendations based on soil type, weather patterns, 
            and crop growth stages.
        </p>
        
        <div style="
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        ">
            <span style="
                background: rgba(255,255,255,0.15);
                backdrop-filter: blur(5px);
                color: white;
                padding: 8px 16px;
                border-radius: 20px;
                font-size: 14px;
                border: 1px solid rgba(255,255,255,0.2);
            ">
                <i class="fas fa-leaf" style="margin-right: 5px;color:white; "></i> Crop-Specific
            </span>
            <span style="
                background: rgba(255,255,255,0.15);
                backdrop-filter: blur(5px);
                color: white;
                padding: 8px 16px;
                border-radius: 20px;
                font-size: 14px;
                border: 1px solid rgba(255,255,255,0.2);
            ">
                <i class="fas fa-cloud-sun" style="margin-right: 5px; color: white; "></i> Weather-Aware
            </span>
            <span style="
                background: rgba(255,255,255,0.15);
                backdrop-filter: blur(5px);
                color: white;
                padding: 8px 16px;
                border-radius: 20px;
                font-size: 14px;
                border: 1px solid rgba(255,255,255,0.2);
            ">
                <i class="fas fa-chart-line" style="margin-right: 5px; color:white; "></i> Data-Driven
            </span>
        </div>
        
        <a href="irrigation-calculator.html" class="btn" style="
            background: rgba(255,255,255,0.9);
            color: #2E7D32; 
            padding: 14px 32px; 
            border-radius: 6px; 
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            border: none;
            font-size: 16px;
        ">
            Open Calculator <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
        </a>
    </div>
</div>




    <!-- Features Section -->
    <section id="services" class="py-5 bg-white">
      <div class="container">
        <div class="text-center mb-5">
          <span class="badge badge-success px-3 py-2 mb-3">Insight</span>
          <h2 class="font-weight-bold">Key Features</h2>
          <p class="text-muted">Enhancing farming with technology-driven solutions.</p>
        </div>

        <div class="row align-items-center">
          <!-- Left Column (Text) -->
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="feature-card">
              <h3 class="font-weight-bold text-success">Empowering Farmers</h3>
              <p class="mb-4">
                Gain real-time crop & fertilizer recommendations and predict yield & rainfall trends using advanced ML models.
                Smart technology ensures better decision-making and higher productivity.
              </p>
              <ul class="list-unstyled">
                <li class="mb-2">✔ AI-powered crop selection</li>
                <li class="mb-2">✔ Smart fertilizer suggestions</li>
                <li class="mb-2">✔ Accurate yield & rainfall predictions</li>
              </ul>
            </div>
          </div>
        

          <!-- Right Column (Image) -->
          <div class="col-lg-6 text-center">
            <img src="assets/img/farming.jpeg" alt="Modern Farming" class="img-fluid rounded shadow" style="max-width: 450px;">
          </div>
        </div>
      </div>
    </section>
    
    

    <!-- Features 2 Section -->
    <section id="features" class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Side (Text & Features) -->
          <div class="col-lg-5 col-md-8">
            <div class="pr-md-5">
              <div class="d-flex align-items-center justify-content-center bg-success rounded-circle shadow mb-4" style="width: 80px; height: 80px;">
                <i class="ni ni-favourite-28 text-white" style="font-size: 32px;"></i>
              </div>
              <h3 class="font-weight-bold">Features</h3>
              <p class="text-muted">Step into the future of agriculture with cutting-edge tools designed to assist and empower farmers.</p>

              <ul class="list-unstyled mt-4">
                <li class="py-3 d-flex align-items-center">
                  <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center mr-3" style="width: 50px; height: 50px;">
                    <i class="ni ni-settings-gear-65 text-white"></i>
                  </div>
                  <h6 class="mb-0">Crop Prediction & Recommendation</h6>
                </li>
                <li class="py-3 d-flex align-items-center">
                  <div class="bg-info rounded-circle d-flex align-items-center justify-content-center mr-3" style="width: 50px; height: 50px;">
                    <i class="ni ni-html5 text-white"></i>
                  </div>
                  <h6 class="mb-0">Precision Fertilizer Recommendation</h6>
                </li>
                <li class="py-3 d-flex align-items-center">
                  <div class="bg-pink rounded-circle d-flex align-items-center justify-content-center mr-3" style="width: 50px; height: 50px;">
                    <i class="ni ni-settings-gear-65 text-white"></i>
                  </div>
                  <h6 class="mb-0">Accurate Yield Prediction</h6>
                </li>
                <li class="py-3 d-flex align-items-center">
                  <div class="bg-success rounded-circle d-flex align-items-center justify-content-center mr-3" style="width: 50px; height: 50px;">
                    <i class="ni ni-satisfied text-white"></i>
                  </div>
                  <h6 class="mb-0">Reliable Rainfall Forecasting</h6>
                </li>
              </ul>
            </div>
          </div>

          <!-- Right Side (Image) -->
          <div class="col-lg-7 col-md-12 mt-4 mt-lg-0">
            <img class="img-fluid rounded shadow" src="assets/img/tracter.jpeg" alt="Farm Tractor">
          </div>
        </div>
      </div>
    </section>
    <br />

    <!-- Technologies Section -->
    <section id="tech" class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <span class="badge badge-primary px-3 py-2 mb-3">STACK</span>
          <h2 class="font-weight-bold">Technologies Used</h2>
          <p class="text-muted">Our Development Stack</p>
        </div>

        <div class="row justify-content-center">
          <!-- Tech Stack Row 1 -->
          <div class="col-md-4 text-center mb-4">
            <div class="tech-card">
              <img class="img-fluid" src="assets/img/html.png" alt="HTML5" style="width: 100px;">
              <h6 class="text-uppercase mt-3 text-danger font-weight-bold">HTML5</h6>
            </div>
          </div>

          <div class="col-md-4 text-center mb-4">
            <div class="tech-card">
              <img class="img-fluid" src="assets/img/css3.png" alt="CSS3" style="width: 100px;">
              <h6 class="text-uppercase mt-3 text-primary font-weight-bold">CSS3</h6>
            </div>
          </div>

          <div class="col-md-4 text-center mb-4">
            <div class="tech-card">
              <img class="img-fluid" src="assets/img/js.png" alt="JavaScript" style="width: 100px;">
              <h6 class="text-uppercase mt-3 text-warning font-weight-bold">JavaScript</h6>
            </div>
          </div>

          <!-- Tech Stack Row 2 -->
          <div class="col-md-4 text-center mb-4">
            <div class="tech-card">
              <img class="img-fluid" src="assets/img/bootstrap.png" alt="Bootstrap" style="width: 100px;">
              <h6 class="text-uppercase mt-3" style="color: #7952b3; font-weight: bold;">Bootstrap 4</h6>
            </div>
          </div>

          <div class="col-md-4 text-center mb-4">
            <div class="tech-card">
              <img class="img-fluid" src="assets/img/apache.png" alt="Apache" style="width: 100px;">
              <h6 class="text-uppercase mt-3 text-danger font-weight-bold">Apache</h6>
            </div>
          </div>

          <div class="col-md-4 text-center mb-4">
            <div class="tech-card">
              <img class="img-fluid" src="assets/img/mysql.png" alt="MySQL" style="width: 100px;">
              <h6 class="text-uppercase mt-3" style="color: #00758f; font-weight: bold;">MySQL</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <br />
  

  <?php require("footer.php"); ?>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      // Agriculture knowledge database
      const agricultureKnowledge = {
        // General Farming
        "what is organic farming": "Organic farming is a method that avoids synthetic inputs like pesticides and fertilizers, relying instead on natural processes like crop rotation and composting.",
        "how to start a small farm": "Start by researching your local climate and soil, creating a business plan, choosing suitable crops/animals, securing land, and obtaining necessary permits.",
        "best crops for beginners": "Beginner-friendly crops include lettuce, radishes, green beans, tomatoes, zucchini, and herbs like basil and mint.",
        
        // Soil Health
        "how to improve soil fertility": "Add organic matter like compost, practice crop rotation, use cover crops, and consider natural fertilizers like manure or bone meal.",
        "what is soil ph": "Soil pH measures acidity/alkalinity on a 0-14 scale. Most crops prefer 6-6.8. Lime raises pH, sulfur lowers it.",
        "signs of poor soil quality": "Poor drainage, compaction, erosion, low organic matter, and stunted plant growth indicate poor soil.",
        
        // Crop Production
        "when to plant corn": "Plant corn when soil reaches 50°F (10°C), typically 2-3 weeks after last frost. Soil should be warm and workable.",
        "how often to water tomatoes": "Water tomatoes deeply 1-2 inches per week, more in hot weather. Avoid wetting leaves to prevent disease.",
        "why are my plants turning yellow": "Yellowing can indicate overwatering, nutrient deficiency (often nitrogen), poor drainage, or disease.",
        
        // Pest Control
        "natural ways to control pests": "Use companion planting, neem oil, diatomaceous earth, beneficial insects, and physical barriers like row covers.",
        "how to get rid of aphids": "Spray with water, use insecticidal soap, introduce ladybugs, or apply neem oil. Remove heavily infested leaves.",
        "prevent deer from eating crops": "Use fencing (8+ ft tall), deer-resistant plants, motion-activated sprinklers, or commercial repellents.",
        
        // Livestock
        "best chicken breeds for eggs": "Top layers: White Leghorn, Rhode Island Red, Plymouth Rock, Sussex, and Australorp.",
        "how much space do pigs need": "Pigs need 8-10 sq ft in shelter and 50+ sq ft outdoors. More space reduces aggression and health issues.",
        "signs of healthy cattle": "Bright eyes, shiny coat, alert demeanor, normal appetite, regular rumination, and consistent manure production.",
        
        // Equipment
        "basic farm tools needed": "Essential tools: shovel, hoe, rake, pruning shears, wheelbarrow, watering can, gloves, and a good knife.",
        "tractor maintenance tips": "Check fluids regularly, clean air filters, grease fittings, inspect tires, and store under cover when not in use.",
        "difference between harrow and plow": "Plows turn over soil deeply, while harrows break up clods and level the surface after plowing.",
        
        // Water Management
        "drip irrigation benefits": "Saves water (30-50% less), reduces weeds, prevents leaf wetness (disease), and delivers nutrients directly to roots.",
        "how to conserve water on farm": "Use mulch, drought-resistant crops, rainwater harvesting, efficient irrigation, and soil moisture monitoring.",
        "signs of overwatering": "Yellow leaves, wilted appearance despite wet soil, root rot, and fungal growth indicate overwatering.",
        
        // Organic Practices
        "making compost at home": "Layer greens (food scraps) and browns (leaves), keep moist, turn weekly. Ready in 2-12 months depending on method.",
        "benefits of crop rotation": "Prevents soil depletion, breaks pest cycles, improves soil structure, and can increase yields by 10-25%.",
        "are organic pesticides safe": "Generally safer but still require caution. Always follow instructions—even natural substances can harm beneficial insects if misused.",
        
        // Climate Impact
        "farming in drought conditions": "Choose drought-resistant crops, reduce tillage, use mulch, implement water-saving irrigation, and consider rainwater harvesting.",
        "how climate change affects agriculture": "Changes in rainfall patterns, more extreme weather, shifting growing zones, and increased pests/diseases are key impacts.",
        "best crops for hot weather": "Okra, sweet potatoes, peppers, melons, cowpeas, and amaranth thrive in heat with proper watering.",
        
        // Business/Marketing
        "how to sell farm products": "Options: farmers markets, CSA programs, local stores, restaurants, online sales, or farm stands.",
        "what is a csa": "Community Supported Agriculture: customers buy seasonal shares upfront, receiving regular produce throughout the growing season.",
        "profitable small farm ideas": "Microgreens, mushrooms, berries, lavender, organic eggs, nursery plants, and agritourism can be profitable.",
        
        // Government Programs
        "usda programs for new farmers": "The USDA offers loans, grants, insurance, and conservation programs through FSA, NRCS, and other agencies.",
        "organic certification process": "Requires 3-year transition, detailed records, approved inputs, and annual inspections by USDA-accredited certifiers.",
        "farm tax deductions": "Common deductions: equipment, seeds/feed, utilities, repairs, vehicle expenses, and home office if farm is your business.",
        
        // Specialized Farming
        "starting a hydroponic system": "Begin with lettuce/herbs, use simple NFT or deep water culture, monitor pH/nutrients, and ensure proper lighting.",
        "beekeeping for beginners": "Start with 1-2 hives, take a class, wear protective gear, locate away from foot traffic, and plant bee-friendly flowers.",
        "aquaponics vs hydroponics": "Aquaponics combines fish farming (providing nutrients) with hydroponics. More complex but sustainable versus hydroponics' precise control.",
        
        // Seasonal
        "winter farming activities": "Plan next season, repair equipment, grow cold frames/high tunnels, market stored crops, and attend farming conferences.",
        "preparing garden for spring": "Test soil, clean beds, start seeds indoors, prune perennials, and apply compost before last frost.",
        "fall crops to plant": "Great fall crops: kale, spinach, carrots, beets, radishes, garlic (for next year), and many types of lettuce.",
        
        // Troubleshooting
        "why won't my seeds germinate": "Common causes: old seeds, incorrect temperature, too deep planting, over/under watering, or soil crusting.",
        "how to fix compacted soil": "Aerate, add organic matter, plant deep-rooted cover crops like daikon radish, and avoid working wet soil.",
        "plants not producing fruit": "Could be lack of pollination (hand pollinate), too much nitrogen, improper pruning, or insufficient sunlight.",
        
        // Advanced Techniques
        "what is precision agriculture": "Using GPS, sensors, and data analytics to optimize field-level management regarding crops, soil, and inputs.",
        "vertical farming pros and cons": "Pros: year-round production, space efficiency. Cons: high startup costs, energy needs, and technical complexity.",
        "regenerative agriculture practices": "Focuses on soil health: no-till, cover crops, diverse rotations, livestock integration, and minimizing disturbances.",
        
        // Global Perspectives
        "rice farming techniques": "Requires level fields, water management (flooded or upland systems), and warm temperatures (20-40°C ideal).",
        "coffee farming basics": "Grows best at 60-70°F (15-24°C) at altitude. Needs well-drained soil, partial shade, and 3-4 years to first harvest.",
        "olive tree cultivation": "Drought-tolerant but needs well-drained soil. Most varieties require cross-pollination. Harvest in fall when fruits change color.",
        
        // Fun Facts
        "oldest cultivated crop": "Figs may be the oldest, with evidence of cultivation dating back 11,000 years in the Jordan Valley.",
        "how many seeds in apple": "An apple typically contains 5-10 seeds (called pips), depending on variety and pollination conditions.",
        "what crop grows fastest": "Radishes can germinate in 3-4 days and be harvested in 3-4 weeks—one of the fastest from seed to harvest.",
        
        // Sustainability
        "what is permaculture": "Design system mimicking natural ecosystems, emphasizing sustainability through observation and thoughtful planning.",
        "benefits of agroforestry": "Combines trees/shrubs with crops/livestock: improves biodiversity, soil quality, and provides multiple income sources.",
        "reducing farm carbon footprint": "Strategies: renewable energy, no-till, cover crops, efficient equipment, local markets, and methane capture from manure.",
        
        // Miscellaneous
        "can i farm in my backyard": "Yes! Start small with easy crops in containers or raised beds. Check local ordinances regarding livestock.",
        "difference between hybrid and heirloom": "Hybrids are crossbred for traits; heirlooms are open-pollinated varieties passed down 50+ years with stable traits.",
        "best farming apps": "Popular apps: FarmLogs (planning), Plantix (diagnostics), AgriWebb (livestock), and Weather Underground (forecasts)."
      };

      // Toggle chatbot window
      $('#chatbotToggle').click(function() {
        $('#chatbotWindow').toggleClass('active');
      });
      
      // Close chatbot window
      $('#chatbotClose').click(function(e) {
        e.stopPropagation(); // Prevent event bubbling
        $('#chatbotWindow').removeClass('active');
      });
      
      // Send message functionality
      $('#chatbotSend').click(sendMessage);
      $('#chatbotInput').keypress(function(e) {
        if (e.which == 13) { // Enter key
          sendMessage();
        }
      });
      
      function getBotResponse(userMessage) {
        // Convert to lowercase for easier matching
        const lowerMessage = userMessage.toLowerCase();
        
        // Check for exact matches
        if (agricultureKnowledge[lowerMessage]) {
          return agricultureKnowledge[lowerMessage];
        }
        
        // Check for partial matches
        for (const [question, answer] of Object.entries(agricultureKnowledge)) {
          if (lowerMessage.includes(question) || question.includes(lowerMessage)) {
            return answer;
          }
        }
        
        // Default responses if no match found
        const defaultResponses = [
          "That's an interesting agriculture question! Could you rephrase it or ask about something more specific like soil health, crop rotation, or pest control?",
          "I specialize in agriculture topics. Try asking about farming techniques, crop management, or livestock care.",
          "For detailed agricultural advice, you might want to consult your local extension office. Meanwhile, would you like information on organic farming, irrigation, or something else?"
        ];
        
        return defaultResponses[Math.floor(Math.random() * defaultResponses.length)];
      }
      
      function sendMessage() {
        const input = $('#chatbotInput');
        const message = input.val().trim();
        
        if (message) {
          // Add user message
          $('#chatbotBody').append(`
            <div class="chat-message user-message">
              <p>${message}</p>
            </div>
          `);
          
          // Clear input
          input.val('');
          
          // Scroll to bottom
          $('#chatbotBody').scrollTop($('#chatbotBody')[0].scrollHeight);
          
          // Get bot response
          setTimeout(() => {
            const botResponse = getBotResponse(message);
            $('#chatbotBody').append(`
              <div class="chat-message bot-message">
                <p>${botResponse}</p>
              </div>
            `);
            $('#chatbotBody').scrollTop($('#chatbotBody')[0].scrollHeight);
          }, 500);
        }
      }
      
      // Close when clicking outside
      $(document).click(function(e) {
        if (!$(e.target).closest('.chatbot-container').length) {
          $('#chatbotWindow').removeClass('active');
        }
      });
    });
  </script>
</body>
</html>