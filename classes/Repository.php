<?php
/**
 * Created by PhpStorm.
 * User: Joseph
 * Date: 01/11/2017
 * Time: 17:30
 */

namespace Weymoor\App\Classes;

use PDO;

class Repository
{
    protected $db_host;
    protected $db_name;
    protected $db_user;
    protected $db_pass;
    protected $db_port;

    /**
     * Repository constructor.
     * @param PDO|null $db
     */
    public function __construct(PDO $db = null)
    {
        $this->db = $db;
        if ($this->db === null){

            $config = parse_ini_file("../.env", true);
            $this->db_host = $config['database']['db_host'];
            $this->db_name = $config['database']['db_name'];
            $this->db_user = $config['database']['db_user'];
            $this->db_pass = $config['database']['db_pass'];
            $this->db_port = $config['database']['db_port'];

            $dsn = "mysql:host={$this->db_host};dbname={$this->db_name};port={$this->db_port})";
            $this->db = new PDO( $dsn, $this->db_user, $this->db_pass );

        }

    }

    /**
     * @param Request $request
     */
    public function save(Request $request)
    {
        $statement = $this->db->prepare(
            'insert into requests (startdate, enddate, email) values (:startdate, :enddate, :email)'
        );
        $statement->bindParam(':startdate', $request->startdate);
        $statement->bindParam(':enddate', $request->enddate);
        $statement->bindParam(':email', $request->email);
        $statement->execute();
    }

    public function countAll()
    {
        $count = $this->db->query('select count(*) from requests')->fetchColumn();

        return $count;
    }
}