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

<div class="allposts">
    {{--@if(isset($allposts) && $allposts != '')--}}
        {{--@foreach($allposts as $post)--}}
            {{--<b>{{ $post->title }}</b>--}}
            {{--<span>{{ $post->content }}</span>--}}
            {{--<br><br>--}}
        {{--@endforeach--}}
    {{--@endif--}}
</div>

{{--<script src="public/js/getPostsAjax.js"></script>--}}

<script>
    let btn = document.querySelector('.btnallposts');
    let allposts = document.querySelector('.allposts');


    btn.addEventListener('click', function (e) {
        e.preventDefault();

        console.log('btn click');

        const xhr = new XMLHttpRequest();
        xhr.open("GET", "{{ route('allpst') }}");
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.addEventListener('readystatechange', function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let alldatas = xhr.responseText;
                let objDatas = JSON.parse(alldatas);

                for (let key in objDatas) {
                    console.log(objDatas[key].title);
                    console.log(objDatas[key].content);
                    console.log("");
                }

            }



            

        });

        xhr.send();



    });



</script>



</body>
</html>