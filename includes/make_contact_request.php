<?php 
    include "db.php";

    header('Content-Type: applicaion/json');
    header('Access-Control-Allow-Origin: ' . $base_url);
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


    $data = json_decode(file_get_contents("php://input"), true);

    $name 	    =  mysqli_real_escape_string($db, $data['full_name']);
    $school     =  mysqli_real_escape_string($db, $data['school']);
    $email 	    =  mysqli_real_escape_string($db, $data['email']);
    $phone 	    =  mysqli_real_escape_string($db, $data['phone_no']);
    $message 	=  htmlspecialchars(mysqli_real_escape_string($db, $data['message']));
    $contacted  =  0;

    function validName($str) {
        return (!preg_match("/^[a-zA-z]+([\s][a-zA-Z]+)+$/", $str)) ? FALSE : TRUE;
    }

    function validEmail($str) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }

    function validPhoneNo($str) {
        return (!preg_match("/\+?([0-9]{2})-?([0-9]{3})-?([0-9]{6,7})/", $str)) ? FALSE : TRUE;
    }


    if (isset($name) && $name != '') {
        if (isset($name) && strlen($name) < 3) {
            echo json_encode(array('status' => false, 'message' => 'Name must have at least 3 letters.'));
            return;
        }
        if (!validName($name)) {
            echo json_encode(array('status' => false, 'message' => 'Please enter your Surname Name also.'));
            return;
        }
        if (isset($email) && $email !='') {
            if (!validEmail($email)) {
                echo json_encode(array('status' => false, 'message' => 'Please enter a valid Email.'));
                return;
            }
            if(isset($phone) && $phone != '') {
                if (!validPhoneNo($phone)) {
                    echo json_encode(array('status' => false, 'message' => 'Please add your country code followed by 10 digit phone number'));
                    return;
                }                

                $sql="INSERT INTO contact(`name`, `email`, `phone`, `school`, `message`, `is_contacted`) VALUES (?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE `name` = ?, `email` = ?, `phone` = ?, `school` = ?, `message` = ?";

                $stmt = mysqli_stmt_init($db);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo json_encode(array('status' => true, 'message' => 'There was an error Connecting to the server [' . $db->error . '].'));
                    return;
                } else {
                    mysqli_stmt_bind_param($stmt, "sssssisssss", $name, $email, $phone, $school, $message, $contacted, $name, $email, $phone, $school, $message);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    echo json_encode(array('status' => true, 'message' => 'Thank you ' . $name .'! We will contact you soon.', 'email_sent' => 'success'));
                    return;
                }
            } else {
                echo json_encode(array('status' => false, 'message' => 'Please enter a phone number.'));
                return;
            }
        } else {
            echo json_encode(array('status' => false, 'message' => 'Please enter an email.'));
            return;
        }
    } else {
        echo json_encode(array('status' => false, 'message' => 'Please enter Full Name.'));
        return;
    }
?>