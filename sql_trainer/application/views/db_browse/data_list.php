    <div class="container theme-showcase" role="main" style="margin-top:50px">
        <div class="page-header">
          <h2 style="font-size: 14pt">Data List of <em><?php echo $table_name ?></em></h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <?php foreach ($columns as $column) :?>
                            <td><?php echo $column['column_name'] ?></td>
                        <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $row) :?>
                        <tr>
                        <?php foreach ($row as $key => $value) :?>
                            <td><?php echo $value ?></td>
                        <?php endforeach; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- /container -->