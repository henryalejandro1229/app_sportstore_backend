<?php
class Conexion
{
    public $conn;
    public $database_name = "SportStoreDB.";
    public $col_users = "users";
    public $col_categories = "categories";
    public $col_products = "products";
    public $col_dumps = "dumps";
    public $col_restorations = "restorations";
    public $col_sales = "sales";
    public $col_addresses = "addresses";

    public function conectar()
    {
        try {
            $cadenaConexion = "mongodb+srv://sportstore96:PIa0yZNwzNXaAqsD@sportstore.zymoner.mongodb.net/?retryWrites=true&w=majority";
            $cliente = new MongoDB\Driver\Manager($cadenaConexion);
            return $cliente;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
?>