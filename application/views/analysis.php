<?php require_once FCPATH . '/vendor/autoload.php';?>
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Stream Tweet</h3>

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
            <th width='5%' align='center'>No</th>
            <th width='15%' align='center'>Username</th>
            <th width='50%' align='center'>Tweet</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($tweets->statuses as $tweet)
            {
            ?>
            </thead>
            <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $tweet->user->screen_name; ?></td>
            <td>
              <?php 
                $a = $tweet->text;
                echo $a;
            ?>
            </td>
            </tr>
            <?php $no++; } ?></tbody></table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Stream Tweet
        </div>
        <!-- /.box-footer-->
      </div>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Stemming Tweet with Tokenizer & Filter Stopwords Result</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <table id="table_id_2" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th width='5%' align='center'>No</th>
            <th width='15%' align='center'>Username</th>
            <th width='50%' align='center'>Tweet</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($tweets->statuses as $tweet)
            {
            ?>
            <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $tweet->user->screen_name; ?></td>
            <td>
              <?php 
                $a = $tweet->text;
                /*Stemming Process*/
                $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
                $stemmer  = $stemmerFactory->createStemmer();
                //$sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
                $output   = $stemmer->stem($a);
                echo "<b>";
                echo $output;
                echo "</b>";
            ?>
            </td>
            </tr>
            <?php $no++; } ?></tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Stemming Tweet with Tokenizer & Filter Stopwords
        </div>
        <!-- /.box-footer-->
      </div>
      
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Sentiment Analysis</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <table id="table_id_2" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th width='5%' align='center'>No</th>
            <th width='15%' align='center'>Username</th>
            <th width='50%' align='center'>Tweet</th>
            <th align="center">Arah Sentimen</th>
            <th align="center">Nilai Sentimen</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($tweets->statuses as $tweet)
            {
            ?>
            <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $tweet->user->screen_name; ?></td>
            <?php 
                $a = $tweet->text;
                require_once FCPATH . 'application/third_party/SentimentAnalysis/autoload.php';
                $sentiment = new \PHPInsight\Sentiment();

                $strings = array(
                1 => $a,
                );

                $i=1;
                foreach ($strings as $string) {

                // calculations:
                $scores = $sentiment->score($string);
                $class = $sentiment->categorise($string);

                // output:
                if (in_array("pos", $scores)) {
                echo "Got positif";
                }

                echo "<td><b>$string</b></td>";
                echo "<td><b>$class</b></td>";
                echo "<td>";
                // var_dump($scores);
                foreach ($scores as $skor) {
                echo $skor;
                }
                echo "</td>";
                $i++;
                $userrp = str_replace("'","`","'".$tweet->user->screen_name."'");
                $tweetrp = str_replace("'","`","'".$a."'");
                /*$urlrp = str_replace("'","\'","'".$tweet['url']."'");
                */
                $sql = "insert into analysis (topic, username, tweet, sentiment)
                values ('".$_POST['q']."','".$userrp."','".$tweetrp."','".$class."')";
                $this->db->query($sql);
                }
            ?>
            </tr>
            <?php $no++; } ?></tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Sentiment Analysis
        </div>
        <!-- /.box-footer-->
      </div>
      
      