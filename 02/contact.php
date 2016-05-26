<header>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>お問合せ</title>
    <h1>◇◆◇ お問合せ ◇◆◇</h1>
</header>

<body>
<form action="result.php" method="POST" >

    <table align="center" border="1" rules="all" frame="void">

        <div >
            <tr><td>姓<span>(必須)</span></td>
            <td><input  type="text" name="sei" size="15" maxlength="40" class="input-text" placeholder="山田" required /></td>
            </tr>
        </div>

        <div >
            <tr><td>名<span>(必須)</span></td>
            <td><input  type="textbox" name="mei" size="15" maxlength="40" class="input-text" placeholder="太郎" required /></td>
            </tr>
        </div>

        <div >
            <tr><td>性別<span>(必須)</span></td>
            <td><input id="rd1" type="radio" name="gender"value="g1" required="true"　/>
            <label for="rd1" class="error">男性</label>
            <input id="rd2" type="radio" name="gender"value="g2" />
            <label for="rd2" class="error">女性</label>
            <input id="rd3" type="radio" name="gender"value="g3" />
            <label for="rd3" class="error">不明</label></td>
            </tr>
        </div>

        <div >
            <tr><td>住所<span>(必須)</span></td>
            <td><input type="textbox" name="residence" size="40" placeholder="東京都○○" required /></td>
            </tr>
        </div>

        <div >
            <tr><td>電話番号<span>(必須)</span></td>
            <td><input type="textbox" name="tel1" size="3" maxlength="4" onKeyup="this.value=this.value.replace(/[^0-9]+/,'')" placeholder="123" required />-
            <input type="textbox" name="tel2" size="3" maxlength="4" onKeyup="this.value=this.value.replace(/[^0-9]+/,'')" placeholder="456" required />-
            <input type="textbox" name="tel3" size="3" maxlength="4" onKeyup="this.value=this.value.replace(/[^0-9]+/,'')" placeholder="789" required /></td>
            </tr>
        </div>

        <div >
            <tr><td>アドレス<span>(必須)</span></td>
            <td><input type="textbox" name="ad1" size="24" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/,'')" placeholder="abcd" required />@
                <input type="textbox" name="ad2" size="10" onKeyup="this.value=this.value.replace(/[^0-9a-z]+\.[a-z]{2,3}$/,'')" pattern="[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="example.com" required /></td>
            </tr>
        </div>

        <div >
            <tr><td>どこでご知りましたか</td>

            <td><input id="ch1" type="checkbox" name="know[]" value="k1" title="いずれか選択してください"　>
            <label for="ch1">紙面</label>
            <input id="ch2" type="checkbox" name="know[]" value="k2"　title="いずれか選択してください"　>
            <label for="ch2">SNS</label>
            <input id="ch3" type="checkbox" name="know[]" value="k3" title="いずれか選択してください" >
            <label for="ch3">テレビ</label>
            <input id="ch4" type="checkbox" name="know[]" value="k4" title="いずれか選択してください" checked="checked">
            <label for="ch4">その他</label></td>
            <?php
            if(isset($_POST['know[]'])){
                echo "選択してください";
            }?>            </tr>
        </div>

        <div >
            <tr><td>お問合せのカテゴリ<span>(必須)</span></td>
            <td><select name="category" required />
            <option value="">選択してください</option>
            <option value="1">質問・お問合せ</option>
            <option value="2">その他</option>
            </select></td>
            </tr>
        </div>

        <div >
            <tr>
            <td colspan="2">お問合せ内容</td>
            </tr><br>
            <tr><td colspan="2">
            <textarea  name="coments" col="50" rows="5"　value="" />
            </textarea></td></tr><br>
        </div>
    </table>
</body>
<footer>
    <div align="center">
        <input id="reset" type="reset" >
        <input id="submit" type="submit" >

    </div>
    <img src="figure_ta-da.png" align="left" width="80px" height="80px">

</footer>
</form>
