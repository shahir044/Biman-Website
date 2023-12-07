function BindHomePromotionLinkBooking(adult, child, infant, from, to, pos, departureDate, returnDate, journeyType, promoCode = "", cabinClass = "Economy") {
    var ADT = adult,
        CHD = child,
        INF = infant,
        origin = from,
        locale = "en-US",
        pointOfSale = pos;
    var destination = to;
    if (journeyType === "one-way") {
        var date = departureDate;
        url_bgdx_booking =
            "https://dx.dx13.cert.aws.sabre.com/dx/BGDX/beta#/flight-selection?" +
            "&journeyType=" +
            journeyType +
            "&locale=" +
            locale +
            "&ADT=" +
            ADT +
            "&CHD=" +
            CHD +
            "&INF=" +
            INF +
            "&origin=" +
            origin +
            "&destination=" +
            destination +
            "&date=" +
            date +
            "&promoCode=" +
            promoCode +
            "&class" +
            cabinClass +
            "&pointOfSale=" +
            pointOfSale;
    } else if (journeyType === "round-trip") {
        var origin1 = destination,
            destination1 = origin;
        var date = departureDate,
            date1 = returnDate;
        url_bgdx_booking =
            "https://dx.dx13.cert.aws.sabre.com/dx/BGDX/beta#/flight-selection?" +
            "&journeyType=" +
            journeyType +
            "&locale=" +
            locale +
            "&ADT=" +
            ADT +
            "&CHD=" +
            CHD +
            "&INF=" +
            INF +
            "&origin=" +
            origin +
            "&destination=" +
            destination +
            "&origin1=" +
            origin1 +
            "&destination1=" +
            destination1 +
            "&date=" +
            date +
            "&date1=" +
            date1 +
            "&promoCode=" +
            promoCode +
            "&class" +
            cabinClass +
            "&pointOfSale=" +
            pointOfSale;
    }
    window.location.href = url_bgdx_booking;
}