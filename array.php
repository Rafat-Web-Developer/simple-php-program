<?php
# //--simple Array--//
$info = array('Rafat Hossain', 'rafat@gmail.com', '01876903613');
for ($i = 0; $i < count($info); $i++) { 
    echo 'Element ['.$i.'] = '.$info[$i].'<br/>';
}

# //--Associative Array--//
$information = array(
    'name' => 'Rafat Hossain',
    'email' => 'rafat@gmail.com',
    'phone' => '01876903613'
);
echo 'Name = '.$information['name'].'<br/>';
echo 'Email = '.$information['email'].'<br/>';
echo 'Phone = '.$information['phone'].'<br/>';
?>