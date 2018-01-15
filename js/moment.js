function format(annee, mois, jour) {
    var date = "Le " + jour + " ";
    
    switch (mois) {
        case "01":
            date += "Janvier"
            break;
        case "02":
            date += "Février"
            break;       
        case "03":
            date += "Mars"
            break;        
        case "04":
            date += "Avril"
            break;        
        case "05":
            date += "Mai"
            break;        
        case "06":
            date += "Juin"
            break;        
        case "07":
            date += "Juillet"
            break;       
        case "08":
            date += "Août"
            break;        
        case "09":
            date += "Septembre"
            break;        
        case "10":
            date += "Octobre"
            break;       
        case "11":
            date += "Novembre"
            break;
        case "12":
            date += "Décembre"
            break;
    }
    
    date += " " + annee;
    
    return date;
}