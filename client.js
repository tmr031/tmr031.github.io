/* global TrelloPowerUp */
var WHITE_ICON = './images/icon-white.svg';
var GRAY_ICON = './images/icon-gray.svg';
var Promise = TrelloPowerUp.Promise;

var cardButtonCallback = function(t){
  return t.overlay({
    title: "Time Tracker",
    url: './mindmap.html',
    height: 300
  });
};
var openOverlay = function (t, opts) {
  return t.boardBar({
    url: './mindmap.html',
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
