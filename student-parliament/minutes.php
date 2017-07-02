<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Students' Parliament Portal | IIT (BHU) Varanasi</title>

        <!-- Bootstrap minified CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>        
        <!-- News Ticker CSS -->
        <link href="assets/css/news-ticker.css" rel="stylesheet" type="text/css"/>
        <!--Custom stylesheet-->
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>  

        <style type="text/css">


        </style>

    </head>

    <body>
        <div class="top-line"></div>

        <?php include_once("header.php"); ?>
        <?php include_once("navigation.php"); ?>

        <div class="wrapper bg2">
            <div class="container bg padding-bottom-20">
			
			
                <div class="col-md-12 col-lg-12 margin-bottom-20 font-arya">
				
				                    <?php
                    foreach (glob('minutes/*') as $dir) {
                        $minutes_name = substr($dir, 8);
                        echo " 
						<div class='minute-wrapper'>
				     <a target='_blank' href='minutes/$minutes_name'>
					 <span class='glyphicon glyphicon-download-alt'></span> 
					 $minutes_name</a>
				     </div>
						";
                    }
                    ?>
				
				



				</div>
				
				

				
				
				
				
				
				
            </div>
        </div>


        <?php include_once("footer.php"); ?>


        <!-- JQuery JavaScript -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Custom JavaScript -->
        <script src="assets/js/custom.js" type="text/javascript"></script>

        <script src="assets/js/jquery.newsTicker.min.js" type="text/javascript"></script>
        <script>
            var nt_example1 = $('#parliament-ticker').newsTicker({
                row_height: 70,
                max_rows: 4,
                duration: 3000000,
                prevButton: $('#news-ticker-prev'),
                nextButton: $('#news-ticker-next'),
            });
        </script>


    </body>

</html>
