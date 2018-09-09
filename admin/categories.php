<?php include "includes/admin_header.php" ?>
    <div id="wrapper">

        <?php include "includes/admin_navigation.php" ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">

                        <?php insert_categories(); ?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title">Add Category</label>
                                    <input type="text" class="form-control" name="cat_title"></input>
                                </div>
                                 <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category"></input>
                                </div>
                            </form>

                    <?php find_update_categories() ?>

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

                    <?php findAllCategories(); ?>

                    <?php delete_categories(); ?>

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

   <?php include "includes/admin_footer.php" ?>
