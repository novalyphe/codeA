<?php

class maistas {

    public $message = '';
    public $cnn = false;
   

    function __construct(){

        $this->message = "Prisijungimas prie DB ";
        try {
            $this->cnn = new PDO("mysql:host=localhost:8889;dbname=maistas", 'test', 'test');
            $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions
            $this->message .= 'sėkmingas <br>';
        }
        catch(PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
        }
    }
    function getList(){

        $this->message = "Receptu sąrašo skaitymas iš DB ";
        $maistas = [];

        try {
            $sql = "select * from maistas order by m_gmintojas, m_modelis";
            $res = $this->cnn->query($sql);
            while ($row = $res->fetch()) {
                $maistas[] = [
                    'id' => $row['m_id'],
                    'gamintojas' => $row['m_gmintojas'],
                    'modelis' => $row['m_modelis'],
                    'metai' => $row['m_metai'],
                    'kaina' => $row['m_kaina'],
                    'nuotrauka' => $row['m_nuotrauka'],
                    'mime' => $row['m_mime']
                ];
            }
            $this->message .= "sėkmingas";
        }
        catch(PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
            $maistas = false;
        }
        return $maistas;
    }
        function delete ($id){

        $ok = false;
        $this->message = "Automobilio šalinimas iš DB ";

        try {

            $sql = "delete from maistas where m_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([':id' => $id]);
            $this->message .= "sėkmingas";
            $ok = true;

        } catch (PDOException $e) {

            $this->message .= 'nesėkmingas: ' . $e->getMessage();

        }
        return $ok;
    }



    function ideti($maistas32){
        $ins = false;
        try {
        $sql = "insert into maistas (m_gmintojas, m_modelis, m_metai, m_kaina, m_pastabos, m_nuotrauka, m_mime) 
                values(?, ?, ?, ?, ?, ?, ?)";

                $res = $this->cnn->prepare($sql);
                $res ->bindValue(1, $maistas32['gamintojas']);
                $res ->bindValue(2, $maistas32['modelis']);
                $res ->bindValue(3, $maistas32['metai']);
                $res ->bindValue(4, $maistas32['kaina']);
                $res ->bindValue(5, $maistas32['pastabos']);
                $res ->bindValue(6, $maistas32['mime']); 
                $res ->bindValue(7, $maistas32['nuotrauka'], PDO::PARAM_LOB);
                $res->execute();

                $this->message = "Receptas idetas i DB";

                $ins = true;
            }

        catch (PDOException $err) {
            $this->message = "Recepto i DB ideti nepavyko" . $err->getMessage();
        }
        return $ins;
    }

    function update($car){
        $ok = false;
        $this->message = "recepto duomenų keitimas DB ";
        try {
            $sql = "update auto set m_gmintojas=?, m_modelis=?, m_metai=?, m_kaina=?, m_pastabos=?";
            if (isset($car['nuotrauka'])){
                $sql.= ",m_nuotrauka=?, m_mime=?";
            }
            $sql.= " where m_id=?";
            $res = $this->cnn->prepare($sql);
            $res->bindValue(1, $car['gamintojas']);
            $res->bindValue(2, $car['modelis']);
            $res->bindValue(3, $car['metai']);
            $res->bindValue(4, $car['kaina']);
            $res->bindValue(5, $car['pastabos']);
            if (isset($car['nuotrauka'])) {
                $res->bindValue(6, $car['mime']);
                $res->bindValue(7, $car['nuotrauka'], PDO::PARAM_LOB);
            }
            $res->execute();
            $this->message .= "sėkmingas";
            $ok = true;
        } catch (PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
        }
        return $ok;
    }
    function get($id){
        $this->message = "recepto duomenų skaitymas iš DB ";
        try {
            $sql = "select m_id, m_gmintojas, m_modelis, m_metai, m_kaina, m_pastabos, m_nuotrauka, m_mime from auto where m_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([':id' => $id]);
            if ($row = $res->fetch()) {
                $car = [
                    'id' => $row['m_id'],
                    'gamintojas' => $row['m_gmintojas'],
                    'modelis' => $row['m_modelis'],
                    'metai' => $row['m_metai'],
                    'kaina' => $row['m_kaina'],
                    'pastabos' => $row['m_pastabos'],
                    'nuotrauka' => $row['m_nuotrauka'],
                    'mime' => $row['m_mime']
                ];
                $this->message .= "sėkmingas";
            } else $this->message .= "nesėkmingas: automobilis nerastas";
        }
        catch(PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
            $car = false;
        }
        return $car;
    }

}


?>