<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

use Illuminate\Http\Request;
use App\Book;
use App\Imports\BookCsvImport;

use Illuminate\Support\Facades\Validator;

use Maatwebsite\Excel\Facades\Excel;

class BookCsv extends Controller
{
    public function bookCsvImport(){
        Excel::import(new BookCsvImport,request()->file('file'));
        $books=Book::all();
        echo 'success';
    }

    public function script(){
//$process = new Process('python /path/to/your_script.py'); //This won't be handy when going to pass argument
// $process = new Process(['python','hello.py']);
// $process->run();

// // executes after the command finishes
// if (!$process->isSuccessful()) {
//     throw new ProcessFailedException($process);
// }

// echo $process->getOutput();
$a=shell_exec("python scripts/runscript.py 2>&1 Twilight");
echo $a;

    }
}



