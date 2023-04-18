// Notification by https://ned.im/noty/
// Template de la notification via callbacks
Noty.overrideDefaults({
  callbacks: {
    onTemplate: function() {
      if (this.options.type === 'alert') {    
        this.barDom.innerHTML = '<figure class="figure noty_body">';
        this.barDom.innerHTML += '<img class="figure-img img-thumbnail m-2" style="width:70px" src="' + this.options.img + '">';
        this.barDom.innerHTML += '<figcaption class="mb-1 text-center">' + this.options.text + '</figcaption>';
        this.barDom.innerHTML += '<div class="noty_progressbar"></div>';
        this.barDom.innerHTML += '</figure>';
      }
    }
  }
})
// Paramètres de la notification
const showNotif = (msg, img) => {
  let notif = 	 
	  new Noty({
	  	theme: 'sunset',
	  	type: 'alert',
	    text: msg,
	    img: img,
	    layout: 'bottomRight',
	  	timeout: '3000',
	  	progressBar: true,
	  	closeWith: ['click'],
	  	killer: true,			    
	  }).show();
}
// Rendus AJAX
$(function(){
  $("input[data-corepluginswitch='true']").each(function(){
    let pluginSwitch = $(this)
    pluginSwitch.change(function(){
      let checked = pluginSwitch.is(':checked')
      let pluginId = pluginSwitch.data("corepluginid")
      $.ajax({
        url:"#",
        type: "POST",
        data: {
          corePluginSwitch: JSON.stringify({
            pluginId: pluginId,
            isEnable: checked
          })
        },
        success:function(data){
          data = JSON.parse(data)
          if(data.good){
            //notification
            showNotif(data.msg,data.img)
            //bordure
            $("[data-pluginid='"+data.id+"']").removeClass('border-success').removeClass('border-secondary').addClass('border-'+data.newStatut)
            //tooltip
            $("[data-pluginid='"+data.id+"']").find("[data-plugincardtooltip='true']").attr('data-original-title', data.newTooltip).tooltip('show')
            //boutons
            $("[data-pluginid='"+data.id+"']").find("[data-plugincardbutton='true']").html(data.newButton)
          }else{
            pluginSwitch.prop('checked',checked?false:true)
          }
        }
      })
    })
  })
})