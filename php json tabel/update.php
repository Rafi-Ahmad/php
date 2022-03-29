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

session_start();
    if(isset($_POST['edit'])){
//read file
$data = file_get_contents('data.json');

// decode json to array
$json_arr = json_decode($data, true);

$var = $_POST['array-index'];


foreach ($json_arr as $key => $value) {
    if ($value['number'] == $var) {
        if(isset($_POST['select1'])){
            $select1 = $_POST['select1'];
            switch ($select1) {
                case 'name':
                    $json_arr[$key]['name'] =$_POST['edit-input'];
                    break;
                case 'age':
                    $json_arr[$key]['age'] =$_POST['edit-input'];
                    break;
                    case 'address':
                        $json_arr[$key]['address'] =$_POST['edit-input'];
                        break;
                        case 'dateofbirth':
                            $json_arr[$key]['dateofbirth'] =$_POST['edit-input'];
                            break;
                        case 'id':
                            $json_arr[$key]['id'] =$_POST['edit-input'];
                            break;
                            case 'subject':
                                $json_arr[$key]['subject'] =$_POST['edit-input'];
                                break;
                                case 'link':
                                    $json_arr[$key]['link'] =$_POST['edit-input'];
                                    break;
                default:
                    # code...
                    break;
            }
        }
    }
}

// encode array to json and save to file
file_put_contents('data.json', json_encode($json_arr, JSON_PRETTY_PRINT));



header('location:index.php');
}

?>
</body>
</html>