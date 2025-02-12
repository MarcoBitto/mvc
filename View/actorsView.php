<?php

class actorsView{

    private function __construct(){
    
    }
    
    static function show($stmt){
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
                        </tr>
                            <tr>
                            <td>{$stmt->getId()}</td>
                            <td>{$stmt->getFirstName()}</td>
                            <td>{$stmt->getLastName()}</td>
                            <td>{$stmt->getLastUpdate()}</td>
                            <td><a href='index.php?controller=Actors&action=update&id={$stmt->getId()}&firstname={$stmt->getFirstName()}&lastname={$stmt->getLastName()}'>Update</a></td>
                            <td><a href='index.php?controller=Actors&action=delete&id={$stmt->getId()}&firstname={$stmt->getFirstName()}&lastname={$stmt->getLastName()}'>Delete</a></td>
                            </tr>
                    </table>
                </body>
            </html>
            ";
        echo $html;
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
                            <td><a href='index.php?controller=Actors&action=update&id={$actor->getId()}&firstname={$actor->getFirstName()}&lastname={$actor->getLastName()}'>Update</a></td>
                            <td><a href='index.php?controller=Actors&action=delete&id={$actor->getId()}&firstname={$actor->getFirstName()}&lastname={$actor->getLastName()}'>Delete</a></td>
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