<html>
<header>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>お問合せ完了</title>
    <h1>○●○ お問合せ完了 ○●○</h1>
</header>
<body>
    <!--テーブルの表：中央寄せ、線の太さ１、巣是手の内羅線、外枠線非表示-->
    <table align="center" border="1" rules="all" frame="void">
<!--姓名-->
        <div><tr>
            <td>姓名</td>
            <td><?php
                if(isset($_POST["sei"]) == false && isset($_POST["mei"]) == false ){
                    echo "入力しなおしてください";
                }else{
                    echo $name=$_POST['sei']." ".$_POST['mei'];
                } ?>
            </td>
        </tr></div>
<!--性別-->
        <div><tr>
            <td>性別</td>
            <td><?php
                $gender=$_POST['gender'];
                if($gender ===""){
                    echo "入力しなおしてください";
                }elseif($gender === "g1"){
                    echo $gender = "男性";
                }elseif($gender === "g2"){
                    echo $gender = "女性";
                }else{
                    echo $gender = "不明";
                } ?>
            </td>
        </tr></div>
<!--住所-->
        <div><tr>
            <td>住所</td>
            <td><?php
                if(isset($_POST["residence"]) == false){
                    echo "入力しなおしてください";
                    $resi=null;
                }else{
                    echo $resi = $_POST['residence'];
                } ?>
            </td>
        </tr></div>
<!--電話番号-->
        <div><tr>
            <td>電話番号</td>
            <td><?php
                //万が一コピペで文字を挿入されたときのエラー表示
                if(is_numeric($_POST["tel1"]) && is_numeric($_POST["tel2"]) ){
                    if(is_numeric($_POST["tel2"])  && is_numeric($_POST["tel3"]) ){
                        echo $tel = $_POST['tel1']."-".$_POST['tel2']."-".$_POST['tel3'];
                    }else{
                        echo "半角数字で入力しなおしてください";
                        $tel = null
                    }
                }?>
            </td>
        </tr></div>
<!--アドレス-->
        <div><tr>
            <td>アドレス</td>
            <td><?php
                if(isset($_POST["ad1"]) == false && isset($_POST["ad2"]) == false){
                    echo "入力しなおしてください";
                }else{
                    echo $add = $_POST['ad1']."@".$_POST['ad2'];
                } ?>
            </td>
        </tr></div>
<!--どこで知ったか-->
        <div><tr>
            <td>どこで知ったのか</td>
            <td><?php
                //空の場合
                if(empty($_POST["know"])){
                    echo "選択してください";
                }else{
                    $know=$_POST["know"];
                    $check=array("k1"=>"紙面","k2"=>"SNS","k3"=>"テレビ","k4"=>"その他");
                    //foreachで複数選択されたら、複数表示
                    foreach ($know as $value) {
                        echo $select_know = $check[$value]." ";
                    }
                } ?>
            </td>
        </tr></div>
<!--お問合せのカテゴリ-->
        <div><tr>
            <td>お問合せのカテゴリ</td>
            <td><?php
                if($_POST["category"] === "1"){
                    echo $cate = "質問・お問合せ";
                }elseif($_POST["category"] === "2"){
                    echo $cate = "その他";
                }else{
                    echo "選択しなおしてください";
                } ?>
            </td>
        </tr></div>
<!--お問合せ内容-->
        <div><tr>
            <td colspan="2">お問合せ内容</td>
        </tr>
        <tr>
            <td colspan="2"><fieldset align="center" col="50" >
                <?php
                $coments = $_POST['coments'];
                //改行文字の前にHTMLの改行タグを挿入.
                echo nl2br($coments."<br>"); ?>
                </fieldset>
            </td>
        </tr></div>
    </table>
</body>
<footer>
    <!--1つ前のページに戻るボタン-->
    <div align="center">
        <input type="button" id="reset" value="戻る" onClick="history.back()">
    </div>
    <!--画像挿入-->
    <p class="img">
        <img src="figure_tousenbo.png" align="right" width="80px" height="80px" >
    </p>
</footer>
</html>
<!--テキストファイルに追記、"\r\n"で改行-->
<?php
$fp = fopen("contact_log.txt","a");
fwrite($fp,"姓名：$name"."\r\n");
fwrite($fp,"性別：$gender"."\r\n");
fwrite($fp,"住所：$resi"."\r\n");
fwrite($fp,"電話番号：$tel"."\r\n");
fwrite($fp,"アドレス：$add"."\r\n");
fwrite($fp,"どこで知ったのか：$select_know"."\r\n");
fwrite($fp,"質問のカテゴリ：$cate"."\r\n");
fwrite($fp,"質問内容：$coments"."\r\n");
fwrite($fp,"\r\n");
fclose($fp); ?>
