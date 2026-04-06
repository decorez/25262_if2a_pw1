fetch("https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json")
.then(response => response.json())
.then(data => {
    console.log(data)
    console.log(data.Infogempa.Infogempa)

    //forEach
    data.Infogempa.gempa.forEach(element => {
        document.getElementById("data-gempa").innerHTML += `
            ${element.Tanggal} <br>
            ${element.Wilayah} <hr>
        `
    });
})


// Latihan
// Gempa bumi terbaru
fetch("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.json")
.then(response => response.json())
.then(data => {
    const newest = data.Infogempa.gempa


    document.getElementById("gempa-terbaru").innerHTML+=`
        <img src="https://static.bmkg.go.id/${newest.Shakemap}" width="200px">  <br>
        ${newest.Tanggal} <br>
        ${newest.Jam} <br>
        ${newest.Wilayah} <hr>
    `
})

