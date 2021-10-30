<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DbOperation extends Controller
{
function showDB(){
  $result= DB::select('SELECT * FROM `student`');
  $encode=json_encode($result);
  $final=json_decode($encode);
  return view('HomePage',['student'=>$final]);
}
function insertData(Request $req){
    $Name=$req->input('Name');
    $Roll=$req->input('Roll');
    $Class=$req->input('Class');
    $result=DB::insert('INSERT INTO `student`( `Name`, `Roll`, `Class`) VALUES (?,?,?)',[$Name,$Roll,$Class]);
    if($result==true){
        return 'success';
    }
    else{
        return 'failed';
    }
}

function deleteData(Request $req){
$id=$req->input('id');
$result=DB::delete('DELETE FROM `student` WHERE `id`=?',[$id]);
if($result==true){
    return 'success';
}
else{
    return 'failed';
}

}

function updateData(Request $req){
    $id=$req->input('id');
    $Name=$req->input('Name');
    $Roll=$req->input('Roll');
    $Class=$req->input('Class');
    $result=DB::update('UPDATE `student` SET `Name`=?,`Roll`=?,`Class`=? WHERE `id`=?',[$Name,$Roll,$Class,$id]);
    if($result==true){
        return 'success';
    }
    else{
        return 'failed';
    }
}

}
