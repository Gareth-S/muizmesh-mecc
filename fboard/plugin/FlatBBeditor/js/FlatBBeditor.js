/*!
  * FlatBB Editor v2.2 (http://flatboard.free.fr)
  * Copyright 2019-2020 Author: Frédéric Kaplon
  * Licensed under MIT (https://github.com/Fred89/flatboard/blob/master/LICENSE)
  * Minified with https://jscompress.com/
  */
  
// On exécute la fonction BBcode
$( function() { bbcode(); } );

// Action d'insertion dans la zone qui affichera nos tags BBcode
function EditorTagInsert(aId, aTag1, aTag2, aOpt){
	if(aOpt === "") return 0;
	if(aOpt != 0) aTag1 = aTag1.replace("$1", aOpt);
	var e = document.getElementById(aId);
	if(typeof(e) == "undefined" || e == null) return 0;
	var s1 = e.selectionStart;
	var s2 = e.selectionEnd;
	var txt = e.value;
	e.value = (txt.substring(0, s1) + aTag1 + txt.substring(s1, s2) + aTag2 + txt.substring(s2, txt.length));
	e.selectionStart = s1 + aTag1.length;
	e.selectionEnd = s2 + aTag1.length;
	e.focus();
}

// On convertie les émoticons par des émojis
var map = {
	"o/": "👋",
	"</3": "💔",
	"<3": "💗",
	"8-D": "😁",
	"8D": "😁",
	":-D": "😁",
	":-3": "😁",
	":3": "😁",
	"B^D": "😁",
	"X-D": "😁",
	"XD": "😁",
	"x-D": "😁",
	"xD": "😁",
	":\")": "😂",
	":\"-)": "😂",
	":-))": "😃",
	"8)": "😄",
	":)": "😊",
	":-)": "😄",
	":]": "😄",
	":^)": "😄",
	":o)": "😄",
	":}": "😄",
	":っ)": "😄",
	"0:)": "😇",
	"0:-)": "😇",
	"0:-3": "😇",
	"0:3": "😇",
	"0;^)": "😇",
	"O:-)": "😇",
	"3:)": "😈",
	"3:-)": "😈",
	"}:)": "😈",
	"}:-)": "😈",
	"*)": "😉",
	"*-)": "😉",
	":-,": "😉",
	";)": "😉",
	";-)": "😉",
	";-]": "😉",
	";D": "😉",
	";]": "😉",
	";^)": "😉",
	":-|": "😐",
	":|": "😐",
	":(": "😒",
	":-(": "😒",
	":-<": "😒",
	":-[": "😒",
	":-c": "😒",
	":<": "😒",
	":[": "😒",
	":{": "😒",
	":っC": "😒",
	"%)": "😖",
	"%-)": "😖",
	":-P": "😜",
	":-b": "😜",
	":-p": "😜",
	":-Þ": "😜",
	":-þ": "😜",
	":-p": "😜",
	":Þ": "😜",
	":þ": "😜",
	";(": "😜",
	"X-P": "😜",
	"XP": "😜",
	"x-p": "😜",
	"xp": "😜",
	":-||": "😠",
	":-.": "😡",
	":-/": "😡",
	":L": "😡",
	":S": "😡",
	":\"(": "😢",
	":\"-(": "😢",
	"^5": "😤",
	"^<_<": "😤",
	"o/\\o": "😤",
	"|-O": "😫",
	"|;-)": "😫",
	":###..": "😰",
	":-###..": "😰",
	"D-\":": "😱",
	"D8": "😱",
	"D:<": "😱",
	"D;": "😱",
	"DX": "😱",
	"v.v": "😱",
	"8-0": "😲",
	":-O": "😲",
	":-o": "😲",
	":O": "😲",
	":o": "😲",
	"O-O": "😲",
	"O_O": "😲",
	"O_o": "😲",
	"o-o": "😲",
	"o_O": "😲",
	"o_o": "😲",
	":$": "😳",
	"#-)": "😵",
	":#": "😶",
	":&": "😶",
	":-#": "😶",
	":-&": "😶",
	":-X": "😶",
	":X": "😶",
	":-J": "😼",
	":*": "😽",
	":^*": "😽",
	"ಠ_ಠ": "🙅",
	"*\\0/*": "🙆",
	"\\o/": "🙆",
	":>": "😄",
	">.<": "😡",
	">:(": "😠",
	">:)": "😈",
	">:-)": "😈",
	">:[": "😒",
	">;)": "😈",
	">_>^": "😤",
	"^^": "😊",
	":sweat": "😅"	
};	
function escapeSpecialChars(regex) {
   return regex.replace(/([()[{*+.$^\\|?])/g, '\\$1');
}
document.getElementById('content').oninput = function() {
   for (var i in map) {
     var regex = new RegExp(escapeSpecialChars(i), 'gim');
     this.value = this.value = this.value.replace(regex, map[i]);
   }
};	
// On convertie les émoticons par des émojis FIN
		
function bbcode() {
	// On ajoute le bouton qui permet d'afficher les émojis dans notre textarea
	$('textarea[name="content"]').attr("data-emoji", "true");
	// On charge le plugin Emoji picker
	window.EmojiPicker.init();
	
	// On permmutte le formulaire en plein écran
	$('#fullscreen').click(function(e){ $('#form').toggleClass('fullscreen'); });
		
	// Action lorque que l'on sélectionne une image via le champ file
    $("document").ready(function () {
	    
        $('#upload-file').on("change", function () {
            var $files = $(this).get(0).files;
            if ($files.length) {
                // On rejète les gros fichiers limité par l'API imgur
                if ($files[0].size > $(this).data("max-size") * 5000) {
                    console.log("Please select a smaller file");
                    return false;
                }
                // Remplacer votre clientID API key
                var apiUrl = 'https://api.imgur.com/3/image';
                var clientId = '6ae5a6f69932e5e'; //ctrlq
                var formData = new FormData();
                formData.append("image", $files[0]);
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": apiUrl,
                    "method": "POST",
                    "datatype": "json",
                    "headers": {
                        "Authorization": 'Client-ID ' + clientId
                    },
                    "processData": false,
                    "contentType": false,
                    "data": formData,
                    beforeSend: function (xhr) {
                        console.log("Uploading file to Imgur...");
                    },
                    success: function (res) {
                        console.log(res.data.link);
                        $('textarea[name="content"]').append('[img]' + res.data.link + '[/img]');
                    },
                    // On rejète les gros fichiers limité par l'API imgur
                    error: function () {
                        alert("Failed to upload (Please select a smaller file).");
                    }
                }
                $.ajax(settings).done(function (response) {
                    console.log("Done");
                });
            }
        });
           
    });
}