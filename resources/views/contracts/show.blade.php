@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<div class="page-wrapper">
 
    <a href="/exportPDF/{{$contractss->id}}" class="btn btn-success"> <i class='bx bx-export'></i> Export to PDF</a>
    <a href="javascript:printDiv('div1')" class="btn btn-primary" ><i class='bx bx-printer' ></i></a><br>
    <div id="div1">
    <div class="container">
    <div style="position:absolute;top:0.70in;left:3.00in;width:3.08in;line-height:0.25in;"><span style="font-style:normal;font-weight:bold;font-size:14pt;font-family:Times;color:#0000ff">Contrat de location d’une voiture</span><span style="font-style:normal;font-weight:bold;font-size:14pt;font-family:Times;color:#0000ff"> </span><br/></SPAN></div>
    <div style="position:absolute;top:1.10in;left:0.65in;width:2.17in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">ENTRE LES SOUSSIGNES,</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:1.81in;left:0.65in;width:1.98in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Appelé ci-après le </span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#000000">loueur</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">,</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">ET</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:2.72in;left:0.65in;width:2.16in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Appelé ci-après le </span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#000000">locataire</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">,</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:3.08in;left:0.65in;width:2.69in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">IL A ETE CONVENU CE QUI SUIT;</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:3.37in;left:0.65in;width:2.93in;line-height:0.21in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff">1.1 - Nature et date d&apos;effet du contrat</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff"> </span><br/></SPAN></div>
    <div style="position:absolute;top:3.66in;left:0.65in;width:7.78in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Le </span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#000000">loueur</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> met à disposition du </span><span style="font-style:normal;font-weight:bold;font-size:11pt;font-family:Helvetica;color:#000000">locataire</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">, un véhicule de marque  <span style="color: red">  {{$contractss->car->model}}..</span>, immatriculé</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:red">{{$contractss->car->registration}}..</span>. <span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:4.34in;left:0.65in;width:1.69in;line-height:0.21in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff">1.2 - Etat du véhicule</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff"> </span><br/></SPAN></div>
    <div style="position:absolute;top:4.63in;left:0.65in;width:7.78in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Lors de la remise du véhicule et lors de sa restitution, un procès-verbal de l&apos;état du véhicule sera établi</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">entre le locataire et le loueur.</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Le </span></SPAN><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:0.26in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">véhicule </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:0.94in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">devra </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:1.44in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">être </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:1.80in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">restitué </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:2.42in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">le </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:2.63in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">même </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:3.16in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">état </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:3.51in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">que </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:3.87in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">lors </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:4.21in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">de </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:4.47in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">sa </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:4.72in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">remise. </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:5.34in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Toutes </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:5.93in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">les </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:6.21in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">détériorations </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:7.30in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">sur </span></SPAN></DIV><br/></div>
    <div style="position:absolute;top:5.01in;left:0.65in;width:7.78in;line-height:0.19in;"><DIV style="position:relative; left:7.60in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">le</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></DIV><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">véhicule constatées sur le PV de sortie seront à la charge du locataire.</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Le locataire certifie être en possession du permis l&apos;autorisant à conduire le présent véhicule.</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:5.69in;left:0.65in;width:3.10in;line-height:0.21in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff">1.3 - Prix de la location du de la voiture</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff"> </span><br/></SPAN></div>
    <div style="position:absolute;top:5.98in;left:0.65in;width:7.78in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Les parties s&apos;entendent sur un prix de location <span style="color: red"> {{$contractss->price_day}}DH </span>. Dirhams par jour (calendaires).</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:6.46in;left:0.65in;width:2.71in;line-height:0.21in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff">1.4 - Kilométrage supplémentaires</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff"> </span><br/></SPAN></div>
    <div style="position:absolute;top:6.75in;left:0.65in;width:7.78in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Tout kilomètre réalisé au-delà du forfait indiqué à l’article 1.3 du présent contrat sera facturé au prix de</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">………………………….. euros.</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:7.24in;left:0.65in;width:2.95in;line-height:0.21in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff">1.5 - Durée et restitution de la voiture</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff"> </span><br/></SPAN></div>
    <div style="position:absolute;top:7.53in;left:0.65in;width:7.78in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Le contrat est à durée indéterminée. Il pourra y être mis fin par chacune des parties à tout moment en</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">adressant un courrier recommandé en respectant un préavis d&apos;un mois.</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:8.01in;left:0.65in;width:2.75in;line-height:0.21in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff">1.6 - Autres éléments et accessoires</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff"> </span><br/></SPAN></div>
    <div style="position:absolute;top:8.30in;left:0.65in;width:7.56in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Le locataire prendra en charge l&apos;ensemble des charges afférentes à la mise à disposition du véhicule :</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:8.49in;left:0.92in;width:0.10in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">-</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">-</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">-</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">-</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:8.49in;left:1.19in;width:2.41in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Frais d&apos;entretien du véhicule,</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Impôts et taxes liés au véhicule,</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Les frais d&apos;essence,</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">L&apos;assurance du véhicule.</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:9.36in;left:0.65in;width:2.12in;line-height:0.21in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff">1.7 - Clause en cas de litige</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#0000ff"> </span><br/></SPAN></div>
    <div style="position:absolute;top:9.65in;left:0.65in;width:7.78in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Les parties conviennent expressément que tout litige pouvant naître de l&apos;exécution du présent contrat</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">relèvera de la compétence du tribunal de commerce de <span style="color: red"> {{$contractss->debut_contract}}.</span></span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Fait en deux exemplaires originaux remis à chacune des parties,</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:10.42in;left:0.65in;width:4.81in;line-height:0.19in;"><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">Fait en deux exemplaires originaux remis à chacune des parties,</span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000">A <span style="color: red"> {{$contractss->users->name}}....</span>, le  <span style="color: red">{{$contractss->clients->first_name}} {{$contractss->clients->last_name}}.</span></span><span style="font-style:normal;font-weight:normal;font-size:11pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:11.00in;left:1.16in;width:3.07in;line-height:0.18in;"><DIV style="position:relative; left:1.10in;"><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000">Le </span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Helvetica;color:#000000">locataire</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000"> </span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></DIV><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000">signature précédée de la mention manuscrite</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000"> </span><br/><DIV style="position:relative; left:0.97in;"><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000">bon pour accord</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></DIV></div>
    <div style="position:absolute;top:11.00in;left:5.83in;width:0.21in;line-height:0.17in;"><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000">Le</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
    <div style="position:absolute;top:11.00in;left:4.65in;width:3.07in;line-height:0.18in;"><DIV style="position:relative; left:1.39in;"><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Helvetica;color:#000000">loueur</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000"> </span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></DIV><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000">signature précédée de la mention manuscrite</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000"> </span><br/><DIV style="position:relative; left:0.97in;"><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000">bon pour accord</span><span style="font-style:normal;font-weight:normal;font-size:10pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></DIV></div>

    </div>
    </div>
</div>
    
    
    <br><br>
    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
    <script>
        printDivCSS = new String ('<link href="myprintstyle.css" rel="stylesheet" type="text/css">')
        function printDiv(divId) {
            window.frames["print_frame"].document.body.innerHTML=printDivCSS + document.getElementById(divId).innerHTML;
            window.frames["print_frame"].window.focus();
            window.frames["print_frame"].window.print();
        }
    </script>    

@endsection