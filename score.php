<?php
/**
 * Created by PhpStorm.
 * User: Yassine
 * Date: 26/10/2019
 * Time: 18:13
 */
if(isset($_POST['id'])&& isset($_POST['score'])){
    $usersArray=array();
    //get file content line by line
    $fileLines = file('Score.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    //separate every line in two variable name and sscore
    foreach ($fileLines as $line) {
        $lineSpilit = preg_split("/\:/", $line);
        $lineSpilit[1] = ( int )$lineSpilit[1];
        array_push($usersArray,$lineSpilit);
    }
    //get names
    $id = array();
    foreach ($usersArray as $key => $row)
    {
        $id[$key] = $row['0'];
    }
    //cast score
    $score = (int)$_POST['score'];
    //check if the name exist
    if (in_array($_POST['id'], $id))
    {
        foreach (array_keys($usersArray) as $i)
        {   //found the name position
            if ($usersArray[$i][0]==$_POST['id']){
                //check if the sending score is bigger that the existing
                if ($usersArray[$i][1]<$score){
                    $usersArray[$i][1]=$score;
                }
                break;
            }
        }
    }
    //if the name doesn't exist we add the sending value to the array of scores
    else
    {
        $list = array();
        array_push($list, $_POST['id'], $_POST['score']);
        array_push($usersArray, $list);
    }

    //get the scores and sort the array in a desc order
    $scores = array();
    foreach ($usersArray as $key => $row) {
        $scores[$key] = $row['1'];
    }
    array_multisort($scores, SORT_DESC, $usersArray);
    //save the top 5 scores in the file
    $fn = fopen("Score.txt","w");
    for ($i=0;$i<5;$i++){
        $txt=$usersArray[$i][0].":".$usersArray[$i][1]."\n";
        fwrite($fn, $txt);
    }
    fclose($fn);
}