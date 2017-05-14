<?php
class Client {
	private $_IdClient;
	private $_IdFacture;
	private $_Nom;
	private $_Prenom;
	private $_Adresse;
	private $_CP;
	private $_Ville;
	private $_rb;
	
	public function addFacture($Facture, $_b){
    if($_b != null){
      if ($_b.getClient() != null) { 
        $_b.getClient();
		$_b.setFacture(null);
      }
      $this->setFacture($_b);
      $_b.setClient($this);
    }
  }
  public function getFacture() { return(rb); }
  public function setFacture($Facture, $_b) { $this->$_rb=$_b; }
  public function afficheClient(){
	echo $this->_b;
	echo '<br/>';
  }
}
class Facture extends Client{
	private $_IdFacture;
	private $_IdClient;
	private $_DateFacture;
	private $_ra;
	
	public function addClient($Client, $_a){
    if($_a != null){ 
      if ($_a.getFacture() != null){ 
        $_a.getFacture();
		$_a.setClient(null);
      }
      $this->setClient($_a);
      $_a.setFacture($this);
    }
  }
  public function setClient($Client, $_a){ $this->$_ra=$_a; }
  public function getClient(){ return(ra); }
  public function afficheFacture(){
	echo $this->_a;
	echo '<br/>';
  }
}
class Produit extends Facture {
	private $_IdProduit;
	private $_IdFacture;
	private $_Designation;
	private $_PrixUnit;
	private $_rc;
	
	public function addProduit($Facture, $_c){
    if($_c != null){ 
      if ($_c.getProduit() != null){  
        $_a.getProduit();
		$_a.setFacture(null); 
      }
      $this->setFacture($_c);
      $_c.setProduit($this);
    }
  }
  public function setFacture($Facture, $_c){ $this->$_rc=$_c; }
  public function getFacture(){ return(rc); }
  public function afficheProduit(){
	echo $this->_c;
	echo '<br/>';
  }
}
final class D_Facture extends Produit {
	private $_IdDetail;
	private $_IdFacture;
	private $_IdProduit;
	private $_Quantite;
	private $_rd;
	
	public function addDetail($Produit,$Facture, $_d){
    if($_d != null){ 
      if ($_d.getDetail() != null){   
        $_d.getDetail();
		$_d.setProduit(null);  
      }
      $this->setProduit($_d);
      $_d.setDetail($this);
    }
	if($_d != null){ 
      if ($_d.getDetail() != null){   
        $_d.getDetail();
		$_d.setFacture(null);  
      }
      $this->setFacture($_d);
      $_d.setDetail($this);
    }
  }
  public function setProduit($Produit, $_d){ $this->$_rd=$_d; }
  public function setFacture($Facture, $_d){ $this->$_rd=$_d; }
  public function getProduit(){ return(rd); }
  public function getFacture(){ return(rd); }
  public function afficheDetail(){
	echo $this->_d;
	echo '<br/>';
  }
}

?>
<?php
	$mClient=new Client();
	$mFacture=new Facture();
	$mProduit=new Produit();
	$mDetail=new D_Facture();
	$mClient->afficheClient();
	$mFacture->afficheFacture();
	$mProduit->afficheProduit();
	$mDetail->afficheDetail();
?>