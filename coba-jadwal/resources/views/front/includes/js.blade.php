<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

{{-- scriptt untuk text corousel --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
<b:if cond='data:blog.pageType == "item" or data:blog.pageType == "static_page"'>

    <!-- Blogger TOC -->
    <script type='text/javascript'>
        function bwstoc() {
            var bwstoc = i = headinglength = getheading = 0;
            headinglength = document.getElementById("post-toc").querySelectorAll("h2, h3, h4").length;
            if (headinglength > 0) {
                // Hanya Tampil Jika Ditemukan Minimal 2 Heading
                for (i = 0; i < headinglength; i++) {
                    getheading = document.getElementById("post-toc").querySelectorAll("h2, h3, h4")[i].textContent;
                    var bws_1 = getheading.replace(/[^a-z0-9]/gi, " ");
                    var bws_2 = bws_1.trim();
                    var getHeadUri = bws_2.replace(/\s/g, "_");
                    document.getElementById("post-toc").querySelectorAll("h2, h3, h4")[i].setAttribute("id", getHeadUri);
                    bwstoc = "<li><a href='#" + getHeadUri + "'>" + getheading + "</a></li>";
                    document.getElementById("bwstoc").innerHTML += bwstoc;
                }
            } else {
                document.write("<style>.bwstoc{display:none !important;visibility:hidden !important;width:0 !important;height:0 !important;}</style>");
            }
        }

        function bwstocShow() {
            var bwstocBtn = document.getElementById('bwstoc');
            var bwstocWrapID = document.getElementById('bwstocwrap');
            var bwstocLink = document.getElementById('bwstocLink');
            if (bwstocBtn.style.display === 'none') {
                bwstocBtn.style.display = 'block';
                bwstocWrapID.style.display = 'block';
                bwstocLink.innerHTML = 'Tutup';

            } else {
                bwstocBtn.style.display = 'none';
                bwstocWrapID.style.display = 'inline-block';
                bwstocLink.innerHTML = 'Tampil';
            }
        }

        function updateDateTime() {
            var now = new Date();
            var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            var day = days[now.getDay()];
            var date = now.getDate();
            var month = now.getMonth() + 1;
            var year = now.getFullYear();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            var formattedDate = day + '. ' + (date < 10 ? '0' : '') + date + '.' + (month < 10 ? '0' : '') + month + ' ' + year;
            var formattedTime = (hours < 10 ? '0' : '') + hours + ':' + (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;

            document.getElementById('date-time').innerText = formattedDate + ' ' + formattedTime;
        }

        // Update time every second
        setInterval(updateDateTime, 1000);

        // Initial update
        updateDateTime();
    </script>
    <noscript>
        <style type='text/css'>
            #bwstocwrap,
            .bwstoc {
                display: none !important;
                visibility: hidden !important;
                width: 0 !important;
                height: 0 !important;
            }
        </style>
    </noscript>
</b:if>



<script>
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
    asmaulDiv.className = "card";

    var asmaDiv = document.createElement("div");
    asmaDiv.classList.add("imgBx");

    var contentBx = document.createElement("div");
    contentBx.className = "contentBx";

    var h2 = document.createElement("h2");
    h2.textContent = asmaa.name;

    var size = document.createElement("div");
    size.className = "size";

    var sizeH3 = document.createElement("h4");
    sizeH3.textContent = asmaa.transliteration;

    size.appendChild(sizeH3);

    var color = document.createElement("div");
    color.className = "color";

    var colorH3 = document.createElement("h3");
    colorH3.textContent = asmaa.en.meaning;

    color.appendChild(colorH3);

    contentBx.appendChild(h2);
    contentBx.appendChild(size);
    contentBx.appendChild(color);

    asmaulDiv.appendChild(asmaDiv);
    asmaulDiv.appendChild(contentBx);

    resultDiv.appendChild(asmaulDiv);
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
