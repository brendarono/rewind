<?php
/*
  Consider the following string(bbit3b.txt)
  It contains a quote,the author(surname,first_name second_name),date and the url_reference
  @Required
  1. Create a new branch from the develop branch called feature-rewind-1
  2. Display the following data as follows (NB: The author's  first_name can be clicked to open the url_reference on a new tab)

      (a). "Quote" - first_name second_name,surname (YEAR).
      (b). .......
      (c). .......
      (For example                                                                                                  *
        a) "The worth and excellency of a soul is to be measured by the object of its love." -  HENRY P,SCOUGAL (1678).                                      *
      )
    Summary
     -- Total quotes : total.
     -- Total unique authors : total(list of author surnames - comma separated)
  3. Commit changes of the new branch
  4. Merge changes with the development branch
  5. Push the changes to your repo.
  6. Submit the github url on google classroom (Check Quiz 1 3B)
 */

 $rewind1 = "'Joy is the serious business of heaven.'.LEWIS,CLIVE STAPLES.1964-01-01.https://bit.ly/2HwPJd6
|'We were not meant to be somebody--we were meant to know Somebody'.PIPER,JOHN STEPHEN.2011-07-17.https://bit.ly/2r31InJ|'He who sings prays twice.'.Hipponensis,Aurelius Augustinus.430-02-30.https://bit.ly/2JwSHuH
|'The task of the modern educator is not to cut down jungles but to irrigate deserts.'.LEWIS,CLIVE STAPLES.1943-09-23.https://bit.ly/2HwPJd6
|'There is not one blade of grass, there is no color in this world that is not intended to make us rejoice.'.Calvin,John C.1530-10-09.https://www.brainyquote.com/authors/john_calvin|
'The worth and excellency of a soul is to be measured by the object of its love.'.SCOUGAL,HENRY P.1678-08-23.https://bit.ly/2Kh1VMR
|'It is not the strength of your faith but the object of your faith that actually saves you.'.KELLER,TIMOTHY J.2013-01-14.https://bit.ly/2I0WocO
|'Truth is the agreement of our ideas with the ideas of God.'.Edwards,Jonathan Prtn.1703-09-23.https://bit.ly/2HSMz2U
|'Each day we are becoming a creature of splendid glory or one of unthinkable horror.'.LEWIS,CLIVE STAPLES.1952-02-01.https://bit.ly/2HwPJd6|'At your right hand are pleasures evermore..'.David,Jesse soun.1200-09-29.https://www.google.com|'Tolerance is not about not having beliefs. It is about how your beliefs lead you to treat people who disagree with you.'.KELLER,TIMOTHY J.2015-10-23.https://bit.ly/2I0WocO
|'It is better to lose your life than to waste it.'.PIPER,JOHN STEPHEN.2000-05-33.https://bit.ly/2r31InJ|
'It is not opinions that man needs: it is TRUTH...'.Bonar Horatius B.1885-02-12.https://www.goodreads.com/author/quotes/133605.Horatius_Bonar|
'Nothing could be more irrational than the idea that something comes from nothing.'SPROUL,CHARLES ROBERT.2006-03-23.https://bit.ly/2HQ4TJV
|'He is no fool who gives what he cannot keep to gain that which he cannot lose.'.Elliot,James Phillip.1944-07-26.https://www.brainyquote.com/authors/jim_elliot";
//to break string to array
$str = str_replace("| ", ",", $rewind1);
$rewind1_array= explode('|',$str);
$rewind1_array2=[];
$rewind1_array3=[];

//echo json_encode($rewind1_array);


//foreach ($rewind1_array as &$value) {
// $arr = array();
// foreach (explode(', ', $value) as $el) {
//  $ret = explode(':', $el);
//  $arr[$ret[0]] = $ret[1];
// }
// $value = $arr;
// array_push($rewind1_array3,$value);
//}

foreach ($rewind1_array as $result){

 $rewind1_array2[] = str_replace(".", " ", $result);
// print_r($rewind1_array2);
// $ret = explode('.', $result);
 foreach ($rewind1_array2 as $res){
  print_r($res .'<br/>');
 }

}

//print_r($rewind1_array);
//foreach ($rewind1_array as $result1) {
// $rewind1_array1= explode('|',$result1);
// array_push($rewind1_array2, $rewind1_array1);

// foreach ($rewind1_array1 as $result2){
//  $rewind1_array2= explode('|',$result2);
//  array_push($rewind1_array3,$result2);
//  print_r($result2);
// }

//}
//echo json_encode($rewind1_array3);


//print_r($myJSON);
// printf($rewind1_array);
// foreach($rewind1_array as $word):
//   echo $word.'<br/>';
// endforeach;


//echo json_encode($array_one);

function comma_separated_to_array($string, $separator = '.')
{
 //Explode on comma
 $vals = explode($separator, $string);

 //Trim whitespace
 foreach($vals as $key => $val) {
  $vals[$key] = trim($val);
 }
 //Return empty array if no items found
 //http://php.net/manual/en/function.explode.php#114273
 return array_diff($vals, array(""));
}

$array_one = comma_separated_to_array($rewind1);
?>
<html>
<head>
<style>
ol {list-style: lower-alpha;}
</style>
</head><body>
<ol>
<?php
foreach($rewind1_array as $rewind1){
?>

<!--  <li>--><?php //echo $rewind1[2]; ?><!--</li>-->
<?php } ?>

</ol>
</body>
</html>