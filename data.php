<?php
    include('connect.php');
    $selectData = $conn->prepare('SELECT * FROM certifecates');
    $selectData->execute();
    $data = $selectData->fetchAll();
    foreach ($data as $dat) {
        ?>
        <table>
            <thead>
                <th>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Code</td>
                    <td>Image</td>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>--</td>
                    <td><?=$dat['l_id']?></td>
                    <td><?=$dat['l_name']?></td>
                    <td><?=$dat['l_code']?></td>
                    <td><a href="images/certificates/<?=$dat['l_image']?>">View Image</a></td>
                </tr>
            </tbody>
        </table>
    <style>
        tr,td{
            border:2px solid black;
        }
    </style>
        <?php
    }