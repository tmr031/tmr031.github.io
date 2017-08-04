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


var cardButton = function(t) {
  return t.card('all')
		.then(function (card) {
      		alert(JSON.stringify(card, null, 2));
    		});

    return [
      {
        icon: ICON,
        text: "Mind Map",
        callback: openOverlay
      }
    ];
  });
};
var openOverlay = function (t, opts) {
  return t.overlay({
    url: 'https://sybhealthapp.000webhostapp.com/mindmap.html',
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
    return cardButton(t);
		
	}
});
