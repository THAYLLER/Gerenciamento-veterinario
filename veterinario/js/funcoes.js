<script type="text/javascript">
      startList = function() {
      if (document.all&&document.getElementById) {
      navRoot = document.getElementById("menuDropDown");
      for (i=0; i<navRoot.childNodes.length; i++) {
      node = navRoot.childNodes[i];
      if (node.nodeName=="LI") {
      node.onmouseover=function() {
      this.className+=" over";
        }
        node.onmouseout=function() {
        this.className=this.className.replace
          (" over", "");
         }
         }
        }
       }
      }
      window.onload=startList;
$(document).ready( function() {
    // mask
    $.mask.definitions['~']='[+-]';
    $(".data").mask("99/99/9999");
    $("#data2").mask("99/99/9999");
    $(".telefone").mask("(99) 9999-9999");
    $(".cpf").mask("999.999.999-99");
    $(".cnpj").mask("99.999.999/9999-99");
    $('.numero').numeric(",");
    $('.peso').numeric(",");
    $('.peso').floatnumber(",",3);
    $('.preco').numeric(",");
    $('.preco').floatnumber(",",2);
  });  }
 }
</script>