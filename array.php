<?php
# //--simple Array--//
$info = array('Rafat Hossain', 'rafat@gmail.com', '01876903613');
echo "Simple Array :<br/>";
for ($i = 0; $i < count($info); $i++) { 
    switch ($i) {
        case '0':
            echo 'Name = ';
            break;
        case '1':
            echo 'Email = ';
            break;
        default:
            echo 'Phone = ';
            break;
    }
    echo $info[$i].'<br/>';
}

# //--Associative Array--//
$information = array(
    'name' => 'Rafat Hossain',
    'email' => 'rafat@gmail.com',
    'phone' => '01876903613'
);
echo "Associative Array :<br/>";
echo 'Name = '.$information['name'].'<br/>';
echo 'Email = '.$information['email'].'<br/>';
echo 'Phone = '.$information['phone'].'<br/>';

# //--Multidimensional Array--//
$phones = array(
    array('Phone1', 50, 5000),
    array('Phone2', 50, 10000)
);
echo "Multidimensional Array :<br/>";
for ($i = 0; $i < count($phones); $i++) { 
    for ($j = 0; $j < count($phones[$i]); $j++) {
        switch ($j) {
            case '0':
                echo 'Phone Name = ';
                break;
            case '1':
                echo 'Stock = ';
                break;
            default:
                echo 'Price = ';
                break;
        }
        echo $phones[$i][$j].', ';
    }
    echo '<br/>';
}

?>