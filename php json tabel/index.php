<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="from-style">
    <h1>Add Item In Json Data</h1>
    <form action="insert.php" method="post">
    <div>
    <label for="">Name</label>
    <input type="text" name="name" id="">
    </div>
    <div>
    <label for="">Age</label>
    <input type="number" name="age" id="">
    </div>
    <div>
    <label for="">Address</label>
    <input type="text" name="address" id="">
    </div>
    <div>
        <label for="">Date of Birth</label>
        <input type="date" name="dateofbirth" id="">
    </div>
    <div>
        <label for="">ID</label>
        <input type="number" name="id" id="">
    </div>
    <div>
        <label for="">Link</label>
        <input type="text" name="link" id="">
    </div>
    <div>
        <label for="">Subject</label>
        <input type="text" name="subject" id="">
    </div>
    <div>
        <label for="">Number</label>
        <input type="number" name="number" id="">
    </div>
    <div>
        <button name="insert">Submit</button>
    </div>
    </form>
</div>
<div class="json-data-table">
            <h1>Output Json Data</h1>
            <div class="">
            <div class="edit-input">
                 <form method="post" action="update.php">
                
                <select name="array-index" id="option">
                </select>
                <select name="select1" id="item">
                    <option value="name">Name</option>
                    <option value="age">Age</option>
                    <option value="address">Address</option>
                    <option value="dateofbirth">Date of Birth</option>
                    <option value="link">Link</option>
                    <option value="subject">subject</option>
                    <option value="id">ID</option>
                </select>
                
                <label class="form-text">Item to Edit:</label>
                <input type="text" class="edit" name="edit-input" required="required"/>
                 <button class="btn btn-primary" name="edit">Update</button>
            </form>
          </div>
            <table class="op-tabel">
                <thead class="alert-info">
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>ID</th>
                    <th>Subject</th>
                    <th>Link</th>
                    <th>Number</th>
                    <th>Remove</th>
                </thead>
                <tbody>
                
                        <?php
                        $data = file_get_contents('./data.json');
                        $data = json_decode($data);
                        $index=0;
                        foreach($data as $fetch){
                       ?>
                        <tr>
                            <td><?php echo $fetch->name?></td>
                            <td><?php echo $fetch->age?></td>
                            <td><?php echo $fetch->address?></td>
                            <td><?php echo $fetch->dateofbirth?></td>
                            <td><?php echo $fetch->id?></td>
                            <td><?php echo $fetch->subject?></td>
                            <td><a class="btn" href="<?php echo $fetch->link?>"><?php echo $fetch->link?></a></td>
                            <td><?php echo $fetch->number?></td>
                            <td><a class="btn" href="delete.php?id=<?php echo $fetch->id?>">Delete</a></td>
                        </tr>
                    <?php
                        $index++;
                        }
                    ?>
                </tbody>
            </table>
            </div>
        </div>	
        <script src="./app.js"></script>
</body>
</html>