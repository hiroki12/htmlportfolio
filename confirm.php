<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>CONTACT｜INOUE PORTFOLIO<</title>
<meta name="description" content="お気軽にお問い合わせください。">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/mobile.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon" href="web_clip_152x152.png">
</head>
<body>

  <!--ヘッダー-->
  <header>
    <h1><a href="index.html"><img src="images/logo.png" alt="INOUE PORTFOLIO" ></a></h1>
    <div id="header_contact"><a href="contact.html"><img src="images/btn_contact.jpg" alt="お問い合わせ"></a></div>
    <div class="navToggle">
        <span></span><span></span><span></span><span>menu</span>
    </div>
    <nav class = "globalMenuSp">
      <ul>
        <li><a href="index.html"><i class="fa fa-home"></i>  HOME</a></li>
        <li><a href="potfolio.html"><i class="fa fa-image "></i>  PORTFOLIO</a></li>
        <li><a href="skill.html"><i class="fa fa-angellist"></i>  SKILL</a></li>
        <li class="current"><a href="contact.html"><i class="fa fa-child"></i>  CONTACT</a></li>
      </ul>
    </nav>
    <nav id="global_navi">
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="potfolio.html">PORTFOLIO</a></li>
        <li><a href="skill.html">SKILL</a></li>
        <li class="current"><a href="contact.html">CONTACT</a></li>
      </ul>
    </nav>
  </header>
  <!--/ヘッダー-->

  <!--wrapper-->
  <div id="wrapper">
    <!--メイン-->
    <div id="main">
      <div id="breadcrumb">
        <ol>
          <li><a href="index.html">HOME</a></li>
          <li>CONTACT</li>
        </ol>
      </div>
      <article>
        <h1>お問い合わせ</h1>
        <p class="lead">お気軽にお問い合わせください。Twitter経由でのお問い合わせも勿論可能です。</p>
        <p>下記メールフォームをご記入いただき、「送信する」ボタンを押してください。</p>
        <p>「<span class="must">※</span>」は必須項目です。</p>
        <section>
          <h2>
            <?php
              mb_language("Japanese");
              mb_internal_encoding("UTF-8");
              $to = "subbusiness1205@gmail.com";
              $subject = "お問い合わせ内容確認";
              $message = $_POST['detail'];
              $headers = $_POST['email'];
              if(mb_send_mail($to, $subject, $message, $headers)){
                echo "メールを送信しました。折り返しのご連絡お待ちください";
              } else {
                echo "メールの送信に失敗しました。";
              };
            ?>
          </h2>
        </section>
      </article>
    </div>
    <!--/メイン-->
    <!--サイド-->
    <aside id="sidebar">
      <section id="side_banner">
        <h2>関連リンク</h2>
        <ul>
          <figcaption>Twiiterはこちら</figcaption>
          <li><a href="https://twitter.com/BsfIWoagQq3u5cn" target="_blank"><img src="images/banner01.jpg" alt="Twiiterはこちら"></a></li>
          <li><a href="https://www.facebook.com/" target="_blank"><img src="images/banner02.jpg" alt="イイネ！押してね！facebookページ"></a></li>
        </ul>
      </section>
      <section id="side_contact">
        <h2>ご予約・お問い合わせ</h2>
        <address><i class="fa fa-phone"></i>080-4015-8603</address>
        <p>受付時間 9:00〜18:00</p>
        <p><a href="contact.html" class="contact_button">お問い合わせフォーム</a></p>
      </section>
    </aside>
    <!--/サイド-->
  </div>
  <!--/wrapper-->

  <!--フッター-->
  <footer>
    <div id="footer_nav">
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="potfolio.html">PORTFOLIO</a></li>
        <li><a href="skill.html">SKILL</a></li>
        <li><a href="contact.html">CONTACT</a></li>
        <li><a href="policy.html">PRIVACY POLICY</a></li>
      </ul>
    </div>
    <small>&copy; 2019 INOUE PORTFOLIO.</small>
  </footer>
  <!--/フッター-->

</body>
</html>
