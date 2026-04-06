// output console
console.log("Pesan ini tampil di console browser")

// output alert
// alert("Selamat datang")

// output innerHTML
document.getElementById("nama").innerHTML = "Nama saya Ahmad"

// variabel
let pesan = "Belajar JS menyenangkan"
document.getElementById("pesan").innerHTML = pesan

// array
let kompetensi = ['Fullstack', 'Project Manager', 'UI/UX']
document.getElementById("kompetensi").innerHTML = kompetensi[1]

kompetensi.forEach(element => {
    document.getElementById("kompetensi").innerHTML += `<li>${element}</li>`
});