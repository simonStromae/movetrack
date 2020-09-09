/* SMART WIZARD */
		
function init_SmartWizard() {
	
	if( typeof ($.fn.smartWizard) === 'undefined'){ return; }
	console.log('init_SmartWizard');
	
	$('#wizard').smartWizard();

	$('#wizard_verticle').smartWizard({
	  transitionEffect: 'slide'
	});

	$('.buttonNext').addClass('btn btn-md btn-success');
	$('.buttonPrevious').addClass('btn btn-md rounded-0 btn-primary');
	$('.buttonFinish').addClass('btn btn-default');
	
};


$(document).ready(function() {
	
	init_SmartWizard();
			
});	