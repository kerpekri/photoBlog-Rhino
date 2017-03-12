
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Journey Wonders | journey you can read about</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.2/jquery.fullPage.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.2/jquery.fullPage.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    anchors: ['start', 'persons', 'places'],
                    sectionsColor: ['#fff', '#fff', '#fff'],
                    navigation: true,
                    navigationPosition: 'right',
                    navigationTooltips: ['First page', 'Second page', 'Third and last page'],
                    scrollingSpeed: 1200
                });
            });
        </script>
    </head>

    <body>
        <div id="fullpage">
            <div class="section " id="section0">
                <div class="container">
                    <div class="row">
                        <div class="intro">
                            <div class="col s10 m12 l12 offset -s2 -m3 -l3">
                                <h1 id="logo_name">Journey Wonders</h1>
                            </div>

                            <div class="col s6 m10 l10 offset-s3 -m3 -l3">
                                <p id="logo_paragraph">journey you can read about</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section" id="section1">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m9 l8">
                            <a href="persons"><img class="responsive-img" data-src="css/images/header_people.jpg"></a>
                        </div>

                        <div class="col s12 m3 pull-m2 -l6">
                            <a href="persons"><p class="text_inside_image">Persons</p></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section" id="section2">
                <div class="container">
                    <div class="row">
                        <div class="col s3 push-s1 -m2 -l4">
                            <a href="places"><p class="text_inside_image">Places</p></a>
                        </div>

                        <div class="col s9 l8">
                            <a href="places"><img class="responsive-img" data-src="css/images/header_places.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Scripts-->
        <script src="js/materialize.min.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>
