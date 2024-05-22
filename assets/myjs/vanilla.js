
function giveChefSecteur(selectElement) {
    var selectedId = selectElement.value;
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log(xhr.responseText);  
                var responseData = JSON.parse(xhr.responseText);
                // console.log(responseData);

                if(responseData == null){
                    document.getElementById('chef').value = 'Chef de secteur non defini';
                } else {
                    document.getElementById('chef').value = responseData.nom + ' ' + responseData.prenom;
                }
            } else {
                console.log("Error");
            }
        }
    };

    xhr.open("GET", "getChefSecteur?id_secteur=" + selectedId, true);
    xhr.send();
}


// MODIFIER UN SELECT % UN AUTRE SELECT
function updateSelectBasedOnData(selectElement, elementToUpdate, id, value, link, arrayId){
    // console.log('array is ' + arrayId); 
    var selectedId = selectElement.value;
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log(xhr.responseText);  
                var responseData = JSON.parse(xhr.responseText);
                console.log(responseData);
                fillSelectDropdown(responseData, elementToUpdate, id, value, arrayId)
                
            } else {
                console.log("Error");
            }
        }
    };

    xhr.open("GET", link + selectedId, true);
    xhr.send();
}

// Function to fill the existing <select> dropdown
function fillSelectDropdown(data, selectId, id, value, arrayId) {
    var selectDropdown = document.getElementById(selectId); // Get the existing select element
    selectDropdown.innerHTML = '';      // Diovina aloa
    if(arrayId != null){
        for (let i = 0; i < arrayId.length; i++) {
            var selected = document.getElementById(arrayId[i]);
            // console.log(arrayId[i])
            selected.innerHTML = '';
        }
    }


    var option = document.createElement('option');
    option.value = '';
    option.textContent = 'Choisir ici ...'; 
    selectDropdown.appendChild(option); 

    // Loop through the data and create options
    data.forEach(function (item) {
        var option = document.createElement('option');
        option.value = item[id]; // Assign ID to option value
        option.textContent = item[value]; // Assign value to option text
        selectDropdown.appendChild(option); // Append the option to select
    });
}


// MODELE NIAINGANA

    // PRENDRE LES VILLES A PARTIR D'UNE ZONE
    function updateVille(selectElement) {
        var selectedId = selectElement.value;
        var xhr = new XMLHttpRequest();
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);  
                    var responseData = JSON.parse(xhr.responseText);
                    console.log(responseData);
                    fillSelectDropdown(responseData, "exampleSelectVille", 'id_ville', "nom_ville")
                   
                } else {
                    console.log("Error");
                }
            }
        };

        xhr.open("GET", "getVilleByZone?id_zone=" + selectedId, true);
        xhr.send();
    }