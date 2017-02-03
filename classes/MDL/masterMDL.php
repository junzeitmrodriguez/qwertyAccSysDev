<?php
class ApplicationMDL{
	public $acyear;
	public $acmonth;
	public $appcode;
}
class AssetMDL{
	public $idasset;
	public $assetname;
	public $assetcategory;
	public $encoder;
	public $date;
	public $time;
}
class BankMDL{
	public $idbank;
	public $bankcode;
	public $bankname;
	public $bankaddress;
}
class BranchMDL{
	public $idbranch;
	public $branchname;
	public $branchcategory;
	public $encoder;
	public $date;
	public $time;
}
class CoaMDL{
	public $idcoa;
	public $idgla;
	public $idlocation;
	public $idbranch;
	public $idfunction;
	public $idexpense;
	public $name;
	public $lgitem;
	public $lgasset;
	public $lgidnum;
	public $lgquantity;
	public $typrectt;
	public $encoder;
	public $dateupd;
	public $timeupd;
	public $annualbudget;
}
class CompanyMDL{
	public $idcompany;
	public $companyname;
	public $companyinitial;
	public $pagibig;
	public $tin;
	public $sssno;
	public $phealth;
	public $address;
	public $telno;
	public $vatno;
}
class DocumentMDL{
	public $iddocument;
	public $documentcode;
	public $documentname;
	public $documentinitial;
	public $encoder;
	public $dateupd;
	public $timeupd;
}
class LoansMDL{
	public $loanid;
	public $loantype;
	public $loanname;
	public $maxloamt;
	public $intraperc;
	public $servfeeperc;
	public $shrretperc;
	public $maxloterm;
	public $encoder;
	public $dateupd;
	public $timeupd;
}
class IDMasMDL{
	public $idnum;
	public $first_name;
	public $middle_name;
	public $family_name;
	public $cat;
	public $encoder;
	public $dateupd;
	public $timeupd;
}
class ExpenseMDL{
	public $idexpense;
	public $expensecode;
	public $name;
	public $cat;
	public $encoder;
	public $annualbudget;
}
class FunctionMDL{
	public $idfunction;
	public $functionname;
	public $cat;
	public $encoder;
	public $dateupd;
	public $timeupd;
}
class LocationMDL{
	public $idlocation;
	public $name;
	public $cat;
	public $encoder;
	public $dateupd;
	public $timeupd;
}
class ItemMDL{
	public $iditem;
	public $name;
	public $cat;
	public $encoder;
	public $dateupd;
	public $timeupd;
}
class MemberMDL{
	public $idnum;
	public $firstname;
	public $middlename;
	public $familyname;
	public $homeadd;
	public $permadd;
	public $presadd;
	public $birthdate;
	public $placebirth;
	public $telno;
	public $mobileno;
	public $email;
	public $gender;
	public $encoder;
	public $dateupd;
	public $timeupd;
}
?>