<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class ramal {
    /**
     * Identificador único do ramal
     * @var integer
     */
    public $id;

    /**
     * Número do ramal
     * @var string
     */
    public $num_ramal;

    /** 
     *Localização do ramal 
     * @var string
     */
    public $loc_ramal;

    /**
     * Método responsável por cadastrar um novo ramal no banco 
     * @return boolean
     */
    public function cadastrar(){
        //INSERIR RAMAL NO BANCO
        $obDatabase = new Database('ramal');
        $this->id = $obDatabase->insert([
                                'num_ramal'    => $this->num_ramal,
                                'loc_ramal' => $this->loc_ramal,
                            ]);
        //RETORNAR SUCESSO
        return true;
    }
    
    /**
     * Método responsável por obter os ramais do BD
     * @param string
     * @param string
     * @param string
     * @return array
     */
    public static function getRamal($where = null, $order = null, $limit = null){
        return (new Database('ramal'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
}