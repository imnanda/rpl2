<?php
function getData($sql, $forceSingle = false)
{
    global $conn;

    $query = mysqli_query($conn, $sql);

    if ($query) {
        if (mysqli_num_rows($query) < 2 && $forceSingle) {
            return mysqli_fetch_assoc($query);
        }

        $arrData = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $arrData[] = $row;
        }

        return $arrData;
    }
}
