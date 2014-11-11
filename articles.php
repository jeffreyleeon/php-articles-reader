<?php

include('vendors/ganon.php4');

header('Content-Type: text/html; charset=utf-8');

$techbang_howto_page1 = file_get_dom('http://www.techbang.com/channels/howto?page=1');
$techbang_howto_page2 = file_get_dom('http://www.techbang.com/channels/howto?page=2');
$techbang_array = array($techbang_howto_page1, $techbang_howto_page2);


$techbang_phone_page1 = file_get_dom('http://www.techbang.com/channels/phone?page=1');
$techbang_phone_page2 = file_get_dom('http://www.techbang.com/channels/phone?page=2');
$techbang_phone_array = array($techbang_phone_page1, $techbang_phone_page2);

$vjmedia_page1 = file_get_dom('http://www.vjmedia.com.hk/articles/tag/職場');
$vjmedia_page2 = file_get_dom('http://www.vjmedia.com.hk/articles/tag/中港矛盾');
$vjmedia_array = array($vjmedia_page1, $vjmedia_page2);

$ngtaiwan_page1 = file_get_dom('http://www.ngtaiwan.com/category/dailypic');
$ngtaiwan_page2 = file_get_dom('http://www.ngtaiwan.com/category/dailypic/page/2');
$ngtaiwan_page3 = file_get_dom('http://www.ngtaiwan.com/category/dailypic/page/3');
$ngtaiwan_page4 = file_get_dom('http://www.ngtaiwan.com/category/dailypic/page/4');
$ngtaiwan_array = array($ngtaiwan_page1, $ngtaiwan_page2, $ngtaiwan_page3, $ngtaiwan_page4);

$hongkongoriginals_page1 = file_get_dom('http://www.hkoriginals.hk/author/gjstigler2012/');
$hongkongoriginals_page2 = file_get_dom('http://www.hkoriginals.hk/author/gjstigler2012/page/2/');
$hongkongoriginals_page3 = file_get_dom('http://www.hkoriginals.hk/author/gjstigler2012/page/3/');
$hongkongoriginals_page4 = file_get_dom('http://www.hkoriginals.hk/author/gjstigler2012/page/4/');
$hongkongoriginals_array = array($hongkongoriginals_page1, $hongkongoriginals_page2, $hongkongoriginals_page3, $hongkongoriginals_page4);


?>

<!DOCTYPE html>
<html>
<head>
<link href="assets/css/style.css" rel="stylesheet">
<link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="vendors/jquery.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseOne">
          T客邦(教學)
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          foreach($techbang_array as $page) {
            foreach($page('article.articles article div.brief-post-wrapper') as $index => $element) {
        ?>
        <table width="100%" border="2" cellpadding="7" cellspacing="10">
          <tr>
            <td class="image"><?php echo $element->getChild(3)->html(),"<br>\n"; ?></td>
            <td><?php echo $element('header', 0)->html(),"<br>\n"; ?></td>
          </tr>
        </table>
        <?php  }
          } ?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseTwo">
          T客邦(手機)
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          foreach($techbang_phone_array as $page) {
            foreach($page('article.articles article div.brief-post-wrapper') as $index => $element) {
        ?>
        <table width="100%" border="2" cellpadding="7" cellspacing="10">
          <tr>
            <td width="20%"><?php echo $element->getChild(3)->html(),"<br>\n"; ?></td>
            <td><?php echo $element('header', 0)->html(),"<br>\n"; ?></td>
          </tr>
        </table>
        <?php  }
          } ?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseThree">
          輔仁網(職場膠事, 中港矛盾)
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          foreach($vjmedia_array as $page) {
            foreach($page('div.wrapper div#container div#two-column div.post') as $index => $element) {
        ?>
        <table width="100%" border="2" cellpadding="7" cellspacing="10">
          <tr>
            <td width="20%"><?php echo $element->getChild(3)->html(),"<br>\n"; ?></td>
            <td><?php echo $element->getChild(1)->html(),"<br>\n"; ?></td>
          </tr>
        </table>
        <?php  }
          } ?>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseFour">
          國家地理雜誌(每日一圖)
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          foreach($ngtaiwan_array as $page) {
            foreach($page('div.main div.box_outer') as $index => $element) {
        ?>
          <table width="100%" border="2" cellpadding="7" cellspacing="10">
            <tr>
              <td width="20%"><?php  echo $element->getChild(1)->getChild(7)->getChild(5)->getChild(1)->html(); ?></td>
              <td><?php echo $element->getChild(1)->getChild(1)->html(), "<br>\n"; ?></td>
            </tr>
            </table>
        <?php  }
        } ?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseFive">
          The Hong Kong Originals
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          foreach($hongkongoriginals_array as $page) {
            foreach($page('div.post') as $index => $element) {
        ?>
          <table width="100%" border="2" cellpadding="7" cellspacing="10">
            <tr>
              <td width="20%"><?php  echo $element->getChild(1)->html(); ?></td>
              <td><?php echo $element->getChild(3)->html(), "<br>\n"; ?></td>
            </tr>
            </table>
        <?php  }
        } ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>

