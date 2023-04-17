<?php 

    include 'connection.php';

   

    if(isset($_GET['page_no']) && $_GET['page_no'] !== '') {
        $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
    }

    //total rows or records to display
    $total_records_per_page = 10;
    //get the page offset for LIMIT query
    $offset = ($page_no - 1) * $total_records_per_page;
    //get previous
    $previous_page = $page_no - 1;
    //get the next page
    $next_page = $page_no + 1;


    // get the total count of records
    $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records FROM employee_list") or die(mysqli_error($conn));
    //total records
    $records = mysqli_fetch_array($result_count);
    //store total_records to a variable
    $total_records = $records['total_records'];
    //get total pages
    $total_no_of_pages = ceil($total_records / $total_records_per_page);

    //query string
    $sql = "SELECT * FROM `employee_list` LIMIT $offset , $total_records_per_page";
    
    //result
    $result = $conn->query($sql) or die($conn->error);
    $row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>pagination</title>
</head>
<body>

<div class="container mt-5">
    <h1> Pagination </h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Employee Code</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['employee_code']; ?></td>
                <td><?php echo $row['department']; ?></td>
            </tr>
            <?php } mysqli_close($conn) ?>
        </tbody>
    </table>
    
    <nav aria-label="Page navigation example">
    <ul class="pagination">

        <li class="page-item"><a class="page-link <?= ($page_no <= 1) ? 'disabled' : ''; ?> " <?= ($page_no > 1) ? 'href=?page_no=' . $previous_page : ''; ?>> Previous</a></li>

        <?php for($counter = 1; $counter <= $total_no_of_pages; $counter++ ) {?>

            <?php if($page_no != $counter) {?>
                <li class="page-item"><a class="page-link" href="?page_no=<?= $counter; ?>"><?= $counter; ?></a></li>
            <?php } else { ?>
                <li class="page-item"><a class="page-link active"><?= $counter; ?></a></li>
            <?php } ?>

            <?php } ?>

        <li class="page-item"><a class="page-link <?= ($page_no >= $total_no_of_pages) ? 'disabled' : ''; ?>" <?= ($page_no < $total_no_of_pages) ? 'href=?page_no=' . $next_page : ''; ?>>Next</a></li>
    </ul>
    </nav>
    <div class="p-10">
        <strong>Page <?php echo $page_no;?> of <?php echo $total_no_of_pages ?> </strong>
    </div>
</div>
    
</body>
</html>