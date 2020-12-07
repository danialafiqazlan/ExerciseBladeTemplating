<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function master()
    {
        return view('ebookapp.master');
    }

    public function nav()
    {
        return view('ebookapp.nav');
    }

    public function about()
    {
        return view('ebookapp.about');
    }

    public function list()
    {
        $data = array(
            array ('The Hunger Games', 9780439023481, 'Adventure', 374),
            array ('Harry Potter and the Order of the Phoenix', 9780439358071, 'Fantasy', 870),
            array ('Twilight', 9780316015844, 'Romance', 501),
            array ('The Fault in Our Stars', 9780142424179, 'Contemporary', 318),
            array ('Divergent', 9780062024039, 'Science Fiction', 487)
        );
        return view('ebookapp.list')->with('data', $data);
    }
}
