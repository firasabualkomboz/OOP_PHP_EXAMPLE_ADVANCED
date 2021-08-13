<?php 

    echo "<div class='container'>";

    define('REQUIRED_FIELD_ERROR', 'This Field is required');
    $errors = [];
    $username = '';
    $email = '';
    $password = '';
    $password_confirm = '';
    $cv_url = '';
    $postData = [];
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){


        // echo "<pre>";

        // var_dump($_POST);
    
        // echo "</pre>";
        
        $username = post_data('username');
        $email = post_data('email');
        $password = post_data('password');
        $password_confirm = post_data('password_confirm');
        $link_cv = post_data('link_cv');

        // echo "<pre>";

        // var_dump($username,$email,$password,$password_confirm,$link_cv);
    
        // echo "</pre>";

        if(!$username){
            $errors['username'] = REQUIRED_FIELD_ERROR;
        } elseif (strlen($username) < 6 || strlen($username) > 15 ){
            $errors['username'] = 'username must be in between 6 and 15 characters !';
        }
        if(!$email){
            $errors['email'] = REQUIRED_FIELD_ERROR;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'THIS IS FIELD MUST BE EMAIL';
        }
        if(!$password){
            $errors['password'] = REQUIRED_FIELD_ERROR;
        }
        if(!$password_confirm){
            $errors['password_confirm'] = REQUIRED_FIELD_ERROR;
        }

        if ($password && $password_confirm && strcmp($password , $password_confirm) !==0){
            $errors['password_confirm'] = 'This must match the password';
        }

        // if(!$link_cv){
        //     $errors['link_cv'] = REQUIRED_FIELD_ERROR;
        // }
        if($link_cv && !filter_var($link_cv,FILTER_VALIDATE_URL)){
            $errors['link_cv'] = 'Please provide a valid link';
        }

        if(empty($errors)){
            echo "Everything is good" .'<br>';
        }
    }


    function post_data($field){

        // if(!isset($_POST[$field])){
        //     return false;
        // }

        $_POST[$field] ??= '';
        return htmlspecialchars(stripslashes($_POST[$field]));

    }

        
    echo "</div>";

?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<title>REGISTER FORM </title>
</head>
<body>

<div class="container">
<form action="" method="post" novalidate>

<div class="mb-3">
<label class="form-label">User name</label>
<input value="<?php $username ?>" type="text" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : '' ?> " name="username" >

<div class="invalid-feedback">
<?php echo $errors['username'] ?? '' ?>
</div>

</div>

<div class="mb-3">
<label class="form-label <?php echo isset($errors['email']) ? 'is-invalid' : '' ?> ">Email address</label>
<input value="<?php $email ?>" type="email" class="form-control" name="email">

<div class="invalid-feedback">
<?php echo $errors['email'] ?? '' ?>
</div>

</div>

<div class="mb-3">
<label class="form-label <?php echo isset($errors['password']) ? 'is-invalid' : '' ?>">Password</label>
<input value="<?php $password ?>" type="password" class="form-control" name="password">

<div class="invalid-feedback">
<?php echo $errors['password'] ?? '' ?>
</div>

</div>


<div class="mb-3">
<label class="form-label <?php echo isset($errors['password_confirm']) ? 'is-invalid' : '' ?>">Repeat Password</label>
<input value="<?php $password_confirm ?>" type="password" class="form-control" name="password_confirm">

<div class="invalid-feedback">
<?php echo $errors['password_confirm'] ?? '' ?>
</div>

</div>

<div class="mb-3">
<label class="form-label <?php echo isset($errors['link_cv']) ? 'is-invalid' : '' ?>">link cv</label>
<input value="<?php $link_cv ?>" type="text" class="form-control" name="link_cv">

<div class="invalid-feedback">
<?php echo $errors['link_cv'] ?? '' ?>
</div>

</div>

<button class="btn btn-primary">Register</button>
</form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
