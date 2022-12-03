

<!DOCTYPE html>
<html style="background: black;">
  <title>Reviews</title>
<head> <?php include("header.php");?></head>
<body style="font-family:sans-serif; ">    


    <style type="text/css">        
    /* Rate Star*/        
    .result-container{
        width: 100px; height: 22px;
        background-color: #ccc;
        vertical-align:middle;
        display:inline-block;
        position: relative;
        top: -4px;
    }
    .rate-stars{
        width: 100px; height: 22px;
        background: url(img/rate-stars.png) no-repeat;
        background-size: cover;
        position: absolute;
    }
    .rate-bg{
        height: 22px;
        background-color: #ffbe10;
        position: absolute;
    }
    /* Rate Star Ends*/
    
    /* Display rate count */    
    .reviewCount, .reviewScore {font-size: 14px; color: #666666; margin-left: 5px;}
    .reviewScore {font-weight: 600;}
    /* Display rate count Ends*/        
    </style>
                     
    <h1>Display Star Rating average from Mysql Database with PHP</h1>  
      <?php
$servername = "159.89.47.44";
$username = "davyddov_davy0000";
$password = "mis4013project";
$dbname = "davyddov_mis4013project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
   ?>
    <?php
    //defining Product id
    $product_id=1;
        $ratequery = "SELECT rating FROM rate review revid = 'revid' "; 
        $rateres =mysqli_query($conn, $ratequery);    
            while($data = mysqli_fetch_assoc($rateres)){
                $rate_db[] = $data;
                $sum_rates[] = $data['rating'];
            }
            if(count($rating)){
                $rate_times = count($rateres);
                $sum_rates = array_sum($rateres);
                $rate_value = $sum_rates/$rate_times;
                $rate_bg = (($rate_value)/5)*100;
            }else{
                $rate_times = 0;
                $rate_value = 0;
                $rate_bg = 0;
            }
    ?>
            <div style="margin-top: 10px">
                <div class="result-container">
                <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
                <div class="rate-stars"></div>
            </div>                    
            <span class="reviewScore"><?php echo substr($rate_value,0,3); ?></span><span class="reviewCount">(<?php echo $rate_times; ?> reviews)</span>
            
        </body>
</html>
