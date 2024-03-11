<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "map",
  "url" => "map.html",
  "title" => "現地案内図｜",
  "keywords" => "現地案内図,",
  "description" => "現地案内図ページ。",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
  "canonical_page_id" => "map",  
  "logo_text" => "現地案内図｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
<section id="submaincontainer">
            	<h2 class="ttl"><img src="images/map/ttl.jpg" alt="現地案内図"></h2>
            	<div class="mapArea"><img src="images/map/map.jpg" alt="現地案内図" id="map1"></div>
				<p class="zip">東京都港区海岸3丁目14番18（地番）<span>※住居表示ではありません。</span></p>
				<div id="btnArea">
					<div id="GoogleMap"><a href="https://www.google.com/maps?q=35.639629445058965,139.75582967174003+(pin)" target="_blank"><img src="images/map/btn_googlemap.jpg" alt="Google Map"></a></div>
					<div id="PrintMap"><a href="JavaScript:;" onclick="print_out(); return false;"><img src="images/map/btn_print.jpg" alt="印刷" class="pc"></a></div>
				</div>

	            <div class="container">
	                <p class="txt">※1.都営三田線・浅草線「三田」駅A7出口徒歩19分。公園ルートの場合（イベント実施時除く）であり、公道ルートの場合はA4出口徒歩22分。<br>※掲載の距離表示については地図上の概測距離を、徒歩分数表示については80mを１分として算出し、端数を切り上げたものです。<br>※掲載の現地案内図は一部道路・施設等を抜粋して表記しています。</p>
	            </div>
            </section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
