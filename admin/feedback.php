<?php
define("TITLE" , "Coders Cafe | ADMIN");
include('common/header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Feedbacks</h1>
    </div>
    <div class="card-body">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table " id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>UserName</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>Message</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                  
                        $query = "SELECT * FROM `user_messages`";
                        $result = $conn->query($query);

                        while($row = $result->fetch_assoc()){
                        echo '
                            <tr>
                            <td class="stfid">'.$row["msg_id"].'</td>
                            <td>'.$row["msg_name"].'</td>
                            <td>'.$row["msg_email"].'</td>
                            <td> '.$row["msg_phone"].'</td> 
                            <td> '.$row["msg_body"].'<td>
                           
                          
                                
                          
                        </tr>';
                        }
                    ?>

                        </tbody>
                    </table>
<!-- add content here -->
	</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php include("common/footer.php") ?>