<form action="result.php" method="POST">
<head>
    <title>お問合せ</title>
</head>
<body>
    <h1>お問合せ</h1>
    <p>
    姓
    <input  type="textbox" name="sei" >
</p><p>
    名
    <input  type="textbox" name="mei" >
</p><p>
    性別
    <input id="rd1" type="radio" name="gender" value="g1">
    <label for="rd1">男性</label>
    <input id="rd2" type="radio" name="gender" value="g2">
    <label for="rd2">女性</label>
    <input id="rd3" type="radio" name="gender" value="g3">
    <label for="rd3">不明</label>
</p><p>
    住所
    <input type="textbox" name="residence" size="40">
</p><p>
    電話番号
    <input type="textbox" name="tel1" size="5" >-
    <input type="textbox" name="tel2" size="5" >-
    <input type="textbox" name="tel3" size="5" >
</p><p>
    アドレス
    <input type="textbox" name="ad1" >@<input type="textbox" name="ad2" size="10">
</p><p>
    どこで知ったか
    <input id="ch1" type="checkbox" name="know" value="know1">
    <label for="ch1">雑誌</label>
    <input id="ch2" type="checkbox" name="know" value="know2">
    <label for="ch2">新聞</label>
    <input id="ch3" type="checkbox" name="know" value="know3">
    <label for="ch3">テレビ</label>
    <input id="ch4" type="checkbox" name="know" value="know4">
    <label for="ch4">その他</label>
</p><p>
    質問のカテゴリ
    <select name="category">
        <?php
        $category=array('あ','い','う','え','お');
        foreach($category as $cat){
            echo "<option value=\"{$cat}\"> {$cat}</option>";
        }
        ?>
        </select>
</p><p>
    質問内容<br>
    <textarea  name="coments" >
    記載してください。
    </textarea>
</p>
    <input type="submit">
</body>
</form>
<style>
{
    text-align: center;
}
form{
    border-radius: 5px;
    text-align: center;
    padding: 2em 5em;
    background: #F0F8FF;}
p{
    border-radius: 5px;
    font-weight: bold;

}
label{
}
textarea{

}
