<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- This is <input> and <label> label defines a label for several form elements -->

    <div>
        <label for="name">Your Name</label>
        <input type="text" id="name" name >
    </div>
    <br><br>

    <!-- <select> element defines a drop-down list
    <option> element defines an option that can be selected -->

    <div>
        <label for="mobiles">Choose a Mobile:</label>
        <select name="mobiles" id="mobiles">
            <option value="nokia">Nokia</option>
            <option value="iphone">Iphone</option>
            <option value="samsung">Samsung</option>
            <option value="blackberry">Blackberry</option>
            <option value="motorola">Motorola</option>
            <option value="mi">Xiaomi</option>
            <option value="nothing">Nothing</option>
        </select>
    </div><br><br>

    <div>
        <!-- <textarea> element defines a multi-line input field (a text area)
            rows attribute specifies the visible number of lines in a text area.
            The cols attribute specifies the visible width of a text area. -->
        <textarea name="joke" id="joke" cols="30" rows="10">
            Why did the website break up with the front-end developer?
            Because it caught them flirting with too many styles and couldn't handle the commitment to just one!
        </textarea>

    </div><br><br>

    <div>
        <!-- <button> element defines a clickable button -->
            <button type="btn" onclick="alert('Dont ignore this')"> Click Here</button>
    </div><br><br>

    <div>
        <!-- <fieldset> element is used to group related data in a form & <legend> element defines a caption for the <fieldset> element. -->
            <form action="/action_page.php">
                <fieldset>
                    <legend>Profile:</legend>
                    <label for="fname">Full Name:</label>
                    <br>
                    <input type="text" id="fname" name="fname" value="Phanindra Sapkota">
                    <br>
                    <label for="add">Address:</label><br>
                    <input type="text" id="add" name="add" value="Balaju">
                    <br><br>
                    <input type="submit" value="Submit">
                </fieldset>
            </form>
    </div>
    <br><br>

    <div>
        <!-- <datalist> element specifies a list of pre-defined options for an <input> element -->
        <form action="/action_page.php">
            <input list="mobiles">
            <datalist id="mobiles">
                <option value="Nokia">
                    <option value="Blackberry">
                        <option value="Samsung">
                            <option value="Motorola">
                                <option value="Microsoft Surface">

            </datalist>
        </form>
    </div>
    <br><br>

    <div>
        <!-- <output> element represents the result of a calculation -->
            <form action="/action_page.php"
            oninput="x.value=parseInt(a.value)+parseInt(b.value)">
            0
            <input type="range"  id="a" name="a" value="10">
            1000 +
            <input type="number" id="b" name="b" value="1000">
            =
            <output name="x" for="a b"></output>
            <br><br>
            <input type="submit">
        \</form>
    </div>





    






</body>
</html>