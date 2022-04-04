<html>
    <head>
    <title>Web Reader</title>
    </head>
<body>
    <h1 class=bookname>{{ $book_name }}</h1>
    <h2 class=version>{{ $bible_version }}</h2>

@for($i = 1; $i <= $number_of_chapters; $i++)
<h3>
    <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
</h3>
@endfor

<h3>
    <a href="/all-chapters">Read All Chapters</a>
</h3>

</body>
</html>