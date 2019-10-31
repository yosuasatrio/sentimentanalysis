<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Bank Topik Sentiment Analisis</h3>

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
                  <th>No</th>
                  <th>Topic</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $count = 1;
              foreach($topic_1 as $topic) { ?>
              <tr>
                      <td><?= $count; ?></td>
                      <td><?= $topic->topic; ?></td>
                      <td><a href="<?php echo BASE_URL("sentiment/hapusTopik/$topic->topic");?>" class="btn btn-primary">Hapus Topik</a></td>
              </tr>
              <?php $count++; } ?>
          </tbody>    
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Aplikasi ini digunakan untuk menganalisis sentiment pengguna twitter.
        </div>
        <!-- /.box-footer-->
      </div>
      