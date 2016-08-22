    <div class="container theme-showcase" role="main" style="margin-top:50px">
            <h2 style="font-size: 14pt">SQL Editor</h2>
        <div class="row">
            <div class="col-md-6" style="width: 200px">
                <h3 style="font-size: 14pt">Table List</h3>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Table Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($table as $table_item) :?>
                      <tr>
                        <td><a href="/sql001/index.php/sql_editor/data_list?table_name=<?php echo $table_item['table_name'] ?>"><?php echo $table_item['table_name'] ?></a></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <form action="/sql001/index.php/sql_editor/result" method="post">
                    <h3 style="font-size: 14pt">SQL</h3>
                    <?php if ($message != null): ?><h4 style="font-size: 12pt"><?php echo $message ?></h4><?php endif; ?>
                    <textarea name="sql_editor" style="width:100%;height:200px"></textarea>
                    <div style="width:120px;margin-left:auto"><button type="submit" class="btn btn-primary">Execute SQL</button></div>
                </form>
            </div>
        </div>
        <?php if (!is_bool($rows) && count($rows) > 0): ?>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <?php foreach ($rows[0] as $key => $value) :?>
                        <td><?php echo $key ?></td>
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
        <?php elseif ($columns != null): ?>
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
                </table>
            </div>
        </div>
        <?php endif; ?>
    </div> <!-- /container -->