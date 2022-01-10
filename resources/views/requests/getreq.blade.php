<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET Requests</title>
</head>
<body>

<h3>Get Requests</h3>


<form method="get" name="getform">
    @csrf
    <button type="submit" class="btnallposts">Получить посты</button>
</form>

<div class="posts">

</div>


<script>

    let btn = document.querySelector('.btnallposts');
    let blockposts = document.querySelector('.posts');

    btn.addEventListener('click', function (e) {
        e.preventDefault();
        let alldatas = '';

        var xhr = new XMLHttpRequest();
        const url = "{{ route('allposts') }}";
        xhr.open("GET", url);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-url');
        xhr.addEventListener("readystatechange", function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alldatas = JSON.parse(xhr.responseText);
            }

            for (var key in alldatas) {
                console.log(alldatas[key].title);
                console.log(alldatas[key].content);
                console.log("");

                let b = document.createElement('b');
                let span = document.createElement('span');
                let br = document.createElement("br");

                b.innerHTML = alldatas[key].title;
                span.innerHTML = alldatas[key].content;
                blockposts.appendChild(b);
                blockposts.appendChild(br);
                blockposts.appendChild(span);
            }

        });

        xhr.send();

    });


</script>


</body>
</html>