<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vaccine</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
</head>

<body>
   
    <div class="AHomeContainer">
        <div class="row">
            <!--admin navigation-->
             <div class="col" id="adminNav">
                 <script> 
                     $(function(){
                        $("#adminNav").load("admin_nav/adminNav.html");
                    });
                </script>
            </div>

            <!--Vaccine Inventory Section-->
             <div class="col">
                <h5>Vaccine Inventory</h5>

                <!---add vaccine-->
                <div class="row">
                    <div class="AddVAxContainer">
                        <label for="LotNo">Vaccine :
                            <select name="vax" id="vax">
                                <option value="0"> </option>
                                <option value="Pfizer"> Pfizer</option>
                                <option value="AztraZeneca"> AztraZeneca</option>
                                <option value="Sinovac"> Sinovac</option>
                                <option value="Sputnik V"> Sputnik V</option>
                                <option value="Moderna"> Moderna</option>
                            </select> 
                        </label><br>
    
                        <label >Quantity: 
                            <input type="text" id ="qty">
                        </label><br>
                        
                        <button type="button" id="addVaxBtn">Update Vaccine</button>
                     </div>
                </div>

                <!--display Vaccine Inventory-->
                <div class="row">
                    <div class="VacContainer" id="VaxCon" style=" background-color:C8C6C6; height:400px;overflow-y:scroll;" >

                        <table>
                            <thead>
                                <th>Vaccine No.</th>
                                <th>Vaccine Name</th>
                                <th>Quantity </th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <?php
                                            require("../db_con/connection.php"); 
                                            $query = mysqli_query($conn, "SELECT * FROM vax_T") or die ($conn->error);
                
                                            if(mysqli_num_rows($query)>0){
                                                while($content=mysqli_fetch_assoc($query)){ 
                                                    echo "{$content['vaxID']} {$content ['vaxName']}  {$content['quantity']}";?> <br>
                                                    <?php
                                                }
                                            } 
                                            $conn->close();
                                        ?>
                                    </td>
                                </tr>   
                            </tbody>   
                        </table>
                    </div>
                </div>
            </div>
         </div>
    </div>

     <!--pop up-->
     <div class="modal fade" id="modal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Warning!</h5>
              </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary"  onclick="location.reload()">Ok</button>
            </div>
          </div>
        </div>
      </div>



 
    <script>

        $("#addVaxBtn").on('click', function(){
            var vaxName=$("#vax").val();
            var qty = $("#qty").val();
            
            
            if(vaxName=='0' && qty.length==0){
                $('#modal .modal-body').html("Please select a vaccine and input quantity to be added.");
                $('#modal').modal('show');
            }
            
            else if(qty.length==0 || isNaN(qty)){
                $('#modal .modal-body').html("Please input correct value for quantity.");
                $('#modal').modal('show');
            }
            else if(vaxName=='0'){
                $('#modal .modal-body').html("Please choose a vaccine.");
                $('#modal').modal('show');
            }
            else{

                jQuery.ajax({
                    url:'addVax.php',
                    data: {vaxName:vaxName, qty:qty},
                    type:'post',
                    success: function(data){
                        $('#modal .modal-title').html("Success!");
                        $('#modal .modal-body').html("Vaccine Record has been updated.");
                        $('#modal').modal('show');
                        $("#vax").val("0");
                        $('#qty').val("");
                    }
                 });
                            
            }
           
        });
    </script>

</body>
</html>