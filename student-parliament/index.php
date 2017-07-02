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

                <div class="col-md-8 col-lg-8 margin-bottom-20 text-justify font-arya font-size-1point2em"><!--START Left hand side area-->

                    <p class="text-center">“The only phenomenon in this world, immune to change is change.”</p>
					
In a society as abound with diversity as ours, it is important that efforts be made to provide everyone 

with equal rights and opportunities. As a sovereign democracy, it is imperative that the principles and 

motivation behind this very strong and popular idea be known to the youth that is going to determine its 

future. For any large organization, with a hierarchy of levels of participation, efficiency in all matters can 

only be achieved through equal representation of all stakeholders.</br>

With the aim of making the functioning of the institute, more efficient and transparent, the first student 

parliament of IIT (BHU), Varanasi, came into effect in February, 2015, after an elaborate election 

procedure conducted adhering to the guidelines of the Gymkhana constitution. This student elected 

body, now comprises of thirteen standing committees, which take care of issues that they are allotted. </br>

The parliament is primarily a deliberative body that discusses problems being faced by the student body, 

comes up with possible solutions, and forwards these to the administration for review and 

implementation upon approval. It also acts to keep a check on the student activities being organized 

under the umbrella of the institute and its Gymkhana. All resolutions pertaining to student affairs need 

to be ratified by the student parliament before implementation. The amount of responsibility on the 

shoulders of this student body is tremendous, and it is praiseworthy that the institute has chosen to 

trust its students with such a massive chunk for self-governance. </br>

The elected parliamentarians work as representatives for the student body in all official matters, 

including dealings with the institute administration itself, and with other faculties of BHU and other 

institutes. The standing committees continue to work even if the parliament is not in session, giving 

periodical reports to the vice president, and parliamentary affairs committee. The parliament has, by 

Oct ‘15, convened six full sessions and several steps have been taken to ensure long term solutions to 

the problems which plague the institute. </br>

The confidence displayed by the student body in their parliament, even in times of crisis is 

commendable. This student elected parliament, the first of its kind in IIT (BHU), is bound to set a 

precedent, and lay the foundation for a healthy student-administration relationship for years to come.


                </div><!--END Left hand side area-->

                <div class="col-md-4 col-lg-4 text-center"> <!--START Right hand side area-->

                    <div class="margin-bottom-20" id="news-ticker-container"><!--START Ticker-->                    
                        <div class="parliament-ticker-header text-left">
                            <span>Parliamentary Activities</span>
                        </div>
                        <ul class="news-ticker parliament-ticker" id="parliament-ticker" style="height: 240px; overflow: hidden;">

                        </ul>
                        <div class="news-ticker-controller">
                            <div class="controller-wrapper">
                                <i class="glyphicon glyphicon-arrow-up" id="news-ticker-prev"></i>
                                <i class="glyphicon glyphicon-arrow-down" id="news-ticker-next"></i> 
                            </div>
                            <div class="news-archive">
                                <span><a href="#">Expanded View</a></span>
                            </div>
                        </div>
                    </div><!--END Ticker-->

                    <div class="festivals"><!--START Festivals-->
                                                          
                    </div><!--END Festivals-->

                </div><!--END Right hand side area-->

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
