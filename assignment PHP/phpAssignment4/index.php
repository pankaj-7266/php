<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Dev Community</h1>
            <p><a href="">profile</a></p>
            <p><a href="">logout</a></p>
        </div>
        <div class="middle">


            <h1>Update Address</h1>
            
            <!-- Selection option -->

          <form action="saveData.php" method="POST" id="form">
            <select name="country" id="country">
                <option value="" >Select Country</option>
            </select>   <br>
            <select name="state" id="state">

                <option value="">Select State</option>
            </select> <br>
            <select name="city" id="city">
                <option value="">Select City</option>
            </select><br>
            <input type="text"  name="postal" placeholder="POSTAL CODE"><br>
            <input type="submit" value="submit">
          </form>


    <!-- ***selection option** -->

        </div>
    <!-- jquery start -->

        <script type ="text/javascript" src="js/jquery.js"></script>
        <script type ="text/javascript">
            $(document).ready(function(){
                function loadData(type,category_id){ //function loadData which contains type and category id of the selection box
                    $.ajax({
                        url : "page_load.php",
                        type : "POST",
                        data :{type : type, id:category_id},
                        success : function (data){
                            if(type =="stateData"){
                                $("#state").html(data); 
                            }
                            else{
                                $('#country').append(data);
                            }
                            if(type == "cityData"){
                                $("#city").html(data);
                            }                      
                        }
                    });
                }
                loadData();

                $("#country").on("change",function(){ //created function when change in the country
                    var country = $('#country').val();
                    if(country !=""){
                        loadData("stateData",country);
                    }
                    else{
                        $('#state').html("");
                    }
                   
                })
                $("#state").on("change",function(){ // created function when change in the state
                    var state = $('#state').val();
                    if(state !=""){
                        loadData("cityData",state);
                    }
                    else{
                        $('#city').html("");
                    }
                })
            });    
        </script>
        <div class="footer">
            <h2>SUBSCRIBE TO OUR NEWLETTER</h2>
            <input type="email" placeholder="EMAIL">
            <input type="submit" value="sbumit">            
        </div>
    </div>
</body>
</html>