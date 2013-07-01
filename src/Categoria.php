<?php
/**
 * 
 * @Entity
 * @Table(name="categoria")
 */
class Categoria
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="idCategoria")
     
     */
    protected $id;
    /**
     * @Column(type="string", name="nomeCategoria")
     */
    protected $nome;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}