<?php
/**
 * Created by PhpStorm.
 * User: 15yonnets
 * Date: 27/03/2017
 * Time: 16:39
 */

namespace stpaul\Domain;


class SejourDAO {
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;

    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    /**
     * Return a list of all articles, sorted by date (most recent first).
     *
     * @return array A list of all articles.
     */
    public function findAll() {
        $sql = "select * from sejour order by sejno desc";
        $result = $this->db->fetchAll($sql);

        // Convert query result to an array of domain objects
        $Sejours = array();
        foreach ($result as $row) {
            $SejourId = $row['art_id'];
            $Sejours[$SejourId] = $this->buildSejour($row);
        }
        return $Sejours;
    }

    /**
     * Creates an Article object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \MicroCMS\Domain\Article
     */
    private function buildSejour(array $row) {
        $Sejour = new Sejour($row['SEJNO'],$row['SEJINTITULE'],$row['SEJMONTANTMBI'],$row['SEJDTEDEB'],$row['SEJDUREE']);
        return $Sejour;
    }
}