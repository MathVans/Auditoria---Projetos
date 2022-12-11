<?php

namespace App\Entity;

use App\Db\Database; 
use \PDO;

class Projeto{
/**
 * 
 * Identificador Unico do Projeto
 *  @var integer
 * 
 * 
 */
public $ID;


/**
 * 
 * Identificador  Projeto
 *  @var string
 * 
 * 
 */
public $projeto;


/**
 * 
 * Identificador area
 *  @var string
 * 
 * 
 */
public $area;


/**
 * 
 * Identificador operacao
 *  @var string
 * 
 * 
 */
public $operacao;


/**
 * 
 * Identificador plataforma
 *  @var string
 * 
 * 
 */
public $plataforma;

/**
 * 
 * Identificador clienteUn
 *  @var string
 * 
 * 
 */
public $clienteUn;

/**
 * 
 * Identificador titulo
 *  @var string
 * 
 * 
 */
public $titulo;

/**
 * 
 * Identificador local
 *  @var string
 * 
 * 
 */
public $local;


/**
 * 
 * Identificador local
 *  @var string
 * 
 * 
 */
public $liberacao;



/** 
 * 
 *
 * Cadastrar novo projeto
 * 
 * @return boolean
 */

public function cadastrar(){


    $obDatabase = new Database('projetos');
    $this->ID = $obDatabase->insert([
                            'projeto'=> $this->projeto,
                            'area'=> $this->area,
                            'operacao'=> $this->operacao,
                            'plataforma'=> $this->plataforma,
                            'clienteUn'=> $this->clienteUn,
                            'titulo'=> $this->titulo,
                            'local'=> $this->local,
                            'liberacao'=> $this->liberacao
                        ]);
                // print_r($this);                    
                return true;
            
            }

    /**
     * 
     * 
     * @param string
     * @param string
     * @param string
     * 
     * @return array
     *  */        
    public static function getProjeto($where=null, $order=null, $limit=null){

        return(new Database('projetos'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}