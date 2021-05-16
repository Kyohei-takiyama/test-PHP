<!-- 

  @deiscription 
       テキストボックスに名前を入力し、「送信」というボタンを押すと
      「〇〇さんご登録ありがとうございます」と表示されるスクリプトを作成

  @condition
       1 送信前のファイル名はtest.htmlとする
       2 送信後のファイル名はtest.phpとする
 -->

<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
?>

<p><?php echo $name; ?>さんご登録ありがとうございます</p>