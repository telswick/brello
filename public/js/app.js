console.log("Hello");

"use strict";

var LaneModel = Backbone.Model.extend({
	urlRoot: "/lanes",



});

var LanesCollection = Backbone.Collection.extend({
	url: "/lanes",
	model: LaneModel,


});

// put below in console
// var todoLane = new LaneModel({ name: "todo"});

// var lanes = new LanesCollection();
// lanes.fetch();