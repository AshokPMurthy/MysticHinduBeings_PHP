<?php
    // require MySQL connection
    require_once 'config.php';

    // Gets the Unique "name"s of each Mystic Being
    function get_unique_names() {
        try {
            global $pdo;
            $names = [];

            $stmt = $pdo->query(('SELECT DISTINCT name FROM tbl_MysticHinduBeings ORDER BY name'));
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $names[] = [
                    'name' => $row['name']
                ];
            }
            //var_dump($names);
            return $names;

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }//end- function get_unique_names()
    

    // gets all the "Mystic Beings" with the incoming "name"
    function get_beings_by_name($name)
    {
        try {
            global $pdo;
            $beings = [];

            $sql = "SELECT * FROM tbl_MysticHinduBeings WHERE name = :name ";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([':name' => $name]);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $beings[] = [
                    'id'        => $row['id'],
                    'name'      => $row['name'],
                    'description'     => $row['description'],
                    'imageurl' => $row['imageurl']
                ];
            }

            //var_dump($beings);
            return $beings;

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }//end- function get_beings_by_name($name)

    

    // gets the "Mystic Being" with the incoming "id"
    function get_being_by_id($id)
    {
        try {
            global $pdo;
            $beings = [];

            $sql = "SELECT * FROM tbl_MysticHinduBeings WHERE id = :id ";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([':id' => $id]);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $beings[] = [
                    'id'        => $row['id'],
                    'name'      => $row['name'],
                    'description'     => $row['description'],
                    'imageurl' => $row['imageurl']
                ];
            }

            //var_dump($beings);
            return $beings;

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }//end- function get_being_by_id($id)
    
?>
