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
  

</form>

<?php

 





if(isset($_POST["sub"])){



    if(isset($_POST["xr"]) and isset($_POST["ap"])){

      $xronia=$_POST["xr"];
      $apasxolisi=$_POST["ap"];
        
      $data = file_get_contents('datastatic.json');
      $data_array = json_decode($data, true);
      $data_new = array(
        
             'xroia' => $xronia,
            'apasxolisi' =>$apasxolisi
        
        );
        $data_array[] = $data_new;
        $new_data = json_encode($data_array);
        if(file_put_contents ('datastatic.json', $new_data)){
          echo "Η προσάρτηση δεδομένων ολοκληρώθηκε με επιτυχία";
        }
     


    


    }


}

if(isset($_POST["ekt"])){
   shell_exec("python grafimata.py");
   print("<img src='grafima.png' alt='test'> ");
   
  
  
      
}





?>
    
</body>
</html>