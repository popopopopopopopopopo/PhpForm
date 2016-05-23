<header>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>お問合せ</title>
    <h1>□<span>お問合せ</span>□</h1>
</header>

<body>
<form action="result.php" method="POST">

    <table align="center" border="1" rules="all" frame="void">

        <div >
            <tr><td>姓</td>
            <td><input  type="text" name="sei" size="15" maxlength="40" class="input-text" ></td>
            </tr>
        </div>

        <div >
            <tr><td>名</td>
            <td><input  type="textbox" name="mei" size="15" maxlength="40" class="input-text" ></td>
            </tr>
        </div>

        <div >
            <tr><td>性別</td>
            <td><input id="rd1" type="radio" name="gender" value="g1">
            <label for="rd1">男性</label>
            <input id="rd2" type="radio" name="gender" value="g2">
            <label for="rd2">女性</label>
            <input id="rd3" type="radio" name="gender" value="g3">
            <label for="rd3">不明</label></td>
            </tr>
        </div>

        <div >
            <tr><td>住所</td>
            <td><input type="textbox" name="residence" size="40"></td>
            </tr>
        </div>

        <div >
            <tr><td>電話番号</td>
            <td><input type="textbox" OnKeyPress="onlyNumeric()" name="tel1" size="3" maxlength="4" >-
            <input type="textbox" OnKeyPress="onlyNumeric()" name="tel2" size="3" maxlength="3" >-
            <input type="textbox" OnKeyPress="onlyNumeric()" name="tel3" size="3" maxlength="3" ></td>
            </tr>
        </div>

        <div >
            <tr><td>アドレス</td>
            <td><input type="textbox" name="ad1" size="24">@<input type="textbox" name="ad2" size="10"></td>
            </tr>
        </div>

        <div >
            <tr><td>どこで知ったか</td>
            <td><input id="ch1" type="checkbox" name="know[]" value="k1">
            <label for="ch1">雑誌</label>
            <input id="ch2" type="checkbox" name="know[]" value="k2">
            <label for="ch2">新聞</label>
            <input id="ch3" type="checkbox" name="know[]" value="k3">
            <label for="ch3">テレビ</label>
            <input id="ch4" type="checkbox" name="know[]" value="k4">
            <label for="ch4">その他</label></td>
            </tr>
        </div>

        <div >
            <tr><td>質問のカテゴリ</td>
            <td><select name="category">
            <option >選択してください</option>
            <option >質問・お問合せ</option>
            <option >あああ</option>
            <option >その他</option>
            </select></td>
            </tr>
        </div>

        <div >
            <tr>
            <td>質問内容</td>
            </tr><br>

            <tr><td colspan="2">
            <textarea  name="coments" align="center" col="50" rows="5">
            </textarea></td></tr><br>
        </div>
    </table>
<div #submit align="center">
    <input type="reset" >
    <input type="submit" >

</div>
</body>
<footer>
</footer>
</form>
