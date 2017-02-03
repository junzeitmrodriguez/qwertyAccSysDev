function fnGetDate(){
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();
		var hr = today.getHours();
		var mns=today.getMinutes();

		if(dd<10) {
			dd='0'+dd
		} 

		if(mm<10) {
			mm='0'+mm
		} 

		today = mm+'/'+dd+'/'+yyyy+ ' ' + hr +':'+mns;
		return today;
	}
	
function IsNumericOnly(id){
	$(id).keypress(function(event) {
	  if ((event.which != 46 || $(this).val().indexOf('.') != -1) &&
		((event.which < 48 || event.which > 57) &&
		  (event.which != 0 && event.which != 8))) {
		event.preventDefault();
	  }

	  var text = $(this).val();

	  if ((text.indexOf('.') != -1) &&
		(text.substring(text.indexOf('.')).length > 2) &&
		(event.which != 0 && event.which != 8) &&
		($(this)[0].selectionStart >= text.length - 2)) {
		event.preventDefault();
	  }
	});
}

function fnGetMonths(){
	var params=[];
	params[1]='January';
	params[2]='February';
	params[3]='March';
	params[4]='April';
	params[5]='May';
	params[6]='June';
	params[7]='July';
	params[8]='August';
	params[9]='September';
	params[10]='October';
	params[11]='November';
	params[12]='December';
	return params;
}

function fnIsRequired(){
	$('.isrequired').each(function() {
	   if($(this).val().length == 0){
		   $(this).focus();
		   e.preventDefault();
	   }
	});
}

function dialog(id){
	/*var dialog=$(id).data('dialog');
	if(!dialog.element.data('opened')){
		dialog.open();
	}
	else{
		dialog.close();
	}*/
}

function notify(type,caption,content,icon) {
	setTimeout(function () {
		$.Notify({ type: type, caption: caption, content: content, icon: icon });
	}, 500);
}

function GetLoans(){
	var _params={};
	_params['action']='getloans';
	return req=$.ajax({
		url: 'classes/BLL/masterBLL.php',
		method: 'post',
		datatype: 'json',
		data:{
			params:_params
		},
		beforeSend:function(){
			dialog('.dialogpreloader');
		},
		complete:function(){
			dialog('.dialogpreloader');
		}
	});
}

function GetDocument(){
	var _params={};
	_params['action']='getdocument'	;
	return $.ajax({
		url: 'classes/BLL/masterBLL.php',
		method: 'post',
		datatype: 'json',
		data:{
			params:_params
		},
		beforeSend:function(){
			dialog('.dialogpreloader');
		},
		complete:function(){
			dialog('.dialogpreloader');
		}
	});
}

function fnGetDocument(){
	var req=GetDocument();
	
	req.done(function(data){
		var toAppend='';
		$.each(data,function(key,val) {
			toAppend+='<li><a href="index.php?page=entry&c='+val.documentcode+'&n='+val.documentname+'">'+val.documentname+'</a></li>';
		});
		$('#lidocuments').append(toAppend);
	});
	
	req.fail(function(request,status,error){
		notify('alert', 'Alert', request.responseText, '<span class="mif-notification"></span>');
	});
}

function PromptMessage(isError=0,Message=''){
	$('#myGlobalModal').modal('show')
	if(isError==1){
		$('#GlobalModalMessage').html('<div class="alert alert-danger">'+Message+'</div>')
	}
	if(isError==0){
		$('#GlobalModalMessage').html('<div class="alert alert-success">'+Message+'</div>')
	}
}