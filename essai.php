<?php
require "classMagasin.php";
     $m=new Magasin();
     $m->ajouterProduit("tomate",120,150,50);
     $m->ajouterProduit("bonbon",100,150,100);
     $m->setSolde(150);
     $m->Bilan();
     echo "===============\n";
     echo$m->getNbrStock(0);