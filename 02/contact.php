<header>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>お問合せ</title>
    <h1>お問合せ</h1>
</header>

<body>
<form action="result.php" method="POST">

    <table align="center" >

        <div #sei>
            <tr><td>姓</td>
            <td><input  type="text" name="sei" size="15" maxlength="40" class="input-text" ></td>
            </tr>
        </div>

        <div #mei>
            <tr><td>名</td>
            <td><input  type="textbox" name="mei" size="15" maxlength="40" class="input-text" ></td>
            </tr>
        </div>

        <div #gen>
            <tr><td>性別</td>
            <td><input id="rd1" type="radio" name="gender" value="g1">
            <label for="rd1">男性</label>
            <input id="rd2" type="radio" name="gender" value="g2">
            <label for="rd2">女性</label>
            <input id="rd3" type="radio" name="gender" value="g3">
            <label for="rd3">不明</label></td>
            </tr>
        </div>

        <div #res>
            <tr><td>住所</td>
            <td><input type="textbox" name="residence" size="40"></td>
            </tr>
        </div>

        <div #tel>
            <tr><td>電話番号</td>
            <td><input type="textbox" OnKeyPress="onlyNumeric()" name="tel1" size="3" maxlength="4" >-
            <input type="textbox" OnKeyPress="onlyNumeric()" name="tel2" size="3" maxlength="3" >-
            <input type="textbox" OnKeyPress="onlyNumeric()" name="tel3" size="3" maxlength="3" ></td>
            </tr>
        </div>

        <div #ad>
            <tr><td>アドレス</td>
            <td><input type="textbox" name="ad1" size="24">@<input type="textbox" name="ad2" size="10"></td>
            </tr>
        </div>

        <div #know>
            <tr><td>どこで知ったか</td>
            <td><input id="ch1" type="checkbox" name="know" value="know1">
            <label for="ch1">雑誌</label>
            <input id="ch2" type="checkbox" name="know" value="know2">
            <label for="ch2">新聞</label>
            <input id="ch3" type="checkbox" name="know" value="know3">
            <label for="ch3">テレビ</label>
            <input id="ch4" type="checkbox" name="know" value="know4">
            <label for="ch4">その他</label></td>
            </tr>
        </div>

        <div #question>
            <tr><td>質問のカテゴリ</td>
            <td><select name="category">
            <?php
            $category=array('あ','い','う','え','お');
            foreach($category as $cat){
                echo "<option value=\"{$cat}\"> {$cat}</option>";
            }
            ?>
            </select></td>
            </tr>
        </div>

        <div #question2>
            <tr>
            <td>質問内容</td></tr><br>

            <tr><td colspan="2">
            <textarea  name="coments" align="center" cols="58" rows="5">

        </textarea></td></tr><br>
        </div>
    </table>
<div align="center">
    <input type="submit" size="10" align="center">
</div>
</body>
<footer>
</footer>
</form>
