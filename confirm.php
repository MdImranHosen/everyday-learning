<button type="button" class="btn btn-danger onclic_del_cat" data-cat_id="1"><i class="fa fa-trash-o"></i> Delete </button>
<script>
  $(document).ready(function(){

  $(document).on('click', '.onclic_del_cat', (function() {
       var cat_id   = $(this).data('cat_id');

       if(confirm("Are you sure you want to Delete this?")){
        $.ajax({
              type: "post",
              url: "ajax.php",
              data: {cat_id:cat_id},
              success: function(cat_del) {
                $('#cat_message_data').html(cat_del);
              },
              error: function(err){
                alert(err);
              }
        });
      } else{
        return false;
      }

   }));
  });
  </script>
