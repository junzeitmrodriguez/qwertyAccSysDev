<?php
header("Content-Type: application/json");

include '../DAL/masterDAL.php';
include '../MDL/masterMDL.php';
 
$params=$_POST['params'];

$action=$params['action'];

switch ($action){
	
	case 'getidcategory':
	
		$fn = new MasterDAL();
		$res= $fn->GetIDCategory()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
	
	case 'getapplication':
	
		$fn = new MasterDAL();
		$res= $fn->GetApplicationPeriod()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
		
	case 'saveapplication':
	
		$application=new ApplicationMDL();
		$application->acyear=$params['acyear'];
		$application->acmonth=$params['acmonth'];
		$application->appcode=$params['appcode'];

		$fn = new MasterDAL();
		$res= $fn->SaveApplicationPeriod($application);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'getasset':
		
		$fn = new MasterDAL();
		$res= $fn->GetAsset()->fetchAll(); 

		echo json_encode($res);
		
		break;
		
	case 'saveasset':
		
		$asset=new AssetMDL();
		$asset->idasset=(int)$params['idasset'];
		$asset->assetname=trim($params['assetname']);
		$asset->assetcategory=trim($params['assetcategory']);
		$asset->encoder=(int)$params['encoder'];
		
		$fn = new MasterDAL();
		$res= $fn->SaveAsset($asset);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'getbank':
		
		$fn = new MasterDAL();
		$res= $fn->GetBanks()->fetchAll(); 

		echo json_encode($res);
		
		break;
		
	case 'savebank':
		
		$bank=new BankMDL();
		$bank->idbank=(int)trim($params['idbank']);
		$bank->bankcode=trim($params['bankcode']);
		$bank->bankname=trim($params['bankname']);
		$bank->bankaddress=trim($params['bankaddress']);

		$fn = new MasterDAL();
		$res= $fn->SaveBank($bank);
		//->fetch(PDO::FETCH_ASSOC);
		
		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		break;
		
	case 'getbranches':
		
		$fn = new MasterDAL();
		$res= $fn->GetBranches()->fetchAll(); 

		echo json_encode($res);
	
		break;
		
	case 'savebranch':
	
		$branch=new BranchMDL();
		$branch->idbranch=(int)$params['idbranch'];
		$branch->branchname=trim($params['branchname']);
		$branch->branchcategory=trim($params['branchcategory']);
		$branch->encoder=(int)$params['encoder'];

		$fn = new MasterDAL();
		$res= $fn->SaveBranch($branch);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'savecoa':
		
		$coa = new coaMDL();
		$coa->idcoa=(int)$params['idcoa'];
		$coa->idgla=$params['idgla'];
		$coa->idlocation=$params['idlocation'];
		$coa->idbranch=$params['idbranch'];
		$coa->idfunction=$params['idfunction'];
		$coa->idexpense=$params['idexpense'];
		$coa->name=$params['name'];
		$coa->lgitem=$params['lgitem'];
		$coa->lgasset=$params['lgasset'];
		$coa->lgidnum=$params['lgidnum'];
		$coa->lgquantity=$params['lgquantity'];
		$coa->typrectt=$params['typrectt'];
		$coa->encoder=(int)$params['encoder'];
		$coa->annualbudget=(double)$params['annualbudget'];
		
		$fn = new MasterDAL();
		$res= $fn->SaveCOA($coa);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'getcoa':
		
		$fn = new MasterDAL();
		$res= $fn->GetCOA()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
		
	case 'getcoabygla':
		
		$coa=new coaMDL();
		$coa->idgla=(int)$params['idgla'];

		$fn = new MasterDAL();
		$res= $fn->GetCOAByGLA($coa)->fetchAll(); 
		
		echo json_encode($res);
		
		break;
		
	case 'getcompany':
		
		$fn = new MasterDAL();
		$res= $fn->GetCompany()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
	
	case 'savecompany':
		
		$company = new companyMDL();
		$company->idcompany=(int)$params['idcompany'];
		$company->companyname=$params['name'];
		$company->companyinitial=$params['initial'];
		$company->pagibig=$params['pagibig'];
		$company->tin=$params['tin'];
		$company->sssno=$params['sssno'];
		$company->phealth=$params['phealth'];
		$company->address=$params['address'];
		$company->telno=$params['telno'];
		$company->vatno=$params['vatno'];
		
		$fn = new MasterDAL();
		$res= $fn->SaveCompany($company);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;	
		
	case 'getdocument':
		
		$fn = new MasterDAL();
		$res= $fn->GetDocument()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
		
	case 'savedocument':
		
		$document = new documentMDL();
		$document->iddocument=(int)$params['iddocument'];
		$document->documentcode=$params['documentcode'];
		$document->documentname=$params['documentname'];
		$document->documentinitial=$params['documentinitial'];
		$document->encoder=(int)$params['encoder'];
		
		$fn = new MasterDAL();
		$res= $fn->SaveDocument($document);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'getloans':
		
		$fn = new MasterDAL();
		$res= $fn->GetLoans()->fetchAll(); 
		
		echo json_encode($res);
		
		break;	
		
	case 'saveloans':
		
		$loans = new loansMDL();
		$loans->loanid=(int)$params['loanid'];
		$loans->loantype=$params['loantype'];
		$loans->loanname=$params['loanname'];
		$loans->maxloamt=floatval($params['maxloamt']);
		$loans->intraperc=floatval($params['intraperc']);
		$loans->servfeeperc=floatval($params['servfeeperc']);
		$loans->shrretperc=floatval($params['shrretperc']);
		$loans->maxloterm=$params['maxloterm'];
		$loans->encoder=(int)$params['encoder'];
		
		$fn = new MasterDAL();
		$res= $fn->SaveLoans($loans);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'getidmas':
		
		$fn = new MasterDAL();
		$res= $fn->GetIDMas()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
	
	case 'getidmasbycat':
		
		$fn = new MasterDAL();
		$res= $fn->GetIDMasByCat($params['cat'])->fetchAll(); 
		
		echo json_encode($res);
		
		break;
	
	case'saveidmas':
		
		$idmas = new IDMasMDL();
		$idmas->idnum=(int)$params['idnum'];
		$idmas->first_name=$params['first_name'];
		$idmas->middle_name=$params['middle_name'];
		$idmas->family_name=$params['family_name'];
		$idmas->cat=$params['cat'];
		$idmas->encoder=(int)$params['encoder'];
		
		$fn = new MasterDAL();
		$res= $fn->SaveIDMas($idmas);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'getexpense':
		
		$fn = new MasterDAL();
		$res= $fn->GetExpense()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
		
	case'saveexpense':
		
		$expense = new ExpenseMDL();
		$expense->idexpense=(int)$params['idexpense'];
		$expense->expensecode=$params['expensecode'];
		$expense->name=$params['name'];
		$expense->annualbudget=$params['annualbudget'];
		$expense->cat=$params['cat'];
		$expense->encoder=(int)$params['encoder'];
		
		$fn = new MasterDAL();
		$res= $fn->SaveExpense($expense);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'getfunction':
		
		$fn = new MasterDAL();
		$res= $fn->GetFunction()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
		
	case 'savefunction':
	
		$function = new FunctionMDL();
		$function->idfunction=(int)$params['idfunction'];
		$function->functionname=$params['functionname'];
		$function->cat=$params['cat'];
		$function->encoder=(int)$params['encoder'];

		$fn = new MasterDAL();
		$res= $fn->SaveFunction($function);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'getlocation':
		
		$fn = new MasterDAL();
		$res= $fn->GetLocation()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
		
	case 'getfunctionbycat':
		
		$function = new FunctionMDL();
		$function->cat=$params['cat'];
		
		$fn = new MasterDAL();
		$res= $fn->GetFunctionByCat($function)->fetchAll(); 
		
		echo json_encode($res);
		
		break;
	
	case 'savelocation':
	
		$location = new LocationMDL();
		$location->idlocation=(int)$params['idlocation'];
		$location->name=$params['locationame'];
		$location->cat=$params['cat'];
		$location->encoder=(int)$params['encoder'];

		$fn = new MasterDAL();
		$res= $fn->SaveLocation($location);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'getitem':
		
		$fn = new MasterDAL();
		$res= $fn->GetItems()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
		
	case 'saveitem':
	
		$item = new ItemMDL();
		$item->iditem=(int)$params['iditem'];
		$item->name=$params['name'];
		$item->cat=$params['cat'];
		$item->encoder=(int)$params['encoder'];

		$fn = new MasterDAL();
		$res= $fn->SaveItem($item);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'getmembers':
		
		$fn = new MasterDAL();
		$res= $fn->GetMembers()->fetchAll(); 
		
		echo json_encode($res);
		
		break;
		
	case 'savemember':
	
		$member = new MemberMDL();
		$member->idnum=(int)$params['idnum'];
		$member->homeadd=$params['homeadd'];
		$member->permadd=$params['permadd'];
		$member->presadd=$params['presadd'];
		$member->birthdate=$params['birthdate'];
		$member->placebirth=$params['placebirth'];
		$member->telno=$params['telno'];
		$member->mobileno=$params['mobileno'];
		$member->email=$params['email'];
		$member->gender=$params['gender'];
		$member->encoder=(int)$params['encoder'];

		$fn = new MasterDAL();
		$res= $fn->SaveMember($member);
		//->fetch(PDO::FETCH_ASSOC); 

		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
}

?>