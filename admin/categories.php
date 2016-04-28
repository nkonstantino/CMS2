<?php include "includes/header.php" ?>

    <div id="wrapper">
<?php
    $query = "SELECT * FROM categories";
    $select_categories_sidebar = mysqli_query($connection, $query);     
?>  
        <!-- Navigation -->
        <?php include "includes/nav.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Nick's Admin
                            <small>PHP is cool</small>
                        </h1>
                        <div class="col-xs-6">
                        
                    <?php //INSERT CATEGORIES QUERY 
                        create_categories(); 
                    ?>
                        
                        <!--Add Form-->
                        <form action="categories.php" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>
                    <?php //EDIT CATEGORY QUERY
                        update_categories();
                    ?>                        
                        <!--Table display-->        
                        </div>
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thread>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thread>
                                <tbody>
                                <?php //All categories Display
                                    read_categories();
                                ?>
                                <?php //Delete Query
                                    delete_categories();
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/footer.php" ?>
