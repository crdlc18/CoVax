<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update  Record</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
</head>
<?php require('../db_con/connection.php');?>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                    <!--admin navigation-->
                 <div id="adminNav">
                    <script> 
                            $(function(){
                            $("#adminNav").load("admin_nav/adminNav.html");
                        });
                    </script>
                </div>
            </div>

            <div class="col">
                <h5>Update User Vaccination Status</h5>

                <label for="userID">
                    User ID: <input type="text" id="uID">
                </label>

                <label for="dose"> Dosage: 
                    <select id="dosage">
                        <option value="0"></option>
                        <option value="First">1st Dose</option>
                        <option value="Second">2nd Dose</option>
                        <option value="Booster">Booster</option>
                    </select>
                </label>

                <button id="updateBtn">Update</button>
            </div>
        </div>
    </div>

     <!--pop up-->
     <div class="modal fade" id="modal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"></h5>
              </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" onclick="$('#modal').modal('hide');">Ok</button>
            </div>
          </div>
        </div>
      </div>

</body>
</html>

<script>
$("#updateBtn" ).on('click', function() {
      var userID=$('#uID').val();
      var dose=$('#dosage').val();

     
      if (userID.length===0||dose==='0'){
        $('#modal .modal-title').html("..Oopps");
        $('#modal .modal-body').html("All fields must be filled out.");
        $('#modal').modal('show');
      }
      else{
        jQuery.ajax({
          url:"update.php",
          data:{userID:userID, dose:dose},
          type: "post",
          success: function(data){

            if (data==='noRec'){
                $('#modal .modal-title').html("..Oopps");
                $('#modal .modal-body').html("User did not register.");
                $('#modal').modal('show');
            }
            else if(data==='done'){
                $('#modal .modal-title').html("Successful");
                $('#modal .modal-body').html("User Record has been updated.");
                $('#modal').modal('show');
                $("#dosage")[0].selectedIndex = 0;
                $('#uID').val('');
            }
 
          }
        });
      } 
});
</script>
