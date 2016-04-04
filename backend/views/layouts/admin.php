<?php
use yii\helpers\BaseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->title ?></title>

    <!-- CSS -->
    <link href="<?=(new BaseUrl())->base()?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=(new BaseUrl())->base()?>/assets/jasny/css/jasny-bootstrap.min.css" rel="stylesheet" />
    <link href="<?=(new BaseUrl())->base()?>/assets/css/custom.css" rel="stylesheet" />

    <!-- JS -->
    <script src="<?=(new BaseUrl())->base()?>/assets/js/jquery.js"></script>
    <script src="<?=(new BaseUrl())->base()?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=(new BaseUrl())->base()?>/assets/jasny/js/jasny-bootstrap.min.js"></script>

</head>
<body>
<?php $this->beginBody() ?>
  <!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">LOGO</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="./index.html">หน้าแรก</a></li>
          <li class="active"><a href="./upload.html">Upload</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ตัวอย่างโพย
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#poll1">แบบที่ 1</a></li>
              <li><a href="#poll2">แบบที่ 2</a></li>
              <li><a href="#poll3">แบบที่ 3</a></li>
            </ul>
          </li>
          <li><a href="#...">...</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#login">Login</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <!-- N-navbar -->
  <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
