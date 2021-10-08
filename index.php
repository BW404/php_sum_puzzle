<?php

$num_v1 = rand(10, 200);
$num_v2 = rand(10, 200);
// ganarate rand number

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $usernumber = $_POST["showresult"];
  // usernumber

  $num1=$_POST["num1"];
  $num2=$_POST["num2"];
  // previous_random number chck at line 76 and 77 from their we get the numbers


  $randomnumber = $num1+$num2;
  // summetion of randomnumbers

  if($usernumber == $randomnumber){
    $msg="<span style='color:green;'>your ans is correct</span>";
    // if ans is correct
  }
  else{
    $msg="your ans is wrong".$randomnumber;
    // if ans is wrong
  }

}
// verifing method is post or get?
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="bootstrap.css" type="text/css"> -->
    <title>Enjoy with puzzle game</title>
  </head>
  <body>
  <form  action="" method="POST">
      <div class="container">
          <div class="row text-center">
            <div class="col">
              <h1 class="text-success">Enjoy with puzzle game</h1>
            </div>
          </div>
          <div class="row text-center">
          
            <div class="col-1 offset-3">
              <input class="form-control text-center" type="text" name="fnumber" value="<?php echo $num_v1;?>" aria-label="disabled input example" disabled readonly>
            </div>
            <div class="col-1 ">
              <h1>+</h1>
            </div>
            <div class="col-1 ">
              <input class="form-control text-center" type="text" name="lnumber" value="<?php echo $num_v2;?>"  aria-label="disabled input example" disabled readonly>
            </div>
            <div class="col-1 ">
              <h1>=</h1>
            </div>
            <div class="col-1">
              <input class="form-control text-center" type="text" name="showresult" placeholder="??" value="">
            </div>
          </div>
          <div class="row text-center">
            <div class="col">
              <h4 class="text-danger" name="error">
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        echo $msg;
        // result msg
    }
    else{
        echo "WELLCome";
        // welcome massage
    } ?></h4>
            </div>
          </div>
          <div class="row text-center">
            <div class="col">
                <input type="hidden" value="<?php echo $num_v1;?>" name="num1">
                <input type="hidden" value="<?php echo $num_v2;?>" name="num2">
                <!-- sending ganarated data to execute  -->
            <input type="submit" name="send" class="btn btn-success text-uppercase" value="SUBMIT">
            </div>
          </div>
      </form>
  </div>
  </body>
</html>
