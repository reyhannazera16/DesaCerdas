@extends('layouts.main')
@section('head')
    @include('includes.head')
@endsection
@section('header')
    @include('includes.header')
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <!-- BEGIN: Header-->

        <div class="content-wrapper ">
            <div class="content-body d-flex justify-content-center">
                <div id="map" style="height: 400px; width:800px"></div>
            </div>
            <br>
        </div>


<table id="example" class="table table-condensed table-bordered" style="max-width:100%;">
    <thead>
        <tr>
            <th>Nama UMKM</th>
            <th>Jenis UMKM</th>
            <th>Kelurahan</th>
            <th>Detail</th>


        </tr>


    </thead>

    <tbody>
        <tr class="odd">
            <td>RISIRIS</td>
            <td>Makanan</td>
            <td>Tegal</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="Btn1" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="Modal1" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>RISIRIS</h3>
                    <img src="{{ asset('app-assets/risiris.jpeg') }}" class="center" style="width: 400px; height: 264px; " >
                </a>
                <p><b>PRODUK :</b> Biji Ketapang talas, ubi ungu, singkong. Stick keju talas, Stick Keju Rumput Laut, Keripik singkong  Balado/perizinan sdh lengkap.( Usus ayam krispy  proses halal,pirt sdh di perbaharui)</p>
                <p>Alamat : Telaga Khuripan Candraloka AA12 No.20 Kec Kemang Kab Bogor </p>

                <h4>Pesan Melalui : </h4>
                <ul class="right">
                <a
                href="https://wa.me/6281310064454/?text=Halo+apakah+produk+dari+risiris+ini+tersedia+?">
                <button type="button" class="btn btn-success btn-md ">Whatsapp</button>

                <ul class="left mx-1">
                <a
                href="{{ url('/payment') }}">
                <button type="button" class="btn btn-primary btn-md">Website</button>
              </a>
            </a>
        </ul></ul>
                  </div>

                </div>

             </td>

        </tr>
        <tr class="even">
            <td>Tas Rajut Nanny Craft</td>
            <td>Aksesoris</td>
            <td>Tegal</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="myBtn" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Tas Rajut Nanny Craft</h3>
                    <img src="{{ asset('app-assets/rajut.jpeg') }}" class="center" style="width: 400px; height: 264px;">
                     </a>
                    <p><b>PRODUK :</b> Tas Rajut</p>
                  <p>Alamat : Candraloka Blok BB5 No.34 Telaga Kahuripan Rt.001 Rw.010 Desa Tegal Kec. Kemang Kab.Bogor </p>
                 <h4>Pesan Melalui : </h4>
                    <ul class="right">
                    <a
                    href="https://wa.me/6281310064454/?text=Halo+apakah+produk+dari+Tas+Rajut+Nanny+Craft+ini+tersedia+?">
                 <button type="button" class="btn btn-success btn-md ">Whatsapp</button>
                    </a>

                 <ul class="left mx-1">
                    <button id="nobtn" class="btn btn-primary">Website</button>
                    <div id="nomodal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="tutup">&times;</span>
                         <h3>Produk ini belum terdaftar</h3>

                         <p>Produk yang anda pilih belum terdaftar untuk melakukan pembelian via website</p>
<br><br>
                       <h4><b> Anda ingin mengajukan pembelian via website ? </b></h4>
                          <ul class="right">
                          <a
                          href="">
                       <button type="button" class="btn btn-success btn-md ">Tidak</button>

                       <ul class="left mx-1">

                       <a
                       href="{{ url('/ajukan') }}">
                       <button type="button" class="btn btn-primary btn-md">Iya</button>
                                </a>
                        </a>
                           </ul></ul>
                       </div>

                      </div>
                  </a>
                     </ul></ul>
                 </div>

                </div>

             </td>

        </tr>
        <tr class="odd">
            <td>RARA SNACK</td>
            <td>Makanan</td>
            <td>Semplak Barat</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="Btnku" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="Modalku" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Rara Snack</h3>
                    <img src="{{ asset('app-assets/rara.jpeg') }}" class="center" style="width: 400px; height: 264px;">
                </a>
                <p><b>PRODUK :</b> Snack</p>
                <p>Alamat : Jl Atang Sanjaya Semplak Barat Rt 02 Rw 05 Kp. Kandang, Kec.Kemang, Kab,Bogor </p>
    <h4>Pesan Melalui : </h4>
                    <ul class="right">
                    <a
                    href="https://wa.me/6281310064454/?text=Halo+apakah+produk+dari+Tas+Rajut+Nanny+Craft+ini+tersedia+?">
                 <button type="button" class="btn btn-success btn-md ">Whatsapp</button>
                    </a>

                 <ul class="left mx-1">
                    <button id="btney" class="btn btn-primary">Website</button>
                    <div id="modaley" class="modal">



                </div>

             </td>

        </tr>
        <tr class="even">
            <td>Catering, Paket Tumpeng, Nasi Tampah & Nasi Box, Prasmanan</td>
            <td>Makanan</td>
            <td>Tegal</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="catbtn" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="catmodel" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Catering, Paket Tumpeng, Nasi Tampah & Nasi Box, Prasmanan</h3>
                    <img src="{{ asset('app-assets/cat.jpeg') }}" class="center" style="width: 400px; height: 264px;">
                </a>
                <p><b>PRODUK :</b> Catering, Paket Tumpeng, Nasi Tampah & Nasi Box, Prasmanan</p>
                <p>Alamat : Perumahan Telaga Kahuripan, Candraloka, blok.CC1/no.36, RT.003/RW.010, desa: Tegal, Kec.Kemang, Kab.Bogor </p>
                  </div>

                </div>

             </td>

        </tr>

        <tr class="odd">
            <td>Combro Kriuk</td>
            <td>Makanan</td>
            <td>Bojong</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="brobtn" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="bromodal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Combro Kriuk</h3>
                    <img src="{{ asset('app-assets/combro.jpeg') }}" class="center" style="width: 400px; height: 264px;">
                </a>
                <p><b>PRODUK :</b> Combro Kriuk</p>
                <p>Alamat : Jl. Raya Mayor Abd. Rahman No.33, RT.1/RW.1, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310 </p>
                  </div>

                </div>

             </td>

        </tr>


        <tr class="even">
            <td>Rangginang/ranggining /dodol</td>
            <td>Makanan</td>
            <td>Semplak Barat</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="rangbtn" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="rangmodal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Rangginang/ranggining /dodol</h3>
                    <img src="{{ asset('app-assets/ranginang.jpeg') }}" class="center" style="width: 400px; height: 264px;">
                </a>
                <p><b>PRODUK :</b> Rangginang / Ranggining / Dodol.</p>
                <p>Alamat :  Kp. Anyar 01/06, Desa Semplak Barat, Kec Kemang Bogor </p>
                  </div>

                </div>

             </td>

        </tr>

        <tr class="even">
            <td>Bawang Goreng Sumenep, Kripik pisang kepok kuning dan madu hutan</td>
            <td>Makanan</td>
            <td>Tegal</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="rengbtn" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="rengmodal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Bawang Goreng Sumenep, Kripik pisang kepok kuning dan madu hutan</h3>
                    <img src="{{ asset('app-assets/sumenep.jpeg') }}" class="center" style="width: 400px; height: 264px;">
                </a>
                <p><b>PRODUK :</b> Bawang Goreng Sumenep, Kripik pisang kepok kuning dan madu hutan</p>
                <p>Alamat : BIP Blok B2/6  RT003 RW009 Telaga Kahuripan. Desa Tegal Kec Kemang Bogor</p>
                  </div>

                </div>

             </td>

        </tr>
        <tr class="odd">
            <td>Kue Bawang dan Kolang Kaling</td>
            <td>Makanan</td>
            <td>Parakan Jaya</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="bawangbtn" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="bawangmodal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Kue Bawang dan Kolang Kaling</h3>
                    <img src="{{ asset('app-assets/kolang.jpeg') }}" class="center" style="width: 400px; height: 264px;">
                </a>
                <p><b>PRODUK :</b> Kue bawang dan kolang kaling</p>
                <p>Alamat : Kp. Gardu RT.03/08 Desa Parakan Jaya, Kec. Kemang </p>
                  </div>

                </div>

             </td>

        </tr>
        <tr class="even">
            <td>Bandrek</td>
            <td>Minuman</td>
            <td>Parakan Jaya</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="rekbtn" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="rekmodal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Bandrek</h3>
                    <img src="{{ asset('app-assets/bandrek.jpeg') }}" class="center" style="width: 400px; height: 264px;">
                </a>
                <p><b>PRODUK :</b> Bandrek</p>
                <p>Alamat : Perumahan Pandan Valley blok C3/7 Desa Parakan Jaya Kecamatan Kemang Bogor 16310 </p>
                  </div>

                </div>

             </td>

        </tr>
        <tr class="odd">
            <td>Tempe, Keripik Tempe, Tempe Mendoan</td>
            <td>Makanan</td>
            <td>Atang Senjaya</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="tempebtn" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="tempemodal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Tempe, Keripik Tempe, Tempe Mendoan</h3>
                    <img src="{{ asset('app-assets/tempe.jpeg') }}" class="center" style="width: 400px; height: 264px;">
                </a>
                <p><b>PRODUK :</b> Tempe</p>
                <p>Alamat : Jl. RSAU, No.19,  RT.02/05, Kel. ATS Kec. Kemang, Kab Bogor </p>
                  </div>

                </div>

             </td>

        </tr>
        <tr class="even">
            <td>Oleh - Oleh Khas Bogor</td>
            <td>Makanan</td>
            <td>Parakan Jaya</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="khasbtn" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="khasmodal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Oleh - Oleh Khas Bogor</h3>
                    <img src="{{ asset('app-assets/oleh.jpg') }}" class="center" style="width: 400px; height: 264px;">
                </a>
                <p><b>PRODUK :</b> Biji Ketapang talas, ubi ungu, singkong.</p>
                <p>Alamat : Jl. Nasional 12 485, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310</p>
                  </div>

                </div>

             </td>

        </tr>
        <tr class="odd">
            <td>Batik New Normal</td>
            <td>Pakaian</td>
            <td>Tegal</td>
            <td>


                <!-- Trigger/Open The Modal -->
                <button id="batikbtn" class="btn btn-primary">Klik Disini</button>

                <!-- The Modal -->
                <div id="batikmodal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                   <h3>Batik New Normal</h3>
                    <img src="{{ asset('app-assets/batik.jpg') }}" class="center"style="width: 400px; height: 264px;">
                </a>
                <p><b>PRODUK :</b> Batik Khas Tegal</p>
                <p>Alamat : Jl. Raya Bip No.A7, RW.20, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310 </p>
                  </div>

                </div>

             </td>

        </tr>

    </tbody>
</table>



    </div>
    <!-- End: Content-->

    <script type="module">
        var map = L.map('map').setView([-6.2777832, 106.8026676], 10);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map)




        let kemangGeojson = await fetch("{{ asset('geojson/Adm_Kemang_FeaturesToJSON.json') }}");
        console.log(kemangGeojson);
        const geojsonBody = await kemangGeojson.json();
     let geoJson =  L.geoJson(geojsonBody,{
        style: function (params) {
            return {
                color:params.properties.Warna
            }
        }
      }).addTo(map);
      map.fitBounds(geoJson.getBounds());



      var controlLayers = L.control.layers().addTo(map);

var url = ("{{ asset('geojson/UMKM_KHUSUS.geojson') }}");

$.getJSON(url, function (geojson) {
  var geojsonLayer = L.geoJson(geojson, {
    style: function (feature) {
      return {
        'weight': 0,
        'fillColor': 'yellow',
        'fillOpacity': 1
      }
    }
  }).addTo(map);
  controlLayers.addOverlay(geojsonLayer, 'UMKM');
});




var legend_div = new L.Control({position: 'bottomright'});
				legend_div.onAdd = function (map) {
				  this._div = L.DomUtil.create('div', 'info legend');
				  this._div.innerHTML = '<div id="legend-title">Potensi Smart Community</div>'+
				'<svg width="40" height="10">'+
				  '<rect width="40" height="10" style="fill:#b7fbb8;" />'+
				'</svg>'+
				'&nbsp;&nbsp;Cukup Potensial<br>'+
				'<svg width="40" height="10">'+
				  '<rect width="40" height="10" style="fill:#ffeabd;" />'+
				'</svg>'+
				'&nbsp;&nbsp;Potensial<br>'+
				'<svg width="40" height="10">'+
				  '<rect width="40" height="10" style="fill:#feff73;" />'+
				'</svg>'+
				'&nbsp;&nbsp;Sangat Potensial<br>';
				  return this._div;
				};
				legend_div.addTo(map);
                var editor; // use a global for the submit and return data rendering in the examples


 $(document).ready(function() {
     editor = new $.fn.dataTable.Editor( {
         ajax: {
            url: "{{ asset('geojson/UMKM_KHUSUS.geojson') }}",
            type: 'GET',
            data: function ( d ) {

         d.format="geojson";
       },

       dataSrc: 'features'
       },
         table: '#example',
         idSrc:  'id',
         fields: [ {
                 label: "Name:",
                 name: "NAMA_UMKM"
             }, {
                 label: "Position:",
                 name: "JENIS_UMKM"
             }, {
                 label: "Position:",
                 name: "KECAMATAN"
             }, {
                 label: "Office:",
                 name: "KELURAHAN"
             }
         ]
     } );


     $('#example').on( 'click', 'tbody td:not(:first-child)', function (e) {
         editor.inline( this );
     } );

     $('#example').DataTable( {
        ajax: {
            url: "{{ asset('geojson/UMKM_KHUSUS.geojson') }}",

        data: function ( d ) {

         d.format="geojson";

       },

       dataSrc: 'features'
        },
       dom: 'Bfrtip',

         columns: [

       { data: "properties.name" },
       { data: "properties.jenis" },
       { data: "properties.kelurahan" }

         ],
        select: {
             style:    'os',
             selector: 'td:first-child'
         },

         buttons: [

             { extend: "edit",   editor: editor },
             { extend: "remove", editor: editor }
         ]
     } );
 } );

// Get the modal
var modal = document.getElementById("Modal1");

// Get the button that opens the modal
var btn = document.getElementById("Btn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//
// Get the modal
var modal1 = document.getElementById("myModal");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[1];

// When the user clicks on the button, open the modal
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}


//BTN3
// Get the modal
var modal2 = document.getElementById("Modalku");

// Get the button that opens the modal
var btn2 = document.getElementById("Btnku");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[2];

// When the user clicks on the button, open the modal
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

//BTN4
// Get the modal
var modal3 = document.getElementById("catmodel");

// Get the button that opens the modal
var btn3 = document.getElementById("catbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[3];

// When the user clicks on the button, open the modal
btn3.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
//BTN5
// Get the modal
var modal4 = document.getElementById("bromodal");

// Get the button that opens the modal
var btn4 = document.getElementById("brobtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[4];

// When the user clicks on the button, open the modal
btn4.onclick = function() {
  modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}

//BTN6
// Get the modal
var modal5 = document.getElementById("rangmodal");

// Get the button that opens the modal
var btn5 = document.getElementById("rangbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[5];

// When the user clicks on the button, open the modal
btn5.onclick = function() {
  modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
}
//BTN7
var modal6 = document.getElementById("rengmodal");

// Get the button that opens the modal
var btn6 = document.getElementById("rengbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[6];

// When the user clicks on the button, open the modal
btn6.onclick = function() {
  modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal6.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
}

//BTN8
var modal7 = document.getElementById("bawangmodal");

// Get the button that opens the modal
var btn7 = document.getElementById("bawangbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[7];

// When the user clicks on the button, open the modal
btn7.onclick = function() {
  modal7.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal7.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal7) {
    modal7.style.display = "none";
  }
}

//BTN9
var modal8 = document.getElementById("rekmodal");

// Get the button that opens the modal
var btn8 = document.getElementById("rekbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[8];

// When the user clicks on the button, open the modal
btn8.onclick = function() {
  modal8.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal8.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal8) {
    modal8.style.display = "none";
  }
}

//BTN10
var modal9 = document.getElementById("tempemodal");

// Get the button that opens the modal
var btn9 = document.getElementById("tempebtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[9];

// When the user clicks on the button, open the modal
btn9.onclick = function() {
  modal9.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal9.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal9) {
    modal9.style.display = "none";
  }
}

//BTN11

var modal10 = document.getElementById("khasmodal");

// Get the button that opens the modal
var btn10 = document.getElementById("khasbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[10];

// When the user clicks on the button, open the modal
btn10.onclick = function() {
  modal10.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal10.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal10) {
    modal10.style.display = "none";
  }
}

//BTN12

var modal11 = document.getElementById("batikmodal");

// Get the button that opens the modal
var btn11 = document.getElementById("batikbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[11];

// When the user clicks on the button, open the modal
btn11.onclick = function() {
  modal11.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal11.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal11) {
    modal11.style.display = "none";
  }
}



//btnonbtn

var modal13 = document.getElementById("nomodal");

// Get the button that opens the modal
var btn13 = document.getElementById("nobtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("tutup")[12];

// When the user clicks on the button, open the modal
btn13.onclick = function() {
  modal13.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal13.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal13) {
    modal13.style.display = "none";
  }
}

///////////////



    </script>
@endsection
