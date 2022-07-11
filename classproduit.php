<?php
 class produit{
    private String $nom;
    private float $prixAchat;
    private float $prixVente;
    private String $desc="Pas de description";
    private int $nbrStock;
    public function __construct(String $nom, float $pA, float $pV, int $stock){
        $this->nom=$nom;
        $this->prixAchat=$pA;
        $this->prixVente=$pV;
        $this->nbrStock=$stock;
    }
 	/**
	 * @return float
	 */
	function getNbrStock(): float {
		return $this->nbrStock;
	}
	
	/**
	 * @param int $nbrStock 
	 * @return produit
	 */
	function setNbrStock(int $nbrStock): self {
		$this->nbrStock = $nbrStock;
		return $this;
	}
	/**
	 * @return float
	 */
	function getPrixVente(): float {
		return $this->prixVente;
	}
	
	/**
	 * @param float $prixVente 
	 * @return produit
	 */
	function setPrixVente(float $prixVente): self {
		$this->prixVente = $prixVente;
		return $this;
	}
	/**
	 * @return float
	 */
	function getPrixAchat(): float {
		return $this->prixAchat;
	}
	
	/**
	 * @param float $prixAchat 
	 * @return produit
	 */
	function setPrixAchat(float $prixAchat): self {
		$this->prixAchat = $prixAchat;
		return $this;
	}
	/**
	 * @return string
	 */
	function getNom(): string {
		return $this->nom;
	}
	
	/**
	 * @param string $nom 
	 * @return produit
	 */
	function setNom(string $nom): self {
		$this->nom = $nom;
		return $this;
	}
	/**
	 * @return string
	 */
	function getDesc(): string {
		return $this->desc;
	}
	
	/**
	 * @param string $desc 
	 * @return produit
	 */
	function setDesc(string $desc): self {
		$this->desc = $desc;
		return $this;
	}
}