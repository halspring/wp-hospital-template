<?php get_header();?>

  <section id="content-top">
    <div class="container">
      <!-- パンくずリスト -->
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url(); ?>/<?php echo esc_html(get_post_type_object(get_post_type())->label); ?>"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></a></li>
            <li class="active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
    </div>
  </section>


<?php
  $type_name = esc_html(get_post_type_object(get_post_type())->name);
  if ( $type_name == 'trainer' )       { $rectopix = '臨床研修医';}
  else if ( $type_name == 'doctor' )   { $rectopix = '診療科医師';}
  else if ( $type_name == 'nurse' )    { $rectopix = '看護師';}
  else if ( $type_name == 'co-medical'){ $rectopix = 'メディカルスタッフ';}
  else if ( $type_name == 'staff' )    { $rectopix = '事務系スタッフ';}
?>
  <!-- Page Content -->
  <div class="container">
    <div class="content-head">
      <span class="global-category"><?php echo $rectopix; ?></span><span class="topix-name"><?php the_title();?></span>
      <ul>
        <li class="about-recruit"><a href="#">採用説明会・病院見学について</a></li>
        <li class="back"><a href="#">診療科医師　INDEXに戻る</a></li>
      </ul>
    </div>
    <div class="content-menu">
      <table class="content-table <?php echo $type_name;?>">
        <tr class="content-tr">
          <th>救急医・総合診療医</th>
          <th>部長インタビュー</th>
          <th>センターの特徴</th>
          <th>教育・研修体制</th>
          <th>診療実績・学術研究業績</th>
          <th>取り組み・イベント</th>
        </tr>
      </table>
    </div>
    <!-- Image Header -->
    <?php if( !empty($post->post_content) ):?>) ):?>
      <div id="sidenav-message"></div>
    <div class="message-area">
      <div class="row">
        <div class="col-lg-12">
          <img class="img-responsive" src="<?php the_field('トップ画像'); ?>" alt="" width="1200px">
        </div>
      </div>
      <!-- /.row -->
      <!-- main -->
      <div class="message">
        <div class="<?php echo $type_name;?>">
        <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
      </div>
      </div>
      <?php endif?>
      <div id="sidenav-recruit"></div>


    <div class="requirements-area">
      <div class="requirements">
        <h3 class="<?php echo $type_name; ?>">募集要項</h3>
        <h4 class="line <?php echo $type_name; ?>"><span><?php the_title();?>募集</span></h4>
        <?php if(get_post_meta($post->ID , '募集' ,true)=='募集終了'):?>
        <h4>今年度の募集は修了致しました。</h4>
        <?php else:?>
        <h5><?php if($rectopix=='trainer'){echo '募集要項'; }else{ echo '採用条件';}?></h5>
        <div id="require-table">
          <table>
            <tr>
  <td><?php echo get_post_meta($post->ID, '項目名1' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容1' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名2' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容2' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名3' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容3' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名4' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容4' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名5' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容5' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名6' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容6' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名7' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容7' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名8' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容8' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名9' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容9' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名10' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容10' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名11' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容11' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名12' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容12' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名13' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容13' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名14' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容14' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名15' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容15' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名16' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容16' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名17' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容17' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名18' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容18' ,true); ?></th>
</tr>
<tr>
  <td><?php echo get_post_meta($post->ID, '項目名19' ,true)?></td>
  <th><?php echo get_post_meta($post->ID, '内容19' ,true); ?></th>
</tr>

          </table>
          </div>
          <?php endif?>
          <div class="send-to-area">
            <div class="row">

              <div class="col-md-5">
                <div class="send-to">
                  <h4>書類提出先</h4>
                  <p>
                    〒861-4193 熊本市南区近見5丁目3-1<br>
                    社会福祉法人恩賜財団済生会熊本病院 人事室<br>
                    担当:早崎
                  </p>
                </div>
              </div>
              <div class="col-md-7">
                <div class="send-to">
                  <h4>お問い合わせ先</h4>
                  <p>
                    TEL 096-351-8074(直通) E-mail:saiyou@saiseikaikumamoto.jp<br>
                    資料請求・お問い合わせ  見学希望の方へ
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

 <?php if(get_post_meta($post->ID , 'q_1' ,true) != ""): ?>
      <div id="sidenav-qaa"></div>
      <div class="qaa-area">
        <div class="qaa">
          <h3 class="<?php echo $type_name; ?>">Q&A</h3>
          <h4 class="line <?php echo $type_name; ?>"><span><?php the_title();?>についての質問</span></h4>
        
          <div class="qaa-content">
             <div class="<?php echo $type_name;?>">
            <span class="q"><?php echo get_post_meta($post->ID , 'q_1' ,true);?></span>
            <p class="a">
              <?php echo get_post_meta($post->ID , 'a_1' ,true);?>
            </p>
          </div>
          </div>
          <?php if(get_post_meta($post->ID , 'q_2' ,true) != ""): ?>
          <div class="qaa-content">
             <div class="<?php echo $type_name;?>">
            <span class="q"><?php echo get_post_meta($post->ID , 'q_2' ,true);?></span>
            <p class="a">
              <?php echo get_post_meta($post->ID , 'a_2' ,true);?>
            </p>
            </div>
          </div>
          <?php endif?>
          <?php if(get_post_meta($post->ID , 'q_3' ,true) != ""): ?>
          <div class="qaa-content">
             <div class="<?php echo $type_name;?>">
            <span class="q"><?php echo get_post_meta($post->ID , 'q_3' ,true);?></span>
            <p class="a">
              <?php echo get_post_meta($post->ID , 'a_3' ,true);?>
            </p>
            </div>
          </div>
          <?php endif?>
        </div>
      </div>
          <?php endif?>

      <hr>
      <!-- sidenav-->
      <div id="sidenav">
        <ul><?php if( !empty($post->post_content) ):?>
          <li><a href="#sidenav-message">メッセージ</a></li><?php endif?>
          <li><a href="#sidenav-recruit">募集要項</a></li>
            <?php if(get_post_meta($post->ID , 'q_1' ,true) != ""): ?>
          <li><a href="#sidenav-qaa">Q&A</a></li>
                    <?php endif?>
        </ul>
      </div>
      <!-- Footer -->
    </div>
  <?php get_footer();?>