/* 
 *Sébastien Bodrero
 *Ensemble de fonctions dédiées à l'affichage des formations
 * 
 */

// ----------------------------------------------
// OBJET XML HTTP Request
// ----------------------------------------------



function charge_galerie() {
    reset_galerie()
    place_diapo()
}

function reset_galerie(){
    var pc = document.getElementById('planche-contact')
    while (pc.firstChild){
        pc.removeChild(pc.firstChild)
    }
	
}

function place_galerie(arg){
    var diapos = arg.getElementsByTagName('image')
    var nb_diapo = diapos.length
    for (var i = 0;i<nb_diapo; i++) {
        var dia_temp = diapos[i]
        var img = dia_temp.getElementsByTagName('ch_img_fichier')[0].firstChild.nodeValue
        var infos = dia_temp.getElementsByTagName('ch_img_id')[0].firstChild.nodeValue
        var folder = dia_temp.getElementsByTagName('ch_img_rubId')[0].firstChild.nodeValue
        place_diapo(img, infos, folder)
    }
}
/* Crée diapositive */
function place_diapo(arg, src, folder){
    var pc = document.getElementById('planche-contact')
    var div = document.createElement('div')
    var img  = document.createElement('img')
    img.alt = folder
//    img.className = orientation
    img.src = "../../ajaxexo/images/"+folder+"/thumbs/" + arg
    div.appendChild(img)
    div.src = src
    div.onclick = function(){
        //alert(this.src)
//        permutte_dia_selected(this)
//        searchInfos(this.src)
    }
    pc.appendChild(div)
}

//window.onload = charge_galerie;

/* Ecouteur sur le select */
$(document).ready(function() {

    $("select").change(function() {
        var value = '';
        $("select option:selected").each(function () {
            value = $(this).val();
        });
        var donnee = {
            categorie : value
        };
        $.ajax({
            url : '../scripts/charge_galerie.php',
            data : donnee,
            complete : function(xhr, result) {
                if(result != "success")
                    alert('error');
                var result = xhr.responseXML;
                place_galerie(result);         
            }
        })
    });
});