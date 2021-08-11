<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

function CleanInputs($input){

    // return stripslashes(htmlspecialchars(trim($input)));
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);

    return $input;
}




   if($_SERVER['REQUEST_METHOD'] == "POST"){

      $errors = [];

      $name  = CleanInputs($_POST['name']);
      $email = CleanInputs($_POST['email']);
      $password = $_POST['password'] ;
      $address = CleanInputs($_POST['address']);
      $gender = CleanInputs($_POST['gender']);
      $linkedln = CleanInputs($_POST['linkedln']);
      
      if(empty($name)) $errors['Name'] = " Field Required";
      else if (filter_var($name, FILTER_VALIDATE_INT)) {
        $errors['Name'] = " Not a string";
     }
      
      

      
      if(empty($email)) $errors['Email'] = " Field Required";
      else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $errors['Email'] = " Not Valid Mail!";
      }
      


      if(empty($password)) $errors['Password'] = " Field Required";
      else if (strlen($password)<6) {
        $errors['Password'] = " Password must be More than 5 chars";
     }


      if(empty($address)) $errors['Address'] = " Field Required";
      else if ((strlen($address)!=11)) {
        $errors['Address'] = " Address must be More 11 chars and You insert ". strlen($address);
     }
      if(empty($gender)) $errors['Gender'] = " Field Required";
      if(empty($linkedln)) $errors['Linkedln'] = " Field Required";
      else if (!filter_var($linkedln, FILTER_VALIDATE_URL)) {
        $errors['Linkedln'] = " Not Valid URL!";
     }

        if(count($errors) > 0){
            foreach($errors as $key => $error){
                echo '* '.$key.' : '.$error.'<br>';
            }
        }else  echo 'Welcome ' . $name;
   }
?>
</body>

</html>