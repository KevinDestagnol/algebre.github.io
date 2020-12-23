<!DOCTYPE html>
<html lang="{{ site.lang | default: "en-US" }}">
  <head>
    {% if site.google_analytics %}
      <script async src="https://www.googletagmanager.com/gtag/js?id={{ site.google_analytics }}"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ site.google_analytics }}');
      </script>
    {% endif %}
    <meta charset="UTF-8">
{% seo %}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#157878">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="{{ '/assets/css/style.css?v=' | append: site.github.build_revision | relative_url }}">
  </head>
  <body>
    <a id="skip-to-content" href="#content">Skip to the content.</a>

    <header class="page-header3" role="banner">
      {% if site.show_downloads %}
        <a href="{{ site.github.zip_url }}" class="btn">Download .zip</a>
        <a href="{{ site.github.tar_url }}" class="btn">Download .tar.gz</a>
      {% endif %}
    </header>
    <main id="content" class="main-content" role="main">
     
   <center>
     <!--<img src="copies2.jpg" alt="Correction">-->
     <div id="typedtext2"></div>
     <center>
       <br>
       <img src="https://virtuose2lavie.com/wp-content/uploads/2012/06/ID-10060133.jpg" alt="Succès">
     </center>
       {{ content }}
</center>
       <footer class="site-footer">
        <span class="site-footer-credits" font-family:"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;>This page was generated by <a href="https://pages.github.com">GitHub Pages</a>.</span>
      </footer>
    </main>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
 // set up text to print, each item in array is new line
 /*$(typedtext)[0].innerHTML = "Test";*/
 var aText = new Array(
"Merci"+<?php echo $_POST["firstname"]; ?>+""+<?php echo $_POST["username"]; ?>+", un mail sera envoyé à l'adresse mail "+<?php echo $_POST["email"]; ?>+" pour te confirmer ta présence dans la mailing list du cours!"
);
var iSpeed = 100; // time delay of print out
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines
var iIndex = 0; // start printing array at this posision
var iTextPos = 0; // initialise text position
var sContents = ''; // initialise contents variable
var iRow; // initialise current row
 
function typewriter()
{
 sContents =  ' ';
 iRow = Math.max(0, iIndex-iScrollAt);
 
 while ( iRow < iIndex ) {
  sContents += aText[iRow++] + '<br />';
 }
 if (iTextPos++<aText[iIndex].length-1){
 $(typedtext2)[0].innerHTML = sContents + aText[iIndex].substring(0, iTextPos)+"_";
 $(typedtext2)[0].innerHTML = $(typedtext2)[0].innerHTML.replace('_', '<span style="color: black;">_</span>');
     iTextPos++
 setTimeout("typewriter()", iSpeed);
}
else {
  $(typedtext2)[0].innerHTML = sContents + aText[iIndex].substring(0, iTextPos);
 iTextPos++
 setTimeout("typewriter()", iSpeed);
}
}


typewriter();
    </script>
  </body>
  
</html>
