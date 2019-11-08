<?php
$params = array(
    'naziv' => "M&M'S",
    'cijena' => '2.5',
    
);

echo http_build_query($params) . " ";

function generateHref($pageName, $params) {
    return 'href = " ' . $pageName . '/?' . generateUrlQuery($params) . ' "';
}
function formatGetParams() {
    echo "<ul>";
        foreach($_GET as $element) {
            echo "<li> $element </li>";
        }
    echo "</ul>";
}
