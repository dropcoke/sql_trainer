    <div class="container theme-showcase" role="main" style="margin-top:50px">
        <div class="page-header">
          <h2 style="font-size: 14pt">Column List of <em><?php echo $table_name ?></em></h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>column name</th>
                            <th>data type</th>
                            <th>size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $row) :?>
                        <tr>
                            <td><?php echo $row['column_name'] ?></td>
                            <td><?php echo $row['data_type'] ?></td>
                            <td><?php echo $row['size'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- /container -->