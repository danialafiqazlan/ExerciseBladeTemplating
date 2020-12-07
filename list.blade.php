@extends('layouts.app')

@section('content')
    <h1>List of eBooks</h1>

    <?php
    
        for ($x = 0; $x <= 4; $x++)
        {
            print 'Title: '.$data[$x][0].'<br>';
            print 'ISBN: '.$data[$x][1].'<br>';
            print 'Category: '.$data[$x][2].'<br>';
            print 'No. of Pages: '.$data[$x][3].'<br>';
            print '<br>';
        }


    ?>
@endsection