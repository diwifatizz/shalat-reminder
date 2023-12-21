@extends('front.layouts.frontend')

@section('content')

<style>

/* Asmaul Husna */
#section-asma {
    padding: 2rem 5% 5rem;
    text-align: center;

}
#result-asma{
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    align-items: center;
    gap: 1.5rem;
}

.container-asma{
    position: relative;
    width: 15rem;
    height: 14rem;
    margin: auto auto 10px auto;
    border-radius: 20px;
    box-shadow: 0 15px 30px rgba(13, 13, 13, 0.086);
    border: none;
    background-color: rgb(211, 240, 252);
    padding: 25px;
    display: grid;
    align-items: center;
    transition: .5s ease;
    
}
.container-asma:hover{
    transform: scale(1.05);
}
.namaAsmaul{
    color: var(--purple-color);
    margin-bottom: .1rem;
    display: block;
    align-items: center;
}
.transAsmaul{
    display: block;
    align-items: center;
}
   
</style>


<section id="section-asma">
    <h1>Asma'ul Husna</h1>
    <div id="result-asma"></div>
  </section>


  <script>
    // asmaul husna
    window.onload = function () {
      getDataAsma();
    };

    const asmaApi = 'https://api.aladhan.com/v1/asmaAlHusna';
    function getDataAsma() {
      fetch(asmaApi)
        .then(function (response) {
          //error dari server
          if (!response.ok) {
            throw new Error("Waduh! Gagal ambil data nih 🙀");
          }
          return response.json();
        })
        .then(function (asma) {
          displayDataAsma(asma);
        })
        .catch(function (error) {
          console.log("Terjadi kesalahan", error);
        });
    }

    function displayDataAsma(asma) {
      var resultDiv = document.getElementById("result-asma");
      resultDiv.innerHTML = "";

      asma.data.forEach(function (asmaa) {
        var asmaulDiv = document.createElement("div");
        asmaulDiv.className = "container-asmaul";

        var asmaDiv = document.createElement("div");
        asmaDiv.classList.add("asma");
        asmaDiv.className = "container-asma";

        var namaAsmaul = document.createElement("h1");
        namaAsmaul.textContent = asmaa.name;
        namaAsmaul.className = "namaAsmaul";

        var transAsmaul = document.createElement("p");
        transAsmaul.textContent = asmaa.transliteration;
        transAsmaul.className = "transAsmaul";

        asmaDiv.appendChild(namaAsmaul);
        asmaDiv.appendChild(transAsmaul);
        resultDiv.appendChild(asmaDiv);
      });
    }

    //menu-icon
    let menuIcon = document.querySelector("#menu-icon");
    let navbar = document.querySelector(".navbar");

    menuIcon.onclick = () => {
      menuIcon.classList.toggle("bx-x");
      navbar.classList.toggle("active");
    };

    window.onscroll = () => {
      menuIcon.classList.remove("bx-x");
      navbar.classList.remove("active");
    };
  </script>
@endsection