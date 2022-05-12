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
}