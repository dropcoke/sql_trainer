    <div class="container theme-showcase" role="main" style="margin-top:50px">
        <div class="page-header">
            <h2 style="font-size: 14pt">Table List</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Table Name</th>
                            <th>Table Columns</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($table as $table_item) :?>
                        <tr>
                            <td><a href="/sql001/index.php/db_browse/data_list?table_name=<?php echo $table_item['table_name'] ?>"><?php echo $table_item['table_name'] ?></a></td>
                            <td><a href="/sql001/index.php/db_browse/column_list?table_name=<?php echo $table_item['table_name'] ?>">columns</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
            This App is for learning SQL with some sample tables.
            <br>
            You can try any type of DML of Postgresql.
            <br>
            by shumatz
            </div>
        </div>
    </div> <!-- /container -->