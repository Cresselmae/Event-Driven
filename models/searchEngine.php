<?php
    include('../config/database.php');

    $value = $_POST ['search']; 

    $sql = "SELECT * FROM hotel Where (Name LIKE '%$value%' OR Hotel_ID  LIKE '%$value%')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
           ?>
           <tr>
            <td style="text-align : center;"><?= $row['Hotel_ID'] ?></td>
            <td><?= $row['Name'] ?></td>
           </tr>
           <?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>