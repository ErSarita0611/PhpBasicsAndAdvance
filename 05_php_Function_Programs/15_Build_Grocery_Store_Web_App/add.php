<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Add Grocery List</h1>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="">Item Name</label>
                <input type="text" class="form-control" placeholder="Item Name" name="iname" />
            </div>
            <div class="form-group">
                <label for="">Item Quantity</label>
                <input type="text" class="form-control" placeholder="Item Quantity" name="iqty" />
            </div>
            <div class="form-group">
                <label for="">Item Status</label>
                <select name="istatus" id="" class="form-control">
                    <option value="0">PENDING</option>
                    <option value="1">BOUGHT</option>
                    <option value="2">NOT AVAILABLE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Date</label>
                <input type="date" class="form-control" placeholder="date" name="idate">
            </div>
            <div class="form-group">
                <input type="submit" value="Add" class="btn btn-danger" name="btn">
            </div>

        </form>
    </div>
    <?php
    if (isset($_POST["btn"])) {
        include("connect.php");
        $item_name = $_POST['iname'];
        $item_qty = $_POST['iqty'];
        $item_status = $_POST['istatus'];
        $date = $_POST['idate'];

        $q = "insert into grocerytb(Item_name,Item_Quantity,Item_status,Date)values('$item_name',
        $item_qty,'$item_status','$date')";
        mysqli_query($conn,$q);
        header("location:index.php");
    }

    ?>
    
</body>
</html>