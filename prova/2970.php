Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@higorsaraujo 
higorsaraujo
/
prova
Private
Cannot fork because you own this repository and are not a member of any organizations.
Code
Issues
Pull requests
Actions
Projects
Security
Insights
Settings
prova/2970.php /
@higorsaraujo
higorsaraujo Add files via upload
Latest commit 3f01bca 6 hours ago
 History
 1 contributor
30 lines (21 sloc)  561 Bytes
 

<?php

while(true){

$k = readline();

if($k==0){
    break;
}


$a = explode(' ',readline());
$n = (int)$a[0];
$m = (int)$a[1];

for($i=0;$i<$k;$i++){
    $b = explode(' ',readline());
    $x = (int)$b[0];
    $y = (int)$b[1];

    if($x>$n && $y>$m){echo "NE\n";} //1 quadrante
    else if(($x<$n && $y>$m)) {echo "NO\n";} // 2 quadrante
    else if(($x<$n && $y<$m)) {echo "SO\n";} // 3 quadrante 
    else if(($x>$n && $y<$m)) {echo "SE\n";} // 4 quadrante
    else if(($x==$n || $y==$m)) {echo "divisa\n";} // divisa

}

}
?>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
prova/2970.php at main · higorsaraujo/prova