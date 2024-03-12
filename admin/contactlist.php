<?php include 'layout/header.php'; 
 include '../dbconnect/config.php';
?>
<section class="contactlist py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <table class="table  mt-5 ">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">#Id</th>
                            <th scope="col">First</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Message</th>
                            <th scope="col">Response</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        $query = "SELECT * FROM contact";
                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result) > 0)
                        {
                          while($row = mysqli_fetch_assoc($result))
                          {
                      ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td><?php echo $row['response']; ?></td>
                            <td><?php echo $row['timestamp']; ?></td>
                            <td><a href='<?php echo "contactupdate.php?id=$row[id]"; ?>' class="btn btn-primary me-3"><i class="fa-solid fa-user-pen"></i></a><a href='<?php echo "contactdelete.php?id=$row[id]";?>' class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <?php
                           }
                          }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include 'layout/footer.php'; ?>