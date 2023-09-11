<?php
include("databaseConnection.php");

$qry ="SELECT
        ur.name AS User_Name,
        ur.id AS User_id,
        COUNT(tuto.id) AS Total_Tutorial,
        (
            CASE WHEN 
                COUNT(tuto.id) <= 30
            THEN
                'Amature'
            ELSE
                'Genius'
            END

        ) AS Teacher_type,
        SUM(tv.static_view) AS Total_Static_View,
        SUM(tv.unique_view) AS Total_Unique_View
    FROM
        users AS ur
    JOIN
        tutorials AS tuto
    ON
        ur.id = tuto.created_by
    JOIN
        tutorial_views AS tv
    ON
        tuto.id=tv.id
    JOIN
        subjects AS sub
    ON
        tuto.subject_id=sub.id
    WHERE 
        ur.creator=2
    GROUP BY
        sub.id   
";
$result = mysqli_query(dbConnect(),$qry);

foreach($result as $value){
    errDebugger($value);
}
