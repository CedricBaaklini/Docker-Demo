<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>AJAX Demo with Docker</title>
        <link rel="stylesheet" href="AJAX%20Docker%20Style.css">
        <script src="showlang.js"></script>
    </head>
    <body>
        <h1> AJAX Docker Demo </h1>
        <form>
            <label>
                <select name="language" onchange="showlang(this.value)">
                    <option value = ""> Select a language: </option>
                    <option value = "Kotlin"> Kotlin </option>
                    <option value = "Swift"> Swift </option>
                    <option value = "Python"> Python </option>
                    <option value = "Dart"> Dart </option>
                </select>
            </label>
        </form>
        <br><br>
        <div id="txtHint"> Language infor will be listed here... </div>
    </body>
</html>
