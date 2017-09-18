$(document).ready(function(){
    $("#del").click(function(){
        alert('hehe');
        $(this).parent().remove();
    });
    $("#add").click(function(){
        var row = $('<div class="row"></div>');
        var md1 = $('<div class="col-md-1"></div>');
        var md4 = $('<div class="col-md-4"></div>');
        var md7 = $('<div class="col-md-7"></div>');
        var labelCampo = $('<label class="form-control-label">Campo</label>');
        var fieldCampo = $('<input type="text" class="form-control" name="campo_formulario[]" placeholder="Campo do formulário Ex:itens_numero_serie" required>');
        var labelLink = $('<label class="form-control-label">Link do Youtube</label>');
        var fieldLink = $('<input type="text" class="form-control" name="link[]" placeholder="Url do video" required>');
        var removeLink =  $('<a href="#" id="del" class="del glyphicon glyphicon-minus" style="width:45px;"></a>');
        removeLink.click(function(e){
            e.preventDefault();
            row.remove();
        });
        var h1 = $('<h1></h1>');
        md4.append(labelCampo);
        md4.append(fieldCampo);
        row.append(md4);
        md7.append(labelLink);
        md7.append(fieldLink);
        row.append(md7);
      //  md1.append('<label class="form-control-label"></label>');
        h1.append(removeLink);
        md1.append(h1);
        row.append(md1);

        $("#form-row").append(row);
    });

});