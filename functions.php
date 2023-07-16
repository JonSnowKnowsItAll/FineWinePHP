<?php 
//prepares and executes query with optionl array of values
function makeStatement($query, $valueArray = null)
{
    global $con;
    $stmt = $con->prepare($query);
    $stmt->execute($valueArray);
    return $stmt;
}

//generates dynamic html table with query
function showTable($query)
{
    global $con;
    $stmt = $con->prepare($query);
    $stmt->execute();
    $meta = array(); //save attribute properties

    echo '<table class="table"><tr>';

    //column name
    for ($i = 0; $i < $stmt->columnCount(); $i++) {
        $meta[] = $stmt->getColumnMeta($i); //attribute properties
        echo '<th>' . $meta[$i]['name'] . '</th>';
    }
    echo '</tr>';

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo '<tr>';
        foreach ($row as $r)
        {
            echo '<td>' . $r . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
