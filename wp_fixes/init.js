function wp_fixes_apply(button){
	
	document.querySelector('#wp_fixes_indicator').style.visibility = 'visible';
	button.setAttribute('disabled', 'disabled');
	
	var query = 'op=pluginhandler&plugin=wp_fixes&method=wp_fixes_apply';
	
	new Ajax.Request('backend.php', {
		parameters: query,
		onSuccess: function(response){
			alert('All fixes applied successfully.');
		},
		onFailure: function(response){
			alert('There was a problem while sending the query.\nServer says: '+ response.status +': '+ response.statusText );
		},
		onComplete: function(response){
			document.querySelector('#wp_fixes_indicator').style.visibility = 'hidden';
			button.removeAttribute('disabled');
		}
	});

	return false;
}