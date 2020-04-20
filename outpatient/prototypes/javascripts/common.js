function formatDateTime(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = '' + d.getFullYear();
        var seconds = '' + d.getSeconds();
		var minutes = '' + d.getMinutes();
		var hour = '' + d.getHours();

    if (month.length < 2) {
    	month = '0' + month;
    }
    if (day.length < 2) {
    	day = '0' + day;
    }
    if (hour.length < 2) {
    	hour = '0' + hour;
	}
    if (minutes.length < 2) {
    	minutes = '0' + minutes;
    }
    if (seconds.length < 2) {
    	seconds = '0' + seconds;
    }

    var dateFormatted = [year, month, day].join('-');
    var timeFormatted = [hour, minutes, seconds].join(':');

    return dateFormatted + ' ' + timeFormatted;
}