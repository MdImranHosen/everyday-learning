 //AJAX jQuery refresh div every 5 seconds
 
 <script type="text/javascript">
	   $(document).ready(function() {
     var timeout = setTimeout(reloadChat, 5000);
        $.ajax({
            type: "GET",
            url: "url",
            success: function(data) {
               $('#output').html(data);
              timeout = setTimeout(reloadChat, 5000); 
            }
        });
     }
	 });
  </script>
  
  // Second way AJAX jQuery refresh div every 5 seconds
  <script>
    function loadlink(){
    $('#links').load('test.php',function () {
         $(this).unwrap();
    });
    }

    loadlink(); // This will run on page load
    setInterval(function(){
        loadlink() // this will run after every 5 seconds
    }, 5000);
  </script>
