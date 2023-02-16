<html>
 <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Loading Screen</title>
     <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
 </head>
<body onload="triggerProgress()">
   <section class="container">
   <div id="restaurant-name" class="text">RESTAURANT NAME</div>
     <div class="circle-wrap">
            <div class="circle">
                   <div class="mask full">
                     <div class="fill"></div>
                   </div>
                   <div class="mask half">
                     <div class="fill"></div>
                   </div>
                   <div class="inside-circle">
                     <img id="logo" src="assets/images/logo.png" alt="Image not loaded">
                    </div>
                 </div>
      </div>
      <div id="loading-progress" class="text"> </div>
       <div id="ellmenus" class="text">POWERED BY: ellMenus</div>
   </section>
</body>
</html>