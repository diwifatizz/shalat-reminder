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
 var bws_1 = getheading.replace(/[^a-z0-9]/gi," ");
 var bws_2 = bws_1.trim();
 var getHeadUri = bws_2.replace(/\s/g, "_");
 document.getElementById("post-toc").querySelectorAll("h2, h3, h4")[i].setAttribute("id", getHeadUri);
 bwstoc = "<li><a href='#" + getHeadUri + "'>" + getheading + "</a></li>";
 document.getElementById("bwstoc").innerHTML += bwstoc;
 }
 } else { document.write("<style>.bwstoc{display:none !important;visibility:hidden !important;width:0 !important;height:0 !important;}</style>"); }
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

</script>
<noscript><style type='text/css'>#bwstocwrap,.bwstoc{display:none !important;visibility:hidden !important;width:0 !important;height:0 !important;}</style></noscript>
</b:if>