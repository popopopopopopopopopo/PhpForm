<header>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>お問合せ</title>
    <h1>◇◇◇ お問合せ ◇◇◇</h1>
</header>

<body>
<form action="result.php" method="POST">

    <table align="center" border="1" rules="all" frame="void">

        <div >
            <tr><td>姓</td>
            <td><input  type="text" name="sei" size="15" maxlength="40" class="input-text" placeholder="例)山田" required></td>
            </tr>
        </div>

        <div >
            <tr><td>名</td>
            <td><input  type="textbox" name="mei" size="15" maxlength="40" class="input-text"placeholder="例)太郎" required></td>
            </tr>
        </div>

        <div >
            <tr><td>性別</td>
            <td><input id="rd1" type="radio" name="gender"value="g1" required="true">
            <label for="rd1" class="error">男性</label>
            <input id="rd2" type="radio" name="gender"value="g2" required="true">
            <label for="rd2" class="error">女性</label>
            <input id="rd3" type="radio" name="gender"value="g3" required="true">
            <label for="rd3" class="error">不明</label></td>
            </tr>
        </div>

        <div >
            <tr><td>住所</td>
            <td><input type="textbox" name="residence" size="40" placeholder="例)東京都○○" required ></td>
            </tr>
        </div>

        <div >
            <tr><td>電話番号</td>
            <td><input type="textbox" onKeyup="this.value=this.value.replace(/[^0-9]+/,'')" name="tel1" size="3" maxlength="4" placeholder="例)123"　required />-
            <input type="textbox" onKeyup="this.value=this.value.replace(/[^0-9]+/,'')" name="tel2" size="3" maxlength="3" placeholder="456" required />-
            <input type="textbox" onKeyup="this.value=this.value.replace(/[^0-9]+/,'')" name="tel3" size="3" maxlength="3" placeholder="789" required /></td>
            </tr>
        </div>

        <div >
            <tr><td>アドレス</td>
            <td><input type="textbox" name="ad1" size="24" placeholder="例)abcde" style="ime-mode:disabled;" pattern="^[0-9A-Za-z]+$"　required>@
                <input type="textbox" name="ad2" size="10" placeholder="example.com" pattern="[a-z0-9.-]+\.[a-z]{2,3}$"　required></td>
            </tr>
        </div>

        <div >
            <tr><td>どこでご覧になりましたか</td>
            <td><input id="ch1" type="checkbox" name="know[]" value="k1" >
            <label for="ch1">雑誌</label>
            <input id="ch2" type="checkbox" name="know[]" value="k2" >
            <label for="ch2">新聞</label>
            <input id="ch3" type="checkbox" name="know[]" value="k3" >
            <label for="ch3">テレビ</label>
            <input id="ch4" type="checkbox" name="know[]" value="k4" >
            <label for="ch4">その他</label></td>
            </tr>
        </div>

        <div >
            <tr><td>質問のカテゴリ</td>
            <td><select name="category" required>
            <option >選択してください</option>
            <option >質問・お問合せ</option>
            <option >その他</option>
            </select></td>
            </tr>
        </div>

        <div >
            <tr>
            <td>質問内容</td>
            </tr><br>

            <tr><td colspan="2">
            <textarea  name="coments" col="50" rows="5" value="">記入してください。
            </textarea></td></tr><br>
        </div>
    </table>
<div align="center">
    <input id="reset" type="reset" >
    <input id="submit" type="submit" >

</div>
</body>
<footer>
</footer>
</form>
