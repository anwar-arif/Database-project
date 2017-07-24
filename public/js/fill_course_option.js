var select = document.getElementById("course_option");
var options = [
    "CSE-137 Data Structure" ,
    "CSE-237 Algorithm Design & Analysis" ,
    "CSE-233 OOP" ,
    "CSE-333 Database System" ,
    "CSE-361 Computer Networking" ,
    "Cse-433 Artificial Intelligence"
];

// Optional: Clear all existing options first:
select.innerHTML = "";
// Populate list with options:
for(var i = 0; i < options.length; i++) {
    var opt = options[i];
    // select.innerHTML += "<option value=\"" + opt + "\">" + opt + "</option>";
    select.options.add(new Option( opt , opt )) ;

    //new Option("optionText", "optionValue")
}