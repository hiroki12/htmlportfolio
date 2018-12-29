// アルバムデータの作成
var album = [
  { src: 'images/item02.jpg', msg: 'Matching Box | 制作期間約3~4週間'},
  { src: 'images/matchapp_thumb2.jpg', msg: 'スワイプでお気に入りの人を見つける'},
  { src: 'images/matchapp_thumb3.jpg', msg: '自己紹介ページ'},
  { src: 'images/matchapp_thumb1.jpg', msg: '条件検索でお目当の相手を見つける'},
  { src: 'images/matchapp_thumb4.jpg', msg: '条件一致した相手の情報も簡単発見'}
];

// 最初のデータを表示しておく
var mainImage = document.createElement('img');
// 配列の一番最初の画像
mainImage.setAttribute('src', album[0].src);
// 配列の一番最初のメッセージ
mainImage.setAttribute('alt', album[0].msg);

var mainMsg = document.createElement('p');
mainMsg.innerText = mainImage.alt;

var mainFlame = document.querySelector('#gallery .main');
mainFlame.insertBefore(mainImage, null);
mainFlame.insertBefore(mainMsg, null);

// サムネイル画像の表示
var thumbFlame = document.querySelector('#gallery .thumb');
for (var i = 0; i < album.length; i++) {
  var thumbImage = document.createElement('img');
  thumbImage.setAttribute('src', album[i].src);
  thumbImage.setAttribute('alt', album[i].msg);
  thumbFlame.insertBefore(thumbImage, null);
}

// クリックした画像をメインにする
thumbFlame.addEventListener('click', function(event) {
  if (event.target.src) {
    mainImage.src = event.target.src;
    mainMsg.innerText = event.target.alt;
  }
});
