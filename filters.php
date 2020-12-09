<?php 
    // if(filter_has_var(INPUT_POST, 'data')){
    //     //if form action is post then INPUT_POST, if get then INPUT_GET
    //     echo 'Data Found';
    // }else{
    //     echo 'No Data';
    // }

    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email. '<br>';

        // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
        //     //Checking for if the input is a valid email address
        //     echo 'Email is valid';
        // } else {
        //     echo 'Email is Not Valid';
        // }
        // Same with below 

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //Checking for if the input is a valid email address
            echo 'Email is valid';
        } else {
            echo 'Email is Not Valid';
        }
    }

    # Various VALIDATE Regular Expression Checking
    # FILTER_VALIDATE_BOOLEAN
    # FILTER_VALIDATE_EMAIL
    # FILTER_VALIDATE_FLOAT
    # FILTER_VALIDATE_INT
    # FILTER_VALIDATE_IP
    # FILTER_VALIDATE_REGXP
    # FILTER_VALIDATE_URL

    # FILTER_SANITIZE_EMAIL
    # FILTER_SANITIZE_ENCODED
    # FILTER_SANITIZE_NUMBER_FLOAT
    # FILTER_SANITIZE_NUMBER_INT
    # FILTER_SANITIZE_SPECIAL_CHARS //to prevent html element being printed
    # FILTER_SANITIZE_STRING
    # FILTER_SANITIZE_URL

    // $filters = array(
    //     "data" => FILTER_VALIDATE_EMAIL,
    //     "data2" => array(
    //         "filter" => FILTER_VALIDATE_INT,
    //         "options" => array(
    //             "min-range" => 1,
    //             "max-range" => 100
    //         )
    //     )
    // )

    $arr = array(
        "name" => "Brad Traversy",
        "age" => "133",
        "email" => "brad@gmail.com"
    );

    $filters = array (
        "name" => array (
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options"=> array(
                "min_range" => 1,
                "max_range" => 120
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters))

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>