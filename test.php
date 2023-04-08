
        
        <?php

    // Connect to database
    $con = mysqli_connect("localhost","root","","test");

        if(isset($_POST['submit'])){
            $price=$_POST['price'];
            $tax =$_POST['tax'];
           
            $selling = $price  * ((100 + $tax) / 100);
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
           <input type="text" name="price" id="price" class="form-control" placeholder="price">
            <br>
            <h1>tax Rate</h1><input type="text" name="tax" id="tax" class="form-control" placeholder="tax rate">
       <input type="submit" name="submit">
    </form>
