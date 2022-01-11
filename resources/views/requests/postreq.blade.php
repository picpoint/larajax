<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Post Requests</title>
</head>
<body>

    <h3>Post Requests</h3>

    <form method="post" name="recdata">
        @csrf
        @method('POST')
        <input type="text" name="title" class="title">
        <br>
        <textarea name="content" cols="30" rows="10" class="content"></textarea>
        <br>
        <button type="submit" class="btnsend">Запостить</button>
    </form>


<script>

    let btnsend = document.querySelector('.btnsend');
    let title = document.querySelector('.title');
    let content = document.querySelector('.content');
    let token = document.getElementsByTagName('input')[0];


    btnsend.addEventListener("click", (e) => {
        e.preventDefault();
        console.log(title.value);
        console.log(content.value);
        console.log(token.value);

        const params = "_token=" + token.value + "&title=" + title.value + "&content=" + content.value;

        var xhr = new XMLHttpRequest();
        const url = "{{ route('recpost') }}";
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.addEventListener("readystatechange", () => {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
            }
        });

        xhr.send(params);

    });


</script>


</body>
</html>