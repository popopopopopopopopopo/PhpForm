
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
                echo $_POST['sei']." ".$_POST['mei']."<br>";
                ?>
            </td>
        </tr></div>

        <div><tr>
            <td>性別</td>
            <td><?php
                if($_POST["gender"] === "g1"){
                    echo "男性<br>";
                }elseif($_POST["gender"] === "g2"){
                    echo "女性<br>";
                }else{
                    echo "不明<br>";
                } ?>
            </td>
        </tr></div>

        <div><tr>
            <td>住所</td>
            <td><?php
                echo $_POST['residence']."<br>";
                ?>
            </td>
        </tr></div>

        <div><tr>
            <td>電話番号</td>
            <td><?php
                echo $_POST['tel1']."-".$_POST['tel2']."-".$_POST['tel3']."<br>";
                ?>
            </td>
        </tr></div>

        <div><tr>
            <td>アドレス</td>
            <td><?php
                echo $_POST['ad1']."@".$_POST['ad2']."<br>";
                ?>
            </td>
        </tr></div>

        <div><tr>
            <td>どこで知ったのか</td>
            <td><?php
                if(empty($_POST["know"])){
                    echo "選択してください<br>";
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
            echo "{$_POST['category']}";
             ?>
            </td>
        </tr></div>

        <div><tr>
            <td colspan="2">質問内容</td>
        </tr>
        <tr>
            <td colspan="2"><fieldset align="center" col="50" >
                <?php echo nl2br($_POST["coments"])."<br>"; ?>
                </fieldset>
            </td>
        </tr></div>
    </table>
</body>
</html>
