<?php

class actorsView{

    private function __construct(){
    
    }
    
    
    static function show_all($stmt){
        $html = "
            <!DOCTYPE html>
            <html lang='it'>
                <body>
                    <table>
                        <tr>
                            <th>actor id</th>
                            <th>first name</th>
                            <th>last name</th>
                            <th>last update</th>
                        </tr>";
                        foreach ($stmt as $actor) {
                        $html .= "
                            <tr>
                            <td>{$actor->getId()}</td>
                            <td>{$actor->getFirstName()}</td>
                            <td>{$actor->getLastName()}</td>
                            <td>{$actor->getLastUpdate()}</td>
                            </tr>";
                        }
                        $html .= "
                    </table>
                </body>
            </html>
            ";
        echo $html;
    }
    
}




?>