

        <?php


$myRandomFullNumbers = $fullNumber;


foreach ($myListReduce as $key => $value) {
    $key_for_array = array_search($value, $myRandomFullNumbers);
    if ( $key_for_array !== false) {
        unset($myRandomFullNumbers[$key_for_array]);
    };
};


$set_game = array();

echo "<table>";
for ($k = 0 ; $k < $responserList; $k++){

    $set_game[$k] = array();
    $rand_keys = array_rand($myRandomFullNumbers, 15);

    $does_this_exists = array_search($rand_keys, $lastCheck);

    if ($does_this_exists == false) {
        echo "<tr>";

        foreach ($rand_keys as $key => $value) {
            echo "<td class='".$myRandomFullNumbers[$value]."_classify momentum' style='border: 1px solid gray; width: 30px; text-align: center;padding: 10px 0px;'>".$myRandomFullNumbers[$value]." </td>";
        };

        echo "</tr>";
    } 
};
echo "</table>";

?>