<?php
$date = date("l" );


switch ($date) {
    case "Monday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃច័ន្ទ";
        break;

    case "Tuesday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃអង្គារ";
        break;

    case "Wednesday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃពុធ";
        break;

    case "Thursday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃព្រហស្បតិ៍";
        break;

    case "Friday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃសុក្រ";
        break;

    case "Saturday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃសៅរ៍";
        break;

    case "Sunday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃអាទិត្យ";
        break;

    default:
        echo "មិនស្គាល់ថ្ងៃ";
}

?>