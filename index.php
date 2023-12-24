<?php 

include 'controllers/authcontroller.php';
if (!isset($_SESSION['id'])){
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>pharm</title>
</head>
<body>
     <header>
        <h2>pharm</h2>
        <div>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="login.php"><i class="fa-solid fa-user"></i></i></a>
        </div>
     </header>
     <nav>
            <ul>
                <li><a href="#">Main</a></li>
                <li><a href="#Drugs">Drugs</a></li>
                <li><a href="#BabyCare">Baby Care</a></li>
                <li><a href="#MenCare">Men Care</a></li>
                <li><a href="#WomenCare">Women Care</a></li>
                <li><a href="#HairCare">Hair Care</a></li>
                <li><a href="#SkinCare">Skin Care</a></li>
                <li><a href="#OralCare">Oral Care</a></li>
             </ul>
     </nav>
     <main >
        <div id="Main">
        <h1></h1><h1 id="headcolor"></h1><h1 id="wr">|</h1>
        </div>
     </main>

    <div class="Brief">
        <p>
            Pharmacy offers diverse pharmaceutical services with high-quality medications.
            The friendly staff provides personalized care and expert advice for over-the-counter and prescription needs,
            positioning itself as a reliable health resource.
        </p>
        <video src="Images/Pharmacist Icon.mp4" autoplay muted loop></video>
    </div>
     <!-- section Drugs -->
      <div class="Drugs">
        <h2 id="Drugs">Drugs</h2>
        <div>
            <figure>
                <img src="Images/CLOZAPEX 25 MG 50 TAB.jpg" alt="CLOZAPEX 25 MG 50 TAB" >
                    <div id="product">
                        <span>ABC Immune 10 Sachets</span>
                        <p>Price: 134.50 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
          <figure>
            <img src="Images/Abraxane 100 mg 1 Vial.jpg" alt="Abraxane 100 mg 1 Vial" >
            <div >
                    <span>Abraxane 100 mg 1 Vial</span>
                    <p>Price: 19.25 EGP</p>
                    <p><button >Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/ACC 200 mg 20 Sachets.webp" alt="ACC 200 mg 20 Sachets"  >
            <div>
                    <span>ACC 200 mg 20 Sachets</span>
                    <p>Price: 135 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        </div>
    <div>
        <figure>
            <img src="Images/Accofil 30 MIU0.5ml 5 Prefilled Syringes.jpg" 
            alt="Accofil 30 MIU/0.5ml 5 Prefilled Syringes"  >
            <div>
                    <span>ACC 200 mg 20 Sachets</span>
                    <p>Price: 135 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Accolate 20mg 28 Tablets.jpg" alt="Accolate 20mg 28 Tablets"  >
            <div>
                    <span>Accolate 20mg 28 Tablets</span>
                    <p>Price: 82 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/ABC Immune 10 Sachets.jpg" alt="ABC Immune 10 Sachets" >
            <div>
                    <span>ABC Immune 10 Sachets</span>
                    <p>Price: 40.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
    </div>
    </div>
    <br>
    <!-- section Baby Care -->
    <div>
        <h2 id="BabyCare">Baby Care</h2>
        <div>
            <figure>
                <img src="Images/5 Fives Feeding Bottle 250 ml.jpg" 
                alt="5 Fives Feeding Bottle 250 ml" >
                <div>
                        <span>5 Fives Feeding Bottle 250 ml</span>
                        <p>Price: 30.00 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
            <figure>
                <img src="Images/Alynour Baby Soft Wet Wipes 120 Pieces.jpg"
                 alt="Alynour Baby Soft Wet Wipes 120 Pieces" >
                <div>
                        <span>Alynour Baby Soft Wet Wipes 120 Pieces</span>
                        <p>Price: 20.15 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
            <figure>
                <img src="Images/Amore Kids Body Spray - Story Boy 75 ml.webp"
                 alt="Amore Kids Body Spray - Story Boy 75 ml" >
                <div>
                        <span>Amore Kids Body Spray - Story Boy 75 ml</span>
                        <p>Price: 99.90 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
        </div>
        <div>
            <figure>
                <img src="Images/Amore Kids Eau De Parfum - Funny 50 ml.webp" 
                alt="Amore Kids Eau De Parfum - Funny 50 ml" >
                <div>
                        <span>Amore Kids Eau De Parfum - Funny 50 ml</span>
                        <p>Price: 149.90 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
            <figure>
                <img src="Images/Algo Feeding Bottle with Handles 250 ml.jpg" 
                alt="Algo Feeding Bottle with Handles 250 ml" >
                <div>
                        <span>Algo Feeding Bottle with Handles 250 ml</span>
                        <p>Price: 119.00 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
            <figure>
                <img src="Images/baby feeding bottle 75ml.jpg" alt="baby feeding bottle 75ml" >
                <div>
                        <span>baby feeding bottle 75ml</span>
                        <p>Price: 60.30 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
        </div>
    </div>
<!-- section Men Care -->
    <div>
        <h2 id="MenCare">Men Care</h2>
        <div>
            <figure>
                <img src="Images/Dove Men+Care Clinical Protection Antiperspirant.jpg" 
                alt="Dove Men+Care Clinical Protection Antiperspirant" >
                <div>
                        <span>Dove Men Care Clinical Protection Antiperspirant</span>
                        <p>Price: 169.00 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
            <figure>
                <img src="Images/Five Fives Equalizer Body Spray - 230 ml.jpg" 
                alt="Five Fives Equalizer Body Spray - 230 ml" >
                <div>
                        <span>Five Fives Equalizer Body Spray - 230 ml</span>
                        <p>Price: 68.00 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
            <figure>
                <img src="Images/Nivea Man Shaving Foam 200 ml.jpg" 
                alt="Nivea Man Shaving Foam 200 ml">
                <div>
                        <span>Nivea Man Shaving Foam 200 ml</span>
                        <p>Price: 175.00 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
        </div>
        <div>
            <figure>
                <img src="Images/NIVEA MEN DEEP Shower Gel 3in1.jpg" 
                alt="NIVEA MEN DEEP Shower Gel 3in1">
                <div>
                        <span>NIVEA MEN DEEP Shower Gel 3in1</span>
                        <p>Price: 200.00 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
            <figure>
                <img src="Images/Man look after shave balm w. aloe vera for sensitive skin. eva cosmetics, 125g.jpg" 
                alt="Man look after shave balm w. aloe vera for sensitive skin. eva cosmetics, 125g">
                <div>
                        <span>Man look after shave balm w. aloe vera for sensitive skin. eva cosmetics, 125g</span>
                        <p>Price: 50.00 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
            <figure>
                <img src="Images/Lord lsb02 shaving brush.jpg" alt="Lord lsb02 shaving brush">
                <div>
                        <span>Lord lsb02 shaving brush</span>
                        <p>Price: 150.00 EGP</p>
                    <p><button>Buy</button></p>
                </div>
            </figure>
        </div>
    </div>
    <!-- section Women Care -->
<div>
    <h2 id="WomenCare">Women Care</h2>
    <div>
        <figure>
            <img src="Images/Luna Daily The Everywhere Spray-To-Wipe Fragrance Free - 100ml.png" >
            <div>
                    <span>Luna Daily The Everywhere Spray-To-Wipe Fragrance Free - 100ml</span>
                    <p>Price: 139.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/BRIOFEM INTIMATE FEMININE WASH FOAM.jpg" alt="BRIOFEM INTIMATE FEMININE WASH FOAM">
            <div>
                    <span>BRIOFEM INTIMATE FEMININE WASH FOAM</span>
                    <p>Price: 110.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Kolagra Bikini Whitening Wash Vit C 200 ml.jpg" alt="Kolagra Bikini Whitening Wash Vit C 200 ml">
            <div>
                    <span>Kolagra Bikini Whitening Wash Vit C 200 ml</span>
                    <p>Price: 87.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
    </div>
    <div>
        <figure>
            <img src="Images/Avetrax Gel 100g - Skin Smoothing Gel.jpg" alt="Avetrax Gel 100g - Skin Smoothing Gel">
            <div>
                    <span>Avetrax Gel 100g - Skin Smoothing Gel</span>
                    <p>Price: 91.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Femfresh Intimate Hygiene Daily Intimate Wash 250ml.jpg">
            <div>
                    <span>Femfresh Intimate Hygiene Daily Intimate Wash 250ml</span>
                    <p>Price: 45.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/NIVEA Antiperspirant Stick for Women, 48h Protection, Black & White Invisible Original, 50ml.jpg" >
            <div>
                    <span>NIVEA Antiperspirant Stick for Women, 48h Protection, Black & White Invisible Original, 50ml</span>
                    <p>Price: 150.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
    </div>
</div>  
    <!-- section HairCare -->
<div>
    <h2 id="HairCare">Hair Care</h2>
    <div>
        <figure>
            <img src="Images/Bless Shampoo With Shea Butter Sulfate-Free - 500Ml.jpg" >
            <div>
                    <span>Bless Shampoo With Shea Butter Sulfate-Free - 500Ml</span>
                    <p>Price: 80.40 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Motions lavish conditioning shampoo, 16 oz.jpg" alt="Man-Zone Steel Effect Hair Gel, 175 ml" >
            <div>
                    <span>Motions lavish conditioning shampoo, 16 oz</span>
                    <p>Price: 299.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Tresemmé Strength & Fall Control Shampoo 400ML.jpg" >
            <div>
                    <span>Tresemmé Strength & Fall Control Shampoo 400ML</span>
                    <p>Price: 91.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
    </div>
    <div>
        <figure>
            <img src="Images/Vatika Naturals Smooth & Silky Oil Replacement 200 ml.jpg" >
            <div>
                    <span>Vatika Naturals Smooth & Silky Oil Replacement 200 ml</span>
                    <p>Price: 150.90 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Haj Arafa Castor Oil 125 ml.jpg">
            <div>
                    <span>Haj Arafa Castor Oil 125 ml</span>
                    <p>Price: 64.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Strongville hair care advanced oil 200 ml.jpg" alt="Strongville hair care advanced oil 200 ml" ">
            <div>
                    <span>Strongville hair care advanced oil 200 ml</span>
                    <p>Price: 133.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
    </div>
</div>
<!-- Skin Care -->
<div>
    <h2 id="SkinCare">Skin Care</h2>
    <div>
        <figure>
            <img src="Images/Himalaya herbals moisturizing aloe vera face wash relief for dry skin, 100 ml.jpg" alt="skin care">
            <div>
                    <span>Himalaya herbals moisturizing aloe vera face wash relief for dry skin, 100 ml</span>
                    <p>Price: 40.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Shaan soothig gel 120 gm.jpg">
            <div>
                    <span>Shaan soothig gel 120 gm</span>
                    <p>Price: 126.55 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/BEESLINE WHITENING Facial Toner 200ml.jpg">
            <div>
                    <span>BEESLINE WHITENING Facial Toner 200ml</span>
                    <p>Price: 210.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
    </div>
    <div>
        <figure>
            <img src="Images/Eva skin clinic anti-ageing collagen toner for firmed and refined skin - 200ml.jpg">
            <div>
                    <span>Eva skin clinic anti-ageing collagen toner for firmed and refined skin - 200ml</span>
                    <p>Price: 139.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/30 Days Miracle Toner by SomeByMi.jpg">
            <div>
                    <span>30 Days Miracle Toner by SomeByMi</span>
                    <p>Price: 575.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/St. ives blemish control apricot face scrub, 6 oz.jpg" >
            <div>
                    <span>St. ives blemish control apricot face scrub, 6 oz</span>
                    <p>Price: 170.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
    </div>
</div>
<!-- oral Care -->
<div>
    <h2 id="OralCare">Oral Care</h2>
    <div>
        <figure>
            <img src="Images/Philips Sonicare Genuine SimplyClean Replacement Toothbrush Heads.jpg">
            <div>
                    <span>Philips Sonicare Genuine SimplyClean Replacement Toothbrush Heads</span>
                    <p>Price: 60.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Sensodyne Extra Whitening Sensitive Teeth and Cavity Prevention Whitening Toothpaste.jpg">
            <div>
                    <span>Sensodyne Extra Whitening Sensitive Teeth and Cavity Prevention Whitening Toothpaste</span>
                    <p>Price: 18.72 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Orovex Clove Mouthwash.jpg">
            <div>
                    <span>Orovex Clove Mouthwash</span>
                    <p>Price: 94.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
    </div>
    <div>
        <figure>
            <img src="Images/Purple Toothpaste for Teeth whitening, Purple Toothpaste, Purple Teeth Whitening.jpg">
            <div>
                    <span>Purple Toothpaste for Teeth whitening, Purple Toothpaste, Purple Teeth Whitening</span>
                    <p>Price: 50.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/huqini Teeth Whitening Strips 14 Treatments -Alcohol Free Dry Strips.jpg" >
            <div>
                    <span>huqini Teeth Whitening Strips 14 Treatments -Alcohol Free Dry Strips</span>
                    <p>Price: 98.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
        <figure>
            <img src="Images/Hismile v34 Colour Corrector, Tooth Stain Removal, Teeth Whitening Booster.jpg">
            <div>
                    <span>Hismile v34 Colour Corrector, Tooth Stain Removal, Teeth Whitening Booster</span>
                    <p>Price: 128.00 EGP</p>
                <p><button>Buy</button></p>
            </div>
        </figure>
    </div>
</div>

<footer>
        <div class="quick">
        <a href="#">About Us</a>
        <a href="#">Contribute</a>
        <a href="#">Privacy Police</a>
        <a href="#">Sitemap</a>
        </div>
        <div>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
        </div>
</footer>
<script src="Script/script.js"></script>
</body>
</html>