<?php
// must be the first thing in a page
// $string='Expire: Tue, 24, oct 2020 03:00:00 GMT';//make it expire
// $string1='Cach-Control:no-cache';// used to specify browser caching policies in both client requests and server responses to make the page refresh every time
// $string2='Content-type:application/pdf';// will display the page as pdf
// $string3='Content-Dispostion:attachement;filename="phpbook.pdf"';//make it select a file for display or download
// $string4='Location: http://www.muhammed.essa';// go to that page
// readfile("phpbook.pdf");//Outputs a file
// header($string2);/*replace it replace the old header with a new one or if the first one didnt work*/
// header($string3);
//header($string4);


// $string2='HTTP 1.1/500 Internal Server Error ';//it is an internal error
// $string2='HTTP 1.1/200 Ok';
//$string2='HTTP 1.1/404 Not Found';
//header($string2);/*replace it replace the old header with a new one or if the first one didnt work*/

header("Cache-Control: no-cach, must=revalidate");
$string2='HTTP 1.1/200 Ok';
$string3='Content-type:text/html';
header($string2);
header($string3);


?>

<?php 
echo"<pre>";
print_r(headers_list());// so u print the headers
echo"<pre>";
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecao Bootstrap Theme Demo</title>
<!--     <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i' type='text/css' media='all' /> -->
<!--     <link rel="stylesheet" href="https://bootstrapmade.com/demo/assets/css/normalize.css"> -->
<!--     <link rel="stylesheet" href="https://bootstrapmade.com/demo/assets/css/fontello.css"> -->
<!--     <link rel="stylesheet" href="https://bootstrapmade.com/demo/assets/css/style.css"> -->
</head>

<body>
    <header id="header">

        <div class="logo">
            <a href="https://bootstrapmade.com/"><img src="https://bootstrapmade.com/wp-content/themes/bmade/assets/img/logo.png" title="Back to BootstrapThemes.io Homepage" /></a>
        </div>
        <!--
        <div class="info">
            <a title="You are currently previewing the Selecao Theme" href="https://bootstrapmade.com/selecao-bootstrap-template/">Selecao Theme</a>
        </div>
        -->
        <div class="preview-devices">
            <ul>
                <li class="preview-test preview-devices-active" id="preview-test-desktop" title="Preview the  Selecao Theme in Desktop Mode"><a href=""><i class="icon-desktop"></i></a></li>
                 <!--<li class="preview-test" id="preview-test-tablet" title="Preview the  Selecao Theme in Tablet Mode"><a href=""><i class="icon-tablet"></i></a></li>-->
                <li class="preview-test" id="preview-test-mobile" title="Preview the  Selecao Theme in Mobile Mode"><a href=""><i class="icon-mobile"></i></a></li>
            </ul>
        </div>

        <div class="navigate">
            <ul>
                <!--<li class="navigate-like"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2FBootstrapMade&width=63&layout=button&action=like&size=large&show_faces=false&share=false&height=65&appId=163862247017518" width="63" height="28" style="border:none;overflow:hidden;float: left; padding-top: 7px;" scrolling="no" frameborder="0" allowTransparency="true"></iframe></li> -->
                <li><a href="https://bootstrapmade.com/demo/themes/Selecao/" target="_top" title="Hide the demo bar"><i class="icon-exit"></i></a></li>
                <li><a href="https://bootstrapmade.com/selecao-bootstrap-template/" title="Selecao Theme Home Page"><i class="icon-home"></i></a></li>
                <li><a class="download" href="https://bootstrapmade.com/selecao-bootstrap-template/#download" title="Download the Selecao Theme"><i class="icon-download"></i> <span>Free Download</span></a></li>
                                    <li><a href="https://bootstrapmade.com/demo/Vlava/" title="Previous Theme: Vlava" target="_top"><i class="icon-left-arrow"></i></a></li>
                
                                    <li><a href="https://bootstrapmade.com/demo/Vesperr/" title="Next Theme: Vesperr" target="_top"><i class="icon-right-arrow"></i></a></li>
                            </ul>
        </div>

    </header>

    <div id="preview">
<!--         <iframe id="preview-frame" class="preview-desktop" src="https://bootstrapmade.com/demo/themes/Selecao/" frameborder="0"></iframe> -->
    </div>
    <!--
    <div class="social-share" title="Like &amp; Share the Selecao Theme">
        Like &amp; Share: &nbsp;
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2FBootstrapMade&width=63&layout=button&action=like&size=large&show_faces=false&share=false&height=65&appId=163862247017518" width="63" height="28" style="border:none;overflow:hidden;margin-bottom: -9px;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        <a title="Share on Twitter" href="https://twitter.com/intent/tweet?url=https://bootstrapmade.com/selecao-bootstrap-template/&text=Selecao+Bootstrap+Theme&via=BootstrapMade" target="_blank"><i class="icon-twitter"></i></a>
        <a title="Share on Facebook" href="https://www.facebook.com/sharer.php?u=https://bootstrapmade.com/selecao-bootstrap-template/"  target="_blank"><i class="icon-facebook"></i></a>
        <a title="Share on Pinterest" href="https://pinterest.com/pin/create/button/?url=https://bootstrapmade.com/selecao-bootstrap-template/&media=https://bootstrapmade.com/wp-content/themefiles/Selecao/800.png"  target="_blank"><i class="icon-pinterest-circled"></i></a>
        <a title="Share on Google Plus" href="https://plus.google.com/share?url=https://bootstrapmade.com/selecao-bootstrap-template/" target="_blank"><i class="icon-gplus"></i></a>
        <i class="icon-cancel-circled" title="Close the sharing bar"></i>
    </div>
    -->
    <script src="https://bootstrapmade.com/demo/assets/js/jquery-3.1.0.min.js"></script>
    <script src="https://bootstrapmade.com/demo/assets/js/custom.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-55234356-4', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>
