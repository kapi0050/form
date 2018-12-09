<?php
// セッションスタート
session_start();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
    if (!(isset($_POST['back']))) {
        $_SESSION = array();
        $name = filter_input(INPUT_POST, 'name');
        $kana = filter_input(INPUT_POST, 'kana');
        $errors = [];
        
        if (empty($name)) {
            $errors['name'] = '名前は入力必須です。';
        }
        if (empty($kana)) {
            $errors['kana'] = 'フリガナは入力必須です。';
        }
        // エラーがなければ確認ページへ
        if (count($errors) == 0) {
            $_SESSION = filter_input_array(INPUT_POST);
            header('location: confirm.php');
        }
    }
}

?>

<html>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

<body>

    <form text-center method="post" action="input.php">
        <div class="form-group">
            <?php //エラーが有った場合はメッセージを画面に表示させる
        if (isset($errors)) {
            foreach ($errors as $errors) {
                echo $errors;
            }
        }
        ?>

            <input style="width:150px;" class="form-control" type="text" name="name" value="<?php echo $_SESSION['name'] ?>" />
            <input style="width:150px;" class="form-control" type="text" name="kana" value="<?php echo $_SESSION['kana'] ?>" />
            <input type="submit" class="btn btn-lg btn btn-primary" value="確認する">
        </div>
    </form>
</body>

</html>