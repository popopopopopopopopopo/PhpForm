<head>
    <title>お問合せ</title>
    お問合せ
</head>
<body>
<form action="result.php" method="pOST">

    <table border="0" align="center">

        <tr><td>姓</td>
            <p class="errorTxt" id="inquiry_item_ext_title_10_errmsg" style="display:none">名前を入力してください。</p>
            <td><input  type="text" name="sei" size="15" maxlength="40" class="input-text" ></td>
        </tr>
        <tr><td>名</td>
            <p class="errorTxt" id="inquiry_item_ext_title_10_errmsg" style="display:none">名前を入力してください。</p>
            <td><input  type="textbox" name="mei" size="15" maxlength="40" class="input-text" ></td>
        </tr>

    <tr><td>性別</td>
        <p class="errorTxt" id="inquiry_item_ext_title_10_errmsg" style="display:none">性別を選んでください。</p>
        <td><input id="rd1" type="radio" name="gender" value="g1">
        <label for="rd1">男性</label>
        <input id="rd2" type="radio" name="gender" value="g2">
        <label for="rd2">女性</label>
        <input id="rd3" type="radio" name="gender" value="g3">
        <label for="rd3">不明</label></td>
    </tr>

    <tr><td>住所</td>
            <p class="errorTxt" id="inquiry_item_ext_title_10_errmsg" style="display:none">住所を入力してください。</p>
        <td><input type="textbox" name="residence" size="40"></td>
    </tr>

    <tr><td>電話番号</td>
        <p class="errorTxt" id="inquiry_item_ext_title_10_errmsg" style="display:none">電話番号を入力してください。</p>
        <td><input type="textbox" name="tel1" size="4" maxlength="4" >-
        <input type="textbox" name="tel2" size="4" maxlength="3" >-
        <input type="textbox" name="tel3" size="4" maxlength="3" ></td>
    </tr>

    <tr><td>アドレス</td>
        <td><input type="textbox" name="ad1" >@<input type="textbox" name="ad2" size="10"></td>
    </tr>

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

<tr>
    <td>質問内容<br></td></tr>
</table>
    <textarea  name="coments" cols="50" rows="5">
    記載してください。
</textarea><br>
<div align="center">
    <input type="submit" size="10">
</div>
</body>
</form>
<style type="text/css">
head{
    float: center;
    background-color: : #F0F8FF;
}
form{
    float: center;
    margin: auto;
    border: 3px;
    padding: 2em 5em;
    background: #F0F8FF;}
table{

    border-color: gray;
    border-top: none;
    border-bottom: none;
    }
textarea{
    margin-left: 200px;
}
div{

}
