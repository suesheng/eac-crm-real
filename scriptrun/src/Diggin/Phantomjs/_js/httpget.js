var page = require('webpage').create();
var system = require('system');
var args = system.args;
var fs = require('fs');

page.open(args[1], function(status){
    console.log("Status: " + page.content);
    if(status === "success") {

        fs.write('file.html', page.content, 'w');
    }
    phantom.exit();
});