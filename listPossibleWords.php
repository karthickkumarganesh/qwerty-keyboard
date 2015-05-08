<?php
/*
Function Details:
This function is simplified implementation of T9 input method for mobile phone. It get users' input and returns list
of possible words. Use some kind of dictionary, and return all possible words from the dictionary.txt file.

@param string $input - numbers 0-9 inserted by user
@return array - list of possible words
*/
error_reporting(0);
function listPossibleWords(){
    print_r($_POST);
    $mappingarray=array('2'=>'abc','3'=>'def','4'=>'ghi','5'=>'jkl','6'=>'mno','7'=>'pqrs','8'=>'tuv','9'=>'wxyz');
    $dictionary=file_get_contents('dictionary.txt');
    $dicarray=explode("\n",$dictionary);
    //print_r($dicarray);
    //print_r($mappingarray);
    print_r(array_product($mappingarray));
}
listPossibleWords();
?>