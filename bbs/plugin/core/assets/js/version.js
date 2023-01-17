var $ajax = (function(){
    var that = {};
    that.send = function(url, options) {
        var on_success = options.onSuccess || function(){},
            on_error   = options.onError   || function(){},
            on_timeout = options.onTimeout || function(){},
            timeout    = options.timeout   || 10000; // ms

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //console.log('responseText:' + xmlhttp.responseText);
                try {
                    var json = JSON.parse(xmlhttp.responseText);
                } catch(err) {
                    console.log(err.message + ' in ' + xmlhttp.responseText);
                    return;
                }
                on_success(json);
            }else{
                if(xmlhttp.readyState == 4){
                    on_error();
                }
            }
        };
        xmlhttp.timeout = timeout;
        xmlhttp.ontimeout = function () { 
            on_timeout();
        }
        xmlhttp.open('GET', url, true);
        xmlhttp.send();
    }
    return that;
})();

$ajax.send('https://flatboard.org/version.php', {
    onSuccess: function(json){
        console.log('success',json);
		if (json.stable.build > BUILD) {
			document.getElementById('new-version').style.display='block';
		}        
    },
    onError: function(){
        console.log('[WARNING] There is some issue to get the version status.');
    },
    onTimeout: function(){
        console.log('Timeout');
    },
    timeout: 10000
});