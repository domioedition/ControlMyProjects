<?php
include_once 'header.php';
?>
    <h1 class="page-header">Projects</h1>
    <div class="row">
        <div class="col-lg-12">
            <p><button type="button" class="btn btn-success">Add new project</button></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Projects
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Project Description</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($projects as $project) {
                                $projectId = $project->id;
                                $projectName = $project->project_name;
                                $projectDescription = $project->project_description;
                                echo "<tr>
                                        <td>$projectId</td>
                                        <td>$projectName</td>
                                        <td>$projectDescription</td>
                                        <td><a href='#'>Edit</a></td>
                                     </tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

<?php
include_once 'footer.php';
?>