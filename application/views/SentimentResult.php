<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Bank Data Sentiment Analisis</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="table_id" class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th>Id</th>
                  <th>User</th>
                  <th>Text</th>
                  <th>Sentiment</th>
                  <th>Timestamp</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($topic_1 as $topic) { ?>
              <tr>
                      <td><?= $topic->id_analysis; ?></td>
                      <td><?= $topic->username; ?></td>
                      <td><?= $topic->tweet; ?></td>
                      <td><?= $topic->sentiment; ?></td>
                      <td><?= $topic->timestamp; ?></td>
                  </tr>
              <?php } ?>
          </tbody>    
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Aplikasi ini digunakan untuk menganalisis sentiment pengguna twitter.
        </div>
        <!-- /.box-footer-->
      </div>
      