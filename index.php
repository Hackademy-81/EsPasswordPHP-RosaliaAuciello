<?php
// controllare che la password soddisfi i seguenti requisiti:
// avere una lunghezza di almeno 8 caratteri
// contenere almeno un numero
// contenere almeno una maiuscola
// contenere almeno un carattere speciale

// vericare che contenga 8 caratteri

// $password= readline("Inserisci la password:");
// $checkLength= false;

// if(strlen($password)>=8) {
//     $checkLength=true; 
// }; 

// var_dump($checkLength); 

// verificare che contiene un numero

// $checkNumber= false;
// for ($i=0; $i<strlen($password); $i++) {
//     if (is_numeric($password[$i])){
//         $checkNumber=true; 
//     }; 
// }; 

// var_dump($checkNumber); 

// verificare che contiene una lettera maiuscola

// $checkMaiuscl=false; 
// for($i=0; $i<strlen($password); $i++){
//     if(ctype_upper($password[$i])){
//         $checkMaiuscl=true; 
//     }; 
// }; 

// var_dump($checkMaiuscl); 

// verificare che contiene un carattere speciale 

// $specialChars= ["!","?",".","@","/","(", ")"]; 
// $checkSpecialChar= false; 
// foreach($specialChars as $specialChar) {
//     if(str_contains($password,$specialChar)){
//         $checkSpecialChar=true; 
//     }; 
// }; 

// var_dump($checkSpecialChar); 
// $password= readline("Inserisci password:"); 
// $check=false; 

// while (strlen($password)<=8) {
//     print_r("La password deve contenere almeno 8 caratteri\n"); 
//     $password= readline("Inserisci password:"); 
// }; 

// while ($check==false){
//     for ($i=0; $i<strlen($password); $i++) {
//         if(is_numeric($password[$i])){
//             $check=true; 
//         }; 


//     }; 
//     if($check==false){
//         print_r("La password deve contenere almeno 1 numero\n"); 
//         $password= readline("Inserisci password:"); 
//     };

//     $check1=false; 
//     while($check1==false){
//     for($i=0; $i<strlen($password);$i++){
//         if(ctype_upper($password[$i])){
//             $check1=true; 
//         };
//     }; 
//     if($check1==false){
//         print_r("La password deve contenere almeno 1 lettera maiuscola\n"); 
//         $password= readline("Inserisci password:");  
//         };

//         $check2= false; 
//         $specialChars= ["!","?",".","@","/","(", ")"]; 

//         while($check2==false){

//         foreach($specialChars as $specialChar){
//             if(str_contains($password, $specialChar)){
//                 $check2=true; 
//             }; 
//         }; 
//         if($check2==false){
//             print_r("La password deve contenere almeno 1 carattere speciale\n"); 
//             $password= readline("Inserisci password:");  
//         }; 
//         }; 

//     };  






// }; 

// $checkLength = false;
// $checkNumber = false;
// $checkMaiuscl = false;
// $checkSpecialChar = false;

// while ($checkLength == false || $checkNumber == false || $checkMaiuscl == false || $checkSpecialChar == false) {
//     $checkLength = false;
//     $checkNumber = false;
//     $checkMaiuscl == false;
//     $checkSpecialChar = false;
//     $password = readline("Inserisci password:");
//     if (strlen($password) >= 8) {
//         $checkLength = true;
        
//     }
//     for ($i = 0; $i < strlen($password); $i++) {
//         if (is_numeric($password[$i])) {
//             $checkNumber = true;
//         } 
//     }
//     for ($i = 0; $i < strlen($password); $i++) {
//         if (ctype_upper($password[$i])) {
//             $checkMaiuscl = true;
//         }
//     }
//     $specialChars = ["!", "?", ".", "@", "/", "(", ")"];
//     foreach ($specialChars as $specialChar) {
//         if (str_contains($password, $specialChar)) {
//             $checkSpecialChar = true;
//         }
//     }
// }; 

// ciclo while esecuzione corretta
// $checkLength=false; 
// $checkNumber=false; 
// $checkMaiuscl=false; 
// $checkSpecialChar=false; 

// while($checkLength==false || $checkNumber==false || $checkMaiuscl==false || $checkSpecialChar==false){
//      $checkLength=false;
//      $checkNumber=false; 
//      $checkMaiuscl=false;
//      $checkSpecialChar=false;  
//      $password=readline("Inserisci password:");
//      if(strlen($password)>=8){
//         $checkLength=true; 
//      }
//      for($i=0; $i<strlen($password); $i++){
//         if(is_numeric($password[$i])){
//             $checkNumber=true; 
//         }
//      }
//      for ($i=0; $i<=strlen($password[$i]); $i++){
//         if(ctype_upper($password[$i])){
//             $checkMaiuscl=true; 
//         }
//      }
//     $specialChars = ["!", "?", ".", "@", "/", "(", ")"];
//     foreach ($specialChars as $specialChar) {
//         if (str_contains($password, $specialChar)) {
//             $checkSpecialChar = true;
//         }
//     }


// }; 

//  Funzioni

$password= readline("Inserisci password:"); 

$checkedLength= checkLength($password,8); 
$checkedNumber= checkNumber($password); 
$checkedMaiuscl= checkMaiuscl($password); 
$checkedSpecialChar= checkSpecialChar($password,["!", "?", ".", "@", "/", "(", ")"]); 

while($checkedLength!=true || $checkedNumber!=true || $checkedMaiuscl!=true || $checkedSpecialChar!=true){

    print_r("La password deve contenere alemno 8 caratteri, un numero, una lettera maiuscola e un carattere speciale\n"); 
    $password= readline("Inserisci password:"); 
    $checkedLength= checkLength($password,8); 
    $checkedNumber= checkNumber($password); 
    $checkedMaiuscl= checkMaiuscl($password); 
    $checkedSpecialChar= checkSpecialChar($password,["!", "?", ".", "@", "/", "(", ")"]); 

}; 

print_r("Password corretta"); 


function checkLength ($passwordIn, $passLength){
    if (strlen($passwordIn)>=$passLength){
         return true;
    } 
}

function checkNumber ($passwordIn) {
    for ($i=0; $i<strlen($passwordIn); $i++){
        if (is_numeric($passwordIn[$i])){
            return true; 
        } 
    }
}

function checkMaiuscl ($passwordIn) {
    for ($i=0; $i<strlen($passwordIn); $i++){
        if (ctype_upper($passwordIn[$i])){
            return true; 
        } 
    }
}

function checkSpecialChar ($passwordIn, $array) {
    foreach($array as $el){
        if (str_contains($passwordIn, $el)){
            return true; 
        }
    }
}



    






 





