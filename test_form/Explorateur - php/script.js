$(document).ready(function($){
    arbo();
});
function arbo(path = ""){
   $.ajax({
        url: "traitement.php",
        type: "GET",
        dataType: "json",
        data: {micka: path},
        success: function(data){
            console.log(data);
            //Parcours des entrées 0, 1, 2... du tableau
            $.each(data, function(index, value){
                
                //Possibilité de parcourir name, path, value, size...
                if(value.dir){
                    $('section').append("<div style='cursor: pointer;' data="+ value.path +" class='folder item'>" + value.name +"<div>")
                }
                if(value.file){
                    $('section').append("<div data="+ value.path +" class='file item'>" + value.name +"<a href='" + value.path + 
                    "' download='"+ value.name +"'> Telecharger </a><a href='" 
                    + value.path + "'> Ouvrir </a></div>")
                }
                
            });
             $('.item').click(function(){
            var path = $(this).attr('data');
                 console.log(path);
                 $('section').empty();
            arbo(path);
            }); 
        }
        
    });
    
}