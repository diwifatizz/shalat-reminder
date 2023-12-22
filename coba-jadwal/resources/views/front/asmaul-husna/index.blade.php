@extends('front.layouts.frontend')

@section('content')

<style>
  #section-asma {
    padding: 2rem 5% 5rem;
    text-align: center;
}
#result-asma {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    align-items: center;
    gap: 1.5rem;
}

.card {
    position: relative;
    width: 200px;
    height: 270px;
    background: #235e63;
    border-radius: 20px;
    overflow: hidden;
    margin: auto;
}
.card:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 80%;
    background: #6a9eac;
    clip-path: circle(100px at 80% 20%);
    transition: 0.5s ease-in-out;
}
.card:hover:before {
    clip-path: circle(200px at 80% -20%);
}

.card:after {
    content: "ٱللَّهِ";
    position: absolute;
    top: 30%;
    left: -20%;
    font-size: 10em;
    font-weight: 800;
    font-style: italic;
    color: rgba(253, 254, 255, 0.04);
}

.card .imgBx {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
    width: 100%;
    height: 100%;
    transition: 0.5s;
}
.card:hover .imgBx {
    top: 0%;
    transform: translateY(-40%);
    /* bug */
}
.card .imgBx span {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(0deg);
    font-size: 3em;
    color: #fff;
}
.card .contentBx {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    text-align: center;
    transition: 1s;
    z-index: 90;
}
.card:hover .contentBx {
    height: 210px;
}
.card .contentBx h2 {
    position: relative;
    font-weight: 600;
    letter-spacing: 1px;
    color: #fff;
}
.card .contentBx .size,
.card .contentBx .color {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px 20px;
    transition: 0.5s;
    opacity: 0;
    visibility: hidden;
}
.card:hover .contentBx .size {
    opacity: 1;
    visibility: visible;
    transition-delay: 0.5s;
}
.card:hover .contentBx .color {
    opacity: 1;
    visibility: visible;
    transition-delay: 0.6s;
}
.card .contentBx .size h3,
.card .contentBx .color h3 {
    color: white;
    font-weight: 300;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-right: 10px;
}
.card .contentBx .size span {
    width: 26px;
    height: 26px;
    text-align: center;
    line-height: 26px;
    font-size: 14px;
    display: inline-block;
    color: #111;
    background: #fff;
    margin: 0 5px;
    transition: 0.5s;
    color: #111;
    border-radius: 4px;
    cursor: pointer;
}
.card:hover .contentBx .size span:hover {
    /* other bug */
    background: #b90000;
}
.card .contentBx .color span {
    width: 20px;
    height: 20px;
    background: #ff0;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
}
.card .contentBx .color span:nth-child(2) {
    background: #1bbfe9;
}
.card .contentBx .color span:nth-child(3) {
    background: #1b2fe9;
}
.card .contentBx .color span:nth-child(4) {
    background: #080481;
}
.card .transAsmaul .contentBx a {
    display: inline-block;
    padding: 10px 20px;
    background: #fff;
    border-radius: 4px;
    margin-top: 10px;
    text-decoration: none;
    font-weight: 600;
    color: #111;
    opacity: 0;
    transform: translateY(50px);
    transition: 0.5s;
}
.card:hover .transAsmaul .contentBx a {
    opacity: 1;
    transform: translateY(0px);
    transition-delay: 0.7s;
}

</style>

<section id="section-asma">
  <h1>Asma'ul Husna</h1>
  <div id="result-asma" class="result-container"></div>
</section>

@include('front.includes.js')
@endsection
