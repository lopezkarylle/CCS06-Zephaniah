<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZephaniahController extends Controller
{
    const BOOK_NAME = 'Zephaniah';
    const BIBLE_VERSION = 'King James Version';
    const CHAPTERS = 3;
    
    public function index()
    {
        return view('index',[
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'number_of_chapters' => static::CHAPTERS
    ]);
    }

    public function readByChapter($chapter_number)
    {
        return view('read-chapter',[
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'number_of_chapters' => static::CHAPTERS,
            'chapter_number' => $chapter_number
        ]);
    }

    public function readAllChapters()
    {
        return view('all-chapters',[
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'number_of_chapters' => static::CHAPTERS
        ]);
    }
}
