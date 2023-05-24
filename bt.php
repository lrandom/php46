<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <div class="fileWrapper">
        <ul>
            <li>
                <input type="file" name="img"/>
                <div onclick="remove(this)">x</div>
            </li>
        </ul>

    </div>
    <div style="border: 1px solid black; padding:10px;width:20px" onclick="addNewFileInput()">+</div>
    <button>Submit</button>
</form>

<script>
    function addNewFileInput() {
        const fileInput = document.querySelector('.fileWrapper ul li');
        const newFileInput = fileInput.cloneNode(true);
        document.querySelector('.fileWrapper ul').appendChild(newFileInput);
    }

    function remove(node) {
        node.parentNode.remove();
    }
</script>
</body>
</html>