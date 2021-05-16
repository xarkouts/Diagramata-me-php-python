<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ποσοστα  Απασχολησης στην Ελλαδα</title>
</head>
<body>

<h1> Ποσοστα  Απασχολησης στην Ελλαδα </h1>

<form action="" method="POST">

<label for="input type=text"> Χρονολογια 

    <input type="text" name="xr">   </label><br><br>

  <label for="input type=text"> Απασχοληση

    <input type="text" name="ap">

  </label><br><br>

  <button type="submit" name="sub">καταχωρησης</button>
  <button type="submit" name="ekt">Εκτελεσει</button>
  <button type="submit" name="prin">προβολη</button>

</form>

<?php


       
    
     $t="";
     $t=json_encode($t);
     if(file_put_contents("datastatic.json",$t)){

        print(" to arxio dimiuoyrgithike me epitixia");



     }else{
       $t=" ";
     }


 





if(isset($_POST["sub"])){

    print("test1");

    if(isset($_POST["xr"]) and isset($_POST["ap"])){

      $pink=array(

        "xronia"=>$_POST["xr"],
        "apasxolisi"=>$_POST["ap"]
          

      );

        if(file_exists("datastatic.json")){

               $yparxon=file_get_contents("datastatic.json");
               $pin_data[]=json_decode($yparxon,true);
               $pin_data[]=$pink;
               $telika_data=json_encode($pin_data);
               if(file_put_contents("datastatic.json",$telika_data)){

                print("telos");
               }
        
        



        }
        
            


    }


}

if(isset($_POST["ekt"])){


      print("test2");
}

if(isset($_POST["prin"])){

      print("test3");
    
}



?>
    
</body>
</html>