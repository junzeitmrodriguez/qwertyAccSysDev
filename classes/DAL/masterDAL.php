<?php

include '../../config/connection.php';

class MasterDAL{
	
	public function CheckLogin($usercode,$userpassword){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_CheckLogin(:usercode,:userpassword)');
			
			$stmt -> bindParam(':usercode', $usercode);
			$stmt -> bindParam(':userpassword', $userpassword);

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetIDCategory(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetIDCategory()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetApplicationPeriod(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetAP()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveApplicationPeriod($application){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveAP(:acyear,:acmonth,:appcode)');
			
			$stmt -> bindParam(':acyear', $application->acyear);
			$stmt -> bindParam(':acmonth', $application->acmonth);
			$stmt -> bindParam(':appcode', $application->appcode);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetAsset(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetAssets()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetBanks(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetBanks()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetBranches(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetBranches()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetCOA(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetCOA()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	public function GetCOAByGLA($coa){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetCOAByGLA(:idgla)');
			
			$stmt -> bindParam(':idgla', $coa->idgla);
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetCompany(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetCompany()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetDocument(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetDocument()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetLoans(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetLoans()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetIDMas(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetIDMas()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetIDMasByCat($cat){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetIDMasByCat(:cat)');
			
			$stmt -> bindParam(':cat', $cat);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetExpense(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetExpense()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetFunction(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetFunction()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetFunctionByCat($function){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetFunctionByCat(:cat)');
			
			$stmt -> bindParam(':cat', $function->cat);
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetLocation(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetLocation()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetItems(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetItems()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetMembers(){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_GetMembers()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveAsset($asset){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveAsset(:idasset,:assetname,:assetcategory,:encoder)');
			
			$stmt -> bindParam(':idasset', $asset->idasset);
			$stmt -> bindParam(':assetname', $asset->assetname);
			$stmt -> bindParam(':assetcategory', $asset->assetcategory);
			$stmt -> bindParam(':encoder', $asset->encoder);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveBank($bank){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveBank(:idbank,:bankcode,:bankname,:bankaddress)');
			
			$stmt -> bindParam(':idbank', $bank->idbank);
			$stmt -> bindParam(':bankcode', $bank->bankcode);
			$stmt -> bindParam(':bankname', $bank->bankname);
			$stmt -> bindParam(':bankaddress', $bank->bankaddress);
			
			$stmt -> execute();

			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveBranch($branch){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveBranch(:idbranch,:branchname,:branchcategory,:encoder)');
			
			$stmt -> bindParam(':idbranch', $branch->idbranch);
			$stmt -> bindParam(':branchname', $branch->branchname);
			$stmt -> bindParam(':branchcategory', $branch->branchcategory);
			$stmt -> bindParam(':encoder', $branch->encoder);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveCOA($coa){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveCOA(:idcoa,:idgla,:idlocation,:idbranch,
			:idfunction,:idexpense,:name,:lgitem,:lgasset,:lgidnum,:lgquantity,:annualbudget,:typrectt,:encoder)');
			
			$stmt -> bindParam(':idcoa', $coa->idcoa);
			$stmt -> bindParam(':idgla', $coa->idgla);
			$stmt -> bindParam(':idlocation', $coa->idlocation);
			$stmt -> bindParam(':idbranch', $coa->idbranch);
			$stmt -> bindParam(':idfunction', $coa->idfunction);
			$stmt -> bindParam(':idexpense', $coa->idexpense);
			$stmt -> bindParam(':name', $coa->name);
			$stmt -> bindParam(':lgitem', $coa->lgitem);
			$stmt -> bindParam(':lgasset', $coa->lgasset);
			$stmt -> bindParam(':lgidnum', $coa->lgidnum);
			$stmt -> bindParam(':lgquantity', $coa->lgquantity);
			$stmt -> bindParam(':annualbudget', $coa->annualbudget);
			$stmt -> bindParam(':typrectt', $coa->typrectt);
			$stmt -> bindParam(':encoder', $coa->encoder);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveCompany($company){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveCompany(:idcompany,:companyname,:companyinitial,:pagibig,:tin,:sssno,:phealth,:address,:telno,:vatno)');
			
			$stmt -> bindParam(':idcompany', $company->idcompany);
			$stmt -> bindParam(':companyname', $company->companyname);
			$stmt -> bindParam(':companyinitial', $company->companyinitial);
			$stmt -> bindParam(':pagibig', $company->pagibig);
			$stmt -> bindParam(':tin', $company->tin);
			$stmt -> bindParam(':sssno', $company->sssno);
			$stmt -> bindParam(':phealth', $company->phealth);
			$stmt -> bindParam(':address', $company->address);
			$stmt -> bindParam(':telno', $company->telno);
			$stmt -> bindParam(':vatno', $company->vatno);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveDocument($document){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveDocument(:iddocument,:documentcode,:documentname,:documentinitial,:encoder)');
			
			$stmt -> bindParam(':iddocument', $document->iddocument);
			$stmt -> bindParam(':documentcode', $document->documentcode);
			$stmt -> bindParam(':documentname', $document->documentname);
			$stmt -> bindParam(':documentinitial', $document->documentinitial);
			$stmt -> bindParam(':encoder', $document->encoder);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveLoans($loans){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveLoans(:loanid,:loantype,:loanname,:maxloamt,:intraperc,:servfeeperc,:shrretperc,:maxloterm,:encoder)');;
			
			$stmt -> bindParam(':loanid', $loans->loanid);
			$stmt -> bindParam(':loantype', $loans->loantype);
			$stmt -> bindParam(':loanname', $loans->loanname);
			$stmt -> bindParam(':maxloamt', $loans->maxloamt);
			$stmt -> bindParam(':intraperc', $loans->intraperc);
			$stmt -> bindParam(':servfeeperc', $loans->servfeeperc);
			$stmt -> bindParam(':shrretperc', $loans->shrretperc);
			$stmt -> bindParam(':maxloterm', $loans->maxloterm);
			$stmt -> bindParam(':encoder', $loans->encoder);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveIDMas($idmas){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveIDMas(:idnum,:first_name,:middle_name,:family_name,:cat,:encoder)');;
			
			$stmt -> bindParam(':idnum', $idmas->idnum);
			$stmt -> bindParam(':first_name', $idmas->first_name);
			$stmt -> bindParam(':middle_name', $idmas->middle_name);
			$stmt -> bindParam(':family_name', $idmas->family_name);
			$stmt -> bindParam(':cat', $idmas->cat);
			$stmt -> bindParam(':encoder', $idmas->encoder);

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveExpense($expense){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveExpense(:idexpense,:expensecode,:name,:annualbudget,:cat,:encoder)');;
			
			$stmt -> bindParam(':idexpense', $expense->idexpense);
			$stmt -> bindParam(':expensecode', $expense->expensecode);
			$stmt -> bindParam(':name', $expense->name);
			$stmt -> bindParam(':annualbudget', $expense->annualbudget);
			$stmt -> bindParam(':cat', $expense->cat);
			$stmt -> bindParam(':encoder', $expense->encoder);

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveFunction($function){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveFunction(:idfunction,:functionname,:cat,:encoder)');;

			$stmt -> bindParam(':idfunction', $function->idfunction);
			$stmt -> bindParam(':functionname', $function->functionname);
			$stmt -> bindParam(':cat', $function->cat);
			$stmt -> bindParam(':encoder', $function->encoder);

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveLocation($location){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveLocation(:idlocation,:name,:cat,:encoder)');;

			$stmt -> bindParam(':idlocation', $location->idlocation);
			$stmt -> bindParam(':name', $location->name);
			$stmt -> bindParam(':cat', $location->cat);
			$stmt -> bindParam(':encoder', $location->encoder);

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){	
			return $e->getMessage();
		}
	}
	
	public function SaveItem($item){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveItem(:iditem,:name,:cat,:encoder)');;

			$stmt -> bindParam(':iditem', $item->iditem);
			$stmt -> bindParam(':name', $item->name);
			$stmt -> bindParam(':cat', $item->cat);
			$stmt -> bindParam(':encoder', $item->encoder);

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){	
			return $e->getMessage();
		}
	}
	
	public function SaveMember($member){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveMember(:idnum,:homeadd,:permadd,:presadd,:birthdate,:placebirth,:telno,:mobileno,:email,:gender,:encoder)');;

			$stmt -> bindParam(':idnum', $member->idnum);
			$stmt -> bindParam(':homeadd', $member->homeadd);
			$stmt -> bindParam(':permadd', $member->permadd);
			$stmt -> bindParam(':presadd', $member->presadd);
			$stmt -> bindParam(':birthdate', $member->birthdate);
			$stmt -> bindParam(':placebirth', $member->placebirth);
			$stmt -> bindParam(':telno', $member->telno);
			$stmt -> bindParam(':mobileno', $member->mobileno);
			$stmt -> bindParam(':email', $member->email);
			$stmt -> bindParam(':gender', $member->gender);
			$stmt -> bindParam(':encoder', $member->encoder);

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){	
			return $e->getMessage();
		}
	}
}
?>