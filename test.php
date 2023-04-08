
        <?php

    // Connect to database
    $con = mysqli_connect("localhost","root","","test");

        if(isset($_POST['submit'])){
            $three=$_POST['three'];
            $tax =$_POST['tax'];
           
            $selling = $three  * ((100 + $tax) / 100);
            echo $selling;
            
            $sql = "INSERT INTO maths (tax) VALUES ($selling)";
            $test=mysqli_query($con,$sql);
            
            if($test){
                echo "success";
            }else{
                echo "denied";
            }


            }
      
             ?>
             
    <form method="post">
    <h4><b>Enter 1st Value</b></h4>
    <h1>Price:</h1>
           <input type="text" name="three" id="three" class="form-control" placeholder="">
            <br>
            <h1>tax Rate</h1><input type="text" name="tax" id="tax" class="form-control" placeholder="">
       <input type="submit" name="submit">
    </form>
      
      <h4><b>Result is:</b></h4>  
      <br >