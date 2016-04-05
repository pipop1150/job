<?php
use yii\widgets\ActiveForm;
?>

<?php
  $this->title = "Index Page";
  $topics = array(
    "1 หน้ากระดาษ +สกอร์รวม",
    "2 หน้ากระดาษ +สกอร์รวม",
    "1 หน้ากระดาษ ธรรมดา"
  );
?>
<div class="container-fluid">
    <div class="row">
      <div class="col-xs-6">
        <h2 align="center">รอบเช้า</h2>
        <table id="" class="table table-striped table-bordered display" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th rowspan="2" width="30%" class="table-header">รายการโพย</th>
                <th colspan="2" width="70%" class="table-header">รูปแบบ</th>
            </tr>
            <tr>
                <th width="25%" class="table-header">แบบเก่า</th>
                <th width="25%" class="table-header">แบบใหม่</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($topics as $topic) {?>
            <tr>
                <td class="table-body-list"><?= $topic ?></td>
                <td class="table-download">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6" style="vertical-align: middle !important;">
                        <div class="fileinput fileinput-new" data-provides="fileinput" style="margin: 0px !important;">
                          <span class="btn btn-primary btn-file"><span class="fileinput-new">Word</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                          <span class="fileinput-filename"></span>
                          <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="fileinput fileinput-new" data-provides="fileinput" style="margin: 0px !important;">
                          <span class="btn btn-success btn-file"><span class="fileinput-new">Excel</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                          <span class="fileinput-filename"></span>
                          <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="table-download">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-6" style="vertical-align: middle !important;">
                        <div class="fileinput fileinput-new" data-provides="fileinput" style="margin: 0px !important;">
                          <span class="btn btn-primary btn-file"><span class="fileinput-new">Word</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                          <span class="fileinput-filename"></span>
                          <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="fileinput fileinput-new" data-provides="fileinput" style="margin: 0px !important;">
                          <span class="btn btn-success btn-file"><span class="fileinput-new">Excel</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                          <span class="fileinput-filename"></span>
                          <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
            </tr>
            <?php } ?>
          <tbody>
        </table>
      </div>


      <div class="col-xs-6">
        <h2 align="center">รอบเย็น</h2>
        <table id="" class="table table-striped table-bordered display" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th rowspan="2" width="50%" class="table-header">รายการโพย</th>
                <th colspan="2" width="50%" class="table-header">รูปแบบ</th>
            </tr>
            <tr>
                <th width="25%" class="table-header">แบบเก่า</th>
                <th width="25%" class="table-header">แบบใหม่</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($topics as $topic) {?>
          <tr>
              <td class="table-body-list"><?= $topic ?></td>
              <td class="table-download">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-6" style="vertical-align: middle !important;">
                      <div class="fileinput fileinput-new" data-provides="fileinput" style="margin: 0px !important;">
                        <span class="btn btn-primary btn-file"><span class="fileinput-new">Word</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="fileinput fileinput-new" data-provides="fileinput" style="margin: 0px !important;">
                        <span class="btn btn-success btn-file"><span class="fileinput-new">Excel</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="table-download">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-6" style="vertical-align: middle !important;">
                      <div class="fileinput fileinput-new" data-provides="fileinput" style="margin: 0px !important;">
                        <span class="btn btn-primary btn-file"><span class="fileinput-new">Word</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="fileinput fileinput-new" data-provides="fileinput" style="margin: 0px !important;">
                        <span class="btn btn-success btn-file"><span class="fileinput-new">Excel</span><span class="fileinput-exists">Change</span>
                          <input type="file" name="...">
                        </span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
          </tr>
          <?php } ?>
          <tbody>
        </table>
      </div>

    </div>
  </div>



  <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

      <?= $form->field($model, 'imageFile')->fileInput() ?>

      <button>Submit</button>

  <?php ActiveForm::end() ?>
