<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
                  <form method="post" role="form" action="<?php echo BASE_URL("sentiment/analysis"); ?>">
        <div class="form-group">
          <label for="keyword">Keyword: </label> 
          <input type="text" class="form-control" id="keyword" name="q" placeholder="masukkan topik" /> 
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Lihat Analisis" style="float:right;">
        </div>
        </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      