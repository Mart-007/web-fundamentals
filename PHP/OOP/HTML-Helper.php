<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Helper</title>
</head>
<body>
    <?php
         $helper = new Html_helper();
         $users = [
         ["id" => 1, "First Name" => "Reymart", "Last Name" => "Bordo", "Nickname" => "Mart"],
         ["id" => 2, "First Name" => "Mart", "Last Name" => "Bords", "Nickname" => "Mate"],
         ["id" => 3, "First Name" => "Mate", "Last Name" => "Copper", "Nickname" => "Mate"]
         ]; 
         echo $helper->print_table($users);  
         echo "<h4>Select State</h4>";
     
         $s_array = array("CA", "WA", "UT", "TX", "AZ", "NY");
         echo $helper->print_select("state", $s_array);  
           
    ?>
    <?php
        class HTML_Helper{
             function print_table(){
                $data = $array[0];
                $html = "<table>
                            <thead>
                                <tr>";
                                foreach($data as $key => $value){
                                    $html .=  "<th>" .$key. "</th>";
                                }
                        $html. "<tr>
                            </thead>
                                <tbody>";
                                    foreach($array as $data){
                                        $html.="<tr>";

                                        foreach($data as $key => $value){
                                            $html .=  "<td>" .$key. "</td>";
                                        }
                                        $html.="<tr>";  
                                    }
                        $html.="</tbody>
                        </table>";
                        return $html;
             function print_select($select, $array){
                $str = "<select name=" . $select . ">";
                foreach($array as $data){
                    $str . "<option>" . $data . "</option>";
                }
                return $str;
             }
        } 
    ?> 
</body>
</html>