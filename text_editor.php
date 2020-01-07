<html>
<head>
 <title>Textbox Editor</title>
</head>
<body>
 <textarea name="details" id="details"></textarea>
   <!-- 1. Textbox Editor Start -->
   <h1>Textbox Editor</h1>
   <div>
      <h2><a href="https://textbox.io">Textbox site</a></h2>
      <p>
       Download sdk File then use
       # textboxio.js
       # <strong>Folders : </strong><b> resources </b>
      </p>
   </div>
   <script>
    var de;
   de = textboxio.replace('#details');
    
    var details = de..content.get();
    alert(details);
 </script>
   <!-- End Textbox Editor -->
</body>
</html>
