/* global TrelloPowerUp */
var WHITE_ICON = './images/icon-white.svg';
var GRAY_ICON = './images/icon-gray.svg';
var Promise = TrelloPowerUp.Promise;

var cardButtonCallback = function(t){
  return t.overlay({
    title: "Time Tracker",
    url: 'https://sybhealthapp.000webhostapp.com/mindmap.html',
    height: 700
  });
};
var openOverlay = function (t, opts) {
  return t.overlay({
	  var oh = jQuery.data( document.body, "foo");
    url: 'https://sybhealthapp.000webhostapp.com/mindmap.html?id=' + oh,
	  width:600,
	  height:700,
    args: { rand: (Math.random() * 100).toFixed(0) } // optional args to pass
  });
};




TrelloPowerUp.initialize({
	'board-buttons': function(t, options) {
		return [{
			icon: WHITE_ICON,
			text: "Time Statistics",
			callback: openOverlay
		}];
	},
	'card-buttons': function(t, options) {
		return [{
			icon: WHITE_ICON,
			text: "Mind Map",
			callback: cardButtonCallback
		}];
		
	}
});
window.TrelloPowerUp.initialize({
  'card-buttons': function (t, opts) {
    return t.card('id')
    .then(function (card) {
//var temp = card[0]['id'];
    //  alert(JSON.stringify(temp));
	    
      var jsonA = JSON.stringify(card,null,2);
	  
	    alert((JSON.parse(jsonA)).id);
	    jQuery.data( document.body, "foo", (JSON.parse(jsonA)).id) );

    });
  }
});
