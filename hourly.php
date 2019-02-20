<?php
    header('Access-Control-Allow-Origin: *');
    if (isset($_GET["x"])&&isset($_GET["y"])) {
        echo file_get_contents("http://api.wunderground.com/api/key/hourly/lang:CZ/q/".$_GET["x"].",".$_GET["y"].".json");
    }
    exit;
?>

{
  "response": {
  "version":"0.1",
  "termsofService":"http://www.wunderground.com/weather/api/d/terms.html",
  "features": {
  "hourly": 1
  }
	}
		,
	"hourly_forecast": [
		{
		"FCTTIME": {
		"hour": "23","hour_padded": "23","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "18","mday_padded": "18","yday": "76","isdst": "0","epoch": "1489874400","pretty": "23:00 CET 18. Březen 2017","civil": "11:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Sobota","weekday_name_night": "Sobota v noci","weekday_name_abbrev": "So","weekday_name_unlang": "Saturday","weekday_name_night_unlang": "Saturday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "41", "metric": "5"},
		"dewpoint": {"english": "32", "metric": "0"},
		"condition": "Možnost deště",
		"icon": "chancerain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_chancerain.gif",
		"fctcode": "12",
		"sky": "80",
		"wspd": {"english": "5", "metric": "8"},
		"wdir": {"dir": "Z", "degrees": "277"},
		"wx": "Slabý déšť",
		"uvi": "0",
		"humidity": "70",
		"windchill": {"english": "38", "metric": "3"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "38", "metric": "3"},
		"qpf": {"english": "0.01", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "71",
		"mslp": {"english": "29.66", "metric": "1004"}
		}
		,
		{
		"FCTTIME": {
		"hour": "0","hour_padded": "00","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489878000","pretty": "00:00 CET 19. Březen 2017","civil": "12:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "40", "metric": "4"},
		"dewpoint": {"english": "33", "metric": "1"},
		"condition": "Možnost deště",
		"icon": "chancerain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_chancerain.gif",
		"fctcode": "12",
		"sky": "80",
		"wspd": {"english": "5", "metric": "8"},
		"wdir": {"dir": "Z", "degrees": "275"},
		"wx": "Slabý déšť",
		"uvi": "0",
		"humidity": "74",
		"windchill": {"english": "36", "metric": "2"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "36", "metric": "2"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "43",
		"mslp": {"english": "29.67", "metric": "1005"}
		}
		,
		{
		"FCTTIME": {
		"hour": "1","hour_padded": "01","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489881600","pretty": "01:00 CET 19. Březen 2017","civil": "1:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "39", "metric": "4"},
		"dewpoint": {"english": "32", "metric": "0"},
		"condition": "Částečně oblačno",
		"icon": "partlycloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_partlycloudy.gif",
		"fctcode": "2",
		"sky": "31",
		"wspd": {"english": "5", "metric": "8"},
		"wdir": {"dir": "Z", "degrees": "278"},
		"wx": "Částečně zataženo",
		"uvi": "0",
		"humidity": "76",
		"windchill": {"english": "36", "metric": "2"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "36", "metric": "2"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "22",
		"mslp": {"english": "29.68", "metric": "1005"}
		}
		,
		{
		"FCTTIME": {
		"hour": "2","hour_padded": "02","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489885200","pretty": "02:00 CET 19. Březen 2017","civil": "2:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "37", "metric": "3"},
		"dewpoint": {"english": "31", "metric": "-1"},
		"condition": "Částečně oblačno",
		"icon": "partlycloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_partlycloudy.gif",
		"fctcode": "2",
		"sky": "41",
		"wspd": {"english": "7", "metric": "11"},
		"wdir": {"dir": "Z", "degrees": "272"},
		"wx": "Částečně zataženo",
		"uvi": "0",
		"humidity": "78",
		"windchill": {"english": "32", "metric": "0"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "32", "metric": "0"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "7",
		"mslp": {"english": "29.7", "metric": "1006"}
		}
		,
		{
		"FCTTIME": {
		"hour": "3","hour_padded": "03","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489888800","pretty": "03:00 CET 19. Březen 2017","civil": "3:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "36", "metric": "2"},
		"dewpoint": {"english": "30", "metric": "-1"},
		"condition": "Částečně oblačno",
		"icon": "partlycloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_partlycloudy.gif",
		"fctcode": "2",
		"sky": "33",
		"wspd": {"english": "7", "metric": "11"},
		"wdir": {"dir": "Z", "degrees": "271"},
		"wx": "Částečně zataženo",
		"uvi": "0",
		"humidity": "80",
		"windchill": {"english": "30", "metric": "-1"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "30", "metric": "-1"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "2",
		"mslp": {"english": "29.72", "metric": "1006"}
		}
		,
		{
		"FCTTIME": {
		"hour": "4","hour_padded": "04","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489892400","pretty": "04:00 CET 19. Březen 2017","civil": "4:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "35", "metric": "2"},
		"dewpoint": {"english": "29", "metric": "-2"},
		"condition": "Jasno",
		"icon": "clear",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_clear.gif",
		"fctcode": "1",
		"sky": "19",
		"wspd": {"english": "7", "metric": "11"},
		"wdir": {"dir": "Z", "degrees": "274"},
		"wx": "Jasno",
		"uvi": "0",
		"humidity": "79",
		"windchill": {"english": "30", "metric": "-1"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "30", "metric": "-1"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "3",
		"mslp": {"english": "29.73", "metric": "1007"}
		}
		,
		{
		"FCTTIME": {
		"hour": "5","hour_padded": "05","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489896000","pretty": "05:00 CET 19. Březen 2017","civil": "5:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "34", "metric": "1"},
		"dewpoint": {"english": "28", "metric": "-2"},
		"condition": "Jasno",
		"icon": "clear",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_clear.gif",
		"fctcode": "1",
		"sky": "18",
		"wspd": {"english": "7", "metric": "11"},
		"wdir": {"dir": "Z", "degrees": "270"},
		"wx": "Jasno",
		"uvi": "0",
		"humidity": "79",
		"windchill": {"english": "28", "metric": "-2"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "28", "metric": "-2"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "3",
		"mslp": {"english": "29.76", "metric": "1008"}
		}
		,
		{
		"FCTTIME": {
		"hour": "6","hour_padded": "06","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489899600","pretty": "06:00 CET 19. Březen 2017","civil": "6:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "34", "metric": "1"},
		"dewpoint": {"english": "28", "metric": "-2"},
		"condition": "Jasno",
		"icon": "clear",
		"icon_url":"http://icons.wxug.com/i/c/k/clear.gif",
		"fctcode": "1",
		"sky": "14",
		"wspd": {"english": "7", "metric": "11"},
		"wdir": {"dir": "Z", "degrees": "260"},
		"wx": "Slunečno",
		"uvi": "0",
		"humidity": "78",
		"windchill": {"english": "28", "metric": "-2"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "28", "metric": "-2"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "5",
		"mslp": {"english": "29.78", "metric": "1008"}
		}
		,
		{
		"FCTTIME": {
		"hour": "7","hour_padded": "07","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489903200","pretty": "07:00 CET 19. Březen 2017","civil": "7:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "35", "metric": "2"},
		"dewpoint": {"english": "28", "metric": "-2"},
		"condition": "Jasno",
		"icon": "clear",
		"icon_url":"http://icons.wxug.com/i/c/k/clear.gif",
		"fctcode": "1",
		"sky": "12",
		"wspd": {"english": "6", "metric": "10"},
		"wdir": {"dir": "Z", "degrees": "275"},
		"wx": "Slunečno",
		"uvi": "0",
		"humidity": "76",
		"windchill": {"english": "31", "metric": "-1"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "31", "metric": "-1"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "4",
		"mslp": {"english": "29.8", "metric": "1009"}
		}
		,
		{
		"FCTTIME": {
		"hour": "8","hour_padded": "08","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489906800","pretty": "08:00 CET 19. Březen 2017","civil": "8:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "37", "metric": "3"},
		"dewpoint": {"english": "27", "metric": "-3"},
		"condition": "Jasno",
		"icon": "clear",
		"icon_url":"http://icons.wxug.com/i/c/k/clear.gif",
		"fctcode": "1",
		"sky": "15",
		"wspd": {"english": "9", "metric": "14"},
		"wdir": {"dir": "ZSZ", "degrees": "289"},
		"wx": "Slunečno",
		"uvi": "1",
		"humidity": "68",
		"windchill": {"english": "31", "metric": "-1"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "31", "metric": "-1"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "2",
		"mslp": {"english": "29.81", "metric": "1009"}
		}
		,
		{
		"FCTTIME": {
		"hour": "9","hour_padded": "09","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489910400","pretty": "09:00 CET 19. Březen 2017","civil": "9:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "39", "metric": "4"},
		"dewpoint": {"english": "26", "metric": "-3"},
		"condition": "Jasno",
		"icon": "clear",
		"icon_url":"http://icons.wxug.com/i/c/k/clear.gif",
		"fctcode": "1",
		"sky": "22",
		"wspd": {"english": "11", "metric": "18"},
		"wdir": {"dir": "ZSZ", "degrees": "300"},
		"wx": "Většinou slunečno",
		"uvi": "1",
		"humidity": "58",
		"windchill": {"english": "32", "metric": "0"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "32", "metric": "0"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "0",
		"mslp": {"english": "29.82", "metric": "1010"}
		}
		,
		{
		"FCTTIME": {
		"hour": "10","hour_padded": "10","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489914000","pretty": "10:00 CET 19. Březen 2017","civil": "10:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "42", "metric": "6"},
		"dewpoint": {"english": "24", "metric": "-4"},
		"condition": "Jasno",
		"icon": "clear",
		"icon_url":"http://icons.wxug.com/i/c/k/clear.gif",
		"fctcode": "1",
		"sky": "29",
		"wspd": {"english": "12", "metric": "19"},
		"wdir": {"dir": "ZSZ", "degrees": "304"},
		"wx": "Většinou slunečno",
		"uvi": "2",
		"humidity": "48",
		"windchill": {"english": "36", "metric": "2"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "36", "metric": "2"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "0",
		"mslp": {"english": "29.83", "metric": "1010"}
		}
		,
		{
		"FCTTIME": {
		"hour": "11","hour_padded": "11","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489917600","pretty": "11:00 CET 19. Březen 2017","civil": "11:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "44", "metric": "7"},
		"dewpoint": {"english": "22", "metric": "-6"},
		"condition": "Částečně oblačno",
		"icon": "partlycloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/partlycloudy.gif",
		"fctcode": "2",
		"sky": "35",
		"wspd": {"english": "12", "metric": "19"},
		"wdir": {"dir": "ZSZ", "degrees": "301"},
		"wx": "Částečně zataženo",
		"uvi": "3",
		"humidity": "42",
		"windchill": {"english": "39", "metric": "4"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "39", "metric": "4"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "0",
		"mslp": {"english": "29.84", "metric": "1011"}
		}
		,
		{
		"FCTTIME": {
		"hour": "12","hour_padded": "12","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489921200","pretty": "12:00 CET 19. Březen 2017","civil": "12:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "45", "metric": "7"},
		"dewpoint": {"english": "21", "metric": "-6"},
		"condition": "Částečně oblačno",
		"icon": "partlycloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/partlycloudy.gif",
		"fctcode": "2",
		"sky": "43",
		"wspd": {"english": "11", "metric": "18"},
		"wdir": {"dir": "ZSZ", "degrees": "298"},
		"wx": "Částečně zataženo",
		"uvi": "3",
		"humidity": "38",
		"windchill": {"english": "39", "metric": "4"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "39", "metric": "4"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "0",
		"mslp": {"english": "29.84", "metric": "1011"}
		}
		,
		{
		"FCTTIME": {
		"hour": "13","hour_padded": "13","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489924800","pretty": "13:00 CET 19. Březen 2017","civil": "1:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "46", "metric": "8"},
		"dewpoint": {"english": "21", "metric": "-6"},
		"condition": "Částečně oblačno",
		"icon": "partlycloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/partlycloudy.gif",
		"fctcode": "2",
		"sky": "54",
		"wspd": {"english": "9", "metric": "14"},
		"wdir": {"dir": "ZSZ", "degrees": "291"},
		"wx": "Částečně zataženo",
		"uvi": "2",
		"humidity": "36",
		"windchill": {"english": "42", "metric": "6"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "42", "metric": "6"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "0",
		"mslp": {"english": "29.83", "metric": "1010"}
		}
		,
		{
		"FCTTIME": {
		"hour": "14","hour_padded": "14","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489928400","pretty": "14:00 CET 19. Březen 2017","civil": "2:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "48", "metric": "9"},
		"dewpoint": {"english": "21", "metric": "-6"},
		"condition": "Skoro zataženo",
		"icon": "mostlycloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/mostlycloudy.gif",
		"fctcode": "3",
		"sky": "72",
		"wspd": {"english": "8", "metric": "13"},
		"wdir": {"dir": "ZSZ", "degrees": "284"},
		"wx": "Většinou zataženo",
		"uvi": "2",
		"humidity": "35",
		"windchill": {"english": "-9999", "metric": "-9999"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "48", "metric": "9"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "0",
		"mslp": {"english": "29.81", "metric": "1009"}
		}
		,
		{
		"FCTTIME": {
		"hour": "15","hour_padded": "15","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489932000","pretty": "15:00 CET 19. Březen 2017","civil": "3:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "49", "metric": "9"},
		"dewpoint": {"english": "22", "metric": "-6"},
		"condition": "Skoro zataženo",
		"icon": "mostlycloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/mostlycloudy.gif",
		"fctcode": "3",
		"sky": "76",
		"wspd": {"english": "7", "metric": "11"},
		"wdir": {"dir": "Z", "degrees": "265"},
		"wx": "Většinou zataženo",
		"uvi": "1",
		"humidity": "35",
		"windchill": {"english": "-9999", "metric": "-9999"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "49", "metric": "9"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "0",
		"mslp": {"english": "29.8", "metric": "1009"}
		}
		,
		{
		"FCTTIME": {
		"hour": "16","hour_padded": "16","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489935600","pretty": "16:00 CET 19. Březen 2017","civil": "4:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "49", "metric": "9"},
		"dewpoint": {"english": "24", "metric": "-4"},
		"condition": "Zataženo",
		"icon": "cloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/cloudy.gif",
		"fctcode": "4",
		"sky": "81",
		"wspd": {"english": "7", "metric": "11"},
		"wdir": {"dir": "ZJZ", "degrees": "245"},
		"wx": "Zataženo",
		"uvi": "0",
		"humidity": "38",
		"windchill": {"english": "-9999", "metric": "-9999"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "49", "metric": "9"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "9",
		"mslp": {"english": "29.79", "metric": "1009"}
		}
		,
		{
		"FCTTIME": {
		"hour": "17","hour_padded": "17","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489939200","pretty": "17:00 CET 19. Březen 2017","civil": "5:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "47", "metric": "8"},
		"dewpoint": {"english": "27", "metric": "-3"},
		"condition": "Zataženo",
		"icon": "cloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/cloudy.gif",
		"fctcode": "4",
		"sky": "84",
		"wspd": {"english": "8", "metric": "13"},
		"wdir": {"dir": "JZ", "degrees": "236"},
		"wx": "Zataženo",
		"uvi": "0",
		"humidity": "44",
		"windchill": {"english": "42", "metric": "6"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "42", "metric": "6"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "12",
		"mslp": {"english": "29.78", "metric": "1008"}
		}
		,
		{
		"FCTTIME": {
		"hour": "18","hour_padded": "18","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489942800","pretty": "18:00 CET 19. Březen 2017","civil": "6:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "45", "metric": "7"},
		"dewpoint": {"english": "29", "metric": "-2"},
		"condition": "Zataženo",
		"icon": "cloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_cloudy.gif",
		"fctcode": "4",
		"sky": "92",
		"wspd": {"english": "8", "metric": "13"},
		"wdir": {"dir": "JZ", "degrees": "231"},
		"wx": "Zataženo",
		"uvi": "0",
		"humidity": "52",
		"windchill": {"english": "40", "metric": "5"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "40", "metric": "5"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "14",
		"mslp": {"english": "29.77", "metric": "1008"}
		}
		,
		{
		"FCTTIME": {
		"hour": "19","hour_padded": "19","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489946400","pretty": "19:00 CET 19. Březen 2017","civil": "7:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "44", "metric": "7"},
		"dewpoint": {"english": "31", "metric": "-1"},
		"condition": "Možnost deště",
		"icon": "chancerain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_chancerain.gif",
		"fctcode": "12",
		"sky": "94",
		"wspd": {"english": "9", "metric": "14"},
		"wdir": {"dir": "JZ", "degrees": "224"},
		"wx": "Slabý déšť",
		"uvi": "0",
		"humidity": "61",
		"windchill": {"english": "40", "metric": "4"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "40", "metric": "4"},
		"qpf": {"english": "0.02", "metric": "1"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "73",
		"mslp": {"english": "29.77", "metric": "1008"}
		}
		,
		{
		"FCTTIME": {
		"hour": "20","hour_padded": "20","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489950000","pretty": "20:00 CET 19. Březen 2017","civil": "8:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "42", "metric": "6"},
		"dewpoint": {"english": "34", "metric": "1"},
		"condition": "Déšť",
		"icon": "rain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_rain.gif",
		"fctcode": "13",
		"sky": "100",
		"wspd": {"english": "9", "metric": "14"},
		"wdir": {"dir": "JZ", "degrees": "216"},
		"wx": "Déšť",
		"uvi": "0",
		"humidity": "72",
		"windchill": {"english": "38", "metric": "3"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "38", "metric": "3"},
		"qpf": {"english": "0.04", "metric": "1"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "95",
		"mslp": {"english": "29.76", "metric": "1008"}
		}
		,
		{
		"FCTTIME": {
		"hour": "21","hour_padded": "21","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489953600","pretty": "21:00 CET 19. Březen 2017","civil": "9:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "41", "metric": "5"},
		"dewpoint": {"english": "36", "metric": "2"},
		"condition": "Déšť",
		"icon": "rain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_rain.gif",
		"fctcode": "13",
		"sky": "100",
		"wspd": {"english": "10", "metric": "16"},
		"wdir": {"dir": "JJZ", "degrees": "202"},
		"wx": "Déšť",
		"uvi": "0",
		"humidity": "79",
		"windchill": {"english": "35", "metric": "2"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "35", "metric": "2"},
		"qpf": {"english": "0.05", "metric": "1"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "96",
		"mslp": {"english": "29.75", "metric": "1007"}
		}
		,
		{
		"FCTTIME": {
		"hour": "22","hour_padded": "22","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489957200","pretty": "22:00 CET 19. Březen 2017","civil": "10:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "42", "metric": "6"},
		"dewpoint": {"english": "38", "metric": "3"},
		"condition": "Déšť",
		"icon": "rain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_rain.gif",
		"fctcode": "13",
		"sky": "100",
		"wspd": {"english": "12", "metric": "19"},
		"wdir": {"dir": "JJZ", "degrees": "201"},
		"wx": "Déšť",
		"uvi": "0",
		"humidity": "86",
		"windchill": {"english": "36", "metric": "2"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "36", "metric": "2"},
		"qpf": {"english": "0.03", "metric": "1"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "86",
		"mslp": {"english": "29.74", "metric": "1007"}
		}
		,
		{
		"FCTTIME": {
		"hour": "23","hour_padded": "23","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "19","mday_padded": "19","yday": "77","isdst": "0","epoch": "1489960800","pretty": "23:00 CET 19. Březen 2017","civil": "11:00 PM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Neděle","weekday_name_night": "Neděle v noci","weekday_name_abbrev": "Ne","weekday_name_unlang": "Sunday","weekday_name_night_unlang": "Sunday Night","ampm": "PM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "43", "metric": "6"},
		"dewpoint": {"english": "39", "metric": "4"},
		"condition": "Možnost deště",
		"icon": "chancerain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_chancerain.gif",
		"fctcode": "12",
		"sky": "100",
		"wspd": {"english": "13", "metric": "21"},
		"wdir": {"dir": "JJZ", "degrees": "213"},
		"wx": "Slabý déšť",
		"uvi": "0",
		"humidity": "87",
		"windchill": {"english": "36", "metric": "2"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "36", "metric": "2"},
		"qpf": {"english": "0.02", "metric": "1"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "69",
		"mslp": {"english": "29.73", "metric": "1007"}
		}
		,
		{
		"FCTTIME": {
		"hour": "0","hour_padded": "00","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1489964400","pretty": "00:00 CET 20. Březen 2017","civil": "12:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "44", "metric": "7"},
		"dewpoint": {"english": "41", "metric": "5"},
		"condition": "Možnost deště",
		"icon": "chancerain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_chancerain.gif",
		"fctcode": "12",
		"sky": "100",
		"wspd": {"english": "13", "metric": "21"},
		"wdir": {"dir": "JZ", "degrees": "221"},
		"wx": "Slabý déšť",
		"uvi": "0",
		"humidity": "88",
		"windchill": {"english": "38", "metric": "4"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "38", "metric": "4"},
		"qpf": {"english": "0.01", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "64",
		"mslp": {"english": "29.72", "metric": "1006"}
		}
		,
		{
		"FCTTIME": {
		"hour": "1","hour_padded": "01","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1489968000","pretty": "01:00 CET 20. Březen 2017","civil": "1:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "45", "metric": "7"},
		"dewpoint": {"english": "42", "metric": "6"},
		"condition": "Možnost deště",
		"icon": "chancerain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_chancerain.gif",
		"fctcode": "12",
		"sky": "100",
		"wspd": {"english": "13", "metric": "21"},
		"wdir": {"dir": "JZ", "degrees": "228"},
		"wx": "Přeháňky",
		"uvi": "0",
		"humidity": "88",
		"windchill": {"english": "38", "metric": "4"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "38", "metric": "4"},
		"qpf": {"english": "0.01", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "52",
		"mslp": {"english": "29.73", "metric": "1007"}
		}
		,
		{
		"FCTTIME": {
		"hour": "2","hour_padded": "02","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1489971600","pretty": "02:00 CET 20. Březen 2017","civil": "2:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "46", "metric": "8"},
		"dewpoint": {"english": "42", "metric": "6"},
		"condition": "Možnost deště",
		"icon": "chancerain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_chancerain.gif",
		"fctcode": "12",
		"sky": "99",
		"wspd": {"english": "12", "metric": "19"},
		"wdir": {"dir": "JZ", "degrees": "233"},
		"wx": "Přeháňky",
		"uvi": "0",
		"humidity": "86",
		"windchill": {"english": "41", "metric": "5"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "41", "metric": "5"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "40",
		"mslp": {"english": "29.73", "metric": "1007"}
		}
		,
		{
		"FCTTIME": {
		"hour": "3","hour_padded": "03","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1489975200","pretty": "03:00 CET 20. Březen 2017","civil": "3:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "47", "metric": "8"},
		"dewpoint": {"english": "43", "metric": "6"},
		"condition": "Možnost deště",
		"icon": "chancerain",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_chancerain.gif",
		"fctcode": "12",
		"sky": "98",
		"wspd": {"english": "11", "metric": "18"},
		"wdir": {"dir": "ZJZ", "degrees": "239"},
		"wx": "Občasné přeháňky",
		"uvi": "0",
		"humidity": "86",
		"windchill": {"english": "41", "metric": "5"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "41", "metric": "5"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "32",
		"mslp": {"english": "29.74", "metric": "1007"}
		}
		,
		{
		"FCTTIME": {
		"hour": "4","hour_padded": "04","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1489978800","pretty": "04:00 CET 20. Březen 2017","civil": "4:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "47", "metric": "8"},
		"dewpoint": {"english": "43", "metric": "6"},
		"condition": "Zataženo",
		"icon": "cloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_cloudy.gif",
		"fctcode": "4",
		"sky": "98",
		"wspd": {"english": "10", "metric": "16"},
		"wdir": {"dir": "ZJZ", "degrees": "242"},
		"wx": "Zataženo",
		"uvi": "0",
		"humidity": "86",
		"windchill": {"english": "42", "metric": "5"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "42", "metric": "5"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "24",
		"mslp": {"english": "29.74", "metric": "1007"}
		}
		,
		{
		"FCTTIME": {
		"hour": "5","hour_padded": "05","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1489982400","pretty": "05:00 CET 20. Březen 2017","civil": "5:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "47", "metric": "8"},
		"dewpoint": {"english": "43", "metric": "6"},
		"condition": "Zataženo",
		"icon": "cloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/nt_cloudy.gif",
		"fctcode": "4",
		"sky": "98",
		"wspd": {"english": "10", "metric": "16"},
		"wdir": {"dir": "ZJZ", "degrees": "243"},
		"wx": "Zataženo",
		"uvi": "0",
		"humidity": "86",
		"windchill": {"english": "42", "metric": "5"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "42", "metric": "5"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "24",
		"mslp": {"english": "29.76", "metric": "1008"}
		}
		,
		{
		"FCTTIME": {
		"hour": "6","hour_padded": "06","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1489986000","pretty": "06:00 CET 20. Březen 2017","civil": "6:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "47", "metric": "8"},
		"dewpoint": {"english": "42", "metric": "6"},
		"condition": "Zataženo",
		"icon": "cloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/cloudy.gif",
		"fctcode": "4",
		"sky": "98",
		"wspd": {"english": "10", "metric": "16"},
		"wdir": {"dir": "ZJZ", "degrees": "240"},
		"wx": "Zataženo",
		"uvi": "0",
		"humidity": "84",
		"windchill": {"english": "42", "metric": "5"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "42", "metric": "5"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "24",
		"mslp": {"english": "29.77", "metric": "1008"}
		}
		,
		{
		"FCTTIME": {
		"hour": "7","hour_padded": "07","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1489989600","pretty": "07:00 CET 20. Březen 2017","civil": "7:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "47", "metric": "8"},
		"dewpoint": {"english": "43", "metric": "6"},
		"condition": "Zataženo",
		"icon": "cloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/cloudy.gif",
		"fctcode": "4",
		"sky": "97",
		"wspd": {"english": "10", "metric": "16"},
		"wdir": {"dir": "ZJZ", "degrees": "246"},
		"wx": "Zataženo",
		"uvi": "0",
		"humidity": "85",
		"windchill": {"english": "42", "metric": "5"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "42", "metric": "5"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "24",
		"mslp": {"english": "29.79", "metric": "1009"}
		}
		,
		{
		"FCTTIME": {
		"hour": "8","hour_padded": "08","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1489993200","pretty": "08:00 CET 20. Březen 2017","civil": "8:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "48", "metric": "9"},
		"dewpoint": {"english": "43", "metric": "6"},
		"condition": "Možnost deště",
		"icon": "chancerain",
		"icon_url":"http://icons.wxug.com/i/c/k/chancerain.gif",
		"fctcode": "12",
		"sky": "97",
		"wspd": {"english": "11", "metric": "18"},
		"wdir": {"dir": "ZJZ", "degrees": "244"},
		"wx": "Přeháňky",
		"uvi": "0",
		"humidity": "82",
		"windchill": {"english": "-9999", "metric": "-9999"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "48", "metric": "9"},
		"qpf": {"english": "0.01", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "37",
		"mslp": {"english": "29.8", "metric": "1009"}
		}
		,
		{
		"FCTTIME": {
		"hour": "9","hour_padded": "09","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1489996800","pretty": "09:00 CET 20. Březen 2017","civil": "9:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "50", "metric": "10"},
		"dewpoint": {"english": "44", "metric": "7"},
		"condition": "Možnost deště",
		"icon": "chancerain",
		"icon_url":"http://icons.wxug.com/i/c/k/chancerain.gif",
		"fctcode": "12",
		"sky": "96",
		"wspd": {"english": "12", "metric": "19"},
		"wdir": {"dir": "ZJZ", "degrees": "246"},
		"wx": "Přeháňky",
		"uvi": "1",
		"humidity": "81",
		"windchill": {"english": "-9999", "metric": "-9999"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "50", "metric": "10"},
		"qpf": {"english": "0.01", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "40",
		"mslp": {"english": "29.81", "metric": "1009"}
		}
		,
		{
		"FCTTIME": {
		"hour": "10","hour_padded": "10","min": "00","min_unpadded": "0","sec": "0","year": "2017","mon": "3","mon_padded": "03","mon_abbrev": "Mar","mday": "20","mday_padded": "20","yday": "78","isdst": "0","epoch": "1490000400","pretty": "10:00 CET 20. Březen 2017","civil": "10:00 AM","month_name": "Březen","month_name_abbrev": "bře","weekday_name": "Pondělí","weekday_name_night": "Pondělí v noci","weekday_name_abbrev": "Po","weekday_name_unlang": "Monday","weekday_name_night_unlang": "Monday Night","ampm": "AM","tz": "","age": "","UTCDATE": ""
		},
		"temp": {"english": "51", "metric": "11"},
		"dewpoint": {"english": "44", "metric": "7"},
		"condition": "Zataženo",
		"icon": "cloudy",
		"icon_url":"http://icons.wxug.com/i/c/k/cloudy.gif",
		"fctcode": "4",
		"sky": "95",
		"wspd": {"english": "12", "metric": "19"},
		"wdir": {"dir": "ZJZ", "degrees": "250"},
		"wx": "Zataženo",
		"uvi": "1",
		"humidity": "77",
		"windchill": {"english": "-9999", "metric": "-9999"},
		"heatindex": {"english": "-9999", "metric": "-9999"},
		"feelslike": {"english": "51", "metric": "11"},
		"qpf": {"english": "0.0", "metric": "0"},
		"snow": {"english": "0.0", "metric": "0"},
		"pop": "24",
		"mslp": {"english": "29.82", "metric": "1010"}
		}
	]
}