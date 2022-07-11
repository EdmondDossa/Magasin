<?php
require "classproduit.php";
    class Magasin{
        private float $solde=0;
        private $produits=[];
        public function ajouterProduit(String $nom, float $prixAchat, float $prixVente, int $stock) {
           $this->produits[]=new produit($nom, $prixAchat,$prixVente, $stock);
        }
    /**
     * Permet de d'augmenter le stock d'un produit et de diminuer le solde du magasin
     * @param int $referenceProduit
     * @param int $nombreExemplaire
	 */
        public function acheterProduit(int $referenceProduit,int $nombreExemplaires){
            foreach($this->produits as $key=>$prod){
                foreach($this->produits as $key=>$prod){
                    if($key===$referenceProduit && $prod->getNbrStock()>0){
                        $prod->setNbrStock($prod->getNbrStock()+$referenceProduit);
                        $this->setSolde($this->getSolde()-($nombreExemplaires*$prod->getPrixAchat));
                        break;
                    }else if($key===$referenceProduit && $prod->getNbrStock()===0){
                        break;
                    }
                }
            }
        }
    /**
     * Permet de diminuer le stock d'un produit et d'augmenter le solde du produit
     * @param int $referenceProduit
     * @param int $nombreExemplaire
	 */
        public function vendreProduit(int $referenceProduit,int $nombreExemplaires) {
            foreach($this->produits as $key=>$prod){
                if($key===$referenceProduit && $prod->getNbrStock()>0){
                    $prod->setNbrStock($prod->getNbrStock()-$referenceProduit);
                    $this->setSolde(($nombreExemplaires*$prod->getPrixVente)+$this->getSolde());
                    break;
                }else if($key===$referenceProduit && $prod->getNbrStock()===0){
                    break;
                }
            }
        }

    /**
     * Retourne le solde du magasin
	 * @return float
	 */
	function getSolde(): float {
		return $this->solde;
	}
	
	/**
     * mettre à jour le solde du magasin
	 * @param float $solde 
	 * @return Magasin
	 */
	function setSolde(float $solde): self {
		$this->solde = $solde;
		return $this;
	}
    /**
     * Afficher le bilan du magasin tout en affichant toutes les infos sur chaque produits et le solde du magasin
     * @return void
     */
    public function Bilan(){
        echo "Le solde du magasin est de ". $this->getSolde()." et a en stock les produits suivants: \n";
        foreach($this->produits as $prod){
           echo "- Nom:". $prod->getNom(). " PrixAchat: ".$prod->getPrixAchat() ." PrixVente: ". $prod->getPrixVente() ." NombreEnStock: ". $prod->getNbrStock(). "\n";
        }
    }
    /**
     * retourne le nombre en stock du produit à la reference
     *  @param int $refProd
	 * @return float
	 */
   public function getNbrStock(int $refProd): float {
		foreach($this->produits as $key=>$prod){
            if($key===$refProd){
                return $prod->getNbrStock();
            }
        }
        return 0;
	}
	
	/**
     * changer le nombre en stock d'un produit à la reference
	 * @param int $reference
     * @param int $nbrStock 
	 * @return void
	 */
	public function setNbrStock(int $refProd,int $nbrStock) {
		foreach($this->produits as $key=>$prod){
            if($key===$refProd){
                $prod->setNbrStock($nbrStock);
            }
        }
	}
	 /**
     * retourne le prix de vente du produit à la reference
     *  @param int $refProd
	 * @return float
	 */
	public function getPrixVente(int $refProd): float {
		foreach($this->produits as $key=>$prod){
            if($key===$refProd){
                return $prod->getPrixVente();
            }
        }
        return 0;
	}
	
	/**
     * changer le prix de vente d'un produit à la reference
	 * @param int $refProd
     * @param float $prixVente 
	 */
	public function setPrixVente(int $refProd,float $prixVente) {
		foreach($this->produits as $key=>$prod){
            if($key===$refProd){
                $prod->setPrixVente($prixVente);
            }
        }
	}
	/**
     * changer le prix d' achat d'un produit à la reference
	 * @param int $reference 
	 * @return float
	 */
	public function getPrixAchat(int $refProd): float {
        foreach($this->produits as $key=>$prod){
            if($key===$refProd){
                return $prod->getPrixAchat();
            }
        }
        return 0;
	}
	
	/**
     * Changer le prix d'achat d'un produit à la reference 
     * @param int $refProd 
	 * @param float $prixAchat 
	 */
	public function setPrixAchat(int $refProd, float $prixAchat) {
        foreach($this->produits as $key=>$prod){
            if($key===$refProd){
                $prod->setPrixAchat($prixAchat);
            }
        }
	}
	/**
     * retourne le nom d'un produit à la reference
	 * @param int $reference 
	 * @return String
	 */
	function getNom(int $refProd): string {
		foreach($this->produits as $key=>$prod){
            if($key===$refProd){
                return $prod->getPrixAchat();
            }
        }
        return "";
	}
	
	/**
     * Changer le nom d'un produit à la reference 
     * @param int $refProd 
	 * @param String $nom 
	 */
	function setNom(int $refProd, String $nom) {
		foreach($this->produits as $key=>$prod){
            if($key===$refProd){
                $prod->setNom($nom);
            }
        }
	}
	/**
     * retourne la description d'un produit à la reference
	 * @param int $reference 
	 * @return String
	 */
	function getDesc(int $refProd): string {
		foreach($this->produits as $key=>$prod){
            if($key===$refProd){
                return $prod->getDesc();
            }
        }
        return "";
	}
	
	/**
     * Changer la description d'un produit à la reference 
     * @param int $refProd 
	 * @param String $desc
	 */
	function setDesc( int $refProd,string $desc){
		foreach($this->produits as $key=>$prod){
            if($key===$refProd){
                $prod->setDesc($desc);
            }
        }
	}
	
}