<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
?>

<form>
    <input type="text" name="my-input" id="my-input"/>
    <input type="submit" value="send!"/>
</form>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>

<script>
    $("#my-input").on("blur", function () {
        let value = $(this).val()
        if (value.length < 4) {
            alert("input must be 4-10")
            $(this).val("")
        }
    })

    //JavaScript
    //ECMAScript ES5 -> ES6 -> ES10
    function f() {
        if (1 < 2) {
            let x = 1
            console.log(x)
            for (let i = 0; i < 100; i++) {

            }
        }
        console.log(x)
    }

    for (let i = 1; i <= 3; i++) {
        setTimeout(function () {
            alert(i)
        }, i * 1000);
    }
</script>