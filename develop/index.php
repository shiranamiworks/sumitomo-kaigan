<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "top",
  "gnav_set" => "top",
  "page_class" => "",
  "url" => "",
  "title" => "",
  "keywords" => "",
  "description" => "",
  "add_stylesheet" => ["css/top.css"],
  "add_script" =>  ["js/top.js"],
  "canonical_page_id" => "",
  "logo_text" => ""
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
  <div class="top-mv">
    <figure class="pc"><img src="./images/top/mv-pc.jpg" alt="" class="w_100"></figure>
      <div class="tb">
        <figure><img src="./images/top/mv-sp.jpg" alt="" class="w_100"></figure>
      </div>
   </div><!--//top-mv -->
  
  <!-- バナースライド -->
  <div class="top-banner">
    <div class="container">
      <!-- バナー上 -->
        <script type="text/javascript" src="/bukken_manage/bukken_manage_banner.cgi?AREA_CD=shuto&PROP_CD=kaigan/&BANNER=first"></script>
      <!-- バナー下 -->
        <script type="text/javascript" src="/bukken_manage/bukken_manage_banner.cgi?AREA_CD=shuto&PROP_CD=kaigan/&BANNER=second"></script>
    </div>
  </div><!-- / バナースライド -->

  <!-- INFORMATION -->
  <section id="information-sec" class="ma_to50">
    <div class="container">
      <div class="top-sec-ttl">
        <h2>INFORMATION</h2>
      </div>
      <div class="information-box">
        <div class="information-box-wrapper">
          <div id="topics" class="informationTopics" data-area-cd="shuto" data-prop-cd="kaigan"></div>
        </div>
      </div>
    </div>
  </section><!-- / INFORMATION -->

  <section id="contents-sec" class="ma_to50">
    <div class="container">
      <div class="top-sec-ttl">
        <h2>CONTENTS</h2>
      </div>
      <div class="contents-link">
        <a href="./concept.html">
          <figure><img src="./images/top/img_concept.jpg" alt="コンセプト"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">CONCEPT</p>
              <h3>コンセプト</h3>
            </div>
        </a>
        <a href="./location01.html">
          <figure><img src="./images/top/img_location.jpg" alt="ロケーション"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">LOCATION</p>
              <h3>ロケーション</h3>
            </div>
        </a>
        <a href="./access.html">
          <figure><img src="./images/top/img_access.jpg" alt="アクセス"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">ACCESS</p>
              <h3>アクセス</h3>
             </div>
        </a>
         <div class="ComingSoon">
          <div class="contents-link__ttl">
             <p class="f-en">Coming Soon</p>
          </div>
         </div>
        </div>
    </div>
  </section><!-- / CONTENTS -->


  
  <div class="container ma_to20 ma_bo20">
    <p class="caption">※1. 2駅3路線とは、都営浅草線・都営三田線「三田」駅、ゆりかもめ「芝浦ふ頭」駅のことです。<br>※2. 芝浦一丁目計画／本計画は2018年3月に都市計画決定しており、S棟2025年2月、全体2030年度竣工予定。 出典：東京都都市整備局HP、芝浦プロジェクトHPより（2023年12月現在）<br>・浜松町二丁目地区第一種市街地再開発事業／工事完了（予定）：2026年度 出典：株式会社世界貿易センタービルディングHP、港区HPより（2023年12月現在）<br>・三田小山町西地区第一種市街地再開発事業／工事完了（予定）：2028年度 出典：三井不動産レジデンシャル株式会社HP、港区HPより（2023年12月現在）<br>・高輪ゲートウェイシティ／2025年3月開業予定 出典：東日本旅客鉄道株式会社HPより（2023年12月現在）<br>・羽田空港アクセス線（仮称）／2031年度開業予定 出典：東日本旅客鉄道株式会社HPより（2023年12月現在）<br>・リニア中央新幹線／品川・名古屋間：2027年開業予定、品川・新大阪間：2045年開業予定 ※一部区間の工事遅延により遅れる見通しがあります。 出典：国土交通省HP、JR東海HPより（2023年12月現在）<br>※掲載の航空写真は、港区台場1丁目付近上空から北西方面を撮影（2024年1月）したものに現地部分の光などCG合成・加工したものです。また、周辺環境は将来変わる場合があります。<br>※掲載の距離表示については地図上の概測距離を、徒歩分数表示については80mを1分として算出し、端数を切り上げたものです。</p>
  </div>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
