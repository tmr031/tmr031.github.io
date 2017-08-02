/* global TrelloPowerUp */
var WHITE_ICON = './images/icon-white.svg';
var GRAY_ICON = './images/icon-gray.svg';
var Promise = TrelloPowerUp.Promise;

var boardButtonCallback = function(t){
  return t.popup({
    title: "Time Statistics",
    url: './mindmap.html',
	  width:700,
    height: 700
  });
};

var cardButtonCallback = function(t){
  return t.popup({
    title: "Time Tracker",
    url: './mindmap.html',
    height: 300
  });
};



TrelloPowerUp.initialize({
	'board-buttons': function(t, options) {
		return [{
			icon: WHITE_ICON,
			text: "Time Statistics",
			callback: boardButtonCallback
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
