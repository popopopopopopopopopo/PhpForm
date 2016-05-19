<form action="result.php" method="get">
    <label >姓</label>
    <input  type="textbox" name="sei"></br>

    <label >名</label>
    <input  type="textbox" name="mei"></br>

    <label >性別</label>
    <input type="radio" name="radio" value="r1">男
    <input type="radio" name="radio" value="r2">女
    <input type="radio" name="radio" value="r3">不明</br>

    <label >アドレス</label>
    <input type="textbox" name="ad">@<input type="textbox" name="ad"></br>

    <label >電話番号</label>
    <input type="textbox" name="tel">-<input type="textbox" name="tel">-<input type="textbox" name="tel"></br>

    <label >住所</label>
    <input type="textbox" name="residence"></br>

    <label >質問のカテゴリ</label>
    <select name="category">
        <option>あ</option>
        <option>い</option>
        <option>う</option>
        <option>え</option>
    </select></br>

    <label >質問内容</label>
    <textarea clos="30" rows="5" name="coments">
        内容をどうぞ。
    </textarea></br>

    <label >どこで知ったか</label>
    <input type="checkbox" name="know" value="know1">
    <input type="checkbox" name="know" value="know2">
    <input type="checkbox" name="know" value="know3">
    <input type="checkbox" name="know" value="know4"></br>

    <input type="submit">

</form>
