<?php

$menu = [
    'welcome' => [
        'title' => 'WELCOME',
        'url' => 'pages/welcome.php'
    ],
    'ourMacarons' => [
        'title' => 'OUR MACARONS',
        'url' => 'pages/ourmacarons.php'
    ],
    'giftsAndParties' => [
        'title' => 'GIFTS &amp PARTIES',
        'url' => 'pages/giftsandparties.php'
    ],
    'contact' => [
        'title' => 'CONTACT',
        'url' => 'pages/contact.php'
    ]
];

function makeMenu($theMenu){
?>
    <ul class="nav navbar-nav navbar-right">
    <?php
    foreach($theMenu as $menuKey => $menuItem){
     ?>
        <li>
            <a href="?page=<?=$menuKey;?>"><?=$menuItem['title'];?></a>
        </li>
<?php
     }
    ?>
    </ul>
<?php
}

?>


