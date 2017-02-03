<?php

include '../../config/t_connection.php';

class transactionDAL{
	
	public function SaveCollateral($collateral){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_SaveCollateral(:id_collateral,:DocRefNo,:ColType,:idnum,:name2,:TCTNo,:Area,:Location,:MarketValue,:CertOfOwner,:particular,:plateno,:CRNo,:CRDate,:ORNo,:ORDate,:SerialNo,:SerialDate,:Model,:Remarks)');
			
			$stmt -> bindParam(':id_collateral', $collateral->id_collateral);
			$stmt -> bindParam(':DocRefNo', $collateral->DocRefNo);
			$stmt -> bindParam(':ColType', $collateral->ColType);
			$stmt -> bindParam(':idnum', $collateral->idnum);
			$stmt -> bindParam(':DocRefNo', $collateral->DocRefNo);
			$stmt -> bindParam(':name2', $collateral->name2);
			$stmt -> bindParam(':TCTNo', $collateral->TCTNo);
			$stmt -> bindParam(':Area', $collateral->Area);
			$stmt -> bindParam(':Location', $collateral->Location);
			$stmt -> bindParam(':MarketValue', $collateral->MarketValue);
			$stmt -> bindParam(':CertOfOwner', $collateral->CertOfOwner);
			$stmt -> bindParam(':particular', $collateral->particular);
			$stmt -> bindParam(':plateno', $collateral->plateno);
			$stmt -> bindParam(':CRNo', $collateral->CRNo);
			$stmt -> bindParam(':ColType', $collateral->ColType);
			$stmt -> bindParam(':CRDate', $collateral->CRDate);
			$stmt -> bindParam(':ORNo', $collateral->ORNo);
			$stmt -> bindParam(':ORDate', $collateral->ORDate);
			$stmt -> bindParam(':SerialNo', $collateral->SerialNo);
			$stmt -> bindParam(':SerialDate', $collateral->SerialDate);
			$stmt -> bindParam(':Model', $collateral->Model);
			$stmt -> bindParam(':Remarks', $collateral->Remarks);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetSummaryByGLAccount($acyear,$acmonth){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetSummaryByGLAccount(:acyear,:acmonth)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':acmonth', $acmonth);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetReportFooter($reportname){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetReportFooter(:reportname)');
			
			$stmt -> bindParam(':reportname', $reportname);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function IndivLoanLedger($acyear,$idnum){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_IndivLoanLedger(:acyear,:idnum)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':idnum', $idnum);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SavingsLedger_Common($acyear,$idnum){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_SavingsLedger_Common(:acyear,:idnum)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':idnum', $idnum);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SavingsLedger_Preferred($acyear,$idnum){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_SavingsLedger_Preferred(:acyear,:idnum)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':idnum', $idnum);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function YearEndClosing($acyear){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_YearEndClosing(:acyear)');
			
			$stmt -> bindParam(':acyear', $acyear);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function CloseAPeriod($acyear,$acmonth,$encoder){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_CloseAPeriod(:acyear,:acmonth,:encoder)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':acmonth', $acmonth);
			$stmt -> bindParam(':encoder', $encoder);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function DeleteEntry($acyear,$acmonth,$iddocument,$docrefno){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_DeleteEntry(:acyear,:acmonth,:iddocument,:docrefno)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':acmonth', $acmonth);
			$stmt -> bindParam(':iddocument', $iddocument);
			$stmt -> bindParam(':docrefno', $docrefno);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetCurrentAccount($acyear,$acmonth){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetCurrentAccount(:acyear,:acmonth)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':acmonth', $acmonth);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetScheduleofCapitalShare_Prefered($acyear,$acmonth){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_ScheduleofCapitalShare_Prefered(:acyear,:acmonth)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':acmonth', $acmonth);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetScheduleOfCapitalShare_Common($acyear,$acmonth){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_ScheduleofCapitalShare_Common(:acyear,:acmonth)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':acmonth', $acmonth);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetScheduleOfReceivables($acyear,$acmonth){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetScheduleOfReceivables(:acyear,:acmonth)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':acmonth', $acmonth);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetTrialBalance($acyear,$acmonth){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetTrialBalance(:acyear,:acmonth)');
			
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':acmonth', $acmonth);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetSumBookByGLA($idgla,$acyear,$acmonth){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetSumBookByGLA(:idgla,:acyear,:acmonth)');
			
			$stmt -> bindParam(':idgla', $idgla);
			$stmt -> bindParam(':acyear', $acyear);
			$stmt -> bindParam(':acmonth', $acmonth);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function FinancialReport(){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('SELECT * FROM transaction_db.t_financialreport order by recordid asc');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetCumulativeIncomeStatement($registers){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_CumulativeIncomeStatement(:acyear,:acmonth)');
			
			$stmt -> bindParam(':acyear', $registers->acyear);
			$stmt -> bindParam(':acmonth', $registers->acmonth);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetRegisters($registers){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetRegisters(:acyear,:acmonth,:id_document,:docrefno)');
			
			$stmt -> bindParam(':acyear', $registers->acyear);
			$stmt -> bindParam(':acmonth', $registers->acmonth);
			$stmt -> bindParam(':id_document', $registers->id_document);
			$stmt -> bindParam(':docrefno', $registers->DocRefNo);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetCollaterals(){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetCollaterals()');

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetPDChecks(){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetPDChecks()');

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetDSSeries(){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetDSSeries()');

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetJVSeries(){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetJVSeries()');

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetCVSeries(){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetCVSeries()');

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetTLoan(){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetTLoan()');

			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetTBook($tbook){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetTBook(:docrefno,:acyear,:documentcode)');
			
			$stmt -> bindParam(':docrefno', $tbook->DocRefNo);
			$stmt -> bindParam(':acyear', $tbook->acyear);
			$stmt -> bindParam(':documentcode', $tbook->id_document);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function GetTBankRecon(){
		global $pdo;
		try{
			
			$stmt = $pdo->prepare('CALL sp_GetTBankRecon()');
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveBankRecon($bankrecon){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveBankRecon(:bankreconid,:bankcode,:checkno,:checkdate,:amount,:iddocument,:docrefno,:docdate,:recstat,:encoder)');
			
			$stmt -> bindParam(':bankreconid', $bankrecon->BankReconId);
			$stmt -> bindParam(':bankcode', $bankrecon->Bankcode);
			$stmt -> bindParam(':checkno', $bankrecon->CheckNo);
			$stmt -> bindParam(':checkdate', $bankrecon->CheckDate);
			$stmt -> bindParam(':amount', $bankrecon->amount);
			$stmt -> bindParam(':iddocument', $bankrecon->id_document);
			$stmt -> bindParam(':docrefno', $bankrecon->DocRefNo);
			$stmt -> bindParam(':docdate', $bankrecon->DocDate);
			$stmt -> bindParam(':recstat', $bankrecon->RecStat);
			$stmt -> bindParam(':encoder', $bankrecon->encoder);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SavePDCheck($pdcheck){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SavePDCheck(:idpdcheck,:iddocument,:docrefno,:idnum,
			:checkno,:checkdate,:bankcode,:amount,:recstat,:encoder,:loantype,:remarks)');
			
			$stmt -> bindParam(':idpdcheck', $pdcheck->idpdcheck);
			$stmt -> bindParam(':iddocument', $pdcheck->id_document);
			$stmt -> bindParam(':docrefno', $pdcheck->DocRefNo);
			$stmt -> bindParam(':idnum', $pdcheck->idnum);
			$stmt -> bindParam(':checkno', $pdcheck->CheckNo);
			$stmt -> bindParam(':checkdate', $pdcheck->CheckDate);
			$stmt -> bindParam(':bankcode', $pdcheck->Bankcode);
			$stmt -> bindParam(':amount', $pdcheck->amount);
			$stmt -> bindParam(':recstat', $pdcheck->RecStat);
			$stmt -> bindParam(':encoder', $pdcheck->encoder);
			$stmt -> bindParam(':loantype', $pdcheck->loantype);
			$stmt -> bindParam(':remarks', $pdcheck->remarks);
			
			//var_dump($pdcheck);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveLoanApplication($loan){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveLoanApplication(:recordid,:CVRefNo,:DocRefNo,:DocDate,:idnum,:LoanType,:Amount,:IntRate,:Term,:NoApploans,:RecStat,:encoder)');
			
			$stmt -> bindParam(':recordid', $loan->recordid);
			$stmt -> bindParam(':CVRefNo', $loan->CVRefNo);
			$stmt -> bindParam(':DocRefNo', $loan->DocRefNo);
			$stmt -> bindParam(':DocDate', $loan->DocDate);
			$stmt -> bindParam(':idnum', $loan->idnum);
			$stmt -> bindParam(':LoanType', $loan->LoanType);
			$stmt -> bindParam(':Amount', $loan->Amount);
			$stmt -> bindParam(':IntRate', $loan->IntRate);
			$stmt -> bindParam(':Term', $loan->Term);
			$stmt -> bindParam(':NoApploans', $loan->NoApploans);
			$stmt -> bindParam(':RecStat', $loan->RecStat);
			$stmt -> bindParam(':encoder', $loan->encoder);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function SaveEntry($tbook){
		global $pdo;
		try{
			$stmt = $pdo->prepare('CALL sp_SaveEntry(:acyear,:acmonth,:id_document,:DocRefNo,:DocDate,:id_gla,:id_location,:id_branch,:id_function,:id_expense, 
									:id_item, :id_asset, :idnum, :quanty, :amount,:FxChnRate,:CheckNo,:CheckDate,:Bankcode,:explan01)');
			
			$stmt -> bindParam(':acyear', $tbook->acyear);
			$stmt -> bindParam(':acmonth', $tbook->acmonth);
			$stmt -> bindParam(':id_document', $tbook->id_document);
			$stmt -> bindParam(':DocRefNo', $tbook->DocRefNo);
			$stmt -> bindParam(':DocDate', $tbook->DocDate);
			$stmt -> bindParam(':id_gla', $tbook->id_gla);
			$stmt -> bindParam(':id_location', $tbook->id_location);
			$stmt -> bindParam(':id_branch', $tbook->id_branch);
			$stmt -> bindParam(':id_function', $tbook->id_function);
			$stmt -> bindParam(':id_expense', $tbook->id_expense);
			$stmt -> bindParam(':id_item', $tbook->id_item);
			$stmt -> bindParam(':id_asset', $tbook->id_asset);
			$stmt -> bindParam(':idnum', $tbook->idnum);
			$stmt -> bindParam(':quanty', $tbook->quanty);
			$stmt -> bindParam(':amount', $tbook->amount);
			$stmt -> bindParam(':FxChnRate', $tbook->FxChnRate);
			$stmt -> bindParam(':CheckNo', $tbook->CheckNo);
			$stmt -> bindParam(':CheckDate', $tbook->CheckDate);
			$stmt -> bindParam(':Bankcode', $tbook->Bankcode);
			$stmt -> bindParam(':explan01', $tbook->explan01);
			
			$stmt -> execute();
			
			return $stmt;
		}
		catch(PDOException $e){
			return $e->getMessage();
		}
	}
}

?>