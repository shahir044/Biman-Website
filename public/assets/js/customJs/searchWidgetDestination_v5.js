    // function formatState(state) {
    //     if (!state.id) {
    //         return state.text;
    //     }
    //     var baseUrl = "assets/flags/1x1";
    //     var $state = $(
    //         '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.svg" class="img-flag" /> ' + state.text + '</span>'
    //     );
    //     return $state;
    // };
    // 52044_v1 changes: Adding YYZ toronto in destinations list
    // 52044_v2 changes: Jessore -> Jashore;
    // 52044_v3 changes: Removing JFK, YYZ, NRT, CAN, MAA, BAH, CMB, BOM 
    // 52044_v4 changes: Adding YYZ toronto in destinations list 26 JUNE 2022 

    function formatOutput(optionElement) {
        if (!optionElement.id) {

            // console.log("Console Print: "+optionElement);
            return optionElement.text;
        }
        var selectionText = optionElement.text.split(",");
        // var $returnString = selectionText[0] + "</br>" + selectionText[1];
        var $state = $('<span><strong> ' + selectionText[1] + '</strong></br> ' + selectionText[0] + '</span>');
        // var $state = $('<span><strong>' + optionElement.element.text + '</strong></br> ' + optionElement.text + '</span>');
        return $state;
    };

    function formatOutputTwo(optionElement) {
        // console.log(optionElement);
        if (!optionElement.id) {
            return optionElement.text;
        }
        var selectionText = optionElement.text.split(",");
        // var $returnString = selectionText[0] + "</br>" + selectionText[1];
        var $state = $('<span><strong>' + selectionText[1] + '</strong></span>');
        // var $state = $('<span><strong>' + optionElement.element.text + '</strong></br> ' + optionElement.text + '</span>');
        return $state;
    };

    $(document).on('mouseover', 'select', function() {
        $(this).select2().select2('open');
    });

    // widget destinations one way round
    $("#departure1").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo,




    });
    $("#arrival1").select2({
        placeholder: "Select Arrival City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });

    $("#departure2").select2({

        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo,
        // sorter: data => data.sort((a, b) => a.text.localeCompare(b.text))

    });
    $("#arrival2").select2({
        placeholder: "Select Arrival City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });
    // widget destinations one way round

    // widget multicity

    $("#depart").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });
    $("#arriv").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });
    $("#depart1").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });
    $("#arriv1").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });
    $("#depart2").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });
    $("#arriv2").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });
    // widget multicity

    // widget flight status

    $("#departureFlightStatus").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });
    $("#arrivalFlightStatus").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });
    // widget flight status

    // widget flight Schedule

    $("#departureFlightSchedule").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo,

    });
    $("#arrivalFlightSchedule").select2({
        placeholder: "Select Departure City or Airport",
        templateResult: formatOutput,
        templateSelection: formatOutputTwo
    });
    // widget flight Schedule


    var airportName = [{
            "id": "18",
            "city": "Abu Dhabi",
            "airport_name": "Abu Dhabi Intl Airport",
            "iata_code": "AUH",
            "country": "United Arab Emirates"
        },
        {
            "id": "13",
            "city": "Bangkok",
            "airport_name": "Suvarnabhumi Airport",
            "iata_code": "BKK",
            "country": "Thailand"
        },
        {
            "id": "7",
            "city": "Barishal",
            "airport_name": "Barishal Airport",
            "iata_code": "BZL",
            "country": "Bangladesh"
        },
        {
            "id": "2",
            "city": "Chittagong",
            "airport_name": "Shah Amanat Intl Airport",
            "iata_code": "CGP",
            "country": "Bangladesh"
        },
        {
            "id": "4",
            "city": "Cox's Bazar",
            "airport_name": "Cox's Bazar Airport",
            "iata_code": "CXB",
            "country": "Bangladesh"
        },
        {
            "id": "24",
            "city": "Dammam",
            "airport_name": "King Fahd Intl Airport",
            "iata_code": "DMM",
            "country": "Saudi Arabia"
        },
        {
            "id": "10",
            "city": "Delhi",
            "airport_name": "Indira Gandhi Intl Airport",
            "iata_code": "DEL",
            "country": "India"
        },
        {
            "id": "1",
            "city": "Dhaka",
            "airport_name": "Hazrat Shahjalal Intl Airport",
            "iata_code": "DAC",
            "country": "Bangladesh"
        },
        {
            "id": "21",
            "city": "Doha",
            "airport_name": "Hamad Intl Airport",
            "iata_code": "DOH",
            "country": "Qatar"
        },
        {
            "id": "17",
            "city": "Dubai",
            "airport_name": "Dubai Intl Airport",
            "iata_code": "DXB",
            "country": "United Arab Emirates"
        },
        {
            "id": "22",
            "city": "Jeddah",
            "airport_name": "King Abdulaziz Intl Airport",
            "iata_code": "JED",
            "country": "Saudi Arabia"
        },
        {
            "id": "5",
            "city": "Jashore",
            "airport_name": "Jashore Airport",
            "iata_code": "JSR",
            "country": "Bangladesh"
        },
        {
            "id": "12",
            "city": "Kathmandu",
            "airport_name": "Tribhuvan Intl Airport",
            "iata_code": "KTM",
            "country": "Nepal"
        },
        {
            "id": "9",
            "city": "Kolkata",
            "airport_name": "Netaji Subhas Chandra Bose Intl Airport",
            "iata_code": "CCU",
            "country": "India"
        },
        {
            "id": "15",
            "city": "Kuala Lumpur",
            "airport_name": "Kuala Lumpur Intl Airport",
            "iata_code": "KUL",
            "country": "Malaysia"
        },
        {
            "id": "19",
            "city": "Kuwait",
            "airport_name": "Kuwait Intl Airport",
            "iata_code": "KWI",
            "country": "Kuwait"
        },
        {
            "id": "26",
            "city": "London",
            "airport_name": "Heathrow Airport",
            "iata_code": "LHR",
            "country": "England"
        },
        {
            "id": "25",
            "city": "Madinah",
            "airport_name": "Prince Mohammad bin Abdulaziz Intl Airport",
            "iata_code": "MED",
            "country": "Saudi Arabia"
        },
        {
            "id": "27",
            "city": "Manchester",
            "airport_name": "Manchester Airport",
            "iata_code": "MAN",
            "country": "England"
        },
        {
            "id": "32",
            "city": "Maldives",
            "airport_name": "Velana Intl Airport",
            "iata_code": "MLE",
            "country": "Maldives"
        },
        {
            "id": "20",
            "city": "Muscat",
            "airport_name": "Muscat Intl Airport",
            "iata_code": "MCT",
            "country": "Oman"
        },
        {
            "id": "8",
            "city": "Rajshahi",
            "airport_name": "Shah Makhdum Airport",
            "iata_code": "RJH",
            "country": "Bangladesh"
        },
        {
            "id": "23",
            "city": "Riyadh",
            "airport_name": "King Khalid Intl Airport",
            "iata_code": "RUH",
            "country": "Saudi Arabia"
        },
        {
            "id": "6",
            "city": "Saidpur",
            "airport_name": "Saidpur Airport",
            "iata_code": "SPD",
            "country": "Bangladesh"
        },
        {
            "id": "34",
            "city": "Sharjah",
            "airport_name": "Sharjah Intl Airport",
            "iata_code": "SHJ",
            "country": "United Arab Emirates"
        },
        {
            "id": "16",
            "city": "Singapore",
            "airport_name": "Changi Airport",
            "iata_code": "SIN",
            "country": "Singapore"
        },
        {
            "id": "3",
            "city": "Sylhet",
            "airport_name": "Osmani Intl Airport",
            "iata_code": "ZYL",
            "country": "Bangladesh"
        },
        {
            "id": "28",
            "city": "Yangon",
            "airport_name": "Yangon Intl Airport",
            "iata_code": "RGN",
            "country": "Myanmar"
        },
        {
            "id": "29",
            "city": "Toronto",
            "airport_name": "Toronto Pearson Intl Airport",
            "iata_code": "YYZ",
            "country": "Canada"
        }
    ];
    var sampledata = [
        { "id": "397", "from_airport": "AUH", "to_airport": "BKK" },
        { "id": "394", "from_airport": "AUH", "to_airport": "BZL" },
        { "id": "395", "from_airport": "AUH", "to_airport": "CCU" },
        { "id": "388", "from_airport": "AUH", "to_airport": "CGP" },
        { "id": "390", "from_airport": "AUH", "to_airport": "CXB" },
        { "id": "387", "from_airport": "AUH", "to_airport": "DAC" },
        { "id": "387", "from_airport": "AUH", "to_airport": "DEL" },
        { "id": "401", "from_airport": "AUH", "to_airport": "HKG" },
        { "id": "391", "from_airport": "AUH", "to_airport": "JSR" },
        { "id": "396", "from_airport": "AUH", "to_airport": "KTM" },
        { "id": "399", "from_airport": "AUH", "to_airport": "KUL" },
        { "id": "393", "from_airport": "AUH", "to_airport": "RGN" },
        { "id": "393", "from_airport": "AUH", "to_airport": "RJH" },
        { "id": "398", "from_airport": "AUH", "to_airport": "SIN" },
        { "id": "392", "from_airport": "AUH", "to_airport": "SPD" },
        { "id": "389", "from_airport": "AUH", "to_airport": "ZYL" },
        { "id": "295", "from_airport": "BKK", "to_airport": "AUH" },
        { "id": "290", "from_airport": "BKK", "to_airport": "CCU" },
        { "id": "284", "from_airport": "BKK", "to_airport": "CGP" },
        { "id": "286", "from_airport": "BKK", "to_airport": "CXB" },
        { "id": "283", "from_airport": "BKK", "to_airport": "DAC" },
        { "id": "291", "from_airport": "BKK", "to_airport": "DEL" },
        { "id": "301", "from_airport": "BKK", "to_airport": "DMM" },
        { "id": "298", "from_airport": "BKK", "to_airport": "DOH" },
        { "id": "294", "from_airport": "BKK", "to_airport": "DXB" },
        { "id": "299", "from_airport": "BKK", "to_airport": "JED" },
        { "id": "287", "from_airport": "BKK", "to_airport": "JSR" },
        { "id": "293", "from_airport": "BKK", "to_airport": "KTM" },
        { "id": "296", "from_airport": "BKK", "to_airport": "KWI" },
        { "id": "303", "from_airport": "BKK", "to_airport": "LHR" },
        { "id": "304", "from_airport": "BKK", "to_airport": "MAN" },
        { "id": "297", "from_airport": "BKK", "to_airport": "MCT" },
        { "id": "302", "from_airport": "BKK", "to_airport": "MED" },
        { "id": "289", "from_airport": "BKK", "to_airport": "RGN" },
        { "id": "289", "from_airport": "BKK", "to_airport": "RJH" },
        { "id": "300", "from_airport": "BKK", "to_airport": "RUH" },
        { "id": "288", "from_airport": "BKK", "to_airport": "SJH" },
        { "id": "288", "from_airport": "BKK", "to_airport": "SPD" },
        { "id": "285", "from_airport": "BKK", "to_airport": "ZYL" },
        { "id": "1010", "from_airport": "BKK", "to_airport": "YYZ" },
        { "id": "176", "from_airport": "BZL", "to_airport": "AUH" },
        { "id": "170", "from_airport": "BZL", "to_airport": "BKK" },
        { "id": "166", "from_airport": "BZL", "to_airport": "CCU" },
        { "id": "162", "from_airport": "BZL", "to_airport": "CGP" },
        { "id": "164", "from_airport": "BZL", "to_airport": "CXB" },
        { "id": "161", "from_airport": "BZL", "to_airport": "DAC" },
        { "id": "167", "from_airport": "BZL", "to_airport": "DEL" },
        { "id": "182", "from_airport": "BZL", "to_airport": "DMM" },
        { "id": "179", "from_airport": "BZL", "to_airport": "DOH" },
        { "id": "175", "from_airport": "BZL", "to_airport": "DXB" },
        { "id": "174", "from_airport": "BZL", "to_airport": "HKG" },
        { "id": "180", "from_airport": "BZL", "to_airport": "JED" },
        { "id": "169", "from_airport": "BZL", "to_airport": "KTM" },
        { "id": "172", "from_airport": "BZL", "to_airport": "KUL" },
        { "id": "177", "from_airport": "BZL", "to_airport": "KWI" },
        { "id": "184", "from_airport": "BZL", "to_airport": "LHR" },
        { "id": "185", "from_airport": "BZL", "to_airport": "MAN" },
        { "id": "178", "from_airport": "BZL", "to_airport": "MCT" },
        { "id": "183", "from_airport": "BZL", "to_airport": "MED" },
        { "id": "183", "from_airport": "BZL", "to_airport": "MLE" },
        { "id": "181", "from_airport": "BZL", "to_airport": "RGN" },
        { "id": "181", "from_airport": "BZL", "to_airport": "RUH" },
        { "id": "173", "from_airport": "BZL", "to_airport": "SHJ" },
        { "id": "173", "from_airport": "BZL", "to_airport": "SIN" },
        { "id": "165", "from_airport": "BZL", "to_airport": "SPD" },
        { "id": "163", "from_airport": "BZL", "to_airport": "ZYL" },
        { "id": "1007", "from_airport": "BZL", "to_airport": "YYZ" },
        { "id": "223", "from_airport": "CCU", "to_airport": "AUH" },
        { "id": "217", "from_airport": "CCU", "to_airport": "BKK" },
        { "id": "212", "from_airport": "CCU", "to_airport": "CGP" },
        { "id": "214", "from_airport": "CCU", "to_airport": "CXB" },
        { "id": "211", "from_airport": "CCU", "to_airport": "DAC" },
        { "id": "229", "from_airport": "CCU", "to_airport": "DMM" },
        { "id": "226", "from_airport": "CCU", "to_airport": "DOH" },
        { "id": "222", "from_airport": "CCU", "to_airport": "DXB" },
        { "id": "221", "from_airport": "CCU", "to_airport": "HKG" },
        { "id": "227", "from_airport": "CCU", "to_airport": "JED" },
        { "id": "216", "from_airport": "CCU", "to_airport": "KTM" },
        { "id": "219", "from_airport": "CCU", "to_airport": "KUL" },
        { "id": "224", "from_airport": "CCU", "to_airport": "KWI" },
        { "id": "231", "from_airport": "CCU", "to_airport": "LHR" },
        { "id": "232", "from_airport": "CCU", "to_airport": "MAN" },
        { "id": "225", "from_airport": "CCU", "to_airport": "MCT" },
        { "id": "230", "from_airport": "CCU", "to_airport": "MED" },
        { "id": "230", "from_airport": "CCU", "to_airport": "MLE" },
        { "id": "228", "from_airport": "CCU", "to_airport": "RGN" },
        { "id": "228", "from_airport": "CCU", "to_airport": "RUH" },
        { "id": "220", "from_airport": "CCU", "to_airport": "SIN" },
        { "id": "215", "from_airport": "CCU", "to_airport": "SPD" },
        { "id": "213", "from_airport": "CCU", "to_airport": "ZYL" },
        { "id": "1011", "from_airport": "CCU", "to_airport": "YYZ" },
        { "id": "45", "from_airport": "CGP", "to_airport": "AUH" },
        { "id": "39", "from_airport": "CGP", "to_airport": "BKK" },
        { "id": "34", "from_airport": "CGP", "to_airport": "BZL" },
        { "id": "35", "from_airport": "CGP", "to_airport": "CCU" },
        { "id": "30", "from_airport": "CGP", "to_airport": "CXB" },
        { "id": "28", "from_airport": "CGP", "to_airport": "DAC" },
        { "id": "36", "from_airport": "CGP", "to_airport": "DEL" },
        { "id": "51", "from_airport": "CGP", "to_airport": "DMM" },
        { "id": "48", "from_airport": "CGP", "to_airport": "DOH" },
        { "id": "44", "from_airport": "CGP", "to_airport": "DXB" },
        { "id": "43", "from_airport": "CGP", "to_airport": "HKG" },
        { "id": "49", "from_airport": "CGP", "to_airport": "JED" },
        { "id": "31", "from_airport": "CGP", "to_airport": "JSR" },
        { "id": "38", "from_airport": "CGP", "to_airport": "KTM" },
        { "id": "41", "from_airport": "CGP", "to_airport": "KUL" },
        { "id": "46", "from_airport": "CGP", "to_airport": "KWI" },
        { "id": "53", "from_airport": "CGP", "to_airport": "LHR" },
        { "id": "54", "from_airport": "CGP", "to_airport": "MAN" },
        { "id": "47", "from_airport": "CGP", "to_airport": "MCT" },
        { "id": "52", "from_airport": "CGP", "to_airport": "MED" },
        { "id": "52", "from_airport": "CGP", "to_airport": "MLE" },
        { "id": "33", "from_airport": "CGP", "to_airport": "RJH" },
        { "id": "50", "from_airport": "CGP", "to_airport": "RUH" },
        { "id": "42", "from_airport": "CGP", "to_airport": "SHJ" },
        { "id": "42", "from_airport": "CGP", "to_airport": "SIN" },
        { "id": "32", "from_airport": "CGP", "to_airport": "SPD" },
        { "id": "29", "from_airport": "CGP", "to_airport": "ZYL" },
        { "id": "1002", "from_airport": "CGP", "to_airport": "YYZ" },
        { "id": "99", "from_airport": "CXB", "to_airport": "AUH" },
        { "id": "93", "from_airport": "CXB", "to_airport": "BKK" },
        { "id": "88", "from_airport": "CXB", "to_airport": "BZL" },
        { "id": "89", "from_airport": "CXB", "to_airport": "CCU" },
        { "id": "83", "from_airport": "CXB", "to_airport": "CGP" },
        { "id": "82", "from_airport": "CXB", "to_airport": "DAC" },
        { "id": "90", "from_airport": "CXB", "to_airport": "DEL" },
        { "id": "105", "from_airport": "CXB", "to_airport": "DMM" },
        { "id": "102", "from_airport": "CXB", "to_airport": "DOH" },
        { "id": "98", "from_airport": "CXB", "to_airport": "DXB" },
        { "id": "97", "from_airport": "CXB", "to_airport": "HKG" },
        { "id": "103", "from_airport": "CXB", "to_airport": "JED" },
        { "id": "85", "from_airport": "CXB", "to_airport": "JSR" },
        { "id": "92", "from_airport": "CXB", "to_airport": "KTM" },
        { "id": "95", "from_airport": "CXB", "to_airport": "KUL" },
        { "id": "100", "from_airport": "CXB", "to_airport": "KWI" },
        { "id": "107", "from_airport": "CXB", "to_airport": "LHR" },
        { "id": "108", "from_airport": "CXB", "to_airport": "MAN" },
        { "id": "101", "from_airport": "CXB", "to_airport": "MCT" },
        { "id": "106", "from_airport": "CXB", "to_airport": "MED" },
        { "id": "106", "from_airport": "CXB", "to_airport": "MLE" },
        { "id": "87", "from_airport": "CXB", "to_airport": "RGN" },
        { "id": "87", "from_airport": "CXB", "to_airport": "RJH" },
        { "id": "104", "from_airport": "CXB", "to_airport": "RUH" },
        { "id": "96", "from_airport": "CXB", "to_airport": "SJH" },
        { "id": "96", "from_airport": "CXB", "to_airport": "SIN" },
        { "id": "86", "from_airport": "CXB", "to_airport": "SPD" },
        { "id": "84", "from_airport": "CXB", "to_airport": "ZYL" },
        { "id": "1004", "from_airport": "CXB", "to_airport": "YYZ" },
        { "id": "18", "from_airport": "DAC", "to_airport": "AUH" },
        { "id": "12", "from_airport": "DAC", "to_airport": "BKK" },
        { "id": "7", "from_airport": "DAC", "to_airport": "BZL" },
        { "id": "8", "from_airport": "DAC", "to_airport": "CCU" },
        { "id": "1", "from_airport": "DAC", "to_airport": "CGP" },
        { "id": "3", "from_airport": "DAC", "to_airport": "CXB" },
        { "id": "9", "from_airport": "DAC", "to_airport": "DEL" },
        { "id": "24", "from_airport": "DAC", "to_airport": "DMM" },
        { "id": "21", "from_airport": "DAC", "to_airport": "DOH" },
        { "id": "17", "from_airport": "DAC", "to_airport": "DXB" },
        { "id": "16", "from_airport": "DAC", "to_airport": "HKG" },
        { "id": "22", "from_airport": "DAC", "to_airport": "JED" },
        { "id": "4", "from_airport": "DAC", "to_airport": "JSR" },
        { "id": "11", "from_airport": "DAC", "to_airport": "KTM" },
        { "id": "14", "from_airport": "DAC", "to_airport": "KUL" },
        { "id": "19", "from_airport": "DAC", "to_airport": "KWI" },
        { "id": "26", "from_airport": "DAC", "to_airport": "LHR" },
        { "id": "27", "from_airport": "DAC", "to_airport": "MAN" },
        { "id": "20", "from_airport": "DAC", "to_airport": "MCT" },
        { "id": "25", "from_airport": "DAC", "to_airport": "MED" },
        { "id": "25", "from_airport": "DAC", "to_airport": "MLE" },
        { "id": "6", "from_airport": "DAC", "to_airport": "RJH" },
        { "id": "23", "from_airport": "DAC", "to_airport": "RUH" },
        { "id": "15", "from_airport": "DAC", "to_airport": "SHJ" },
        { "id": "15", "from_airport": "DAC", "to_airport": "SIN" },
        { "id": "5", "from_airport": "DAC", "to_airport": "SPD" },
        { "id": "2", "from_airport": "DAC", "to_airport": "ZYL" },
        { "id": "2", "from_airport": "DAC", "to_airport": "YYZ" },
        { "id": "239", "from_airport": "DEL", "to_airport": "AUH" },
        { "id": "239", "from_airport": "DEL", "to_airport": "BKK" },
        { "id": "234", "from_airport": "DEL", "to_airport": "CGP" },
        { "id": "236", "from_airport": "DEL", "to_airport": "CXB" },
        { "id": "233", "from_airport": "DEL", "to_airport": "DAC" },
        { "id": "233", "from_airport": "DEL", "to_airport": "DMM" },
        { "id": "233", "from_airport": "DEL", "to_airport": "DOH" },
        { "id": "233", "from_airport": "DEL", "to_airport": "DXB" },
        { "id": "243", "from_airport": "DEL", "to_airport": "HKG" },
        { "id": "243", "from_airport": "DEL", "to_airport": "JED" },
        { "id": "238", "from_airport": "DEL", "to_airport": "KTM" },
        { "id": "241", "from_airport": "DEL", "to_airport": "KUL" },
        { "id": "244", "from_airport": "DEL", "to_airport": "LHR" },
        { "id": "245", "from_airport": "DEL", "to_airport": "MAN" },
        { "id": "245", "from_airport": "DEL", "to_airport": "MCT" },
        { "id": "245", "from_airport": "DEL", "to_airport": "MED" },
        { "id": "245", "from_airport": "DEL", "to_airport": "MLE" },
        { "id": "242", "from_airport": "DEL", "to_airport": "RGN" },
        { "id": "242", "from_airport": "DEL", "to_airport": "RUH" },
        { "id": "242", "from_airport": "DEL", "to_airport": "SIN" },
        { "id": "237", "from_airport": "DEL", "to_airport": "SHJ" },
        { "id": "237", "from_airport": "DEL", "to_airport": "SIN" },
        { "id": "237", "from_airport": "DEL", "to_airport": "SPD" },
        { "id": "235", "from_airport": "DEL", "to_airport": "ZYL" },
        { "id": "1012", "from_airport": "DEL", "to_airport": "YYZ" },
        { "id": "487", "from_airport": "DMM", "to_airport": "BKK" },
        { "id": "484", "from_airport": "DMM", "to_airport": "BZL" },
        { "id": "485", "from_airport": "DMM", "to_airport": "CCU" },
        { "id": "478", "from_airport": "DMM", "to_airport": "CGP" },
        { "id": "480", "from_airport": "DMM", "to_airport": "CXB" },
        { "id": "477", "from_airport": "DMM", "to_airport": "DAC" },
        { "id": "491", "from_airport": "DMM", "to_airport": "HKG" },
        { "id": "481", "from_airport": "DMM", "to_airport": "JSR" },
        { "id": "486", "from_airport": "DMM", "to_airport": "KTM" },
        { "id": "489", "from_airport": "DMM", "to_airport": "KUL" },
        { "id": "483", "from_airport": "DMM", "to_airport": "RGN" },
        { "id": "483", "from_airport": "DMM", "to_airport": "RJH" },
        { "id": "488", "from_airport": "DMM", "to_airport": "SIN" },
        { "id": "482", "from_airport": "DMM", "to_airport": "SPD" },
        { "id": "479", "from_airport": "DMM", "to_airport": "ZYL" },
        { "id": "442", "from_airport": "DOH", "to_airport": "BKK" },
        { "id": "439", "from_airport": "DOH", "to_airport": "BZL" },
        { "id": "440", "from_airport": "DOH", "to_airport": "CCU" },
        { "id": "433", "from_airport": "DOH", "to_airport": "CGP" },
        { "id": "435", "from_airport": "DOH", "to_airport": "CXB" },
        { "id": "432", "from_airport": "DOH", "to_airport": "DAC" },
        { "id": "432", "from_airport": "DOH", "to_airport": "DEL" },
        { "id": "446", "from_airport": "DOH", "to_airport": "HKG" },
        { "id": "436", "from_airport": "DOH", "to_airport": "JSR" },
        { "id": "441", "from_airport": "DOH", "to_airport": "KTM" },
        { "id": "444", "from_airport": "DOH", "to_airport": "KUL" },
        { "id": "444", "from_airport": "DOH", "to_airport": "NET" },
        { "id": "438", "from_airport": "DOH", "to_airport": "RGN" },
        { "id": "438", "from_airport": "DOH", "to_airport": "RJH" },
        { "id": "443", "from_airport": "DOH", "to_airport": "SIN" },
        { "id": "437", "from_airport": "DOH", "to_airport": "SPD" },
        { "id": "434", "from_airport": "DOH", "to_airport": "ZYL" },
        { "id": "382", "from_airport": "DXB", "to_airport": "BKK" },
        { "id": "379", "from_airport": "DXB", "to_airport": "BZL" },
        { "id": "380", "from_airport": "DXB", "to_airport": "CCU" },
        { "id": "373", "from_airport": "DXB", "to_airport": "CGP" },
        { "id": "375", "from_airport": "DXB", "to_airport": "CXB" },
        { "id": "372", "from_airport": "DXB", "to_airport": "DAC" },
        { "id": "372", "from_airport": "DXB", "to_airport": "DEL" },
        { "id": "386", "from_airport": "DXB", "to_airport": "HKG" },
        { "id": "376", "from_airport": "DXB", "to_airport": "JSR" },
        { "id": "381", "from_airport": "DXB", "to_airport": "KTM" },
        { "id": "384", "from_airport": "DXB", "to_airport": "KUL" },
        { "id": "378", "from_airport": "DXB", "to_airport": "RGN" },
        { "id": "378", "from_airport": "DXB", "to_airport": "RJH" },
        { "id": "383", "from_airport": "DXB", "to_airport": "SIN" },
        { "id": "377", "from_airport": "DXB", "to_airport": "SPD" },
        { "id": "374", "from_airport": "DXB", "to_airport": "ZYL" },
        { "id": "457", "from_airport": "JED", "to_airport": "BKK" },
        { "id": "454", "from_airport": "JED", "to_airport": "BZL" },
        { "id": "455", "from_airport": "JED", "to_airport": "CCU" },
        { "id": "448", "from_airport": "JED", "to_airport": "CGP" },
        { "id": "450", "from_airport": "JED", "to_airport": "CXB" },
        { "id": "447", "from_airport": "JED", "to_airport": "DAC" },
        { "id": "447", "from_airport": "JED", "to_airport": "DEL" },
        { "id": "461", "from_airport": "JED", "to_airport": "HKG" },
        { "id": "451", "from_airport": "JED", "to_airport": "JSR" },
        { "id": "456", "from_airport": "JED", "to_airport": "KTM" },
        { "id": "459", "from_airport": "JED", "to_airport": "KUL" },
        { "id": "453", "from_airport": "JED", "to_airport": "RGN" },
        { "id": "453", "from_airport": "JED", "to_airport": "RJH" },
        { "id": "458", "from_airport": "JED", "to_airport": "SIN" },
        { "id": "452", "from_airport": "JED", "to_airport": "SPD" },
        { "id": "449", "from_airport": "JED", "to_airport": "ZYL" },
        { "id": "125", "from_airport": "JSR", "to_airport": "AUH" },
        { "id": "119", "from_airport": "JSR", "to_airport": "BKK" },
        { "id": "114", "from_airport": "JSR", "to_airport": "CCU" },
        { "id": "110", "from_airport": "JSR", "to_airport": "CGP" },
        { "id": "112", "from_airport": "JSR", "to_airport": "CXB" },
        { "id": "109", "from_airport": "JSR", "to_airport": "DAC" },
        { "id": "115", "from_airport": "JSR", "to_airport": "DEL" },
        { "id": "131", "from_airport": "JSR", "to_airport": "DMM" },
        { "id": "128", "from_airport": "JSR", "to_airport": "DOH" },
        { "id": "124", "from_airport": "JSR", "to_airport": "DXB" },
        { "id": "123", "from_airport": "JSR", "to_airport": "HKG" },
        { "id": "129", "from_airport": "JSR", "to_airport": "JED" },
        { "id": "117", "from_airport": "JSR", "to_airport": "KTM" },
        { "id": "121", "from_airport": "JSR", "to_airport": "KUL" },
        { "id": "126", "from_airport": "JSR", "to_airport": "KWI" },
        { "id": "133", "from_airport": "JSR", "to_airport": "LHR" },
        { "id": "134", "from_airport": "JSR", "to_airport": "MAN" },
        { "id": "127", "from_airport": "JSR", "to_airport": "MCT" },
        { "id": "132", "from_airport": "JSR", "to_airport": "MED" },
        { "id": "132", "from_airport": "JSR", "to_airport": "MLE" },
        { "id": "118", "from_airport": "JSR", "to_airport": "RGN" },
        { "id": "130", "from_airport": "JSR", "to_airport": "RUH" },
        { "id": "122", "from_airport": "JSR", "to_airport": "SHJ" },
        { "id": "122", "from_airport": "JSR", "to_airport": "SIN" },
        { "id": "113", "from_airport": "JSR", "to_airport": "SPD" },
        { "id": "111", "from_airport": "JSR", "to_airport": "ZYL" },
        { "id": "1003", "from_airport": "JSR", "to_airport": "YYZ" },
        { "id": "273", "from_airport": "KTM", "to_airport": "AUH" },
        { "id": "267", "from_airport": "KTM", "to_airport": "BKK" },
        { "id": "264", "from_airport": "KTM", "to_airport": "CCU" },
        { "id": "260", "from_airport": "KTM", "to_airport": "CGP" },
        { "id": "262", "from_airport": "KTM", "to_airport": "CXB" },
        { "id": "259", "from_airport": "KTM", "to_airport": "DAC" },
        { "id": "265", "from_airport": "KTM", "to_airport": "DEL" },
        { "id": "279", "from_airport": "KTM", "to_airport": "DMM" },
        { "id": "276", "from_airport": "KTM", "to_airport": "DOH" },
        { "id": "272", "from_airport": "KTM", "to_airport": "DXB" },
        { "id": "271", "from_airport": "KTM", "to_airport": "HKG" },
        { "id": "277", "from_airport": "KTM", "to_airport": "JED" },
        { "id": "263", "from_airport": "KTM", "to_airport": "JSR" },
        { "id": "269", "from_airport": "KTM", "to_airport": "KUL" },
        { "id": "274", "from_airport": "KTM", "to_airport": "KWI" },
        { "id": "281", "from_airport": "KTM", "to_airport": "LHR" },
        { "id": "282", "from_airport": "KTM", "to_airport": "MAN" },
        { "id": "275", "from_airport": "KTM", "to_airport": "MCT" },
        { "id": "280", "from_airport": "KTM", "to_airport": "MED" },
        { "id": "278", "from_airport": "KTM", "to_airport": "RGN" },
        { "id": "278", "from_airport": "KTM", "to_airport": "RUH" },
        { "id": "270", "from_airport": "KTM", "to_airport": "SHJ" },
        { "id": "270", "from_airport": "KTM", "to_airport": "SIN" },
        { "id": "261", "from_airport": "KTM", "to_airport": "ZYL" },
        { "id": "1013", "from_airport": "KTM", "to_airport": "YYZ" },
        { "id": "339", "from_airport": "KUL", "to_airport": "AUH" },
        { "id": "334", "from_airport": "KUL", "to_airport": "CCU" },
        { "id": "328", "from_airport": "KUL", "to_airport": "CGP" },
        { "id": "330", "from_airport": "KUL", "to_airport": "CXB" },
        { "id": "327", "from_airport": "KUL", "to_airport": "DAC" },
        { "id": "335", "from_airport": "KUL", "to_airport": "DEL" },
        { "id": "345", "from_airport": "KUL", "to_airport": "DMM" },
        { "id": "342", "from_airport": "KUL", "to_airport": "DOH" },
        { "id": "338", "from_airport": "KUL", "to_airport": "DXB" },
        { "id": "343", "from_airport": "KUL", "to_airport": "JED" },
        { "id": "331", "from_airport": "KUL", "to_airport": "JSR" },
        { "id": "337", "from_airport": "KUL", "to_airport": "KTM" },
        { "id": "340", "from_airport": "KUL", "to_airport": "KWI" },
        { "id": "347", "from_airport": "KUL", "to_airport": "LHR" },
        { "id": "348", "from_airport": "KUL", "to_airport": "MAN" },
        { "id": "341", "from_airport": "KUL", "to_airport": "MCT" },
        { "id": "346", "from_airport": "KUL", "to_airport": "MED" },
        { "id": "333", "from_airport": "KUL", "to_airport": "RGN" },
        { "id": "333", "from_airport": "KUL", "to_airport": "RJH" },
        { "id": "344", "from_airport": "KUL", "to_airport": "RUH" },
        { "id": "332", "from_airport": "KUL", "to_airport": "SHJ" },
        { "id": "332", "from_airport": "KUL", "to_airport": "SPD" },
        { "id": "329", "from_airport": "KUL", "to_airport": "ZYL" },
        { "id": "1009", "from_airport": "KUL", "to_airport": "YYZ" },
        { "id": "412", "from_airport": "KWI", "to_airport": "BKK" },
        { "id": "409", "from_airport": "KWI", "to_airport": "BZL" },
        { "id": "410", "from_airport": "KWI", "to_airport": "CCU" },
        { "id": "403", "from_airport": "KWI", "to_airport": "CGP" },
        { "id": "405", "from_airport": "KWI", "to_airport": "CXB" },
        { "id": "402", "from_airport": "KWI", "to_airport": "DAC" },
        { "id": "402", "from_airport": "KWI", "to_airport": "DEL" },
        { "id": "416", "from_airport": "KWI", "to_airport": "HKG" },
        { "id": "406", "from_airport": "KWI", "to_airport": "JSR" },
        { "id": "411", "from_airport": "KWI", "to_airport": "KTM" },
        { "id": "414", "from_airport": "KWI", "to_airport": "KUL" },
        { "id": "408", "from_airport": "KWI", "to_airport": "RGN" },
        { "id": "408", "from_airport": "KWI", "to_airport": "RJH" },
        { "id": "413", "from_airport": "KWI", "to_airport": "SIN" },
        { "id": "407", "from_airport": "KWI", "to_airport": "SPD" },
        { "id": "404", "from_airport": "KWI", "to_airport": "ZYL" },
        { "id": "523", "from_airport": "LHR", "to_airport": "AUH" },
        { "id": "517", "from_airport": "LHR", "to_airport": "BKK" },
        { "id": "514", "from_airport": "LHR", "to_airport": "BZL" },
        { "id": "515", "from_airport": "LHR", "to_airport": "CCU" },
        { "id": "508", "from_airport": "LHR", "to_airport": "CGP" },
        { "id": "510", "from_airport": "LHR", "to_airport": "CXB" },
        { "id": "507", "from_airport": "LHR", "to_airport": "DAC" },
        { "id": "507", "from_airport": "LHR", "to_airport": "DEL" },
        { "id": "522", "from_airport": "LHR", "to_airport": "DXB" },
        { "id": "521", "from_airport": "LHR", "to_airport": "HKG" },
        { "id": "524", "from_airport": "LHR", "to_airport": "JED" },
        { "id": "511", "from_airport": "LHR", "to_airport": "JSR" },
        { "id": "516", "from_airport": "LHR", "to_airport": "KTM" },
        { "id": "519", "from_airport": "LHR", "to_airport": "KUL" },
        { "id": "525", "from_airport": "LHR", "to_airport": "MED" },
        { "id": "513", "from_airport": "LHR", "to_airport": "RGN" },
        { "id": "513", "from_airport": "LHR", "to_airport": "RJH" },
        { "id": "518", "from_airport": "LHR", "to_airport": "SIN" },
        { "id": "512", "from_airport": "LHR", "to_airport": "SPD" },
        { "id": "509", "from_airport": "LHR", "to_airport": "ZYL" },
        { "id": "542", "from_airport": "MAN", "to_airport": "AUH" },
        { "id": "536", "from_airport": "MAN", "to_airport": "BKK" },
        { "id": "533", "from_airport": "MAN", "to_airport": "BZL" },
        { "id": "534", "from_airport": "MAN", "to_airport": "CCU" },
        { "id": "527", "from_airport": "MAN", "to_airport": "CGP" },
        { "id": "529", "from_airport": "MAN", "to_airport": "CXB" },
        { "id": "526", "from_airport": "MAN", "to_airport": "DAC" },
        { "id": "541", "from_airport": "MAN", "to_airport": "DXB" },
        { "id": "541", "from_airport": "MAN", "to_airport": "DEL" },
        { "id": "540", "from_airport": "MAN", "to_airport": "HKG" },
        { "id": "543", "from_airport": "MAN", "to_airport": "JED" },
        { "id": "530", "from_airport": "MAN", "to_airport": "JSR" },
        { "id": "535", "from_airport": "MAN", "to_airport": "KTM" },
        { "id": "538", "from_airport": "MAN", "to_airport": "KUL" },
        { "id": "544", "from_airport": "MAN", "to_airport": "MED" },
        { "id": "532", "from_airport": "MAN", "to_airport": "RGN" },
        { "id": "532", "from_airport": "MAN", "to_airport": "RJH" },
        { "id": "537", "from_airport": "MAN", "to_airport": "SIN" },
        { "id": "531", "from_airport": "MAN", "to_airport": "SPD" },
        { "id": "528", "from_airport": "MAN", "to_airport": "ZYL" },
        { "id": "427", "from_airport": "MCT", "to_airport": "BKK" },
        { "id": "424", "from_airport": "MCT", "to_airport": "BZL" },
        { "id": "425", "from_airport": "MCT", "to_airport": "CCU" },
        { "id": "418", "from_airport": "MCT", "to_airport": "CGP" },
        { "id": "420", "from_airport": "MCT", "to_airport": "CXB" },
        { "id": "417", "from_airport": "MCT", "to_airport": "DAC" },
        { "id": "417", "from_airport": "MCT", "to_airport": "DEL" },
        { "id": "431", "from_airport": "MCT", "to_airport": "HKG" },
        { "id": "421", "from_airport": "MCT", "to_airport": "JSR" },
        { "id": "426", "from_airport": "MCT", "to_airport": "KTM" },
        { "id": "429", "from_airport": "MCT", "to_airport": "KUL" },
        { "id": "423", "from_airport": "MCT", "to_airport": "RGN" },
        { "id": "423", "from_airport": "MCT", "to_airport": "RJH" },
        { "id": "428", "from_airport": "MCT", "to_airport": "SIN" },
        { "id": "422", "from_airport": "MCT", "to_airport": "SPD" },
        { "id": "419", "from_airport": "MCT", "to_airport": "ZYL" },
        { "id": "502", "from_airport": "MED", "to_airport": "BKK" },
        { "id": "499", "from_airport": "MED", "to_airport": "BZL" },
        { "id": "500", "from_airport": "MED", "to_airport": "CCU" },
        { "id": "493", "from_airport": "MED", "to_airport": "CGP" },
        { "id": "495", "from_airport": "MED", "to_airport": "CXB" },
        { "id": "492", "from_airport": "MED", "to_airport": "DAC" },
        { "id": "506", "from_airport": "MED", "to_airport": "HKG" },
        { "id": "496", "from_airport": "MED", "to_airport": "JSR" },
        { "id": "501", "from_airport": "MED", "to_airport": "KTM" },
        { "id": "504", "from_airport": "MED", "to_airport": "KUL" },
        { "id": "498", "from_airport": "MED", "to_airport": "RGN" },
        { "id": "498", "from_airport": "MED", "to_airport": "RJH" },
        { "id": "503", "from_airport": "MED", "to_airport": "SIN" },
        { "id": "497", "from_airport": "MED", "to_airport": "SPD" },
        { "id": "494", "from_airport": "MED", "to_airport": "ZYL" },
        { "id": "201", "from_airport": "RJH", "to_airport": "AUH" },
        { "id": "195", "from_airport": "RJH", "to_airport": "BKK" },
        { "id": "191", "from_airport": "RJH", "to_airport": "CCU" },
        { "id": "187", "from_airport": "RJH", "to_airport": "CGP" },
        { "id": "189", "from_airport": "RJH", "to_airport": "CXB" },
        { "id": "186", "from_airport": "RJH", "to_airport": "DAC" },
        { "id": "192", "from_airport": "RJH", "to_airport": "DEL" },
        { "id": "207", "from_airport": "RJH", "to_airport": "DMM" },
        { "id": "204", "from_airport": "RJH", "to_airport": "DOH" },
        { "id": "200", "from_airport": "RJH", "to_airport": "DXB" },
        { "id": "199", "from_airport": "RJH", "to_airport": "HKG" },
        { "id": "205", "from_airport": "RJH", "to_airport": "JED" },
        { "id": "194", "from_airport": "RJH", "to_airport": "KTM" },
        { "id": "197", "from_airport": "RJH", "to_airport": "KUL" },
        { "id": "202", "from_airport": "RJH", "to_airport": "KWI" },
        { "id": "209", "from_airport": "RJH", "to_airport": "LHR" },
        { "id": "210", "from_airport": "RJH", "to_airport": "MAN" },
        { "id": "203", "from_airport": "RJH", "to_airport": "MCT" },
        { "id": "208", "from_airport": "RJH", "to_airport": "MED" },
        { "id": "206", "from_airport": "RJH", "to_airport": "RGN" },
        { "id": "206", "from_airport": "RJH", "to_airport": "RUH" },
        { "id": "198", "from_airport": "RJH", "to_airport": "SHJ" },
        { "id": "198", "from_airport": "RJH", "to_airport": "SIN" },
        { "id": "190", "from_airport": "RJH", "to_airport": "SPD" },
        { "id": "188", "from_airport": "RJH", "to_airport": "ZYL" },
        { "id": "1006", "from_airport": "RJH", "to_airport": "YYZ" },
        { "id": "472", "from_airport": "RUH", "to_airport": "BKK" },
        { "id": "469", "from_airport": "RUH", "to_airport": "BZL" },
        { "id": "470", "from_airport": "RUH", "to_airport": "CCU" },
        { "id": "463", "from_airport": "RUH", "to_airport": "CGP" },
        { "id": "465", "from_airport": "RUH", "to_airport": "CXB" },
        { "id": "462", "from_airport": "RUH", "to_airport": "DAC" },
        { "id": "476", "from_airport": "RUH", "to_airport": "HKG" },
        { "id": "466", "from_airport": "RUH", "to_airport": "JSR" },
        { "id": "471", "from_airport": "RUH", "to_airport": "KTM" },
        { "id": "474", "from_airport": "RUH", "to_airport": "KUL" },
        { "id": "468", "from_airport": "RUH", "to_airport": "RGN" },
        { "id": "468", "from_airport": "RUH", "to_airport": "RJH" },
        { "id": "473", "from_airport": "RUH", "to_airport": "SIN" },
        { "id": "467", "from_airport": "RUH", "to_airport": "SPD" },
        { "id": "464", "from_airport": "RUH", "to_airport": "ZYL" },
        { "id": "362", "from_airport": "SHJ", "to_airport": "BKK" },
        { "id": "362", "from_airport": "SHJ", "to_airport": "BZL" },
        { "id": "356", "from_airport": "SHJ", "to_airport": "CCU" },
        { "id": "350", "from_airport": "SHJ", "to_airport": "CGP" },
        { "id": "352", "from_airport": "SHJ", "to_airport": "CXB" },
        { "id": "349", "from_airport": "SHJ", "to_airport": "DAC" },
        { "id": "357", "from_airport": "SHJ", "to_airport": "DEL" },
        { "id": "357", "from_airport": "SHJ", "to_airport": "HKG" },
        { "id": "353", "from_airport": "SHJ", "to_airport": "JSR" },
        { "id": "360", "from_airport": "SHJ", "to_airport": "KTM" },
        { "id": "363", "from_airport": "SHJ", "to_airport": "KUL" },
        { "id": "359", "from_airport": "SHJ", "to_airport": "RGN" },
        { "id": "355", "from_airport": "SHJ", "to_airport": "RJH" },
        { "id": "354", "from_airport": "SHJ", "to_airport": "SPD" },
        { "id": "354", "from_airport": "SHJ", "to_airport": "SIN" },
        { "id": "354", "from_airport": "SHJ", "to_airport": "ZYL" },
        { "id": "362", "from_airport": "SIN", "to_airport": "AUH" },
        { "id": "356", "from_airport": "SIN", "to_airport": "CCU" },
        { "id": "350", "from_airport": "SIN", "to_airport": "CGP" },
        { "id": "352", "from_airport": "SIN", "to_airport": "CXB" },
        { "id": "349", "from_airport": "SIN", "to_airport": "DAC" },
        { "id": "357", "from_airport": "SIN", "to_airport": "DEL" },
        { "id": "368", "from_airport": "SIN", "to_airport": "DMM" },
        { "id": "365", "from_airport": "SIN", "to_airport": "DOH" },
        { "id": "361", "from_airport": "SIN", "to_airport": "DXB" },
        { "id": "366", "from_airport": "SIN", "to_airport": "JED" },
        { "id": "353", "from_airport": "SIN", "to_airport": "JSR" },
        { "id": "360", "from_airport": "SIN", "to_airport": "KTM" },
        { "id": "363", "from_airport": "SIN", "to_airport": "KWI" },
        { "id": "370", "from_airport": "SIN", "to_airport": "LHR" },
        { "id": "371", "from_airport": "SIN", "to_airport": "MAN" },
        { "id": "364", "from_airport": "SIN", "to_airport": "MCT" },
        { "id": "369", "from_airport": "SIN", "to_airport": "MED" },
        { "id": "359", "from_airport": "SIN", "to_airport": "RGN" },
        { "id": "355", "from_airport": "SIN", "to_airport": "RJH" },
        { "id": "367", "from_airport": "SIN", "to_airport": "RUH" },
        { "id": "354", "from_airport": "SIN", "to_airport": "SHJ" },
        { "id": "354", "from_airport": "SIN", "to_airport": "SPD" },
        { "id": "351", "from_airport": "SIN", "to_airport": "ZYL" },
        { "id": "1008", "from_airport": "SIN", "to_airport": "YYZ" },
        { "id": "151", "from_airport": "SPD", "to_airport": "AUH" },
        { "id": "145", "from_airport": "SPD", "to_airport": "BKK" },
        { "id": "140", "from_airport": "SPD", "to_airport": "CCU" },
        { "id": "136", "from_airport": "SPD", "to_airport": "CGP" },
        { "id": "138", "from_airport": "SPD", "to_airport": "CXB" },
        { "id": "135", "from_airport": "SPD", "to_airport": "DAC" },
        { "id": "141", "from_airport": "SPD", "to_airport": "DEL" },
        { "id": "157", "from_airport": "SPD", "to_airport": "DMM" },
        { "id": "154", "from_airport": "SPD", "to_airport": "DOH" },
        { "id": "150", "from_airport": "SPD", "to_airport": "DXB" },
        { "id": "149", "from_airport": "SPD", "to_airport": "HKG" },
        { "id": "155", "from_airport": "SPD", "to_airport": "JED" },
        { "id": "139", "from_airport": "SPD", "to_airport": "JSR" },
        { "id": "143", "from_airport": "SPD", "to_airport": "KTM" },
        { "id": "147", "from_airport": "SPD", "to_airport": "KUL" },
        { "id": "152", "from_airport": "SPD", "to_airport": "KWI" },
        { "id": "159", "from_airport": "SPD", "to_airport": "LHR" },
        { "id": "160", "from_airport": "SPD", "to_airport": "MAN" },
        { "id": "153", "from_airport": "SPD", "to_airport": "MCT" },
        { "id": "158", "from_airport": "SPD", "to_airport": "MED" },
        { "id": "158", "from_airport": "SPD", "to_airport": "MLE" },
        { "id": "144", "from_airport": "SPD", "to_airport": "RGN" },
        { "id": "156", "from_airport": "SPD", "to_airport": "RUH" },
        { "id": "148", "from_airport": "SPD", "to_airport": "SHJ" },
        { "id": "148", "from_airport": "SPD", "to_airport": "SIN" },
        { "id": "137", "from_airport": "SPD", "to_airport": "ZYL" },
        { "id": "1005", "from_airport": "SPD", "to_airport": "YYZ" },
        { "id": "394", "from_airport": "YYZ", "to_airport": "BZL" },
        { "id": "395", "from_airport": "YYZ", "to_airport": "CCU" },
        { "id": "388", "from_airport": "YYZ", "to_airport": "CGP" },
        { "id": "390", "from_airport": "YYZ", "to_airport": "CXB" },
        { "id": "387", "from_airport": "YYZ", "to_airport": "DAC" },
        { "id": "387", "from_airport": "YYZ", "to_airport": "DEL" },
        { "id": "391", "from_airport": "YYZ", "to_airport": "JSR" },
        { "id": "396", "from_airport": "YYZ", "to_airport": "KTM" },
        { "id": "396", "from_airport": "YYZ", "to_airport": "KUL" },
        { "id": "393", "from_airport": "YYZ", "to_airport": "RJH" },
        { "id": "392", "from_airport": "YYZ", "to_airport": "SIN" },
        { "id": "392", "from_airport": "YYZ", "to_airport": "SPD" },
        { "id": "389", "from_airport": "YYZ", "to_airport": "ZYL" },
        { "id": "72", "from_airport": "ZYL", "to_airport": "AUH" },
        { "id": "66", "from_airport": "ZYL", "to_airport": "BKK" },
        { "id": "61", "from_airport": "ZYL", "to_airport": "BZL" },
        { "id": "62", "from_airport": "ZYL", "to_airport": "CCU" },
        { "id": "56", "from_airport": "ZYL", "to_airport": "CGP" },
        { "id": "57", "from_airport": "ZYL", "to_airport": "CXB" },
        { "id": "55", "from_airport": "ZYL", "to_airport": "DAC" },
        { "id": "63", "from_airport": "ZYL", "to_airport": "DEL" },
        { "id": "78", "from_airport": "ZYL", "to_airport": "DMM" },
        { "id": "75", "from_airport": "ZYL", "to_airport": "DOH" },
        { "id": "71", "from_airport": "ZYL", "to_airport": "DXB" },
        { "id": "70", "from_airport": "ZYL", "to_airport": "HKG" },
        { "id": "76", "from_airport": "ZYL", "to_airport": "JED" },
        { "id": "58", "from_airport": "ZYL", "to_airport": "JSR" },
        { "id": "65", "from_airport": "ZYL", "to_airport": "KTM" },
        { "id": "68", "from_airport": "ZYL", "to_airport": "KUL" },
        { "id": "73", "from_airport": "ZYL", "to_airport": "KWI" },
        { "id": "80", "from_airport": "ZYL", "to_airport": "LHR" },
        { "id": "81", "from_airport": "ZYL", "to_airport": "MAN" },
        { "id": "74", "from_airport": "ZYL", "to_airport": "MCT" },
        { "id": "79", "from_airport": "ZYL", "to_airport": "MED" },
        { "id": "79", "from_airport": "ZYL", "to_airport": "MLE" },
        { "id": "79", "from_airport": "ZYL", "to_airport": "RGN" },
        { "id": "60", "from_airport": "ZYL", "to_airport": "RJH" },
        { "id": "77", "from_airport": "ZYL", "to_airport": "RUH" },
        { "id": "69", "from_airport": "ZYL", "to_airport": "SJH" },
        { "id": "69", "from_airport": "ZYL", "to_airport": "SIN" },
        { "id": "59", "from_airport": "ZYL", "to_airport": "SPD" },
        { "id": "1001", "from_airport": "ZYL", "to_airport": "YYZ" },
    ];

    var options = $("#departure1");
    var destinationOptions = $("#arrival1");

    $.each(airportName, function() {
        options.append($("<option />").val(this.iata_code).text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") "));
        // options.append($("<option />").val(this.iata_code).text(this.city + " (" + this.iata_code + ") "));
    });

    $('#departure1').change(function() {

        var value = $(this).val();

        // console.log(value);

        $("#departure2").val(value).change();
        //   console.log(value);
        destinationOptions.html('');
        // destinationOptions.append(new Option('Select Destination', '0'));
        destinationOptions.append("<option disabled='disabled' SELECTED>,Select Destination</option>");

        $.each(sampledata, function() {
            var from = this.from_airport;
            // console.log(from);
            if (from == value) {
                var to_airport = this.to_airport;
                // console.log(to_airport);

                $.each(airportName, function() {
                    if (this.iata_code == to_airport) {
                        destinationOptions.append($("<option/>").val(this.iata_code)
                            .text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") ")
                        );
                    }

                });
            }

            // options.append( $("<option />").val(this.id)
            //     .text(this.fro + " " + this.iata_code + " (" + this.city + ") ")
            // );
        });

    });

    //ROUND TRIP

    var options2 = $("#departure2");
    var destinationOptions2 = $("#arrival2");

    $.each(airportName, function() {
        options2.append($("<option />").val(this.iata_code).text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") "));
    });

    $('#departure2').change(function() {

        var value = $(this).val();

        if ($("#departure1").val() != value) {
            // console.log("YES");
            $("#departure1").val(value).change();
        }
        // $("#departure1").val(value).change();
        //   console.log(value);
        destinationOptions2.html('');
        destinationOptions2.append("<option disabled='disabled' SELECTED>,Select Destination</option>");
        $.each(sampledata, function() {
            var from = this.from_airport;
            if (value == from) {
                var to_airport = this.to_airport;
                // console.log(to_airport);

                $.each(airportName, function() {
                    if (this.iata_code == to_airport) {
                        destinationOptions2.append($("<option/>").val(this.iata_code)
                            .text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") ")
                        );
                    }

                });
            }

            // options.append( $("<option />").val(this.id)
            //     .text(this.fro + " " + this.iata_code + " (" + this.city + ") ")
            // );
        });

    });

    $('#arrival1').change(function() {

        var value = $(this).val();
        $("#arrival2").val(value).change();

    });

    $('#arrival2').change(function() {

        var value = $(this).val();
        if ($("#arrival1").val() != value) {

            $("#arrival1").val(value).change();
            // console.log("YES");

        }
    });

    // flight status
    var optionsFlightStatus = $("#departureFlightStatus");
    var optionsFlightStatusArrival = $("#arrivalFlightStatus");




    $.each(airportName, function() {
        optionsFlightStatus.append($("<option />").val(this.iata_code).text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") "));
        // options.append($("<option />").val(this.iata_code).text(this.city + " (" + this.iata_code + ") "));
    });

    $('#departureFlightStatus').change(function() {

        var value = $(this).val();
        //   console.log(value);
        optionsFlightStatusArrival.html('');
        // destinationOptions.append(new Option('Select Destination', '0'));
        optionsFlightStatusArrival.append("<option disabled='disabled' SELECTED>,Select Destination</option>");

        $.each(sampledata, function() {
            var from = this.from_airport;
            if (value == from) {
                var to_airport = this.to_airport;
                // console.log(to_airport);

                $.each(airportName, function() {
                    if (this.iata_code == to_airport) {
                        optionsFlightStatusArrival.append($("<option/>").val(this.iata_code)
                            .text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") ")
                        );
                    }

                });
            }

            // options.append( $("<option />").val(this.id)
            //     .text(this.fro + " " + this.iata_code + " (" + this.city + ") ")
            // );
        });

    });


    // flith scheudle
    var optionsFlightSchedule = $("#departureFlightSchedule");
    var optionsFlightScheduleArrival = $("#arrivalFlightSchedule");

    $.each(airportName, function() {
        optionsFlightSchedule.append($("<option />").val(this.iata_code).text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") "));
        // options.append($("<option />").val(this.iata_code).text(this.city + " (" + this.iata_code + ") "));
    });

    $('#departureFlightSchedule').change(function() {

        var value = $(this).val();
        //   console.log(value);
        optionsFlightScheduleArrival.html('');
        // destinationOptions.append(new Option('Select Destination', '0'));
        optionsFlightScheduleArrival.append("<option disabled='disabled' SELECTED>,Select Destination</option>");

        $.each(sampledata, function() {
            var from = this.from_airport;
            if (value == from) {
                var to_airport = this.to_airport;
                // console.log(to_airport);

                $.each(airportName, function() {
                    if (this.iata_code == to_airport) {
                        optionsFlightScheduleArrival.append($("<option/>").val(this.iata_code)
                            .text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") ")
                        );
                    }

                });
            }

            // options.append( $("<option />").val(this.id)
            //     .text(this.fro + " " + this.iata_code + " (" + this.city + ") ")
            // );
        });

    });


    // mulitcity
    var optionsDepartMultiCity = $("#depart");
    var optionsArrivMultiCity = $("#arriv");

    $.each(airportName, function() {
        optionsDepartMultiCity.append($("<option />").val(this.iata_code).text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") "));
        // options.append($("<option />").val(this.iata_code).text(this.city + " (" + this.iata_code + ") "));
    });

    $('#depart').change(function() {

        var value = $(this).val();
        //   console.log(value);
        optionsArrivMultiCity.html('');
        // destinationOptions.append(new Option('Select Destination', '0'));
        optionsArrivMultiCity.append("<option disabled='disabled' SELECTED>,Select Destination</option>");

        $.each(sampledata, function() {
            var from = this.from_airport;
            if (value == from) {
                var to_airport = this.to_airport;
                // console.log(to_airport);

                $.each(airportName, function() {
                    if (this.iata_code == to_airport) {
                        optionsArrivMultiCity.append($("<option/>").val(this.iata_code)
                            .text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") ")
                        );
                    }

                });
            }

            // options.append( $("<option />").val(this.id)
            //     .text(this.fro + " " + this.iata_code + " (" + this.city + ") ")
            // );
        });

    });

    // 2nd multicity
    var optionsDepartMultiCity1 = $("#depart1");
    var optionsArrivMultiCity1 = $("#arriv1");

    $.each(airportName, function() {
        optionsDepartMultiCity1.append($("<option />").val(this.iata_code).text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") "));
        // options.append($("<option />").val(this.iata_code).text(this.city + " (" + this.iata_code + ") "));
    });

    $('#depart1').change(function() {

        var value = $(this).val();
        //   console.log(value);
        optionsArrivMultiCity1.html('');
        // destinationOptions.append(new Option('Select Destination', '0'));
        optionsArrivMultiCity1.append("<option disabled='disabled' SELECTED>,Select Destination</option>");

        $.each(sampledata, function() {
            var from = this.from_airport;
            if (value == from) {
                var to_airport = this.to_airport;
                // console.log(to_airport);

                $.each(airportName, function() {
                    if (this.iata_code == to_airport) {
                        optionsArrivMultiCity1.append($("<option/>").val(this.iata_code)
                            .text(this.airport_name + " " + this.country + ", " + this.city + " (" + this.iata_code + ") ")
                        );
                    }

                });
            }

            // options.append( $("<option />").val(this.id)
            //     .text(this.fro + " " + this.iata_code + " (" + this.city + ") ")
            // );
        });

    });

    // // 3rd multicity
    // var optionsDepartMultiCity2 = $("#depart2");
    // var optionsArrivMultiCity2 = $("#arriv2");

    // $.each(airportName, function () {

    //     // console.log("HELOOOOOOOOOOOOOOOOOO");
    //     // optionsDepartMultiCity2.html('');
    //     optionsDepartMultiCity2.append($("<option />").val(this.iata_code).text(this.airport_name +" "+this.country +", " + this.city + " (" + this.iata_code + ") "));
    //     // options.append($("<option />").val(this.iata_code).text(this.city + " (" + this.iata_code + ") "));
    // });

    // // $.each(airportName, function () {
    // //     optionsArrivMultiCity2.append($("<option />").val(this.iata_code).text(this.airport_name + ", " + this.city + " (" + this.iata_code + ") "));
    // //     // options.append($("<option />").val(this.iata_code).text(this.city + " (" + this.iata_code + ") "));
    // // });

    // $('#depart2').change(function () {

    //     var value = $(this).val();
    //     optionsArrivMultiCity2.html('');
    //     // destinationOptions.append(new Option('Select Destination', '0'));
    //     optionsArrivMultiCity2.append("<option disabled='disabled' SELECTED>,Select Destination</option>");

    //     $.each(sampledata, function () {
    //         var from = this.from_airport;
    //         if (value == from) {
    //             var to_airport = this.to_airport;
    //             // console.log(to_airport);

    //             $.each(airportName, function () {
    //                 if (this.iata_code == to_airport) {
    //                     optionsArrivMultiCity2.append($("<option/>").val(this.iata_code)
    //                         .text(this.airport_name +" "+this.country +", " + this.city + " (" + this.iata_code + ") ")
    //                     );
    //                 }

    //             });
    //         }

    //         // options.append( $("<option />").val(this.id)
    //         //     .text(this.fro + " " + this.iata_code + " (" + this.city + ") ")
    //         // );
    //     });

    // });