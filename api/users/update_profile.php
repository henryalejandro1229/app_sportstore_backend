<?php
require "../config/database.php";

class query extends Conexion {
    public function config() {
        $id = $_GET['id'];
        $profile = $_GET['profileUrl'];
        try {
            $conexion = parent::conectar();
            $query = new MongoDB\Driver\BulkWrite;
            $query->update(['_id' => new MongoDB\BSON\ObjectID($id)], ['$set' => ['profileUrl'=>$profile]]);
            $conexion->executeBulkWrite($this->database_name.$this->col_users, $query);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
$obj = new query();
echo json_encode($obj->config());
?>