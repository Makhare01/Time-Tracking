function company() {
    document.getElementById("role_option_value").value = "company";
    document.getElementById("role_option_value").textContent = "company";

    document.getElementById("company_label").style.display = "block";
    document.getElementById("user_label").style.display = "none";
    document.getElementById("company_name_div").style.display = "block";

    document.getElementById("first_name_div").style.display = "none";
    document.getElementById("last_name_div").style.display = "none";
    document.getElementById("role_id_div").style.display = "none";
}

function user() {
    document.getElementById("role_option_value").value = "user";
    document.getElementById("role_option_value").textContent = "user";

    document.getElementById("user_label").style.display = "block";
    document.getElementById("company_label").style.display = "none";
    document.getElementById("company_name_div").style.display = "none";

    document.getElementById("first_name_div").style.display = "block";
    document.getElementById("last_name_div").style.display = "block";
    // document.getElementById("role_id_div").style.display = "block";
}

let menuButton = document.getElementById("menu-button");
let k = false;
menuButton.onclick = function() {
    let dropdown = document.getElementById("dropdown-menu");
    if (k == false) {
        dropdown.style.opacity = "1";
        dropdown.style.pointerEvents = "visible";
        k = true;
        console.log(k);
    } else {
        dropdown.style.opacity = "0";
        dropdown.style.pointerEvents = "none";
        k = false;
        console.log(k);
    }
};

// User Project Active
// function usserProject(project_id, projects) {
//     for (let i = 0; i < projects.length; i++) {
//         if (projects[i] == project_id)
//             document.getElementById("project" + project_id).style.border =
//                 "solid 1px #059669";
//         else {
//             document.getElementById("project" + projects[i]).style.border =
//                 "solid 1px #e5e7eb";
//         }
//     }

//     // console.log(projects);
// }
