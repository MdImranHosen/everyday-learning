<?php
 include "inc/header.php";
	/*$a = gps::devices("1","561501");
	echo $response = $a->response;
	echo $responseCode = $a->responseCode;*/
?>
<?php
/*if (!(Session::get('type') == '2')) {
  echo "<script>window.location.href='../';</script>";
}*/
$sess     = $_SESSION["sessionid"];
$div      = explode("=", $sess);
$sessid   = end($div);
$sessionId= base64_encode ($sessid);
//echo '<script>alert("'.$sess.'");</script>';
# Devices by Id Delete Action get Code....
 if (isset($_GET['deldevice']) && $_GET['deldevice']) {
    $delId = preg_replace('/[^-a-zA-Z0-9_]/','', $_GET['deldevice']);
    $delId = (int)$delId;
   // echo '<script>alert("'.$delId.'");</script>';
    //$msg   = gps::deviceDelete($sessionId, $delId);
 }
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include "inc/header_bottom.php"; ?>
  <!-- Left side column. contains the logo and sidebar -->
<!--SideBar Start-->
  <?php include "inc/sidebar.php"; ?>
<!--SideBar End-->
<!-- Modal -->
<div id="myModalDevise" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><strong> Add Device </strong></h4>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" id="add_devices" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="form-group">
          <label class="control-label col-sm-2" for="devise_name"> Device Name: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="devise_name" id="devise_name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="identifer"> Identifer: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="identifer" name="identifer">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="phone"> Phone: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="model"> Model: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="model" name="model">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="category"> Category: </label>
          <div class="col-sm-10">
          	 <select class="form-control" id="category" name="category">
               <option style="display: none;"></option>
               <option value="arrow"> <i class="fa fa-paper-plane" style="color: green;" aria-hidden="true"></i> Arrow </option>
               <option value="default"> <i class="fa fa-dot-circle-o" style="color: green;" aria-hidden="true"></i>
               Default </option>
               <option value="truck"> <i class="fa fa-truck" style="display:block;color: green;" aria-hidden="true"></i> Truck </option>
               <option value="bus"> <i class="fa fa-bus" style="color: green;" aria-hidden="true"></i> Bus </option>
               <option value="car"> <i class="fa fa-car" style="color: green;" aria-hidden="true"></i> Car </option>
               <option value="motorcycle"> <i class="fa fa-motorcycle" style="color: green;" aria-hidden="true"></i> Motorcycle </option>
               <option value="Bus"> <i class="fa fa-bus" style="color: green;" aria-hidden="true"></i> Bus </option>
               <option value="bicycle"> <i class="fa fa-bicycle" style="color: green;" aria-hidden="true"></i> Bicycle </option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="contact"> Contact: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="contact" name="contact">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="devise_data_save" class="btn btn-danger btn-lg"> Save </button>
          </div>
        </div>
      </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Edit Model.... -->
<!-- Modal -->
<div id="myModalDeviseEdit" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><strong> Update Device </strong></h4>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" id="update_devices" method="post" action="">

        <div class="form-group">
          <label class="control-label col-sm-2" for="devise_nameedit">Device Name:</label>
          <div class="col-sm-10">
          	<input class="form-control edit_devices_id" type="hidden" id="edit_id" name="edit_id">
            <input type="text" class="form-control edit_devices_name" name="devise_nameedit" id="devise_nameedit">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="identiferedit">Identifer:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control edit_devices_uniqueId" id="identiferedit" name="identiferedit">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="phoneedit"> Phone: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control edit_devices_phone" id="phoneedit" name="phoneedit">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="modeledit"> Model: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control edit_devices_model" id="modeledit" name="modeledit">
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-sm-2" for="category"> Category: </label>
          <div class="col-sm-10">
          	 <input type="hidden" class="edit_devices_category" name="categoryedit">
          	 <select class="form-control edit_devices_category" id="categoryedit" name="categoryedit">
               <option value="arrow"> <i class="fa fa-paper-plane" style="color: green;" aria-hidden="true"></i> Arrow </option>
               <option value="default"> <i class="fa fa-dot-circle-o" style="color: green;" aria-hidden="true"></i>
               Default </option>
               <option value="truck"> <i class="fa fa-truck" style="display:block;color: green;" aria-hidden="true"></i> Truck </option>
               <option value="bus"> <i class="fa fa-bus" style="color: green;" aria-hidden="true"></i> Bus </option>
               <option value="car"> <i class="fa fa-car" style="color: green;" aria-hidden="true"></i> Car </option>
               <option value="motorcycle"> <i class="fa fa-motorcycle" style="color: green;" aria-hidden="true"></i> Motorcycle </option>
               <option value="Bus"> <i class="fa fa-bus" style="color: green;" aria-hidden="true"></i> Bus </option>
               <option value="bicycle"> <i class="fa fa-bicycle" style="color: green;" aria-hidden="true"></i> Bicycle </option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="contactedit"> Contact: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control edit_devices_contact" id="contactedit" name="contactedit">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="devise_data_update" class="btn btn-danger btn-lg">Update</button>
          </div>
        </div>
      </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Admin Panel</li>
      </ol>
    </section>
    <div class="clearfix"></div>
    <hr/>
    <!-- Main content -->
    <section class="content">
      <div id="display-message"></div>
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <div class="box box-primary">
          	<div class="box-header">
              <i class="fa fa-th-list"></i>
              <h3 class="box-title"> Devices </h3>
               <!-- tools box -->
             <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalDevise" title="Add Device">
                  Add Device <i class="fa fa-plus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
          	<div class="box-body">
        	      <?php
                 // $sessionId = gps::$cookie;
                  /*$div  = explode("=", $sess);
                  $sessionId = end($div);*/

                // $device = gps::devices('1','1');

               //  echo $response   = $device->response;
              //   echo $responseCode = $c->responseCode;
              
                // $obj = json_decode($device);

                 /*echo $obj->name;
                echo $obj[0][id];*/

               /*foreach($obj as $item) { //foreach element in $arr
                     echo $item['name']."<br>"; //etc
                  }*/
              ?>
         
        <div id="display-resources"></div>
     <script src="js/jquery-3.1.0.min.js" charset="utf-8"></script>
      <script type="text/javascript">
	   $(document).ready(function() {
		var displayResources = $("#display-resources");
		
		displayResources.text("Loading data from JSON source...");
           
		$.ajax({
		  type: "GET",
		  url: "http://IP/api/devices/", // Using our resources.json file to serve results
		  headers: {
            "Authorization": "Basic " + btoa("<?php if(!empty($_SESSION['email'])){ echo $_SESSION['email']; } ?>:<?php if(!empty($_SESSION['password'])){ echo $_SESSION['password']; } ?>")
        },
		  success: function(result) {
			console.log(result);
			var output =
			  "<table><thead><tr><th>ID</th><th>Name</th><th>status</th><th>lastUpdate</th><th>contact</th><th>category</th><th>model</th><th>uniqueId</th><th>phone</th><th>positionId</th><th>Attributes</th><th>Action</th></thead><tbody>";
			for (var i in result) {
			  output +=			    
               "<tr style='background-color:green;color:white;'><td>" +
				result[i].id +
				"</td><td>" +
				result[i].name +
				"</td><td>" +
				result[i].status +
				"</td><td>" +
				result[i].lastUpdate +
				"</td><td>"+
		        result[i].contact +
		        "</td><td>"+
		        result[i].category +
		        "</td><td>"+ 
		        result[i].model +
		        "</td><td>"+ 
		        result[i].uniqueId +
		        "</td><td>"+ 
		        result[i].phone +
		        "</td><td>"+ 
		        result[i].positionId +
				"</td><td><a class='btn btn-info' href='#'>Attributes</a></td><td><a class='btn btn-danger' style='margin-right:4px;' href='?deldevice="+ result[i].id +"'><i class='fa fa-trash'></i></a> <a href='#' data-toggle='modal' data-target='#myModalDeviseEdit' data-id='" + result[i].id + "' data-name='" + result[i].name + "' data-phone='"+ result[i].phone +"' data-uniqueid='"+ result[i].uniqueId +"' data-model='"+ result[i].model +"' data-category='"+ result[i].category +"' data-contact='"+ result[i].contact +"' class='btn btn-info edie_devices'><i class='fa fa-edit'></i></a></td></tr>";
			}
			output += "</tbody></table>";

			displayResources.html(output);
			$("table").addClass("table table-striped");
		  }
		});
	});
			    </script>
            </div>
           </div>
        </section>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
  	$(document).ready(function() {
	  $("#add_devices").on('submit',(function(){
		var addDevices = $("#display-message");
		addDevices.text("Loading data from JSON source...");
        var name     = $("#devise_name").val();
        var uniqueId = $("#identifer").val();
        var phone    = $("#phone").val();
        var model    = $("#model").val();
        var category = $("#category").val();
        var contact  = $("#contact").val();
        if (name == "" || uniqueId == "" || category == "") {
          alert("Field Must not be Empty!");
          return false;
        }
        var JSONObject = {"name":name, "uniqueId":uniqueId, "phone":phone, "model":model, "category": category, "contact":contact};
        var jsonData = JSON.stringify( JSONObject );
		$.ajax({
		  type: "POST",
		  url: "http://IP/api/devices/",
		  headers: {
            "Authorization": "Basic " + btoa("<?php if(!empty($_SESSION['email'])){ echo $_SESSION['email']; } ?>:<?php if(!empty($_SESSION['password'])){ echo $_SESSION['password']; } ?>")
        },
        dataType: "json",                  
        data: jsonData,
        contentType: "application/json",
		success: function(response) {
			//addDevices.html(data);
      //alert(JSON.stringify(response));
       window.location.href='index.php';
		  },
       error: function(err){
          alert(JSON.stringify(err));
       }
		});
    return false;
	  }));
	});
  </script>
  <script type="text/javascript">
    <?php if(!empty($delId)){ ?>
    $(document).ready(function() {  /* $("#del_devices").click(function(){*/
    var delDevices = $("#display-delmessage");
        var id     = "<?php if(!empty($delId)){ echo $delId; } ?>";
        var JSONObjectdel = {"id":id};
        var jsonDatadel = JSON.stringify( JSONObjectdel );
    $.ajax({
      type: "DELETE",
      url: "http://IP/api/devices/" + id,
      headers: {
            "Authorization": "Basic " + btoa("<?php if(!empty($_SESSION['email'])){ echo $_SESSION['email']; } ?>:<?php if(!empty($_SESSION['password'])){ echo $_SESSION['password']; } ?>") },
        dataType: "json",              
        data: jsonDatadel,
        contentType: "application/json",
    success: function(response) {  //addDevices.html(data);
      //alert(JSON.stringify(response));
      window.location.href='index.php';

      },
       error: function(err){
          alert(JSON.stringify(err));
       }
    });
    return false;    /* });*/
  });
  <?php } ?>
  </script>
  <script type="text/javascript">
  	$(document).ready(function(){
      $(document).on( "click", '.edie_devices',function(e) {
	    var id       = $(this).data('id');
	    var name     = $(this).data('name');
	    var phone    = $(this).data('phone');
	    var uniqueid = $(this).data('uniqueid');
	    var model    = $(this).data('model');
	    var category = $(this).data('category');
	    var contact  = $(this).data('contact');

	    $(".edit_devices_id").val(id);
	    $(".edit_devices_name").val(name);
	    $(".edit_devices_phone").val(phone);
	    $(".edit_devices_uniqueId").val(uniqueid);
	    $(".edit_devices_model").val(model);
	    $(".edit_devices_category").val(category);
	    $(".edit_devices_contact").val(contact);
	    //tinyMCE.get('edit_devices_conta').setContent(conta);   
	});
  	});
  </script>
  <script type="text/javascript">
  	$(document).ready(function() {
	  $("#update_devices").on('submit',(function(){
		var updateDevices = $("#display-update-message");
		updateDevices.text("Loading data from JSON source...");
        var id       = $("#edit_id").val();
        var name     = $("#devise_nameedit").val();
        var uniqueId = $("#identiferedit").val();
        var phone    = $("#phoneedit").val();
        var model    = $("#modeledit").val();
        var category = $("#categoryedit").val();
        var contact  = $("#contactedit").val();
        var JSONObject = {"id":id, "name":name, "uniqueId":uniqueId, "phone":phone, "model":model, "category":category, "contact":contact};
        var jsonData = JSON.stringify( JSONObject );
		$.ajax({
		  type: "PUT",
		  url: "http://IP:8082/api/devices/" + id,
		  headers: {
            "Authorization": "Basic " + btoa("<?php if(!empty($_SESSION['email'])){ echo $_SESSION['email']; } ?>:<?php if(!empty($_SESSION['password'])){ echo $_SESSION['password']; } ?>")
        },
        dataType: "json",               
        data: jsonData,
        contentType: "application/json",
		success: function(response) {
			//addDevices.html(data);
      //alert(JSON.stringify(response));
       window.location.href='index.php';
		  },
       error: function(err){
          alert(JSON.stringify(err));
       }
		});
    return false;
	  }));
	});
  </script>
<?php include "inc/footer.php"; ?>
