$(function () {

	var status = $('#status');

	(function getGeoLocation() {
		status.text('Getting Location...');
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function (position) {
				var lat = position.coords.latitude;
				var long = position.coords.longitude;

				// Call the getData function, send the lat and long
				getData(lat, long);

			});
		} else {
			status.text("Your browser doesn't support Geolocation or it is not enabled!");
		}

	})();

	function getData(lat, long){
		// Get the data from the wunderground API
		$.ajax({

    url:"http://api.wunderground.com/api/b71cfa659837e78f/geolookup/q/" + lat + "," + long + ".json",
    dataType:"jsonp",
    success: function(data){
            var location = data['location']['city'];
            var temp_f = data['current_observation']['temp_f'];
				
                $("cityDisplay").html(location);
                $("currentTemp").html(temp_f);
			}
               
		});
$("#cover").fadeOut(250);
	}

	// A function for changing a string to TitleCase
	function toTitleCase(str){
		return str.replace(/\w+/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
	}
});
