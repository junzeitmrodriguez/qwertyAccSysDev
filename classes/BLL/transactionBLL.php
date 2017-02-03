<?php
header("Content-Type: application/json");

include '../DAL/transactionDAL.php';
include '../MDL/transactionMDL.php';

$params=$_POST['params'];

$action=$params['action'];

switch ($action){
	
	case 'getsummarybyglaccount':
		
		$fn = new transactionDAL();
		$res= $fn->GetSummaryByGLAccount($params['acyear'],$params['acmonth']);
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
	
	case 'getreportfooter':
		
		$fn = new transactionDAL();
		$res= $fn->GetReportFooter($params['reportname']);
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
	
	case 'yearendclosing':
		
		$fn = new transactionDAL();
		$res= $fn->YearEndClosing($params['acyear']);
		
		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
	
	case 'closeperiod':
		
		$fn = new transactionDAL();
		$res= $fn->CloseAPeriod($params['acyear'],$params['acmonth'],(int)$params['encoder']);
		
		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
	
	case 'deleteentry':
		
		$fn = new transactionDAL();
		$res= $fn->DeleteEntry((int)$params['acyear'],(int)$params['acmonth'],$params['document'],(int)$params['docno']);
		
		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
	
	case 'savecollateral':
		
		$collateral=new Collateral();
		$collateral->id_collateral=(int)$params['id_collateral'];
		$collateral->DocRefNo=(int)$params['DocRefNo'];
		$collateral->ColType=$params['ColType'];
		$collateral->idnum=(int)$params['idnum'];
		$collateral->name2=$params['name2'];
		$collateral->TCTNo=$params['TCTNo'];
		$collateral->Area=$params['Area'];
		$collateral->Location=$params['Location'];
		$collateral->MarketValue=$params['MarketValue'];
		$collateral->CertOfOwner=$params['CertOfOwner'];
		$collateral->particular=$params['particular'];
		$collateral->plateno=$params['plateno'];
		$collateral->CRNo=$params['CRNo'];
		$collateral->CRDate=$params['CRDate'];
		$collateral->ORNo=$params['ORNo'];
		$collateral->ORDate=$params['ORDate'];
		$collateral->SerialNo=$params['SerialNo'];
		$collateral->SerialDate=$params['SerialDate'];
		$collateral->Model=$params['Model'];
		$collateral->Remarks=$params['Remarks'];
		
		$fn = new transactionDAL();
		$res= $fn->SaveCollateral($collateral);
		
		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
	
	case 'savepdcheck':
		
		$fn = new transactionDAL();
		$pdcheck=new PDCheck();
		$pdcheck->idnum=(int)$params['idnum'];
		$pdcheck->idpdcheck=(int)$params['idpdcheck'];
		$pdcheck->Bankcode=$params['Bankcode'];
		$pdcheck->CheckNo=$params['CheckNo'];
		$pdcheck->CheckDate=$params['CheckDate'];
		$pdcheck->amount=(double)$params['amount'];
		$pdcheck->loantype=$params['loantype'];
		$pdcheck->remarks=$params['remarks'];
		$pdcheck->id_document=$params['id_document'];
		$pdcheck->DocRefNo=(int)$params['DocRefNo'];
		$pdcheck->RecStat=$params['RecStat'];
		$pdcheck->encoder=(int)$params['encoder'];
		
		$fn = new transactionDAL();
		$res= $fn->SavePDCheck($pdcheck);
		
		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
	
	case 'getcumincome':
	
		$fn = new transactionDAL();
		$registers=new RegistersMDL();
		$registers->acyear=(int)$params['acyear'];
		$registers->acmonth=(int)$params['acmonth'];
		$res= $fn->GetCumulativeIncomeStatement($registers); 
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
	
	case 'getregisters':
	
		$fn = new transactionDAL();
		$registers=new RegistersMDL();
		$registers->acyear=(int)$params['acyear'];
		$registers->acmonth=(int)$params['acmonth'];
		$registers->id_document=$params['id_document'];
		$registers->DocRefNo=(int)$params['DocRefNo'];
		$res= $fn->GetRegisters($registers); 
		
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
	
	case 'getcollaterals':
	
		$fn = new transactionDAL();
		$res= $fn->GetCollaterals(); 
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
	
	case 'getpdchecks':
	
		$fn = new transactionDAL();
		$res= $fn->GetPDChecks(); 
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
	
	case 'getdsseries':
	
		$fn = new transactionDAL();
		$res= $fn->GetDSSeries(); 
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
	
	case 'getcvseries':
	
		$fn = new transactionDAL();
		$res= $fn->GetCVSeries(); 
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
	
	
	case 'getjvseries':
	
		$fn = new transactionDAL();
		$res= $fn->GetJVSeries(); 
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
	
	case 'gettloan':
	
		$tloan=new TLoanMDL();
		$fn = new transactionDAL();
		$res= $fn->GetTLoan(); 
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
		
	case 'gettbankrecon':
	
		$fn = new transactionDAL();
		$res= $fn->GetTBankRecon(); 
		
		$ret=$res->fetchAll();
		
		if($ret){
			echo json_encode($ret);
		}
		else{
			echo print_r($res->errorInfo());
		}
		
		break;
	
	case 'gettbook':
	
		$tbook=new TBookMDL();
		$tbook->DocRefNo=(int)$params['docno'];
		$tbook->acyear=(int)$params['acyear'];
		$tbook->id_document=$params['documentcode'];
		
		$fn = new transactionDAL();
		$res= $fn->GetTBook($tbook)->fetchAll(); 
		
		echo json_encode($res);
		
		break;
		
	case 'saveloanapp':
		
		$loan=new TLoanMDL();
		$loan->recordid=(int)$params['recordid'];
		$loan->CVRefNo=(int)$params['CVRefNo'];
		$loan->DocRefNo=(int)$params['DocRefNo'];
		$loan->DocDate=$params['DocDate'];
		$loan->idnum=(int)$params['idnum'];
		$loan->LoanType=$params['LoanType'];
		$loan->Amount=(double)$params['Amount'];
		$loan->IntRate=(double)$params['IntRate'];
		$loan->Term=(int)$params['Term'];
		$loan->NoApploans=(int)$params['NoApploans'];
		$loan->RecStat=$params['RecStat'];
		$loan->encoder=(int)$params['encoder'];
		
		$fn = new transactionDAL();
		$res= $fn->SaveLoanApplication($loan);
		
		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
	
	case 'savebankrecon':
		
		$bankrecon=new TBankRecon();
		$bankrecon->BankReconId=(int)$params['BankReconId'];
		$bankrecon->Bankcode=$params['Bankcode'];
		$bankrecon->CheckNo=$params['CheckNo'];
		$bankrecon->CheckDate=$params['CheckDate'];
		$bankrecon->amount=(double)$params['Amount'];
		$bankrecon->id_document=$params['iddocument'];
		$bankrecon->DocRefNo=(int)$params['DocRefNo'];
		$bankrecon->DocDate=$params['DocDate'];
		$bankrecon->RecStat=$params['RecStat'];
		$bankrecon->encoder=(int)$params['encoder'];
		
		$fn = new transactionDAL();
		$res= $fn->SaveBankRecon($bankrecon);
		
		$ret=$res->fetch(PDO::FETCH_ASSOC);
		
		if(!$ret){
			echo print_r($res->errorInfo());
		}
		else{
			echo json_encode($ret);
		}
		
		break;
		
	case 'saveentry':
		
		$tbook=new TBookMDL();
		$tbook->acyear=$params['acyear'];
		$tbook->acmonth=$params['acmonth'];
		$tbook->id_document=$params['document'];
		$tbook->DocRefNo=(int)$params['docno'];
		$tbook->DocDate=$params['date'];
		$tbook->id_gla=$params['gla'];
		$tbook->id_location=$params['location'];
		$tbook->id_branch=$params['branch'];
		$tbook->id_function=$params['function'];
		$tbook->id_expense=$params['expense'];
		$tbook->id_item=$params['item'];
		$tbook->id_asset=(int)$params['asset'];
		$tbook->idnum=(int)$params['id'];
		$tbook->quanty=(int)$params['qty'];
		$tbook->amount=(double)$params['amount'];
		$tbook->FxChnRate=(double)$params['FxChnRate'];
		$tbook->CheckNo=$params['check'];
		$tbook->CheckDate=$params['checkdate'];
		$tbook->Bankcode=$params['bankcode'];
		$tbook->explan01=$params['explan01'];
		
		$fn = new transactionDAL();
		$res= $fn->SaveEntry($tbook);
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