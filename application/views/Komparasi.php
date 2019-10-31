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
          <div id="chartContainer" style="height: 500px; width: 100%;"></div>
          <script type="text/javascript">
          window.onload = function () {
              var chart = new CanvasJS.Chart("chartContainer");

              chart.options.axisY = { prefix: "0"};
              chart.options.title = { text: "Hasil Komparasi" };

              var positive1 = { //dataSeries - first quarter
                  type: "column",
                  name: "Positive",
                  showInLegend: true
              };

              var negative2 = { //dataSeries - second quarter
                  type: "column",
                  name: "Negative",
                  showInLegend: true
              };

              var neutral3 = { //dataSeries - second quarter
                  type: "column",
                  name: "Neutral",
                  showInLegend: true
              };

              chart.options.data = [];
              chart.options.data.push(positive1);
              chart.options.data.push(negative2);
              chart.options.data.push(neutral3);
              positive1.dataPoints = [
              <?php
              foreach($get_topic_1 as $get_topic) {
              $query = $this->db->query("SELECT COUNT('sentiment') as count_pos FROM analysis WHERE sentiment='positif' AND topic='".$get_topic->topic."'");
              $p = $query->row();
              echo "
                      { label: '".$get_topic->topic."', y: ".$p->count_pos." },
              ";
              }
              ?>
              ];

              negative2.dataPoints = [
              <?php
              foreach($get_topic_1 as $get_topic) {
              $query = $this->db->query("SELECT COUNT('sentiment') as count_neg FROM analysis WHERE sentiment='negatif' AND topic='".$get_topic->topic."'");
              $n = $query->row();
              echo "
                      { label: '".$get_topic->topic."', y: ".$n->count_neg." },
              ";
              }
              ?>              ];

              neutral3.dataPoints = [
              <?php
              foreach($get_topic_1 as $get_topic) {
              $query = $this->db->query("SELECT COUNT('sentiment') as count_net FROM analysis WHERE sentiment='netral' AND topic='".$get_topic->topic."'");
              $nt = $query->row();
              echo "
                      { label: '".$get_topic->topic."', y: ".$nt->count_net." },
              ";
              }
              ?>              ];
              chart.render();
          }
          </script>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      