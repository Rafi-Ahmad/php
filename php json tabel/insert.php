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
    if(isset($_POST['insert'])){
        $data = file_get_contents('data.json');
        $json = json_decode($data);
 
        $array = array(
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'address' => $_POST['address'],
            'dateofbirth' => $_POST['dateofbirth'],
            'id' => $_POST['id'],
            'subject' => $_POST['subject'],
            'link' => $_POST['link'],
            'number' => $_POST['number']
        );
 
        $json[] = $array;
 
        $json = json_encode($json, JSON_PRETTY_PRINT);
        file_put_contents('data.json', $json);
        header('location:index.php');
    }
 
 
?>
</body>
</html>