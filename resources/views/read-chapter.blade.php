<html>
    <head>
    <title>Web Reader</title>
    </head>
<body>
    <h1>{{ $book_name }}</h1>
    <h2>{{ $bible_version }}</h2>

@for($i = 1; $i <= $number_of_chapters; $i++)
    <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
@endfor
<hr>

<pre>
@include("chapter" . $chapter_number)
</pre>

</body>
</html>