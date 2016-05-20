
<?php
echo "<header align='center'>";
echo "お問合せ完了<br>";
echo "<table boder='0' width='100'>";
echo "姓名";
if(is_numeric($_POST["sei"]) == false && is_numeric($_POST["mei"]) == false){
    echo "入力しなおしてください.<br>";
}else{
    echo $_POST['sei']." ".$_POST['mei']."<br>";
}

//性別表示
echo "性別";
if(isset($_POST["gender"]) == false){
    echo "チェックしなおしてください<br>";
}
elseif($_POST["gender"] === "g1"){
    echo "男性<br>";
}
elseif($_POST["gender"] === "g2"){
    echo "女性<br>";
}
else{
    echo "不明<br>";
}

echo "住所";
if(is_numeric($_POST["residence"]) == false){
    echo "入力しなおしてください.<br>";
}else{
    echo $_POST['residence']."<br>";
}

echo "電話番号";
if(is_numeric($_POST["tel1"]) == false && is_numeric($_POST["tel2"]) == false){
    if(is_numeric($_POST["tel2"]) == false && is_numeric($_POST["tel3"]) == false){
        echo "入力しなおしてください.<br>";
    }
}
else{
    echo $_POST['tel1']."-".$_POST['tel2']."-".$_POST['tel3']."<br>";
}

echo "アドレス";
if(is_numeric($_POST["ad1"]) == false && is_numeric($_POST["ad2"]) == false){
    echo "入力しなおしてください.<br>";
}
else{
    echo $_POST['ad1']."@".$_POST['ad2']."<br>";
}
//どこで知ったか
echo "どこで知ったか";
/*if(isset($_POST["know"]) == false){
    echo "チェックしなおしてください<br>";
}*/
//$know =$_POST["know"];
if(isset($_POST["know"][0])){
    echo "雑誌<br>";
}
elseif(isset($_POST["know"][1])){
    echo "新聞<br>";
}
elseif(isset($_POST["know"][2])){
    echo "テレビ<br>";
}
elseif(isset($_POST["know"][3])){
    echo "その他<br>";
}

//質問のカテゴリ
echo "質問のカテゴリ";
//$category =$_POST["category"];
if(isset($_POST["category"][0])){
    echo "あ <br>";
}
elseif(isset($_POST["category"][1])){
    echo "い <br>";
}
elseif(isset($_POST["category"][2])){
    echo "う <br>";
}
elseif(isset($_POST["category"][3])){
    echo "え <br>";
}
elseif(isset($_POST["category"][4])){
    echo "お <br>";
}

echo "質問内容<br>".$_POST['coments']."<br>";
