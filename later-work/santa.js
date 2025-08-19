function shuffleArray(arr) {
    for (let i = arr.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
    }
}

function isInvalidPair(giver, receiver, restrictions) {
    if (giver.name === receiver.name) return true;
    return restrictions.some(r => r.giver === giver.name && r.reciever === receiver.name);
}

function generatePairs(people, restrictions, maxRetries = 1000) {
    for (let attempt = 0; attempt < maxRetries; attempt++) {
        let givers = [...people];
        let receivers = [...people];
        shuffleArray(givers);
        shuffleArray(receivers);

        let valid = true;
        let pairs = [];

        for (let i = 0; i < givers.length; i++) {
            if (isInvalidPair(givers[i], receivers[i], restrictions)) {
                valid = false;
                break;
            }
            pairs.push({
                giver: givers[i].name,
                reciever: receivers[i].name,
                giveremail: givers[i].email,
                recieverwishlist: receivers[i].wishlist
            });
        }

        if (valid) return pairs;
    }
    return null; // failed
}

// Stores the json input file data 
let inputData = null;

// Upload json file button 
document.addEventListener("DOMContentLoaded", () => {
    const fileInput = document.getElementById('fileInput');
    const fileName = document.getElementById('fileName');

    document.getElementById("fileInput").addEventListener("change", function(e) {
        if (fileInput.files.length > 0) {
            fileName.textContent = fileInput.files[0].name;
        } else {
            fileName.textContent = "No file chosen";
        }

        const file = e.target.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = function(event) {
            try {
                inputData = JSON.parse(event.target.result);
                // alert("JSON loaded successfully!");
            } catch (err) {
                alert("Invalid JSON file.");
            }
        };
        reader.readAsText(file);
    });
});


document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("generateBtn").addEventListener("click", function() {
        // Check for json input file data 
        if (!inputData) {
            alert("Please upload a JSON file first.");
            return;
        }

        // generate pairs
        const pairs = generatePairs(inputData.people, inputData.restrictions);
        if (!pairs) {
            alert("Could not find valid pairing after many attempts. Check restrictions.");
            return;
        }
        
        // print results
        const blob = new Blob([JSON.stringify(pairs, null, 2)], {type: "application/json"});
        const url = URL.createObjectURL(blob);
        const link = document.getElementById("downloadLink");
        link.href = url;
        link.download = "results.json";
        link.style.display = "inline-block";

        // print new configs
        const newConfigs = document.getElementById("addToConfig");
        const link2 = document.getElementById("downloadLink2");
        if (newConfigs.checked) {
            // copy old restrictions
            let updatedRestrictions = [...(inputData.restrictions || [])];

            // add this year’s pairings as new restrictions
            pairs.forEach(pair => {
                updatedRestrictions.push({
                    giver: pair.giver,
                    reciever: pair.reciever
                });
            });

            // build updated config
            const newConfig = {
                people: inputData.people,
                restrictions: updatedRestrictions
            };

            const blob2 = new Blob([JSON.stringify(newConfig, null, 2)], {type: "application/json"});
            const url2 = URL.createObjectURL(blob2);
            link2.href = url2;
            link2.download = "configs.json";
            link2.style.display = "inline-block";
        } else {
            link2.style.display = "none";
        }

    });
});



