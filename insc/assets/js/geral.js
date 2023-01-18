/* 
 * SEARCH BAR FOR CLIENTS
 */
function search_c() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchbarClient");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableClient");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1)
                tr[i].style.display = "";
            else
                tr[i].style.display = "none";
        }       
    }
}

/* 
 * SEARCH BAR FOR OCURRENCES
 */
function search_o() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchbarOcurrence");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableOcurrence");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1)
                tr[i].style.display = "";
            else
                tr[i].style.display = "none";
        }       
    }
}

