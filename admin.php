<?php 
    require_once("functions/function.php");
    get_header();
?>

<body>
    <!-- Content Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Admin Panel</h1>
                <h1>&nbsp;</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <a class="btn btn-danger" href="index.php">Go to Index</a>
                </div>
                <div class="pull-right">
                    <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Records:</h3>

                <div class="records_content"></div>
            </div>
        </div>
    </div>
    <!-- /Content Section -->


    <!-- Bootstrap Modals -->
    <!-- Modal - Add New Record/User -->
    <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-group" method="post" action="ajax/service.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="first_name">Lastname</label>
                            <input class="form-control" name="last_name" type="text" id="last_name" placeholder="Lastname" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="last_name">Firstname</label>
                            <input class="form-control" name="first_name" type="text" id="first_name" placeholder="Firstname" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">First Quarter</label>
                            <input class="form-control" name="first" type="text" id="first" placeholder="First Quarter Grade" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">Second Quarter</label>
                            <input class="form-control" name="second" type="text" id="second" placeholder="Second Quarter Grade" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">Third Quarter</label>
                            <input class="form-control" name="third" type="text" id="third" placeholder="Third Quarter Grade" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">Fourth Quarter</label>
                            <input class="form-control" name="fourth" type="text" id="fourth" placeholder="Fourth Quarter Grade" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">Final Grade</label>
                            <input class="form-control" name="final" type="text" id="finalGrade" placeholder="Final Grade" class="form-control" />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="addRecord" class="btn btn-primary">Add Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- // Modal -->

    <!-- Modal - Update User details -->
    <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-group" method="post" action="ajax/service.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Update</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="update_first_name">Lastname</label>
                            <input class="form-control" name="last_name" type="text" id="update_last_name" placeholder="Lastname" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="update_last_name">Firstname</label>
                            <input class="form-control" name="first_name" type="text" id="update_first_name" placeholder="Firstname" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">First Quarter</label>
                            <input class="form-control" name="updfirst" type="text" id="update_first" placeholder="First Quarter Grade" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">Second Quarter</label>
                            <input class="form-control" name="updsecond" type="text" id="update_second" placeholder="Second Quarter Grade" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">Third Quarter</label>
                            <input class="form-control" name="updthird" type="text" id="update_third" placeholder="Third Quarter Grade" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">Fourth Quarter</label>
                            <input class="form-control" name="updfourth" type="text" id="update_fourth" placeholder="Fourth Quarter Grade" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">Final Grade</label>
                            <input class="form-control" name="updfinal" type="text" id="update_finalGrade" placeholder="Final Grade" class="form-control" />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="hidden_user_id" name="id">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="updateUser" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- // Modal -->
    <?php
    get_footer();
?>