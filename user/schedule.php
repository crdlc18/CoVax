<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
    <title>Schedule</title>
</head>
<body>

    `<div class="dashCon">
        <div class="row">
            <div class="col">
            <!--user navigation-->
                <div class="col" id="adminNav">
                    <script> 
                            $(function(){
                            $("#userNav").load("user_nav/user_nav.html");
                        });
                    </script>
                </div>
            </div>

            <div class="col">
                <h2>Vaccination Appointment</h2>

                <label for="Center"> Center:
                    <select id="centerIn">
                        <?php // query the sched_T, store all the centers to string and display to select/option tag?>
                    </select>
                </label>
                
                <label for="Date"> Date:
                    <select id="dateIn">
                        <?php /* query the sched_T, store all the date to string where chosen center=center in db
                                and display to select/option tag*/?>
                    </select>
                </label>

                
                <label for="Time"> Time:
                    <select id="timeIn">
                        <?php /* query the sched_T, store all the time to string where chosen center=center and chosen date=date in db
                                then display to select/option tag*/?>
                    </select>
                </label>

                <label for="dose"> Dose:
                    <input type="text" id="doseIn">
                    <?php /* query the vaxHist_T JOIN usert_T
                                WHERE userID={$_SESSION['CurrUserID']} 
                                check the right dosage and display using javascript $('#doseIn').val(<?php right dosage?>);
                                */ ?>
                </label>

                <label for="vaccine"> Vaccine:
                    <input type="text" id="vaxIn">
                    <?php /* query the vax_T, store to string all the vaccine name with quantity>0 then display
                             to select/option tag */ ?>
                </label>
                
                <button type="button" id="cancelBtn">Cancel</button>
                <button type="button" id="appointBtn">Appoint</button>
            </div>
        </div>
    </div>`

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

<script>

    //---------------------PAG COMPLETE NA YUNG TAGS------------------------------//
    /* $("#CancelBtn").on('click', function(){
            $("#centerIn")[0].selectedIndex = 0;
            $("#dateIn")[0].selectedIndex = 0;
            $("#timeIn")[0].selectedIndex = 0;
            $("#vaxIn")[0].selectedIndex = 0;
            $('#doseIn').val('');
    });

    $("#appointBtn").on('click', function(){
           var center= $("#centerIn").val();
           var date= $("#dateIn").val();
           var time= $("#timeIn").val();
           var vaxIn= $("#vaxIn").val();
           var dose= $('#doseIn').val();
        
       jQuery.ajax({

          url:"appoint.php",
          data:{center:center, date:date, time:time, dose:dose, vaxIn:vaxIn},
          type: "post",
          success: function(data){
                $('#modal .modal-title').html("Successful");
                $('#modal .modal-body').html("Appointment recorded.");
                $('#modal').modal('show');
          }
        });
    });*/

</script>

</html>