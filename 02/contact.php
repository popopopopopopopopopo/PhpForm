
<head>
    <title>お問合せ</title>
</head>
<form action="result.php" method="pOST">
<h1>お問合せ</h1>
<body>
    <div class="mod_dl_table">
        <dl>
        <dt>姓</dt>
            <dd>
        <input  type="text" name="sei" size="15" maxlength="40" class="input-text" >
    </dd>
        <dt>名</dt>
        <dd>
    <input  type="textbox" name="mei" >
</dd>

    <dt>性別</dt>
<dd><input id="rd1" type="radio" name="gender" value="g1">
    <label for="rd1">男性</label>
    <input id="rd2" type="radio" name="gender" value="g2">
    <label for="rd2">女性</label>
    <input id="rd3" type="radio" name="gender" value="g3">
    <label for="rd3">不明</label>
</dd>

    <dt>住所</dt>
    <dd><input type="textbox" name="residence" size="40">
    </dd>

    <dt>電話番号</dt>
    <dd>
    <input type="textbox" name="tel1" size="5" >-
    <input type="textbox" name="tel2" size="5" >-
    <input type="textbox" name="tel3" size="5" >
</dd>

    <dt>アドレス</dt>
    <dd>
    <input type="textbox" name="ad1" >@<input type="textbox" name="ad2" size="10">
</dd>

    <dt>どこで知ったか</dt>
    <dd>
    <input id="ch1" type="checkbox" name="know" value="know1">
    <label for="ch1">雑誌</label>
    <input id="ch2" type="checkbox" name="know" value="know2">
    <label for="ch2">新聞</label>
    <input id="ch3" type="checkbox" name="know" value="know3">
    <label for="ch3">テレビ</label>
    <input id="ch4" type="checkbox" name="know" value="know4">
    <label for="ch4">その他</label>
</dd>

    <dt>質問のカテゴリ</dt>
    <dd>
    <select name="category">
        <?php
        $category=array('あ','い','う','え','お');
        foreach($category as $cat){
            echo "<option value=\"{$cat}\"> {$cat}</option>";
        }
        ?>
        </select>
    </dd>

    <dt>質問内容<br></dt>

    <textarea  name="coments" >
    記載してください。
    </textarea>



    <input type="submit">
</div>
</body>
</form>
<style type="text/css">

form{
    margin: auto;
    border: 3px;
    padding: 2em 5em;
    background: #F0F8FF;}
dt{
    float: center;
    width: 150px;
    font-weight: normal;
    padding: 5px;
    border-top: 1px ;
    margin-top: -1px;}
dd{
    margin-left: 150px;
    width: 100%;
    font-weight: normal;
    border-top: 1px ;
    margin-top: -1px;
}
textarea{
    margin-left: 150px;
}
