
<html>
<header>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>お問合せ完了</title>
    <h1>○●○ お問合せ完了 ○●○</h1>
</header>
<body>
    <table align="center" border="1" rules="all" frame="void">

        <div><tr>
            <td>姓名</td>
            <td><?php
                echo $name=$_POST['sei']." ".$_POST['mei'];
                ?>
            </td>
        </tr></div>

        <div><tr>
            <td>性別</td>
            <td><?php
                $gender=$_POST["gender"];
                if($gender === "g1"){
                    echo $gender = "男性";
                }elseif($gender === "g2"){
                    echo $gender = "女性";
                }else{
                    echo $gender = "不明";
                } ?>
            </td>
        </tr></div>

        <div><tr>
            <td>住所</td>
            <td><?php
                echo $resi = $_POST['residence'];
                ?>
            </td>
        </tr></div>

        <div><tr>
            <td>電話番号</td>
            <td><?php
                echo $tel = $_POST['tel1']."-".$_POST['tel2']."-".$_POST['tel3'];
                ?>
            </td>
        </tr></div>

        <div><tr>
            <td>アドレス</td>
            <td><?php
                echo $add = $_POST['ad1']."@".$_POST['ad2'];
                ?>
            </td>
        </tr></div>

        <div><tr>
            <td>どこで知ったのか</td>
            <td><?php
                if(empty($_POST["know"])){
                    echo "選択してください";

                }else{
                    $know=$_POST["know"];
                    $check=array("k1"=>"雑誌","k2"=>"新聞","k3"=>"テレビ","k4"=>"その他");
                    foreach ($know as $value) {
                        echo $select_know = $check[$value]." ";
                    }
                } ?>
            </td>
        </tr></div>

        <div><tr>
            <td>質問のカテゴリ</td>
            <td><?php
                if($_POST["category"] === "1"){
                    echo $cate = "質問・お問合せ";
                }elseif($_POST["category"] === "2"){
                    echo $cate = "その他";
                } ?>
            </td>
        </tr></div>

        <div><tr>
            <td colspan="2">質問内容</td>
        </tr>
        <tr>
            <td colspan="2"><fieldset align="center" col="50" >
                <?php
                $coments = $_POST['coments'];
                echo nl2br($coments."<br>"); ?>
                </fieldset>
            </td>
        </tr></div>
    </table>
</body>
</html>
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
