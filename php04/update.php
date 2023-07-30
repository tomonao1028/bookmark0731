<?php
//1. POSTデータ取得
$syosekimei   = $_POST["syosekimei"];
$syosekiurl  = $_POST["syosekiurl"];
$syosekicomment = $_POST["syosekicomment"];
$id     = $_POST["id"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE gs_bm_table SET syosekimei=:syosekimei,syosekiurl=:syosekiurl,syosekicomment=:syosekicomment WHERE id=:id");
$stmt->bindValue(':syosekimei',   $syosekimei,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':syosekiurl',  $syosekiurl,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':syosekicomment',    $syosekicomment,    PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("select.php");
}
?>
